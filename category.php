<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Arsenal_times
 */

get_header(); ?>

<?php 
$category = get_category(get_query_var('cat'));
 ?>
<style>

@media screen and (max-width: 1024px) {
.nkategori {
    width: 100%;
    padding: 0 !important;
    border: 0;
}

.nkategori titulli {
    text-align: center;
    margin: 10px 0;
    padding-top: 0;
}
}
</style>

<!-- Kryesore fillon -->
<div class="kontenti nkategori">
    
    <div class="reklama desktop">
        <!-- <center></center> -->
    </div>
    
    <titulli style="border-bottom: 0;"><?php $current_category = single_cat_title("", true); ?></titulli>
    <div class="kryesoret">
<?php
$current_cat = get_the_category();
$cat_ID = $current_cat[0]->cat_ID;
$loop = new WP_Query(array('posts_per_page'=>1,));if ( $loop->have_posts() ) : the_post();
?>
        <div class="lajmi3">
            <div class="foto">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('full'); ?>
            </a>
            </div>
            <div class="cat-ora"><cat><?php $current_category = single_cat_title("", true); ?></cat></div>
            <div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
            <div class="lajmiinfo"><?php echo wp_trim_words( get_the_content(), 22, '...' ); ?></div>
            <div class="cat-ora"><ora><?php echo get_the_time('G:i | d F Y');?></ora></div>
<?php endif; ?>
        </div>

    </div><!-- kryesoret -->
</div><!-- kontenti -->
<!--- Kryesore mbaron -->




<!-- Nga rubrika -->
<div class="hiqe-kontent1">
<div class="kontenti">
    
    <div class="reklama mobile" style="margin-bottom: 25px;">
<!-- <center></center> -->
</div>

<div class="lajme pertitujt">

<?php
while (have_posts()) : the_post();
?>
        <div class="lajmet sh tt">
            <div class="foto" style="position: relative;">
            <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('full'); ?>
            </a>
				<div class="ora-category" style="position: absolute; bottom: 4px; right: 0; background: #ee3024; padding: 5px 10px; color: #fff; font-size: 13px; }"><?php echo get_the_time('G:i');?></div>
            </div>
            <div class="titulli">
                            <div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
        </div><!-- lajmet -->
<?php endwhile;?>

</div><!-- lajme -->

<div class="page-nav td-pb-padding-side">
 <?php echo paginate_links(); ?>
</div>


</div><!-- kontenti -->
</div><!-- Hiqe kontent -->
<!-- Nga rubrika Mbaron -->


<?php 
get_footer();
