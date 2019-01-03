<?php


function arthur_image_uploader( $name, $width, $height ) {

    
}


function arthur_load_scripts_admin() {

   

    // WordPress library
    wp_enqueue_media();

 

}
add_action( 'admin_enqueue_scripts', 'arthur_load_scripts_admin' );



function untheme_header() {?>
			       <style>#wpcontent{
				padding-left: 0 !important;
			}</style>



			
			
	<section class="qodef-options-page qodef-page">

		<div class="qodef-page-header page-header clearfix">
            <img src="http://vsearch.codeartssolution.com/wp-content/themes/bridge/framework/admin/assets/img/qode-logo.png" alt="qode_logo" class="qodef-header-logo pull-left">
              <h2 class="qodef-page-title pull-left">
                Un Theme<small> 1.0</small>
           		 </h2>
			  <div class="pull-right"> <input type="button" id="qode_top_save_button" class="btn btn-primary btn-sm pull-right" value="Save Changes"></div>
		</div>


		<div class="qodef-page-content-wrapper">
   <!--Starting the wrapper-->
   <div class="qodef-page-content">
      <!--Page Content Start-->
      <div class="qodef-page-navigation qodef-tabs-wrapper vertical left clearfix">
         <div class="qodef-tabs-navigation-wrapper">
            <ul class="nav nav-tabs">
               <li>
                  <a href="javascript:void(0)">
                  <i class="fa fa-fa fa-institution qodef-tooltip qodef-inline-tooltip left" data-placement="top" data-toggle="tooltip" title="" data-original-title="General"></i>
                  <span>General</span>
                  </a>
               </li>
               <li>
                  <a href="javascript:void(0)">
                  <i class="fa fa-fa fa-coffee qodef-tooltip qodef-inline-tooltip left" data-placement="top" data-toggle="tooltip" title="" data-original-title="Logo"></i>
                  <span>Logo</span>
                  </a>
               </li>
               <li>
                  <a href="javascript:void(0)">
                  <i class="fa fa-fa fa-header qodef-tooltip qodef-inline-tooltip left" data-placement="top" data-toggle="tooltip" title="" data-original-title="Header"></i>
                  <span>Header</span>
                  </a>
               </li>
               
               
            </ul>
         </div>
         <div class="qodef-tabs-content">
            <div class="tab-content">
               <div class="tab-pane fade in active" id="Parallax">
                  <div class="qodef-tab-content">
                     <h2 class="qodef-page-title">General</h2>
                     <form id="un-header-form" class="postbox">
                        <div class="qodef-page-form" style="padding-bottom: 53px;">
                           <div class="qodef-page-form-section-holder" id="qodef_parallax_settings_panel">
                              <h3 class="qodef-page-section-title">Design Style</h3>
                              <div class="qodef-page-form-section" id="qodef_parallax_onoff">
                                 <div class="qodef-field-desc">
                                    <h4>Font Family</h4>
                                    <p>Choose a default Google font for your site</p>
                                 </div>
                                 <!-- close div.qodef-field-desc -->
                                 <div class="qodef-section-content">
                                    <div class="container-fluid">
                                       <div class="row">
                                          <div class="col-lg-12">
                                             <select id="states" name="untheme_font_family" id="untheme_font_family">

		                  			<?php
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
		                  			foreach ($results->items as $item) {

		                  				//print_r($item);

		                  			 ?>

		                  				<option value="<?php echo($item->family); ?>" <?php if(esc_attr( get_option('untheme_font_family') ) == $item->family)  {?>
		                  			selected
		                  		<?php } ?>><?php echo($item->family); ?> </option>
										
									<?php }?>
		                  			
		                  		</select>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- close div.qodef-section-content -->
                              </div>


                              <div class="qodef-page-form-section" id="qodef_parallax_onoff">
                                 <div class="qodef-field-desc">
                                    <h4>First Main Color</h4>
                                    <p>Choose the most dominant theme color</p>
                                 </div>
                                 <!-- close div.qodef-field-desc -->
                                 <div class="qodef-section-content">
                                    <div class="container-fluid">
                                       <div class="row">
                                          <div class="col-lg-12">
                                            <input type="text"  name="untheme_primary_color" value="<?php echo esc_attr( get_option('untheme_primary_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- close div.qodef-section-content -->
                              </div>


                              <div class="qodef-page-form-section" id="qodef_parallax_onoff">
                                 <div class="qodef-field-desc">
                                    <h4>Second Main Color</h4>
                                    <p>Second Main Color</p>
                                 </div>
                                 <!-- close div.qodef-field-desc -->
                                 <div class="qodef-section-content">
                                    <div class="container-fluid">
                                       <div class="row">
                                          <div class="col-lg-12">
                                            <input type="text"  name="untheme_secondary_color" value="<?php echo esc_attr( get_option('untheme_secondary_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- close div.qodef-section-content -->
                              </div>


                              <div class="qodef-page-form-section" id="qodef_parallax_onoff">
                                 <div class="qodef-field-desc">
                                    <h4>Third Main Color</h4>
                                    <p>Choose the third most dominant theme color</p>
                                 </div>
                                 <!-- close div.qodef-field-desc -->
                                 <div class="qodef-section-content">
                                    <div class="container-fluid">
                                       <div class="row">
                                          <div class="col-lg-12">
                                            <input type="text"  name="untheme_third_color" value="<?php echo esc_attr( get_option('untheme_third_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- close div.qodef-section-content -->
                              </div>


                              <div class="qodef-page-form-section" id="qodef_parallax_onoff">


                                 <div class="qodef-field-desc">
                                    <h4>Fourth Main Color</h4>
                                    <p>Choose the fourth most dominant theme color</p>
                                 </div>
                                 <!-- close div.qodef-field-desc -->
                                 <div class="qodef-section-content">
                                    <div class="container-fluid">
                                       <div class="row">
                                          <div class="col-lg-12">
                                            <input type="text"  name="untheme_fourth_color" value="<?php echo esc_attr( get_option('untheme_fourth_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- close div.qodef-section-content -->
                              </div>


             <div class="qodef-page-form-section">


						<div class="qodef-field-desc">
							<h4>Gradient Colors</h4>

							<p>Define colors for gradient styles</p>
						</div>
						<!-- close div.qodef-field-desc -->

						<div class="qodef-section-content">
							<div class="container-fluid">
										<div class="row">
						
												<div class="col-lg-3" id="qodef_gradient_style1_start_color">
													<em class="qodef-field-description">Style 1 - Start Color (def. #31c8a2)</em>

													<input type="text"  name="untheme_grident_primary_color" value="<?php echo esc_attr( get_option('untheme_grident_primary_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
													
												</div>
						
												<div class="col-lg-3" id="qodef_gradient_style1_end_color">
													<em class="qodef-field-description">Style 1 - End Color (def. #ae66fd)</em>

													<input type="text"  name="untheme_grident_secondary_color" value="<?php echo esc_attr( get_option('untheme_grident_secondary_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
													
												</div>
										</div>
								</div>
						</div>
						<!-- close div.qodef-section-content -->

			</div>


			<div class="qodef-page-form-section">


						<div class="qodef-field-desc">
							<h4>Gradient Colors Secondary</h4>

							<p>Define colors for gradient styles</p>
						</div>
						<!-- close div.qodef-field-desc -->

						<div class="qodef-section-content">
							<div class="container-fluid">
										<div class="row">
						
												<div class="col-lg-3" id="qodef_gradient_style1_start_color">
													<em class="qodef-field-description">Style 1 - Start Color (def. #31c8a2)</em>

													<input type="text"  name="untheme_grident_third_color" value="<?php echo esc_attr( get_option('untheme_grident_third_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
													
												</div>
						
												<div class="col-lg-3" id="qodef_gradient_style1_end_color">
													<em class="qodef-field-description">Style 1 - End Color (def. #ae66fd)</em>

													<input type="text"  name="untheme_grident_fourth_color" value="<?php echo esc_attr( get_option('untheme_grident_fourth_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
													
												</div>
										</div>
								</div>
						</div>
						<!-- close div.qodef-section-content -->

			</div>




                              
                           </div>




            <div class="qodef-page-form-section-holder" id="qodef_parallax_settings_panel">
                              		<h3 class="qodef-page-section-title">Settings</h3>

                              		


		<div class="qodef-page-form-section" id="qodef_elements_animation_on_touch">


			<div class="qodef-field-desc">
				<h4>Show 'Back To Top Button'</h4>

				<p>Enabling this option will display a Back to Top button on every page</p>
			</div>
			<!-- close div.qodef-field-desc -->



			<div class="qodef-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<p class="field switch">
								
								<label data-hide="" data-show="#qodef_transparent_content_container" class="<?php if(get_option('untheme_back_to_top') =="Yes") {?>
									cb-enable selected <?php } else { ?>cb-enable dependence <?php }?>"><span>Yes</span>

								</label>

								<label data-hide="#qodef_transparent_content_container" data-show="" class="<?php if(get_option('untheme_back_to_top') =="No") {?>
									cb-disable selected <?php } else { ?>cb-disable <?php }?>"><span>No</span>
								</label>

								<?php //echo get_option('untheme_back_to_top');?>

							
								<input type="radio" class="input_hidden" name="untheme_back_to_top" value="Yes" <?php if(get_option('untheme_back_to_top') =="Yes") {?>
									checked <?php } ?>> <br>	

								<input type="radio" class="input_hidden" name="untheme_back_to_top" value="No"  <?php if(get_option('untheme_back_to_top') =="No") {?>
									checked <?php } ?>> <br>	

								
								

								
							</p>
						</div>
					</div>
				</div>
			</div>



			<!-- close div.qodef-section-content -->
		</div>


		<div class="qodef-page-form-section" id="qodef_elements_animation_on_touch">


			<div class="qodef-field-desc">
				<h4>Show 'Back To Top Button'</h4>

				<p>Enabling this option will display a Back to Top button on every page</p>
			</div>
			<!-- close div.qodef-field-desc -->



			<div class="qodef-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<?php
							$options = get_option( 'untheme_fav_icon' );
    $default_image = plugins_url('img/no-image.png', __FILE__);

    if ( !empty( $options[$name] ) ) {
        $image_attributes = wp_get_attachment_image_src( $options[$name], array( $width, $height ) );

        //print_r($image_attributes);

        $src = $image_attributes[0];
        $value = $options[$name];
    } else {
        $src = $default_image;
        $value = '';
    }

    $text = __( 'Upload', RSSFI_TEXT );

    // Print HTML field
    echo '
        <div class="upload">
            <img data-src="' . $default_image . '" src="' . $src . '" width="20%" height="20%" />
            <div>
                <input type="hidden" name="untheme_fav_icon" id="untheme_fav_icon[' . $name . ']" value="' . $value . '" />
                <button type="submit" class="upload_image_button button">' . $text . '</button>
                <button type="submit" class="remove_image_button button">&times;</button>
            </div>
        </div>
    '; ?>
						</div>
					</div>
				</div>
			</div>



			<!-- close div.qodef-section-content -->
		</div>

		
                              

	</div>
                      
                        </div>


		                  		<!-- <div class="submit-btn">					

									 <button class="" id="feedier-admin-save" type="submit">
			                        <?php _e( 'Save', 'feedier' ); ?>
			                    </button>
							  </div> -->

                     </form>
                  </div>
                  <!-- close qodef-tab-content -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--Page Content End-->
</div>
<!--End Of The Wrapper-->
  
   
            

</section>

<?php }