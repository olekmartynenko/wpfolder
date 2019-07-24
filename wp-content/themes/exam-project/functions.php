<?php define('custom_img_path', get_stylesheet_directory_uri() . '/i') ?>
<?php define('custom_script_path', get_stylesheet_directory_uri() . '/js') ?>
<?php define('custom_style_path', get_stylesheet_directory_uri() . '/css') ?>
<?php add_action('wp_enqueue_scripts', 'add_theme_scripts');
function add_theme_scripts()
{
  wp_enqueue_style('style', custom_style_path . '/style.css');
  wp_enqueue_script('jquery_custom', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '1.0.0', true);
  wp_enqueue_script('smooth-scroll', 'https://cdnjs.cloudflare.com/ajax/libs/smooth-scroll/16.1.0/smooth-scroll.min.js', array(), '1.0.0', true);
  wp_enqueue_script('slider', custom_script_path . '/slick.min.js', array(), '1.0.0', true);
  wp_enqueue_script('script', custom_script_path . '/script.js', array(), '1.0.0', true);
}
?>  
<?php function register_my_menus()
{
  register_nav_menus(
    array(
      'header-menu-custom' => __('Header Menu Custom'),
      'footer-menu-custom' => __('Footer Menu Custom')
    )
  );
}
add_action('init', 'register_my_menus');

function custom_logo_setup()
{
  $defaults = array(
    'flex-height' => true,
    'flex-width'  => true
  );
  add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'custom_logo_setup');


add_filter('wpcf7_form_elements', 'imp_wpcf7_form_elements');
function imp_wpcf7_form_elements($content)
{
  $str_pos = strpos($content, 'name="email-629"');
  $content = substr_replace($content, ' data-validate="1" autocomplete="off" ', $str_pos, 0);
  return $content;
}
