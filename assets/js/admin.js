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

    jQuery('#qode_top_save_button').click(function(){

         jQuery("#un-header-form").submit();
    });

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


  jQuery(document).ready(function($) { 







    $('.upload_image_button').click(function() {
    var send_attachment_bkp = wp.media.editor.send.attachment;
    var button = $(this);
    wp.media.editor.send.attachment = function(props, attachment) {
        $(button).parent().prev().attr('src', attachment.url);
        $(button).prev().val(attachment.id);
        wp.media.editor.send.attachment = send_attachment_bkp;

        //alert(send_attachment_bkp);
    }
    wp.media.editor.open(button);
    return false;
});

// The "Remove" button (remove the value from input type='hidden')
$('.remove_image_button').click(function() {
    var answer = confirm('Are you sure?');
    if (answer == true) {
        var src = $(this).parent().prev().attr('data-src');
        $(this).parent().prev().attr('src', src);
        $(this).prev().prev().val('');
    }
    return false;
});




        jQuery('.switch label').click(function(){

            var label_text = $(this).find('span').text();

            $(this).removeClass();

            

            if(label_text == "Yes")
            {

                $(this).addClass('cb-enable selected');

                $(this).parent().find('input').each(function(){

                    

                    if(label_text == $(this).val())
                    {
                        $(this).prop('checked', true);
                    }

                });

                $(this).next("label").removeClass();
                $(this).next("label").addClass('cb-disable');
            }

            else
            {
                //alert(label_text);

                $(this).addClass('cb-disable selected');

                $(this).parent().find('input').each(function(){

                    

                    if(label_text == $(this).val())
                    {
                        $(this).prop('checked', true);
                    }

                });

               
                $(this).prev("label").removeClass();
                $(this).prev("label").addClass('cb-disable');
            }

        });
   
 });   