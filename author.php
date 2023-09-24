<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Arsenal_times
 */

get_header();
?>

<!-- Nga Rubrika -->
<div class="hiqe-kontent1">
<div class="kontenti">
<titulli><?php the_author(); ?></titulli>
<div class="lajme">

<?php while ( have_posts() ) : the_post();?>
	    <div class="lajmet sh">
        	<div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
			<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 20, '...' );?></a></div>
			<div class="cat-ora"><ora><?php echo get_the_time('d F Y');?></ora></div>
        </div><!-- lajmet -->
<?php endwhile; ?> 
</div><!-- lajme -->
<div class="page-nav td-pb-padding-side">
 <?php echo paginate_links(); ?>
</div>
</div><!-- kontenti -->
</div><!-- hiqe kontent -->
<!-- Nga rubrika Mbaron -->

<?php
//get_sidebar();
get_footer();