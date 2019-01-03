<?php

/*
* Here We are adding the functions for the text replace for the widget area
*/




add_action( 'wp_ajax_store_un_theme_option',  'store_un_theme_option');
add_action( 'wp_ajax_nopriv_store_un_theme_option','store_un_theme_option');

function store_un_theme_option(){



	 $data =$_POST;

	/*print_r($data['untheme_register_email']);
	print_r($data['untheme_register_apikey']);*/

	$url="http://localhost/wordpress/api.php?email=".$data['untheme_register_email']."&apikey=".$data['untheme_register_apikey'];


		$ch = curl_init();
		// Will return the response, if false it print the response
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		// Set the url
		curl_setopt($ch, CURLOPT_URL,$url);
		// Execute
		$result=curl_exec($ch);
		// Closing
		curl_close($ch);

		// Will dump a beauty json :3

		$final_response = json_decode($result);

		//print_r($final_response->status);

		if($final_response->status == "100")
		{
			update_option('untheme_api_validation', 'false');
			echo __('Bad', 'feedier');
			die();
		}
	

	foreach ($_POST as $field=>$value) {

		/*print_r(substr($field, 0, 8));

		echo "<br/>";*/

		

		if(substr_count($field,"untheme_") >0)
	    {
	    	//print_r($value) ;
	    	update_option($field, $value);
	    }


	    if($final_response->status == "200")
		{
			update_option('untheme_api_validation', 'true');
		}

		    



	}

	echo __('Saved', 'feedier');

	
		die();
}

add_action( 'wp_ajax_store_un_theme_header_option',  'store_un_theme_header_option');
add_action( 'wp_ajax_nopriv_store_un_theme_header_option','store_un_theme_header_option');

function store_un_theme_header_option(){

	$data =$_POST;

	foreach ($_POST as $field=>$value) {

		if(substr_count($field,"untheme_") >0)
	    {
	    	//print_r($value) ;
	    	$value = str_replace(' ', '+', $value);

	    	update_option($field, $value);
	    }

	}

	echo __('Saved', 'feedier');

	die();
}