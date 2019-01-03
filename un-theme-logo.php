<?php






function untheme_logo() {?>
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
               <li class="un_active">
                  <a href="<?php echo home_url('wp-admin/admin.php?page=untheme_logo');?>">
                  <i class="fa fa-fa fa-coffee qodef-tooltip qodef-inline-tooltip left" data-placement="top" data-toggle="tooltip" title="" data-original-title="Logo"></i>
                  <span>Logo</span>
                  </a>
               </li>
               <li>
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
                     
                     <form id="un-header-form" class="postbox">
                        <div class="qodef-page-form" style="padding-bottom: 53px;">
                           




            <div class="qodef-page-form-section-holder" id="qodef_parallax_settings_panel">
                              		<h3 class="qodef-page-section-title">Logo</h3>

                              		


		


		<div class="qodef-page-form-section" id="qodef_elements_animation_on_touch">


			<div class="qodef-field-desc">
				<h4>Logo Normal</h4>

				
			</div>
			<!-- close div.qodef-field-desc -->



			<div class="qodef-section-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-12">
							<?php
							 $options = get_option( 'untheme_logo_normal' );


               

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


    if($options !="")
    {
      $src = wp_get_attachment_url( $options );  
      $value = $options;
    }


    $text = __( 'Upload', RSSFI_TEXT );

    // Print HTML field
    echo '
        <div class="upload">
            <img data-src="' . $default_image . '" src="' . $src . '" width="20%" height="20%" />
            <div>
                <input type="hidden" name="untheme_logo_normal" id="untheme_logo_normal[' . $name . ']" value="' . $value . '" />
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




      <div class="qodef-page-form-section" id="qodef_elements_animation_on_touch">


      <div class="qodef-field-desc">
        <h4>Logo Image-Sticy Header</h4>

       
      </div>
      <!-- close div.qodef-field-desc -->



      <div class="qodef-section-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <?php
              $options = get_option( 'untheme_logo_sticky' );


               

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


    if($options !="")
    {
      $src = wp_get_attachment_url( $options );  

      $value = $options;
    }


    $text = __( 'Upload', RSSFI_TEXT );

    // Print HTML field
    echo '
        <div class="upload">
            <img data-src="' . $default_image . '" src="' . $src . '" width="20%" height="20%" />
            <div>
                <input type="hidden" name="untheme_logo_sticky" id="untheme_logo_sticky[' . $name . ']" value="' . $value . '" />
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



    <div class="qodef-page-form-section" id="qodef_elements_animation_on_touch">


      <div class="qodef-field-desc">
        <h4>Logo Image-Fixed Header</h4>

       
      </div>
      <!-- close div.qodef-field-desc -->



      <div class="qodef-section-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <?php
              $options = get_option( 'untheme_logo_fixed' );


               

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


    if($options !="")
    {
      $src = wp_get_attachment_url( $options );  

      $value = $options;
    }


    $text = __( 'Upload', RSSFI_TEXT );

    // Print HTML field
    echo '
        <div class="upload">
            <img data-src="' . $default_image . '" src="' . $src . '" width="20%" height="20%" />
            <div>
                <input type="hidden" name="untheme_logo_fixed" id="untheme_logo_fixed[' . $name . ']" value="' . $value . '" />
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

		
     <div class="qodef-page-form-section" id="qodef_elements_animation_on_touch">


      <div class="qodef-field-desc">
        <h4>Logo Image-Mobile Header</h4>

       
      </div>
      <!-- close div.qodef-field-desc -->



      <div class="qodef-section-content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <?php
              $options = get_option( 'untheme_logo_mobile' );


               

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


    if($options !="")
    {
      $src = wp_get_attachment_url( $options );  

      $value = $options;
    }


    $text = __( 'Upload', RSSFI_TEXT );

    // Print HTML field
    echo '
        <div class="upload">
            <img data-src="' . $default_image . '" src="' . $src . '" width="20%" height="20%" />
            <div>
                <input type="hidden" name="untheme_logo_mobile" id="untheme_logo_mobile[' . $name . ']" value="' . $value . '" />
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