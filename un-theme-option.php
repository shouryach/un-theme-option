<?php
/*
Plugin Name: Un Theme Option
Version: 1.0.0
Description: Theme Option of the Un Theme
Author: Shourya Chowdhury
Author URI: http://codeartssolution.com/
*/

if (!defined('ABSPATH')) exit;

include( plugin_dir_path( __FILE__ ) . 'functions.php');
include( plugin_dir_path( __FILE__ ) . 'un-theme-header.php');


function custom_add_google_fonts() {

$font_family = get_option('untheme_font_family');

 wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family='.$font_family.':300,400,400i', false );
 }
 add_action( 'wp_enqueue_scripts', 'custom_add_google_fonts' );




if(!defined('UNTHEME_URL'))
	define('UNTHEME_URL', plugin_dir_url( __FILE__ ));

if (!class_exists('untheme_Setting')) {

	class untheme_Setting {



		function __construct(){


            add_action( 'admin_menu', array( $this, 'untheme_admin_menu' ) );

			add_action( 'admin_init', array( $this, 'untheme_register_settings') );

        }



        //register option settings

        function untheme_register_settings() {

        	//textfield option registered

			add_option( 'untheme_register_email', ''); 
			add_option( 'untheme_register_apikey', ''); 
			add_option( 'untheme_api_validation', ''); 
			add_option( 'untheme_font_family', ''); 
			add_option( 'untheme_body_font_family', ''); 

		   	register_setting( 'untheme_options_group', 'untheme_register_email', 'untheme_register_email_callback' );
		   	register_setting( 'untheme_options_group', 'untheme_register_apikey', 'untheme_register_apikey_callback' );
		   	register_setting( 'untheme_options_group', 'untheme_api_validation', 'untheme_api_validation_callback' );
		   	register_setting( 'untheme_options_group', 'untheme_font_family', 'untheme_font_family_callback' );
		   	register_setting( 'untheme_options_group', 'untheme_body_font_family', 'untheme_font_family_callback' );



		}



		//create options page

		function untheme_admin_menu() {

			add_menu_page(      

				'UnTheme Options',            //page title

				'UnTheme Options',    //menu title

				'manage_options',       //capability

				'untheme_theme_option',    // menu slug

				array( $this, 'untheme_register_email_page' ), //callback function
				
				'dashicons-image-crop' ,

				     //dashicon icon

				60                      

			);

			add_submenu_page( 'untheme_theme_option', 'Register Api Key', 'Register Api Key',
   			 'manage_options', 'untheme_theme_option');
			// Add to admin_menu function
 			add_submenu_page( 'untheme_theme_option', __('Un Header'), __('Header'), 'edit_themes', 'untheme_header', untheme_header);
 
			



			//add_menu_page, add_dashboard_page, add_options_page, 

		}



		//callback function for options

		function  untheme_register_email_page() { ?>


			<div class="container">
				<div class="row">
					
						<h2>Welcome To Theme Option Of Un Theme</h2>
						<p>You Need To Enter Your Email Id and Api Key Provided By Us In Your Register Email Id</p>
					
				</div>
			</div>

			

			<div class="sb-option-block">

				



				<div class="form-style-6">
				<h1>Enter Api Details</h1>
				<form id="un-admin-form" class="postbox">
					
					<input type="email"  id="untheme_register_email" name="untheme_register_email" value="<?php echo get_option('untheme_register_email'); ?>" placeholder="Email Address" required/>
					
					<input type="text"  id="untheme_register_apikey" name="untheme_register_apikey" value="<?php echo get_option('untheme_register_apikey'); ?>" placeholder="Api Key" required/>
					
					
					
					<div class="submit-btn">					

						 <button class="" id="feedier-admin-save" type="submit">
                        <?php _e( 'Save', 'feedier' ); ?>
                    </button>


					</div>
				</form>
				</div>



				

			</div><!--option ends-->

		<?php }



    }

}//End of class not exists check



$GLOBALS['untheme_Setting'] = new untheme_Setting(); 



wp_enqueue_style('untheme-admin', UNTHEME_URL. 'assets/css/admin.css', false, 1.0);
wp_enqueue_style('untheme-grid', UNTHEME_URL. 'assets/css/un-tab.css', false, 1.0);
wp_enqueue_style('untheme-select2', UNTHEME_URL. 'assets/css/select2.css', false, 1.0);

wp_enqueue_script('untheme-admin', UNTHEME_URL. 'assets/js/admin.js', array(), 1.0);
wp_enqueue_script('untheme-select2', UNTHEME_URL. 'assets/js/select2.js', array(), 1.0);

$admin_options = array(
	'ajax_url' => admin_url( 'admin-ajax.php' ),
	
);

wp_localize_script('untheme-admin', 'untheme_exchanger', $admin_options);


//echo get_option('untheme_font_family');


function hook_css() {
    $url = "https://www.googleapis.com/webfonts/v1/webfonts?sort=alpha&key=AIzaSyDFZsDR2nubhy3tCsTmWdRE3Qi7UJV3dY8";
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_REFERER, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$result = curl_exec($ch);
curl_close($ch);
$results = json_decode( $result );

$font_family = get_option('untheme_font_family');

 $font_family = str_replace('+', ' ', $font_family);

foreach ($results->items as $item) {

	if($item->family == $font_family)
	{?>

		<style type="text/css">
			
			body
			{
				font-family: '<?php echo $font_family;?>', <?php echo($item->category);?> !important;
			}


			.author-description .author-link, .comment-metadata, .comment-reply-link, .comments-title, .comment-author .fn, .discussion-meta-info, .entry-meta, .entry-footer, .main-navigation, .no-comments, .not-found .page-title, .error-404 .page-title, .post-navigation .post-title, .page-links, .page-description, .pagination .nav-links, .sticky-post, .site-title, .site-info, #cancel-comment-reply-link, img:after, h1, h2, h3, h4, h5, h6

			{
				font-family: '<?php echo $font_family;?>', <?php echo($item->category);?> !important;
			}

			.widget_archive ul li, .widget_categories ul li, .widget_meta ul li, .widget_nav_menu ul li, .widget_pages ul li, .widget_recent_comments ul li, .widget_recent_entries ul li, .widget_rss ul li
			{
				font-family: '<?php echo $font_family;?>', <?php echo($item->category);?> !important;
			}
		</style>
		
		
	<?php }

}
}
add_action('wp_head', 'hook_css');

