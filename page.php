<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Arsenal_times
 */

get_header();
?>

<style type="text/css">
.teksti p {  
    word-break: break-word;
    line-height: 27px;
    font-weight: normal;
    font-size: 19px;
    color: #000;
    font-family: 'nentitull';
    font-weight: normal;
}

</style>

<!-- Page Content -->
<div class="kontenti">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                 <?php the_post_thumbnail();?>
                 <titulli style="border:0px;"><?php the_title(); ?></titulli>
                 <div class="teksti" style="padding: 0;">
                 <?php the_content(); ?>
                 </div><!-- teksti -->
            <?php endwhile; endif; ?>
</div> <!-- kontenti -->

<?php
//get_sidebar();
get_footer();
