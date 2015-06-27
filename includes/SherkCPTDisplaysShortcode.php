<?php

class SherkCPTDisplaysShortcode {

	public function __construct() {
		add_shortcode( 'sherkcptdisplays', array($this,'sherkcptdisplays_func' ));
	}

	function sherkcptdisplays_func( $atts ){
		$shortcode_att = shortcode_atts( array(
				'title' => '',
				'post_type' =>'post', 	
				'total_items' =>15, 	
				'display_type' =>'title_only', 	
				'orderby' => 'random',
				'width'=>300
			), $atts );
		/**Attributes**/	
		$title = $shortcode_att['title']; 
		$post_type = $shortcode_att['post_type']; 
		$total_items = $shortcode_att['total_items']; 
		$display_type = $shortcode_att['display_type']; 
		$orderby = $shortcode_att['orderby']; //latest and random
				
		if($orderby=='random'){
			$orderbyvalue='rand';
		}else{
			$orderbyvalue='date';
		}		
		
		$shortcodecontent='<h2 class="cpt_shortcodetitle">'.$title.'</h2>';
		
		$shortcodecontent.='<div class="cpt_shortcodecontent">';
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		
		$args = array(  'posts_per_page' => $total_items,'offset'=> 1, 'post_type' => $post_type,'orderby' => $orderbyvalue,'numberposts'=> -1,'paged' => $paged,);
	
		$myposts = new WP_Query( $args );
		if ( $myposts->have_posts() ) :
		 
			while (  $myposts->have_posts() ) :  $myposts->the_post(); 
			
				$categories = get_the_category($post->ID);
				$separator = ' , ';
				$output = '';
				if($categories){
					foreach($categories as $category) {
						$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
					}
					$output='Topics: '.$output;
				}
				$tags='';
				$posttags = get_the_tags($post->ID);
				if ($posttags) {
					foreach($posttags as $tag) {
						$tags.=$tag->name . ' '; 
					}
					$tags='Tags: '.$tags.'<br/>';
				}
				
				$shortcodecontent.='<div class="post-item">';
				$shortcodecontent.='<h3 class="post-title"><a href="'.get_the_permalink($post->ID).'">'. get_the_title($post->ID).'</a></h3><div class="post-meta"><p>'.get_the_time('F jS, Y').' <br/>'. trim($output, $separator).'<br/>'.$tags.' Written by: '.get_the_author_link().'</p></div>';
				
				
				if($display_type=='featured_image' || $display_type=='all'){
					$shortcodecontent.=get_the_post_thumbnail( $post->ID,'post-thumbnail').'<br/>';
				}
				if($display_type=='title_and_teaser' || $display_type=='all'){
					$shortcodecontent.=get_the_excerpt($post->ID).'<br/>';
				}
				$shortcodecontent.='</div>';
			endwhile;  

				$shortcodecontent.= get_next_posts_link( 'Older Entries', $myposts->max_num_pages );
				$shortcodecontent.=previous_posts_link( 'Next Entries &raquo;' ); 
			wp_reset_postdata();
		endif;

		$shortcodecontent.='</div>';
		
		return $shortcodecontent;
	
	}
	
	
}

new SherkCPTDisplaysShortcode();