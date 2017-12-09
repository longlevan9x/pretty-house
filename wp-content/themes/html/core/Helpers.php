<?php 

class Helpers
{
	public static function getPostTag($post_id = 0)
	{
		$tags = get_the_tags();
		// $tags = wp_get_post_tags($post_id);
		$str_tag = "";

		if (!isset($tags) || empty($tags)) {
			return $str_tag;
		}

		foreach ($tags as $tag):
			// $link_tag = get_term_link($tag, 'post_tag');
			$link_tag = get_tag_link($tag->term_id);
           	$str_tag .= '<span class="tag"><a href="' . $link_tag . '" title="' . $tag->name . '">' . $tag->name . '</a></span>';
        endforeach;
        return $str_tag;
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
		$sliders = get_posts(array( 'post_type' => 'slider'));
		if (!empty($sliders)) {
	    	$content = $sliders[0]->post_content;
	    	$content = str_replace("<img", ",", $content);
	    	$contents = explode(',', $content);
	    	$arr_link_slider = [];
	    	foreach ($contents as $content) {
	    		$str_rep = strstr($content, "alt=");
	    		$str = strstr($content, "src=");
	    		$str = str_replace($str_rep, "", $str);
	    		$str = str_replace("src=", "", $str);
	    		$str = str_replace('"', "", $str);
	    		$arr_link_slider[] = $str;
	    	}

	    	return $arr_link_slider;
		}
	}

	public static function getMenuNav()
	{
		$nav_menus = wp_get_nav_menu_items('main');
		$str_menu = '<ul>';
		foreach ($nav_menus as $key => $nav_menu) {
			/*<li><a href="<?php echo get_site_url() . '/'; ?>">Home</a></li>
                <li><a href="<?php echo get_site_url() . '/'; ?>about">About Us</a></li>
                <li><a href="#works-collapse" class="has-child" data-toggle="collapse">Căn hộ</a>
                    <ul class="collapse" id="works-collapse">
                        <li><a href="<?php echo get_site_url() . '/'; ?>detail.html">Detail v1</a></li>
                        <li><a href="<?php echo get_site_url() . '/'; ?>detail-2.html">Detail v2</a></li>
                        <li><a href="<?php echo get_site_url() . '/'; ?>detail-3.html">Detail v3</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo get_site_url() . '/'; ?>contact">Contact Us</a></li>*/
			$categories = get_categories(['parent' => $nav_menu->object_id]);
            if (empty($categories)) {
	            $str_menu .= '<li><a href="' . $nav_menu->url . '">' . ucfirst($nav_menu->title) . '</a></li>';
            }
            else {
            	$str_menu .= '<li><a href="#works-collapse" class="has-child" data-toggle="collapse">' . ucfirst($nav_menu->title) . '</a>';
            	$str_menu .= '<ul class="collapse" id="works-collapse">';
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
}