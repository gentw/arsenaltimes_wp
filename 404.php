<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Arsenal_times
 */

get_header();
?>
      <meta http-equiv = "refresh" content = "1; url = https://arsenaltimes.net" />


<!-- Nga Rubrika -->
<div class="kontenti">
<titulli style="text-align: center;">			
	<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'ERROR 404', 'frontonline' ));
					?></titulli>

<div class="errori"><img src="<?php echo get_template_directory_uri(); ?>/logo/error.png"></div>
</div><!-- kontenti -->

<style>
	@media screen and (max-width: 1024px) {
.errori img {
width: 100%;
}
}
</style>
<?php
get_footer();
