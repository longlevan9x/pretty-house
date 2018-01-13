<?php 
define( 'THEME_URL', get_stylesheet_directory() );
define( 'CORE', THEME_URL . '/core' );
require_once( CORE . '/init.php' );

/**
 @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
 **/
if ( ! isset( $content_width ) ) {
    /*
     * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
     */
   $content_width = 620;
}

add_image_size( 'size_five', 100, 74, true );
add_image_size( 'size_four', 363, 204, true );
add_image_size( 'size_three', 362, 167, true );
/**
@ Thiết lập các chức năng sẽ được theme hỗ trợ
**/
if ( ! function_exists( 'theme_setup' ) ) {
    /*
     * Nếu chưa có hàm thachpham_theme_setup() thì sẽ tạo mới hàm đó
     */
    function theme_setup() {

        $languague_folder = THEME_URL . "/languagues";
        load_theme_textdomain('wordpress', $languague_folder);

        add_theme_support( 'post-thumbnails' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
        add_theme_support('post-formats', array(
            'image'/*, 'video', 'link', 'gallery', 'quote'*/
        ));

        add_theme_support( 'custom-background' );
			register_nav_menus( array(
				'primary'		=> __('Primary menu', 'wordpress'),
				'secondary'		=> __('Footer navigation', 'wordpress'),
			) );

        $sidebar = array(
            'name' => __('Main Sidebar', 'wordpress'),
            'id'   => 'main-sidebar',
            'description' => __('Default Sidebar'),
            'class' => 'main-sidebar',
            'before_title' => '<h3 class"widgettitle">',
            'after_title' => '</h3>',
        );

        register_sidebar($sidebar);
    }
    add_action ( 'init', 'theme_setup' );
}

if (!function_exists('get_image')) {
    function get_image($image) {
        if (empty($image)) {
            return get_template_directory_uri() . PATH_NO_IMAGE;
        }
        return $image;
    }
    add_action ( 'init', 'get_image' );
}

if (!function_exists('get_post_city')) {
    function get_post_city($post_id) {
        $post_city = get_post_meta($post_id, POST_CITY);
        if (!empty($post_city)):
            return $post_city[0];
        endif;
    }
    add_action ( 'init', 'get_post_city');
}

if (!function_exists('get_category_image')) {
    function get_category_image() {
        if (function_exists('z_taxonomy_image_url')) return z_taxonomy_image_url();
    }
    add_action ( 'init', 'get_category_image');
}

if (!function_exists("theme_pagination")) {
    function theme_pagination() {
        if ($GLOBALS['wp_query']->max_num_pages < 2) {
        return '';
        }
        /*<nav class="pagination" role="pagination">
          if (get_next_post_link()) {
            <div class="prev"> next_posts_link(__('Older Posts')) </div>
          };
          
        </nav>*/
    }
}


add_action('init', 'codex_custom_init');
function codex_custom_init() 
{
    $labels = array(
        'name' => _x('WordPress Portfolios Gallery', 'post type general name'),
        'singular_name' => _x('Portfolios', 'post type singular name'),
        'add_new' => _x('Add New', 'portfolio'),
        'add_new_item' => __('Add New Portfolio'),
        'edit_item' => __('Edit Portfolio'),
        'new_item' => __('New Portfolio'),
        'all_items' => __('All Portfolios'),
        'view_item' => __('View Portfolio'),
        'search_items' => __('Search Portfolios'),
        'not_found' =>  __('No portfolios found'),
        'not_found_in_trash' => __('No portfolios found in Trash'), 
        'parent_item_colon' => '',
        'menu_name' => 'Portfolios'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true, //'rewrite' => array("slug" => "portfolios")
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','author','comments', 'custom-fields', 'trackbacks', 'attachments', 'post-formats') //thumbnail, excerpt
  ); 
  register_post_type('portfolios',$args);
  add_post_type_support('portfolios', 'thumbnail');
  register_taxonomy_for_object_type('post_tag', 'portfolios');
  register_taxonomy_for_object_type('category','portfolios');
}


add_action('init', 'custom_post_type_slide');
function custom_post_type_slide() 
{
    $labels = array(
        'name' => _x('WordPress Slider', 'post type general name'),
        'singular_name' => _x('Slider', 'post type singular name'),
        'add_new' => _x('Add New', 'slider'),
        'add_new_item' => __('Add New slider'),
        'edit_item' => __('Edit slider'),
        'new_item' => __('New slider'),
        'all_items' => __('All slider'),
        'view_item' => __('View slider'),
        'search_items' => __('Search slider'),
        'not_found' =>  __('No slider found'),
        'not_found_in_trash' => __('No slider found in Trash'), 
        'parent_item_colon' => '',
        'menu_name' => 'Slider'
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => true, //'rewrite' => array("slug" => "portfolios")
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array('title','editor','author','comments', 'custom-fields', 'trackbacks', 'attachments', 'post-formats') //thumbnail, excerpt
  ); 
  register_post_type('slider',$args);
  add_post_type_support('slider', 'thumbnail');
}

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Trang chủ</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;/&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;/&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

add_action( 'phpmailer_init', 'my_phpmailer_example' );
function my_phpmailer_example( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
    $phpmailer->Port = 465;
    $phpmailer->Username = 'vanlong121996@gmail.com';
    $phpmailer->Password = 'LONG1996';


}

add_action( 'wp_ajax_thongbao', 'thongbao_init' );
add_action( 'wp_ajax_nopriv_thongbao', 'thongbao_init' );
function thongbao_init() {

  $hoten = sanitize_text_field($_POST['hoten']);
  $tinhan = sanitize_text_field($_POST['tinhan']);
  $dienthoai = sanitize_text_field($_POST['dienthoai']);
  $select_product = sanitize_text_field($_POST['select_product']);
  
  
  
  $html = '<!DOCTYPE html>
    <html>
    <head>
        <style>
        table{border:1px solid black; border-collapse: collapse;text-align:center}
        td{padding:5px}
        </style>
    </head>
    <body>
        <table border="1">
            <tr>
                <td width="150px">Sản phẩm :</td>
                <td width="150px">'.$select_product.'</td>
            </tr>
       
            <tr>
                <td>Họ tên:</td>
                <td>'.$hoten.'</td>

            </tr>
            <tr>
                <td>Điện thoại:</td>
                <td>'.$dienthoai.'</td>

            </tr>
            <tr>
                <td>Lời nhắn:</td>
                <td>'.$tinhan.'</td>

            </tr>
           
            
        </table>
    </body>
    </html>';

    $to = 'longvan1296@gmail.com';
    $subject = 'Đơn hàng Homekara';
  
    $headers = array('Content-Type: text/html; charset=UTF-8');
     
    wp_mail( $to, $subject, $html, $headers );

    $data['success'] = 'Cảm ơn quý khách đã đặt hàng sản phẩm HomeKara phiên bản '.$select_product.', chúng tôi sẽ liên lạc lại ngay để xác nhận và gửi hàng, xin cảm ơn"';

    echo json_encode($data);
    die();//bắt buộc phải có khi kết thúc
}




// $to = 'minhhai27121994@gmail.com';
// $subject = 'The subject';
// $body = 'The email body content';
// $headers = array('Content-Type: text/html; charset=UTF-8');
 
// wp_mail( $to, $subject, $body, $headers );