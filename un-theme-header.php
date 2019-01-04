<?php






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
                  <a href="<?php echo home_url('wp-admin/admin.php?page=untheme_general');?>">
                  <i class="fa fa-fa fa-institution qodef-tooltip qodef-inline-tooltip left" data-placement="top" data-toggle="tooltip" title="" data-original-title="General"></i>
                  <span>General</span>
                  </a>
               </li>
               <li>
                  <a href="<?php echo home_url('wp-admin/admin.php?page=untheme_logo');?>">
                  <i class="fa fa-fa fa-coffee qodef-tooltip qodef-inline-tooltip left" data-placement="top" data-toggle="tooltip" title="" data-original-title="Logo"></i>
                  <span>Logo</span>
                  </a>
               </li>
               <li class="un_active">
                  <a href="<?php echo home_url('wp-admin/admin.php?page=untheme_header');?>">
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
                     <h2 class="qodef-page-title">Header</h2>
                     <form id="un-header-form" class="postbox">
                        <div class="qodef-page-form" style="padding-bottom: 10px">
                           <div class="qodef-page-form-section-holder" id="qodef_parallax_settings_panel">
                              <h3 class="qodef-page-section-title">Header</h3>
                              
                              <div class="qodef-page-form-section" id="qodef_parallax_onoff">
                                 <div class="qodef-field-desc">
                                    <h4>Header In Grid</h4>
                                    
                                 </div>
                                 <!-- close div.qodef-field-desc -->
                                 <div class="qodef-section-content">
                                    <div class="container-fluid">
                                       <div class="row">
                                        <div class="col-lg-12">
                                          <p class="field switch">
                                            
                                            <label data-hide="" data-show="#qodef_transparent_content_container" class="<?php if(get_option('untheme_header_grid') =="Yes") {?>
                                              cb-enable selected <?php } else { ?>cb-enable dependence <?php }?>"><span>Yes</span>

                                            </label>

                                            <label data-hide="#qodef_transparent_content_container" data-show="" class="<?php if(get_option('untheme_header_grid') =="No") {?>
                                              cb-disable selected <?php } else { ?>cb-disable <?php }?>"><span>No</span>
                                            </label>

                                            <?php //echo get_option('untheme_header_grid');?>

                                          
                                            <input type="radio" class="input_hidden" name="untheme_header_grid" value="Yes" <?php if(get_option('untheme_header_grid') =="Yes") {?>
                                              checked <?php } ?>> <br>  

                                            <input type="radio" class="input_hidden" name="untheme_header_grid" value="No"  <?php if(get_option('untheme_header_grid') =="No") {?>
                                              checked <?php } ?>> <br>  

                                            
                                            

                                            
                                          </p>
                                      </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- close div.qodef-section-content -->
                              </div>

                              <div class="qodef-page-form-section">


						<div class="qodef-field-desc">
							<h4>Header Background Color</h4>

							
						</div>
						<!-- close div.qodef-field-desc -->

						<div class="qodef-section-content">
							<div class="container-fluid">
										<div class="row">
						
												<div class="col-lg-3" id="qodef_gradient_style1_start_color">
													<em class="qodef-field-description">Initial</em>

													<input type="text"  name="untheme_header_initial" value="<?php echo esc_attr( get_option('untheme_header_initial') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
													
												</div>
						
												<div class="col-lg-3" id="qodef_gradient_style1_end_color">
													<em class="qodef-field-description">After Scrool</em>

													<input type="text"  name="untheme_header_after_scrool" value="<?php echo esc_attr( get_option('untheme_header_after_scrool') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
													
												</div>
										</div>
								</div>
						</div>
						<!-- close div.qodef-section-content -->

			                        </div>
 
                              <div class="qodef-page-form-section">


                                  <div class="qodef-field-desc">
                                    <h4>Header Transparency</h4>

                                    
                                  </div>
                                  <!-- close div.qodef-field-desc -->

                                  <div class="qodef-section-content">
                                    <div class="container-fluid">
                                          <div class="row">
                                  
                                              <div class="col-lg-3" id="qodef_gradient_style1_start_color">
                                                <em class="qodef-field-description">Initial</em>

                                                <input type="text"  name="untheme_header_trans_initial" value="<?php echo esc_attr( get_option('untheme_header_trans_initial') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
                                                
                                              </div>
                                  
                                              <div class="col-lg-3" id="qodef_gradient_style1_end_color">
                                                <em class="qodef-field-description">After Scrool</em>

                                                <input type="text"  name="untheme_header_after_trans_scrool" value="<?php echo esc_attr( get_option('untheme_header_after_trans_scrool') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
                                                
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- close div.qodef-section-content -->

                              </div>
        
                              <div class="qodef-page-form-section">


            <div class="qodef-field-desc">
              <h4>Header Bottom Border Color</h4>

              
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
              <div class="container-fluid">
                    <div class="row">
            
                        <div class="col-lg-3" id="qodef_gradient_style1_start_color">
                          
                            <input type="text"  name="untheme_header_bottom_background_ground" value="<?php echo esc_attr( get_option('untheme_header_bottom_background_ground') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
                          
                        </div>
            
                        
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

                              </div>

                              <div class="qodef-page-form-section">


            <div class="qodef-field-desc">
              <h4>Header Bottom Border Transparency</h4>

              
            </div>
            <!-- close div.qodef-field-desc -->

            <div class="qodef-section-content">
              <div class="container-fluid">
                    <div class="row">
            
                        <div class="col-lg-3" id="qodef_gradient_style1_start_color">
                          
                            <input type="text"  name="untheme_header_bottom_border_transparency" value="<?php echo esc_attr( get_option('untheme_header_bottom_border_transparency') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
                          
                        </div>
            
                        
                    </div>
                </div>
            </div>
            <!-- close div.qodef-section-content -->

                              </div>

                              <div class="qodef-page-form-section" id="qodef_parallax_onoff">
                                 <div class="qodef-field-desc">
                                    <h4>Enable Header Bottom Border In Grid</h4>
                                    
                                 </div>
                                 <!-- close div.qodef-field-desc -->
                                 <div class="qodef-section-content">
                                    <div class="container-fluid">
                                       <div class="row">
                                        <div class="col-lg-12">
                                          <p class="field switch">
                                            
                                            <label data-hide="" data-show="#qodef_transparent_content_container" class="<?php if(get_option('untheme_header_bottom_border_in_grid') =="Yes") {?>
                                              cb-enable selected <?php } else { ?>cb-enable dependence <?php }?>"><span>Yes</span>

                                            </label>

                                            <label data-hide="#qodef_transparent_content_container" data-show="" class="<?php if(get_option('untheme_header_bottom_border_in_grid') =="No") {?>
                                              cb-disable selected <?php } else { ?>cb-disable <?php }?>"><span>No</span>
                                            </label>

                                           
                                         <input type="radio" class="input_hidden" name="untheme_header_bottom_border_in_grid" value="Yes" <?php if(get_option('untheme_header_bottom_border_in_grid') =="Yes") {?>
                                              checked <?php } ?>> <br>  

                                            <input type="radio" class="input_hidden" name="untheme_header_bottom_border_in_grid" value="No"  <?php if(get_option('untheme_header_bottom_border_in_grid') =="No") {?>
                                              checked <?php } ?>> <br>  

                                            
                                            

                                            
                                          </p>
                                      </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- close div.qodef-section-content -->
                              
                              </div>
                        
                          </div>
                      
                       </div>

                        <div class="qodef-page-form" style="padding-bottom: 10px">
                           <div class="qodef-page-form-section-holder" id="qodef_parallax_settings_panel">
                              <h3 class="qodef-page-section-title">Menus</h3>
                              
                              <div class="qodef-page-form-section" id="qodef_parallax_onoff">
                                 <div class="qodef-field-desc">
                                    <h4>Dropdown Menu Item Seperators</h4>
                                    
                                 </div>
                                 <!-- close div.qodef-field-desc -->
                                 <div class="qodef-section-content">
                                    <div class="container-fluid">
                                       <div class="row">
                                        <div class="col-lg-12">
                                          <p class="field switch">
                                            
                                            <label data-hide="" data-show="#qodef_transparent_content_container" class="<?php if(get_option('untheme_dropdown_menu_seperator') =="Yes") {?>
                                              cb-enable selected <?php } else { ?>cb-enable dependence <?php }?>"><span>Yes</span>

                                            </label>

                                            <label data-hide="#qodef_transparent_content_container" data-show="" class="<?php if(get_option('untheme_dropdown_menu_seperator') =="No") {?>
                                              cb-disable selected <?php } else { ?>cb-disable <?php }?>"><span>No</span>
                                            </label>

                                            <input type="radio" class="input_hidden" name="untheme_dropdown_menu_seperator" value="Yes" <?php if(get_option('untheme_dropdown_menu_seperator') =="Yes") {?>
                                              checked <?php } ?>> <br>  

                                            <input type="radio" class="input_hidden" name="untheme_dropdown_menu_seperator" value="No"  <?php if(get_option('untheme_dropdown_menu_seperator') =="No") {?>
                                              checked <?php } ?>> <br>  
                                           </p>
                                      </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- close div.qodef-section-content -->
                              </div>

                              <div class="qodef-page-form-section">


                                  <div class="qodef-field-desc">
                                    <h4>Dropdown Menu Item Seperator Color</h4>

                                    
                                  </div>
                                  <!-- close div.qodef-field-desc -->

                                  <div class="qodef-section-content">
                                    <div class="container-fluid">
                                          <div class="row">
                                  
                                              <div class="col-lg-3" id="qodef_gradient_style1_start_color">
                                                
                                                  <input type="text"  name="untheme_dropdown_menu_seperator_color" value="<?php echo esc_attr( get_option('untheme_dropdown_menu_seperator_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
                                                
                                              </div>
                                  
                                              
                                          </div>
                                      </div>
                                  </div>
                                  <!-- close div.qodef-section-content -->

                              </div>

                              <div class="qodef-page-form-section">


                                  <div class="qodef-field-desc">
                                    <h4>Dropdown Menu Background</h4>
                                  </div>
                                  <!-- close div.qodef-field-desc -->

                                  <div class="qodef-section-content">
                                    <div class="container-fluid">
                                          <div class="row">
                                  
                                              <div class="col-lg-3" id="qodef_gradient_style1_start_color">
                                                <em class="qodef-field-description">Background Color</em>

                                                <input type="text"  name="untheme_dropdown_menu_background_color" value="<?php echo esc_attr( get_option('untheme_dropdown_menu_background_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
                                                
                                              </div>
                                  
                                              <div class="col-lg-3" id="qodef_gradient_style1_end_color">
                                                <em class="qodef-field-description">Transparency</em>

                                                <input type="text"  name="untheme_dropdown_menu_transparency_color" value="<?php echo esc_attr( get_option('untheme_dropdown_menu_transparency_color') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
                                                
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <!-- close div.qodef-section-content -->

                              </div>
                          
                           </div>
                         
                        </div>    


                        <div class="qodef-page-form" style="padding-bottom: 10px">
                           <div class="qodef-page-form-section-holder" id="qodef_parallax_settings_panel">
                              <h3 class="qodef-page-section-title">FullScreen Menu</h3>
                              
                              <div class="qodef-page-form-section" id="qodef_parallax_onoff">
                                 <div class="qodef-field-desc">
                                    <h4>FullScreen Menu</h4>
                                    
                                 </div>
                                 <!-- close div.qodef-field-desc -->
                                 <div class="qodef-section-content">
                                    <div class="container-fluid">
                                       <div class="row">
                                        <div class="col-lg-12">
                                          <p class="field switch">
                                            
                                            <label data-hide="" data-show="#qodef_transparent_content_container" class="<?php if(get_option('untheme_full_menu') =="Yes") {?>
                                              cb-enable selected <?php } else { ?>cb-enable dependence <?php }?>"><span>Yes</span>

                                            </label>

                                            <label data-hide="#qodef_transparent_content_container" data-show="" class="<?php if(get_option('untheme_full_menu') =="No") {?>
                                              cb-disable selected <?php } else { ?>cb-disable <?php }?>"><span>No</span>
                                            </label>

                                            <input type="radio" class="input_hidden" name="untheme_full_menu" value="Yes" <?php if(get_option('untheme_full_menu') =="Yes") {?>
                                              checked <?php } ?>> <br>  

                                            <input type="radio" class="input_hidden" name="untheme_full_menu" value="No"  <?php if(get_option('untheme_full_menu') =="No") {?>
                                              checked <?php } ?>> <br>  
                                           </p>
                                      </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- close div.qodef-section-content -->
                              </div>

                            
                          
                           </div>
                         
                        </div>  


                        <div class="qodef-page-form" style="padding-bottom: 10px">
                           <div class="qodef-page-form-section-holder" id="qodef_parallax_settings_panel">
                              <h3 class="qodef-page-section-title">Header Top</h3>
                              
                              <div class="qodef-page-form-section" id="qodef_parallax_onoff">
                                 <div class="qodef-field-desc">
                                    <h4>Show Header Top Area</h4>
                                    
                                 </div>
                                 <!-- close div.qodef-field-desc -->
                                 <div class="qodef-section-content">
                                    <div class="container-fluid">
                                       <div class="row">
                                        <div class="col-lg-12">
                                          <p class="field switch">
                                            
                                            <label data-hide="" data-show="#qodef_transparent_content_container" class="<?php if(get_option('untheme_header_top') =="Yes") {?>
                                              cb-enable selected <?php } else { ?>cb-enable dependence <?php }?>"><span>Yes</span>

                                            </label>

                                            <label data-hide="#qodef_transparent_content_container" data-show="" class="<?php if(get_option('untheme_header_top') =="No") {?>
                                              cb-disable selected <?php } else { ?>cb-disable <?php }?>"><span>No</span>
                                            </label>

                                            <input type="radio" class="input_hidden" name="untheme_header_top" value="Yes" <?php if(get_option('untheme_header_top') =="Yes") {?>
                                              checked <?php } ?>> <br>  

                                            <input type="radio" class="input_hidden" name="untheme_header_top" value="No"  <?php if(get_option('untheme_header_top') =="No") {?>
                                              checked <?php } ?>> <br>  
                                           </p>
                                      </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- close div.qodef-section-content -->
                              </div>

                              <div class="qodef-page-form-section" id="qodef_parallax_onoff">
                                 <div class="qodef-field-desc">
                                    <h4>Hide On Scroll</h4>
                                    
                                 </div>
                                 <!-- close div.qodef-field-desc -->
                                 <div class="qodef-section-content">
                                    <div class="container-fluid">
                                       <div class="row">
                                        <div class="col-lg-12">
                                          <p class="field switch">
                                            
                                            <label data-hide="" data-show="#qodef_transparent_content_container" class="<?php if(get_option('untheme_header_top_hide_on_scroll') =="Yes") {?>
                                              cb-enable selected <?php } else { ?>cb-enable dependence <?php }?>"><span>Yes</span>

                                            </label>

                                            <label data-hide="#qodef_transparent_content_container" data-show="" class="<?php if(get_option('untheme_header_top_hide_on_scroll') =="No") {?>
                                              cb-disable selected <?php } else { ?>cb-disable <?php }?>"><span>No</span>
                                            </label>

                                            <input type="radio" class="input_hidden" name="untheme_header_top_hide_on_scroll" value="Yes" <?php if(get_option('untheme_header_top_hide_on_scroll') =="Yes") {?>
                                              checked <?php } ?>> <br>  

                                            <input type="radio" class="input_hidden" name="untheme_header_top_hide_on_scroll" value="No"  <?php if(get_option('untheme_header_top_hide_on_scroll') =="No") {?>
                                              checked <?php } ?>> <br>  
                                           </p>
                                      </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- close div.qodef-section-content -->
                              </div>


                              <div class="qodef-page-form-section" id="qodef_parallax_onoff">
                                 <div class="qodef-field-desc">
                                    <h4>Hide Top Bar On Mobile Header</h4>
                                    
                                 </div>
                                 <!-- close div.qodef-field-desc -->
                                 <div class="qodef-section-content">
                                    <div class="container-fluid">
                                       <div class="row">
                                        <div class="col-lg-12">
                                          <p class="field switch">
                                            
                                            <label data-hide="" data-show="#qodef_transparent_content_container" class="<?php if(get_option('untheme_header_top_hide_on_mobile') =="Yes") {?>
                                              cb-enable selected <?php } else { ?>cb-enable dependence <?php }?>"><span>Yes</span>

                                            </label>

                                            <label data-hide="#qodef_transparent_content_container" data-show="" class="<?php if(get_option('untheme_header_top_hide_on_mobile') =="No") {?>
                                              cb-disable selected <?php } else { ?>cb-disable <?php }?>"><span>No</span>
                                            </label>

                                            <input type="radio" class="input_hidden" name="untheme_header_top_hide_on_mobile" value="Yes" <?php if(get_option('untheme_header_top_hide_on_mobile') =="Yes") {?>
                                              checked <?php } ?>> <br>  

                                            <input type="radio" class="input_hidden" name="untheme_header_top_hide_on_mobile" value="No"  <?php if(get_option('untheme_header_top_hide_on_mobile') =="No") {?>
                                              checked <?php } ?>> <br>  
                                           </p>
                                      </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- close div.qodef-section-content -->
                              </div>

                              <div class="qodef-page-form-section">


                                  <div class="qodef-field-desc">
                                    <h4>Background Color</h4>

                                    
                                  </div>
                                  <!-- close div.qodef-field-desc -->

                                  <div class="qodef-section-content">
                                    <div class="container-fluid">
                                          <div class="row">
                                  
                                              <div class="col-lg-3" id="qodef_gradient_style1_start_color">
                                                
                                                  <input type="text"  name="untheme_header_top_background" value="<?php echo esc_attr( get_option('untheme_header_top_background') ); ?>" class="my-color-field" data-default-color="#effeff" size="50" />
                                                
                                              </div>
                                  
                                              
                                          </div>
                                      </div>
                                  </div>
                                  <!-- close div.qodef-section-content -->

                              </div>

                               <div class="qodef-page-form-section">


                                  <div class="qodef-field-desc">
                                    <h4>Padding(%)</h4>

                                    
                                  </div>
                                  <!-- close div.qodef-field-desc -->

                                  <div class="qodef-section-content">
                                    <div class="container-fluid">
                                          <div class="row">
                                  
                                              <div class="col-lg-6">
                                                
                                                  <input type="text"  name="untheme_header_top_padding" value="<?php echo esc_attr( get_option('untheme_header_top_padding') ); ?>"  />
                                                
                                              </div>
                                  
                                              
                                          </div>
                                      </div>
                                  </div>
                                  <!-- close div.qodef-section-content -->

                              </div>

                            
                          
                           </div>
                         
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
  
   
            

</section>

<?php }