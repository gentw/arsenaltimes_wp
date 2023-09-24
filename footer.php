<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arsenaltimes_new
 */

?>



<div class="background-footeri">
	<div class="kontenti">
	<div class="footer">
	
		<div class="f2">
		<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="footer_logo" src="/wp-content/uploads/2023/08/arsenaltimes-e1691021495719.jpg"></a></div>
		
		<p>Arsenal FC’s world at your fingertips, by the fans for the fans!<br>

For real-time news and updates </p>
	</div>
	
<div class="f1">
<h2>Contact</h2>
<p>E-Mail: info@arsenaltimes.net</p>
<div class="sociale-footer">
  <a href="https://www.facebook.com/ArsenalTimesNews/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/logo/facebook_footer.png"></a>
  <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/logo/instagram_footer.png"></a>
  <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/logo/twitter_footer.png"></a>
  <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/logo/youtube_footer.png"></a>
</div>
</div>

</div><!-- footer -->
</div><!-- kontenti -->
</div><!-- Footeri -->


<!-- Mini footeri -->
<div class="minifooter">
	<div class="kontenti">
	<p>ArsenalTimes, © <?php echo date('Y'); ?> All rights are reserved.</p>
	<div class="sociale">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">Privacy Policy</a>
	</div>
</div>
</div>
<!-- Mini footeri -->


<script type="text/javascript">
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

</script>

<script>

$(".toast-trigger").click(function(e){
  e.preventDefault();
  datatoast = $(this).attr("data-toast");
  if ( $( this ).hasClass( "toast-auto" ) && !$("#" + datatoast).is(":visible") ){ 
    $("#" + datatoast).fadeIn(400).delay(3000).fadeOut(400);
  }
  else if ( !$("#" + datatoast).is(":visible") ){
    $("#" + datatoast).fadeIn(400);
  };
});

$(".close-toast").click(function(e){
  e.preventDefault();
  closetoast = $(this).parent().attr("id");
  $("#" + closetoast).fadeOut(400);
});

</script>

<script>
// Tooltip

$('#copy').tooltip({
  trigger: 'click',
  placement: 'bottom'
});

function setTooltip(message) {
  $('#copy').tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
}

function hideTooltip() {
  setTimeout(function() {
    $('#copy').tooltip('hide');
  }, 1000);
}

var clipboard = new ClipboardJS('#copy');
</script>


<div class="toast-container toast-pos-right toast-pos-bottom">
  <!-- Mesazhi copy -->
  <div class="toast" id="toast-name-2">
    <b>Link copied now!</b></div>
</div>


<style type="text/css">
.toast-container {
  width: 50%;
  max-width: 300px;
  margin: 0 auto;
}

[class*="toast-pos-"] {
    position: fixed;
    width: 100%;
    left: 0;
    text-align: center;
}

.toast-pos-top {
  top: 0;
}

.toast-pos-right {
  right: 0;
}

.toast-pos-bottom {
  bottom: 0;
}

.toast-pos-left {
  left: 0;
}

.toast {
    display: none;
    padding: 20px;
    margin: 20px 0;
    background: #333;
    color: #333333;
    font-family: kategori;
    color: #fff;
    font-size: 18px;
    border-radius: 10px;
    border-left: 5px solid #ee3024;
    box-shadow: 1px 7px 14px -5px rgba(0, 0, 0, 0.15);
}

</style>


<?php wp_footer(); ?>

</body>
</html>
