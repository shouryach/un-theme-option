<?php
function untheme_header() { ?>
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
                      
                        </div>


		                  		<div class="submit-btn">					

									 <button class="" id="feedier-admin-save" type="submit">
			                        <?php _e( 'Save', 'feedier' ); ?>
			                    </button>
							  </div>
                        
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
  
   
            <div class="bhoechie-tab-container">
              
               <div class="bhoechie-tab-menu un-row">
	                  <div class="list-group un-col-3">
	                     <a href="#" class="list-group-item active text-center">
	                     Header<span class="arrow-cls-right"><i class="fa fa-angle-double-right"></i></span>
	                     </a>
	                     <a href="#" class="list-group-item  text-center">
	                     Logo<span class="arrow-cls-right"><i class="fa fa-angle-double-right"></i></span>
	                     </a>
	                     <a href="#" class="list-group-item  text-center">
	                     Footer<span class="arrow-cls-right"><i class="fa fa-angle-double-right"></i></span>
	                     </a>
	                  </div>
             
		         <div class="content-area un-col-9">
		            <div class="right-side-credit bhoechie-tab">
		               <div class="bhoechie-tab-content active">

		                  <h2 class="tm-page-section-title">Header Options</h2>

		                <div class="tm-page-form-section">

		                  <form id="un-header-form" class="postbox">

		                  	<div class="un-field-desc">
		                  		<h4>font family</h4>

		                  		<p>Please Choose The Google Font. That Will be the default font of the website</p>

		                  	</div>
		                  	
		                  	<div class="un-section-content">

		                  		<div class="container-fluid">
		                  			
		                  			<div class="row">
		                  				
		                  			</div>

		                  		</div>

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
		                  	

		                  		<label>Colors Panel</label>

		                  	
		                  		<div>


		                  			<label>Primary Color</label>


		                  		<input type="text"  name="untheme_primary_color" value="<?php echo esc_attr( get_option('untheme_primary_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
		                  		</div>


		                  		<div>
		                  			<label>Secondary Color</label>


		                  		<input type="text"  name="untheme_secondary_color" value="<?php echo esc_attr( get_option('untheme_secondary_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
		                  		
		                  		</div>

		                  		<div>
		                  			<label>Third Color</label>


		                  		<input type="text"  name="untheme_third_color" value="<?php echo esc_attr( get_option('untheme_third_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
		                  		
		                  		</div>


		                  		<div>
		                  			<label>Fourth Color</label>


		                  		<input type="text"  name="untheme_fourth_color" value="<?php echo esc_attr( get_option('untheme_fourth_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
		                  		
		                  		</div>


		                  		<label>Gradient Color</label>


		                  		<div>

									<label>Primary Color</label>

										<input type="text"  name="untheme_grident_primary_color" value="<?php echo esc_attr( get_option('untheme_grident_primary_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
		                  		</div>


		                  		<div>

									<label>Secondary Color</label>

										<input type="text"  name="untheme_grident_secondary_color" value="<?php echo esc_attr( get_option('untheme_grident_secondary_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
		                  		</div>


		                  		<div>

									<label>Third Color</label>

										<input type="text"  name="untheme_grident_third_color" value="<?php echo esc_attr( get_option('untheme_grident_third_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
		                  		</div>

		                  		<div>

									<label>Fourth Color</label>

										<input type="text"  name="untheme_grident_fourth_color" value="<?php echo esc_attr( get_option('untheme_grident_fourth_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
		                  		</div>


		                  		<label>Initial Width of Content</label>



		                  		 <select id="intial_width" name="untheme_initial_width" id="untheme_initial_width">

		                  		 	<option value="grid_1100" <?php if(esc_attr( get_option('untheme_initial_width') ) == "grid_1100")  {?>
		                  			selected
		                  		<?php } ?>>1100px (default)</option>
		                  		 	<option value="grid_1200" <?php if(esc_attr( get_option('untheme_initial_width') ) == "grid_1200")  {?>
		                  			selected
		                  		<?php } ?>>1200px</option>
		                  		 	<option value="grid_1300" <?php if(esc_attr( get_option('untheme_initial_width') ) == "grid_1300")  {?>
		                  			selected
		                  		<?php } ?>>1200px</option>



		                  		 </select>

		                  		<div class="submit-btn">					

									 <button class="" id="feedier-admin-save" type="submit">
			                        <?php _e( 'Save', 'feedier' ); ?>
			                    </button>
							  </div>

		                  </form>

		                  </div>  
		                  
		               </div>
		               <div class="bhoechie-tab-content ">
		                  <h2>Identity Theft Recovery Program </h2>
		                  
		               </div>
		               <div class="bhoechie-tab-content ">
		                  <h2>Credit Counseling/Establish Credit</h2>
		                 
		               </div>
		               <!-- flight section -->
		            </div>
		         </div>
      </div>
   </div>

</section>

<?php }