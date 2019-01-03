/**
 * Feedier plugin Saving process
 */
jQuery( document ).ready( function () {


    jQuery( document ).on( 'submit', '#un-header-form', function ( e ) {

        e.preventDefault();

        var _nonce = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for(var i = 0; i < length; i++) {
            _nonce += possible.charAt(Math.floor(Math.random() * possible.length));
        }

        // We inject some extra fields required for the security
        jQuery(this).append('<input type="hidden" name="action" value="store_un_theme_header_option" />');
        jQuery(this).append('<input type="hidden" name="security" value="'+ _nonce +'" />');

        jQuery.ajax( {
            url: untheme_exchanger.ajax_url,
            type: 'post',
            data: jQuery(this).serialize(),
            success: function (response) {
                    
                    alert(response);  
            }
        } );


    });



    jQuery( document ).on( 'submit', '#un-admin-form', function ( e ) {

        e.preventDefault();

        var _nonce = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for(var i = 0; i < length; i++) {
            _nonce += possible.charAt(Math.floor(Math.random() * possible.length));
        }

        // We inject some extra fields required for the security
        jQuery(this).append('<input type="hidden" name="action" value="store_un_theme_option" />');
        jQuery(this).append('<input type="hidden" name="security" value="'+ _nonce +'" />');

        // We make our call
        jQuery.ajax( {
            url: untheme_exchanger.ajax_url,
            type: 'post',
            data: jQuery(this).serialize(),
            success: function (response) {

                if(response == "Bad")
                {

                }

                if(response == "Saved")
                {
                    
                }


                
            }
        } );

    } );

} );


jQuery(document).ready(function($) {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });



   


});


 jQuery(document).ready(function($) { 
            $("#states").select2({
                    placeholder: "Select a State",
                    allowClear: true
             }); 
        });