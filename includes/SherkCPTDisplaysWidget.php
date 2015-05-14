<?php


class SherkCPTDisplaysWidget extends WP_Widget {

	function __construct(){

		$widget_options = array( 'classname'   => 'Sherk Custom Post Type Displays',

                               'description' => 'Display Custom Post Types on your widget areas.');

 

		$this->WP_Widget('sherk_cptdisplays_widget_id',

                       'Sherk Custom Post Type Displays',

                       $widget_options);

	}

    function is_checked($formvalue,$value){
		if($formvalue==$value){
			echo ' checked';
		}
	}

	function form($instance){
		// outputs the content of the widget
		$instance = wp_parse_args((array) $instance, array( 'title' => '','post_type'=>'post','total_items'=>'5','display_type'=>'title_only','orderby'=>'rand'));
		
		$title = $instance['title'];
		$post_type = $instance['post_type'];
		$total_items = $instance['total_items'];
		$display_type = $instance['display_type'];
		$orderby = $instance['orderby'];
		
		$sherkPostTypes=get_post_types(array('_builtin'=>false));
		array_push($sherkPostTypes,'post');
		
		$selectPostTypes='<select class="widefat" id="'.$this->get_field_id('post_type').'" name="'.$this->get_field_name('post_type').'">';
		foreach($sherkPostTypes as $sherkPostType){
		    if($sherkPostType==$post_type){
				$selected=' selected';
			}else{
				$selected='';
			}
			$selectPostTypes.='<option value="'.$sherkPostType.'" '.$selected.'>'.$sherkPostType.'</option>';			
		}
		
		$selectPostTypes.="</select>";
		
		$displayTypesValues=array(
				array( title => "Title Only", 
                      value=>'title_only'
                    ),
				array( title => "Title and Teaser Only", 
                      value=>'title_and_teaser'
                    ),
				array( title => "Title and Featured Image Only", 
                      value=>'featured_image'
                    ),
				array( title => "Display All", 
                      value=>'all'
                    )
             );
		
		$displayTypes='<select class="widefat" id="'.$this->get_field_id('display_type').'" name="'.$this->get_field_name('display_type').'">';
		foreach($displayTypesValues as $displayTypesValue){
		    if($displayTypesValue['value']==$display_type){
				$selected=' selected';
			}else{
				$selected='';
			}
			$displayTypes.='<option value="'.$displayTypesValue['value'].'" '.$selected.'>'.$displayTypesValue['title'].'</option>';			
		}
		
		$displayTypes.="</select>";
		
		
		$orderByValues=array(
				array( title => "Random", 
                      value=>'rand'
                    ),
				array( title => "Latest", 
                      value=>'date'
                    )
             );
		$orderByDisplay='<select class="widefat" id="'.$this->get_field_id('orderby').'" name="'.$this->get_field_name('orderby').'">';
		foreach($orderByValues as $orderByValue){
		    if($orderByValue['value']==$orderby){
				$selected=' selected';
			}else{
				$selected='';
			}
			$orderByDisplay.='<option value="'.$orderByValue['value'].'" '.$selected.'>'.$orderByValue['title'].'</option>';			
		}
		
		$orderByDisplay.='</select>';
		
		
	?>

		<p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"  name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo attribute_escape($title); ?>" /></label></p>
		<p>
		<p><label for="<?php echo $this->get_field_id('post_type'); ?>">Post Types:</label>
		<?php echo $selectPostTypes; ?>
		</p>
		<p><label for="<?php echo $this->get_field_id('display_type'); ?>">Display Type:</label>
		<?php echo $displayTypes; ?>
		</p>
		<p><label for="<?php echo $this->get_field_id('display_type'); ?>">Order By:</label>
		<?php echo $orderByDisplay; ?>
		</p>
		<p><label for="<?php echo $this->get_field_id('total_items'); ?>">Number of Items to Display: <input class="widefat" id="<?php echo $this->get_field_id('total_items'); ?>"  name="<?php echo $this->get_field_name('total_items'); ?>" type="text" value="<?php echo attribute_escape($total_items); ?>" /></label>
		</p>		
		
	  
	  
     <?php
	}

	
	function update($new_instance, $old_instance){

      // outputs the options form on admin

		$instance = $old_instance;

		$instance['title'] = $new_instance['title'];
		$instance['post_type'] = $new_instance['post_type'];
		$instance['total_items'] = $new_instance['total_items'];
		$instance['display_type'] = $new_instance['display_type'];
		$instance['orderby'] = $new_instance['orderby'];
		
		return $instance;
	}

 
    //body of the widget
    function widget($args, $instance){
        extract($args, EXTR_SKIP);
		$widgetcontent=$before_widget;
		$title = empty($instance['title']) ? '' : apply_filters('widget_title', $instance['title']); 
		$post_type = $instance['post_type'];
		$total_items = $instance['total_items'];
		$display_type = $instance['display_type'];
		$orderby = $instance['orderby'];
		
		if (!empty($title))
		  $widgetcontent.=$before_title . $title . $after_title;
		
		$widgetcontent.='<ul class="cpt_widgetcontent">';
		$args = array( 'posts_per_page' => $total_items, 'offset'=> 1, 'post_type' => $post_type, 'orderby' => $orderby );
	
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
			$widgetcontent.='<li>';
			$widgetcontent.='<a href="'.get_the_permalink($post->ID).'">'.get_the_title($post->ID).'</a><br/>';
			if($display_type=='featured_image' || $display_type=='all'){
				$widgetcontent.=get_the_post_thumbnail( $post->ID, 'thumbnail' ).'<br/>';
			}
			if($display_type=='title_and_teaser' || $display_type=='all'){
				$widgetcontent.=get_the_excerpt($post->ID).'<br/>';
			}
			$widgetcontent.='</li>';
		endforeach; 
		wp_reset_postdata();

		$widgetcontent.='</ul>';
		
		echo $widgetcontent;

		echo $after_widget;
	}


} //end class

