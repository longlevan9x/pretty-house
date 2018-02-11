<?php 

class Helpers
{
	public static function getPostTag($post_id = 0, $prefix = ', ')
	{
		$tags = get_the_tags();
		// $tags = wp_get_post_tags($post_id);
		$str_tag = "";
		$array_tag = [];
		if (!isset($tags) || empty($tags)) {
			return $str_tag;
		}

		foreach ($tags as $tag):
			// $link_tag = get_term_link($tag, 'post_tag');
			$link_tag = get_tag_link($tag->term_id);
           	$array_tag[] = '<span class="tag"><a href="' . $link_tag . '" title="' . $tag->name . '">' . $tag->name . '</a></span>';
        endforeach;
        return $str_tag = implode($prefix, $array_tag);
	}

	public static function getEntryContent($post_id = 0) {
		if (!is_single()) {
			return get_the_excerpt($post_id);
		}
		else {
			return get_the_content();
		}
	}

	public static function getSlider()
	{
		$html = "";
		$sliders = get_posts(array( 'post_type' => 'slider'));
		return $sliders;
	}

	public static function getMenuNav()
	{
		$nav_menus = wp_get_nav_menu_items('main');
		$str_menu = '<ul class="nav navbar-nav">';
		foreach ($nav_menus as $key => $nav_menu) {
			$categories = get_categories(['parent' => $nav_menu->object_id]);
            if (empty($categories)) {
	            $str_menu .= '<li><a href="' . $nav_menu->url . '">' . ucfirst($nav_menu->title) . '</a></li>';
            }
            else {
            	$str_menu .= '<li><a href="#works-collapse" class="has-child" data-toggle="collapse">' . ucfirst($nav_menu->title) . '<span class="caret"></span></a>';
            	$str_menu .= '<ul class="dropdown-menu" id="works-collapse">';
            	foreach ($categories as $category) {
            		$str_menu .= '<li><a href="'. get_category_link($category->term_id) .'">'. ucfirst($category->name) .'</a></li>';
        		}
        		$str_menu .= '</ul>';
        		$str_menu .= '</li>';
            }
		}


		$str_menu .= "</ul>";
		return $str_menu;
	}


	public static function getAttachmentGalleries($post_id = null)
	{
		$galleries = [];
	    $attachments = new Attachments( 'attachments', $post_id); /* pass the instance name */
	    if( $attachments->exist() ) :
	        while( $attachments->get() ) :
	            $galleries[] = $attachments->url();
	        endwhile;
	    endif;

	    if ($attachments->total() == 1) {
	        $galleries = array_merge($galleries, $galleries);
	    }
	    return $galleries;
	}

	public static function getLogos()
	{
		$image = get_template_directory_uri() . PATH_NO_IMAGE;
		$logos = get_posts(array( 'post_type' => 'logo', 'post_status' => 'publish'));
		if (isset($logos) && !empty($logos)) {
			$image = get_image(get_the_post_thumbnail_url($logos[0]->ID));
		}
		return '<img src="'.$image.'" alt="" style="width: 100%; height: 100%;" />';
	}

	public static function getUrlBack()
	{
		if (isset($_SERVER['HTTP_REFERER'])) {
			return $_SERVER['HTTP_REFERER'];
		}
	}

	public static function showMessageContact()
	{
		$mess = isset($_GET['mess']) ? $_GET['mess'] : '';
		$message = "";
		if ($mess == 'success') {
			$message = "Cảm ơn bạn đã phản hồi cho chúng tôi.";
		}
		else if($mess == 'error') {
			$message = "Có lỗi xảy ra. Bạn vui lòng thử lại.";
		}
		return "<h4 style='text-align:center;'>$message</h4>";
	}
}