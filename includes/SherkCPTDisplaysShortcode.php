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
		
		$args = array( 'posts_per_page' => $total_items, 'offset'=> 1, 'post_type' => $post_type,'orderby' => $orderbyvalue );
	
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 
			$shortcodecontent.='<div class="item">';
			$shortcodecontent.='<a href="'.get_the_permalink($post->ID).'">'.get_the_title($post->ID).'</a><br/>';
			if($display_type=='featured_image' || $display_type=='all'){
				$shortcodecontent.=get_the_post_thumbnail( $post->ID,'post-thumbnail').'<br/>';
			}
			if($display_type=='title_and_teaser' || $display_type=='all'){
				$shortcodecontent.=get_the_excerpt($post->ID).'<br/>';
			}
			$shortcodecontent.='</div>';
		endforeach; 
		wp_reset_postdata();

		$shortcodecontent.='</div>';
		
		return $shortcodecontent;
	
	}
	
	
}

new SherkCPTDisplaysShortcode();