<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package softee
 */

?>

	</div><!-- #content -->
	<!-- START FOOTER AREA -->
	
	<?php 
		global $wphash_opt;
		$footer_layout = (isset( $wphash_opt['wphash_footer_layout'] ) && '1' == $wphash_opt['wphash_footer_layout']) ? 'footer-style-1' : 'footer-style-2' ;
	?>
	<footer id="footer" class="footer-area <?php echo esc_attr( $footer_layout ); ?>">
		<?php wphash_footer_area(); ?>
		<?php wphash_copyright_text(); ?>
	</footer>
</div><!-- #page -->
</div>

<?php wp_footer(); ?>

<script type="text/javascript">
	jQuery(document).ready(function(){
		jQuery(".user-authentication").click(function(event){
			var url = jQuery(this).attr('href'); 
			console.log(url);
		    jQuery.ajax({
			  type: "POST",
			  url: "https://www.agnisys.com/user_loggedin_checked.php",
			  data: 'test',
			  success: function(data){
			     if(data == 'yes'){
			     	return true;
			     }
			     else{

			     	window.location.replace("https://www.agnisys.com/my-account?url="+url);
			     }
			  }
			});
		});
		jQuery(document).on('click',".page.page-id-2862 .Idesignspec",function(){

			jQuery("a[href='#Idesignspec']").trigger('click');
			jQuery('html, body').animate({
		        scrollTop: jQuery("#Idesignspec").offset().top - 350
		    }, 2000);
		})
		jQuery(document).on('click',".page.page-id-2862 .Isequencespec",function(){
			jQuery("a[href='#Isequencespec']").trigger('click');
			
		    jQuery('html, body').animate({
		        scrollTop: jQuery("#Isequencespec").offset().top - 350
		    }, 2000);
		})
		jQuery(document).on('click',".page.page-id-2862 .arv",function(){
			jQuery("a[href='#arv']").trigger('click');
			jQuery('html, body').animate({
		        scrollTop: jQuery("#arv").offset().top - 350
		    }, 2000);
		})
		jQuery(document).on('click',".page.page-id-2862 .dvinsight",function(){
			
			jQuery("a[href='#dvinsight']").trigger('click');
			jQuery('html, body').animate({
		        scrollTop: jQuery("#dvinsight").offset().top - 350
		    }, 2000);
		});

		jQuery(document).on('click',".account-tab-mob.dropdown",function(){
			jQuery(".fly-right-sub").fadeIn(500);
		});

		jQuery('.change-password #gform_41').submit(function(e){
			e.preventDefault();
			var password = jQuery('#input_41_1').val();
			console.log(password);
			
			
		    jQuery.ajax({
			  type: "POST",
			  url: "https://www.agnisys.com/user_password.php",
			  data: {"ChangePass":password},
			  success: function(data){
			  	console.log(data);
			        if(data != ''){
					    // jQuery(this).submit();
					    jQuery(".change-password .vc_col-sm-9 .vc_column-inner").html(data);

					    setTimeout(function(){ 
					    	location.reload();
					    }, 3000);
					}
					else{

					}

			  }
			});
			
		})
	})
</script>
<script type="text/javascript">
    jQuery(document).ready(function(){

        jQuery("input[name='startQuiz']").click(function(e){
            e.preventDefault();
            var name = jQuery("#forms_1_0").val();
            var email = jQuery("#forms_1_1").val();
            var company = jQuery("#forms_1_2").val();
            // var company = jQuery("#forms_1_3").val();

            
            jQuery.ajax({
              type: "POST",
              url: "https://www.agnisys.com/quiz-check.php",
              data: {Email:email,Name:name},
              success: function(data){
                 console.log(data);
              }
            });
            jQuery(".cust-name").val(name);
            jQuery(".cust-email").val(email);
            // jQuery(".cust-company").val(company);
            jQuery(".cust-company").val(company);
        });

        
        jQuery(document).on('click','.get-result',function(){
            jQuery(this).addClass('leadershipboard');
            jQuery(this).text('leadershipboard');

        });
        jQuery(document).on('click',".leadershipboard",function(){
            
            jQuery.ajax({
              type: "POST",
              url: "https://www.agnisys.com/quiz-check.php",
              data: {SQL:'sql'},
              success: function(data){
                 // console.log(data);
                  obj = JSON.parse(data);
                  // alert(obj[0].name);
                 jQuery('.leadershipboard').html("<span class='text-capitalise'>" + obj[0].name + "</span><br>" + obj[0].email);
              }
            });
        });

        // jQuery(document).on('click','input[value="Get Score"]',function(){
        //     var cusname = jQuery(".cust-name").val();
        //     var cusemail = jQuery(".cust-email").val();
        //     // alert(cusname + cusemail);
        //    jQuery("input[name='wpProQuiz_toplistAdd']").trigger('click');
        // });

        jQuery(document).on('click','input[name="restartQuiz"]',function(){
            alert("Thankyou");
            jQuery("input[name='wpProQuiz_toplistAdd']").trigger('click');
            // var companyName = jQuery("#forms_1_3").val();
            var contactNum = jQuery("#forms_1_2").val();
            var Name = jQuery(".cust-name").val();
            var Email = jQuery(".cust-email").val();
            console.log(contactNum);
            // 
            jQuery.ajax({
              type: "POST",
              url: "https://www.agnisys.com/quiz-check.php",
              data: {Company:contactNum,EMail:Email,NAme:Name},
              success: function(data){
                 console.log(data);
                 // jQuery("input[name='wpProQuiz_toplistAdd']").trigger('click');
                   jQuery("#forms_1_0").val('');
                   jQuery("#forms_1_1").val('');
                   jQuery("#forms_1_2").val('');
                   // jQuery("#forms_1_3").val('');
              }
            });
            // location.reload();
        });
        jQuery(document).on('click','.not-present',function(){
            jQuery('.leadershipboard').trigger('click');
        });

        jQuery(document).on('click','.delete-database',function(){
            var deletes = '89';
            jQuery.ajax({
              type: "POST",
              url: "https://www.agnisys.com/quiz-check.php",
              data: {Delete:deletes},
              success: function(data){
                 console.log(data);
                 alert('You have successfully clear the database');
              }
            });
        })

            
        
    })
</script>
</body>
</html>
