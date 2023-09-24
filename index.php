<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Arsenaltimes_new
 */

get_header();
?>

<?php 
$category = get_category(get_query_var('cat'));
 ?>

	
<!-- Kryesore fillon -->
<div class="kontenti ballines">

<div class="kryesoret-new">
<div class="vazhdoo">

			<?php 
            $excluded = array();
            $args= array(
                            'posts_per_page'=>1,
                            'meta_key' => 'lajmi_pare',
                                                'ep_integrate'          => true,
                                                'no_found_rows'         => true,
                                                'meta_query' => array(
                                                    array(
                                                        'key' => 'lajmi_pare',
                                                        'value' => '1',
                                                        'compare' => '=',
                                                    ),
                                                ),

                            );

            $i=0;
            $kryesoreLoop = new WP_Query( $args );
            while ($kryesoreLoop -> have_posts() ) : $kryesoreLoop->the_post(); $i++;
            array_push($excluded,$post->ID);
            $cat = get_the_category($post->ID)[0];
            $mbititulli = get_post_meta($post->ID, 'mbititull', true);
        ?>


<div class="lajmi-pare">
	<div class="lajmi-foto">
	<div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
		</div>
		<div class="lajmi-kontent">
			<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"> <?php if($mbititulli) :?><mbititull><?php echo $mbititulli ?>/ </mbititull><?php endif;?> <?php echo wp_trim_words( get_the_title(), 30, '...' );?></a></div>
			<?php if( $guest_name = get_post_meta ($post->ID, 'BS_guest_author_name', true)): ?>
			<div class="shkruan-single"><div class="foto"><?php echo get_avatar( get_the_author_meta( 'ID' ) , 40 ); ?></div><div class="emri"><shkruan><?php the_author(); ?></shkruan></div></div> 
		    <?php endif; ?>
            <div class="lajmiinfo"><?php echo wp_trim_words( get_the_content(), 16, '...' ); ?></div>
        </div>
</div>

<?php endwhile; wp_reset_query(); ?>



	<div class="reklama mobile">
<center>
   <!-- Composite Start -->
<div id="M720773ScriptRootC1501029"></div>
<script src="https://jsc.mgid.com/a/r/arsenaltimes.net.1501029.js" async></script>
<!-- Composite End -->
</center>
</div>
	
	


<div class="kontenti mobile">
<div class="aktuale-mobile perdyjat">
	  <?php 
            $args= array(
                            'posts_per_page'=>1,
                            'meta_key' => 'lajmi_dyte',
                                                'ep_integrate'          => true,
                                                'no_found_rows'         => true,
                                                'meta_query' => array(
                                                    array(
                                                        'key' => 'lajmi_dyte',
                                                        'value' => '1',
                                                        'compare' => '=',
                                                    ),
                                                ),

                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;
                        array_push($excluded,$post->ID);
                        $mbititulli = get_post_meta($post->ID, 'mbititull', true);
                        ?>
                        	<div class="dy">

                        <div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php if($mbititulli) :?><mbititull><?php echo $mbititulli ?>/ </mbititull><?php endif;?><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
	</div>
			<?php endwhile; wp_reset_query(); ?>

	  <?php 
            $args= array(
                            'posts_per_page'=>1,
                            'meta_key' => 'lajmi_dyte',
                                                'ep_integrate'          => true,
                                                'no_found_rows'         => true,
                                                'meta_query' => array(
                                                    array(
                                                        'key' => 'lajmi_gjasht',
                                                        'value' => '1',
                                                        'compare' => '=',
                                                    ),
                                                ),

                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;
                        array_push($excluded,$post->ID);
                        $mbititulli = get_post_meta($post->ID, 'mbititull', true);
                        $livelajmi = get_post_meta($post->ID, 'lajmi_live', true);
                        ?>


<div class="dy">
                        <div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php if($mbititulli) :?><mbititull><?php echo $mbititulli ?>/ </mbititull><?php endif;?>
				<?php if($livelajmi) :?><ikonalive></ikonalive><livelajmi><?php echo $livelajmi ?>/</livelajmi> <?php endif;?><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
	</div>

<?php endwhile; wp_reset_query(); ?>
</div>
</div>
<!-- Mobile lajmi dy/gjashte -->


<div class="lajmet-dy">

	  <?php 
            $args= array(
                            'posts_per_page'=>1,
                            'meta_key' => 'lajmi_dyte',
                                                'ep_integrate'          => true,
                                                'no_found_rows'         => true,
                                                'meta_query' => array(
                                                    array(
                                                        'key' => 'lajmi_dyte',
                                                        'value' => '1',
                                                        'compare' => '=',
                                                    ),
                                                ),

                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;
                        array_push($excluded,$post->ID);
                        $mbititulli = get_post_meta($post->ID, 'mbititull', true);
                        ?>
	<div class="lajmet2 desktop">
	<div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
						<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php if($mbititulli) :?><mbititull><?php echo $mbititulli ?>/ </mbititull><?php endif;?><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
</div>
<?php endwhile;?>

<div class="lajmet3">
		  <?php 
            $args= array(
                            'posts_per_page'=>1,
                            'meta_key' => 'lajmi_tre',
                                                'ep_integrate'          => true,
                                                'no_found_rows'         => true,
                                                'meta_query' => array(
                                                    array(
                                                        'key' => 'lajmi_tre',
                                                        'value' => '1',
                                                        'compare' => '=',
                                                    ),
                                                ),

                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;
                        array_push($excluded,$post->ID);
                        $mbititulli = get_post_meta($post->ID, 'mbititull', true);
                        ?>
	<div class="titulli"><a href="<?php the_permalink();?>"><?php if($mbititulli) :?><mbititull><?php echo $mbititulli ?>/ </mbititull><?php endif;?><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a>
<div class="cat-ora mobile"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
	</div>
<?php endwhile;?>

 <?php 
            $args= array(
                            'posts_per_page'=>1,
                            'meta_key' => 'lajmi_kater',
                                                'ep_integrate'          => true,
                                                'no_found_rows'         => true,
                                                'meta_query' => array(
                                                    array(
                                                        'key' => 'lajmi_kater',
                                                        'value' => '1',
                                                        'compare' => '=',
                                                    ),
                                                ),

                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;
                        array_push($excluded,$post->ID);
                        $mbititulli = get_post_meta($post->ID, 'mbititull', true);
                        ?>

	<div class="titulli"><a href="<?php the_permalink();?>"><?php if($mbititulli) :?><mbititull><?php echo $mbititulli ?>/ </mbititull><?php endif;?><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a>
<div class="cat-ora mobile"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
	</div>
<?php endwhile;?>

		  <?php 
            $args= array(
                            'posts_per_page'=>1,
                            'meta_key' => 'lajmi_pese',
                                                'ep_integrate'          => true,
                                                'no_found_rows'         => true,
                                                'meta_query' => array(
                                                    array(
                                                        'key' => 'lajmi_pese',
                                                        'value' => '1',
                                                        'compare' => '=',
                                                    ),
                                                ),

                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;
                        array_push($excluded,$post->ID);
                        $mbititulli = get_post_meta($post->ID, 'mbititull', true);
                        ?>

	<div class="titulli"><a href="<?php the_permalink();?>"><?php if($mbititulli) :?><mbititull><?php echo $mbititulli ?>/ </mbititull><?php endif;?><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a>
<div class="cat-ora mobile"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
	</div>

	<?php endwhile;?>
</div>
		  <?php 
            $args= array(
                            'posts_per_page'=>1,
                            'meta_key' => 'lajmi_gjasht',
                                                'ep_integrate'          => true,
                                                'no_found_rows'         => true,
                                                'meta_query' => array(
                                                    array(
                                                        'key' => 'lajmi_gjasht',
                                                        'value' => '1',
                                                        'compare' => '=',
                                                    ),
                                                ),

                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;
                        array_push($excluded,$post->ID);
                        $mbititulli = get_post_meta($post->ID, 'mbititull', true);
                        $livelajmi = get_post_meta($post->ID, 'lajmi_live', true);
                        ?>

<div class="lajmet4 desktop">
	<div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
			<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php if($mbititulli) :?><mbititull><?php echo $mbititulli ?>/ </mbititull><?php endif;?>
				<?php if($livelajmi) :?><ikonalive></ikonalive><livelajmi><?php echo $livelajmi ?>/</livelajmi> <?php endif;?><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
</div>

	<?php endwhile;?>
</div>
</div><!-- vazhdoo -->


<div class="reklama desktop">

	<center>
        <!-- Composite Start -->
        <div id="M720773ScriptRootC1500969"></div>
        <script src="https://jsc.mgid.com/a/r/arsenaltimes.net.1500969.js" async></script>
        <!-- Composite End -->
    </center>
</div>
</div>


</div><!-- kontenti -->
<!--- Kryesore mbaron -->


<div class="reklama-header desktop">
	<!-- <center></center> -->
</div><!-- reklama -->


<!-- Lajme -->
<div class="kontenti">
<div class="ndaj desktop">
<div class="per-aktuale">	
<titulli>Mix News</titulli>

<div class="aktualitet">
	<div class="aktualitet1">

                        
                           <?php
                            $args= array(
                            'posts_per_page'=>1,
                            'post__not_in'=> $excluded,
                            'cat'=>array(21,29,24),
                            );
                            $i=0;
                            $funLoops = new WP_Query( $args );
                            while ($funLoops -> have_posts() ) : $funLoops->the_post(); $i++;
	                        //array_push($excluded,$post->ID);
                            $cat = get_the_category($post->ID)[0];
                            ?>

            <div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
			<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
<?php endwhile; wp_reset_query(); ?>
	</div>
	
	

	<div class="aktualitet2">
					  <?php 

                        $args= array(
                            'posts_per_page'=>3,
							'offset'=>1,
                            'post__not_in'=> $excluded,
                            'cat'=>array(21,23)
                            );
                            $i=0;
                        $politikeLoops = new WP_Query( $args );
                        while ($politikeLoops -> have_posts() ) : $politikeLoops->the_post(); $i++;

                        ?>

                        <div class="aktualitet-vazhdon">

                        <div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>

			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a>
			<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div></div>

</div><!-- aktualitet vazhdon -->

                                <?php endwhile; wp_reset_query(); ?>

                                

	</div>

    <div class="aktualitet2">
					  <?php 

                        $args= array(
                            'posts_per_page'=>3,
							'offset'=>1,
                            'post__not_in'=> $excluded,
                            'cat'=>array(29)
                            );
                            $i=0;
                        $politikeLoops = new WP_Query( $args );
                        while ($politikeLoops -> have_posts() ) : $politikeLoops->the_post(); $i++;

                        ?>

                        <div class="aktualitet-vazhdon">

                        <div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>

			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a>
			<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div></div>

</div><!-- aktualitet vazhdon -->

                                <?php endwhile; wp_reset_query(); ?>

                                

	</div>
</div>
</div><!-- per aktuale -->

<!-- <div class="per-opinione">
<titulli>Opinione</titulli>
<div class="opinione">
						  <?php 

                        // $args= array(
                        //     'posts_per_page'=>3,
                        //     'post__not_in'=> $excluded,
                        //     'cat'=>array(70)
                        //     );
                        //     $i=0;
                        // $politikeLoop = new WP_Query( $args );
                        // while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;

                        ?>

			<div class="titulli"><a href="<?php //the_permalink();?>"><?php// echo wp_trim_words( get_the_title(), 33, '...' );?></a>
			<?php //if( get_post_meta( $post->ID, 'BS_guest_author_image_id', true )): ?>
<div class="shkruan-single">
    <div class="foto"><?php //echo get_avatar( get_the_author_meta( 'ID' ) , 40 ); ?></div>
    <div class="emri"><shkruan> - <?php //the_author(); ?></shkruan></div>
</div> 
<?php //endif; ?></div>

                                <?php //endwhile; wp_reset_query(); ?>
</div>
</div> -->
</div><!-- ndaj -->


<div class="reklama mobile">
<!-- Revive Adserver Javascript Tag - Generated with Revive Adserver v5.3.1 -->
<center></center>
</div>


<div class="mobile">
<titulli>Mix News</titulli>

<div class="aktuale-mobile">
                           <?php
                            $args= array(
                            'posts_per_page'=>1,
                            'post__not_in'=> $excluded,
                            'cat'=>array(21,29,24),
                            );
                            $i=0;
                            $funLoops = new WP_Query( $args );
                            while ($funLoops -> have_posts() ) : $funLoops->the_post(); $i++;
                            $cat = get_the_category($post->ID)[0];
                            ?>
                        	<div class="dy">

                        <div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
	</div>
	
	<?php endwhile; wp_reset_query(); ?>

			
							  <?php 

                        $args= array(
                            'posts_per_page'=>3,
                            'post__not_in'=> $excluded,
							'offset'=>1,
                            'cat'=>array(2,21,140,22,317,23),
                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;

                        ?>
                        	<div class="dy">

                        <div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
	</div>
			<?php endwhile; wp_reset_query(); ?>

</div>

<div class="reklama mobile">
    <!-- Revive Adserver Javascript Tag - Generated with Revive Adserver v5.3.1 -->
<!-- <center></center> -->
</div>

<div class="per-opinione">
<titulli>Opinione</titulli>
<div class="opinione">
						  <?php 

                        $args= array(
                            'posts_per_page'=>3,
                            'post__not_in'=> $excluded,
                            'cat'=>array(7,70)
                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;

                        ?>

			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a>
			<?php if( get_post_meta( $post->ID, 'BS_guest_author_image_id', true )): ?>
<div class="shkruan-single">
    <div class="foto"><?php echo get_avatar( get_the_author_meta( 'ID' ) , 40 ); ?></div>
    <div class="emri"><shkruan> - <?php the_author(); ?></shkruan></div>
</div> 
<?php endif; ?></div>

                                <?php endwhile; wp_reset_query(); ?>
</div><!-- Opinione -->
</div><!-- per opinione -->

</div><!-- aktuale mobile -->


<div class="lajme pertitujt">

	  <?php 

                        $args= array(
                            'posts_per_page'=>4,
                            'post__not_in'=> $excluded,
                            'offset'=>4,
                            'cat'=>array(21,29,24)
                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;

                        ?>
<div class="lajmet tt">
        	<div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
			<div class="per-tt">
			<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
			</div> <!-- pertt -->

        </div><!-- lajmet -->
<?php endwhile; wp_reset_query(); ?>

</div><!-- lajme -->



<div class="reklama mobile" style="margin-bottom: 20px;">
    <!-- <center></center> -->
</div>
	
<div class="lajme ex">

	  <?php 

                        $args= array(
                            'posts_per_page'=>1,
                            'post__not_in'=> $excluded,
                            'cat'=>array(11,1750)
                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;

                        ?>
	<div class="extra-lajmi">
        	<div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			<div class="ngjyr"></div>
			</a>

			</div>
			<div class="dyjat">
			<titulli>Intervista</titulli>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>

		</div><!-- dyjat -->
		
	</div>

	<?php endwhile; wp_reset_query(); ?>

	  <?php 

                        $args= array(
                            'posts_per_page'=>2,
                            'post__not_in'=> $excluded,
                            'offset'=>8,
                            'cat'=>array(2,21,140,22,317,23)
                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;

                        ?>
<div class="lajmet desktop">
        	<div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
			<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
			<div class="lajmiinfo"><?php echo wp_trim_words( get_the_content(), 16, '...' ); ?></div>
        </div><!-- lajmet -->
<?php endwhile; wp_reset_query(); ?>

</div><!-- Vazhdon Aktuale -->



</div><!-- kontenti -->

<!-- Aktualitet Mbaron -->



<div class="baneri-header desktop">
<div class="kontenti">
<!-- <center></center> -->
</div>
</div>



<div class="reklama mobile">
    <!-- <center></center> -->
</div>

<!-- Ek -->
<div class="ngjyra-new">
<div class="kontenti">
<titulli>History</titulli>

<div class="mobile">
<div class="aktuale-mobile">

							  <?php 

                        $args= array(
                            'posts_per_page'=>4,
                            'post__not_in'=> $excluded,
                            'cat'=>array(29) //24
                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;

                        ?>
                        	<div class="dy">

                        <div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>

			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
	</div>
			<?php endwhile; wp_reset_query(); ?>

</div>
</div> <!-- mobile sport -->

<div class="desktop">
<div class="lajme zmadhoje">
	  <?php 

                        $args= array(
                            'posts_per_page'=>6,
                            'post__not_in'=> $excluded,
                            'cat'=>array(4,24) //24
                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;

                        ?>
<div class="lajmet">
        	<div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
			<div class="cat-ora"></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a>
			</div>
        </div><!-- lajmet -->
<?php endwhile; wp_reset_query(); ?>
</div><!-- lajme -->
</div> <!-- desktop Mobile -->
</div><!-- kontenti -->
</div><!-- ngjyra new -->
<!-- EK -->

<div class="reklama mobile">
    <!-- <center></center> -->
</div>

<div class="reklama desktop">
    <!-- <center></center> -->
</div>


<!-- Showtime -->
<div class="kontenti">
<titulli>Biography</titulli>

<div class="lajme pertitujt">

	  <?php 

                        $args= array(
                            'posts_per_page'=>8,
                            'post__not_in'=> $excluded,
                            //'cat'=>5,
                            'cat'=>array(24)
                            );
                            $i=0;
                        $politikeLoop = new WP_Query( $args );
                        while ($politikeLoop -> have_posts() ) : $politikeLoop->the_post(); $i++;

                        ?>
<div class="lajmet tt showw">
        	<div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
<div class="cat-ora"></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 33, '...' );?></a></div>
        </div><!-- lajmet -->
<?php endwhile; wp_reset_query(); ?>

</div><!-- lajme -->
</div><!-- kontenti -->
<!-- Sport Mbaron -->


<div class="reklama desktop">
    <!-- <center></center> -->
</div>



<div class="reklama mobile">
    <!-- <center></center> -->
</div>





<div class="reklama mobile">
    <!-- <center>
	</center> -->
</div>




<div class="kontenti">
    <div class="reklama desktop">
        <!-- <center></center> -->
    </div>
</div>


<?php
//get_sidebar();
get_footer();
