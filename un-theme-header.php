<?php
function untheme_header() { ?>
			       
	<section class="cls-repair">
   
            <div class="bhoechie-tab-container">
               <div class="bhoechie-tab-menu un-row">
	                  <div class="list-group un-col-4">
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
             
		         <div class="content-area un-col-8">
		            <div class="right-side-credit bhoechie-tab">
		               <div class="bhoechie-tab-content active">

		                  <h2>Header Options</h2>

		                  

		                  <form id="un-header-form" class="postbox">

		                  	<label>font family</label>
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

		                  				<option value="<?php echo($item->family); ?>"><?php echo($item->family); ?> </option>
										
									<?php }?>
		                  			
		                  		</select>
		                  		

		                  		<div class="submit-btn">					

									 <button class="" id="feedier-admin-save" type="submit">
			                        <?php _e( 'Save', 'feedier' ); ?>
			                    </button>

		                  </form>
		                  
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