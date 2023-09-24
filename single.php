<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Arsenaltimes_new
 */

get_header();
//$created_date = human_time_diff_shqip( get_the_time('U'), current_time('timestamp') ) .' '. '  më parë';
?>

<?php 
$id = get_the_ID();
$post_cat = get_the_category($id);


?>

<style type="text/css">

.autori_foto .avatar {
    margin-right: 10px;
    float: left;
}
.autori_foto img {
    border-radius: 3px;
}

.lajmi-lexo2 .teksti p iframe.wp-embedded-content {
    height: 100px;
    border-top: 1px solid #d7d7d7;
    border-bottom: 1px solid #d7d7d7;
    padding: 10px 0;
}

.tooltip {
  position: relative;
  display: inline-block;
  background: #000;
  color: #fff;
  font-size: 13px;
  padding: 5px 10px;
  border-radius: 3px;
}

#copy {
    cursor: pointer;
}


.lexuarat {
    display: flex;
    height: 80px;
    border-bottom: 1px solid #cbcbcb;
    padding-bottom: 15px;
    margin-bottom: 15px;
}

.lexuarat .titulli {
    font-size: 16px !important;
    line-height: 20px !important;
    margin: 0 !important;
    margin-top: 5px !important;
    font-weight: 500 !important;
    width: 80%;
}

.lexuarat .foto {
    width: 150px;
    height: 80px;
    padding-left: 10px;
}

.lexuarat .ora {
    font-size: 13px;
    color: #7a7a7a;
    line-height: 1;
    margin-top: 6px;
    font-family: nentitull;
}

.lexuarat .foto img {
    width: 100%;
    height: 80px;
    object-fit: cover;
}

.lexuarat:last-child {
    border: 0;
}

@media screen and (max-width: 1024px) {
    .lajmi-lexo2 .teksti p iframe.wp-embedded-content {
    height: 92px;
}
}

</style>

<div class="reklama mobile" style="margin-top: 20px;">
    <!-- <center></center> -->
    <!-- hekur 2 -->
</div>

<div class="kontenti art">
<div class="lajme-titulli">
<?php 
$mbititulli = get_post_meta($post->ID, 'mbititull', true);
$livelajmi = get_post_meta($post->ID, 'lajmi_live', true);
$category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;
?> 
<?php if($mbititulli) :?> / <?php echo $mbititulli ?> <?php endif;?> 
<?php if($livelajmi) :?> / <ikonalive style="width: 12px;height: 12px;margin-right: 3px;"></ikonalive>
<livelajmi><?php echo $livelajmi ?></livelajmi> <?php endif;?>
</div><!-- lajme Mini Titulli -->


<h3><?php the_title(); ?></h3>
<div class="lajmi-lexo">
    <div class="lajmi-info desktop fixkerko">
    <div class="sociale">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,left=660,top=190,width=600,height=600'); return false;" target="_blank"><rrjetet><img src="<?php echo get_template_directory_uri(); ?>/logo/face.svg"></rrjetet></a>
        <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&via=arsenaltimes&url=<?php the_permalink();?>" target="_blank"><rrjetet><img src="<?php echo get_template_directory_uri(); ?>/logo/tw.svg"></rrjetet></a>
        <a id="copy" class="toast-trigger toast-auto" data-toast="toast-name-2" data-clipboard-text="<?php the_permalink();?>"><rrjetet><img src="<?php echo get_template_directory_uri(); ?>/logo/clink.svg"></rrjetet></a>
    </div><!-- Sociale -->
</div><!-- Lajmiinfo/Fixkerko -->

<!-- Artikull -->
<div class="lajmi-lexo2">
<div class="gazetari-sociale">
	<div class="gazetari">
            <?php if( $guest_name = get_post_meta ($post->ID, 'BS_guest_author_name', true)): ?>
    <div class="shkruan-single">
    <div class="foto"><?php echo get_avatar( get_the_author_meta( 'ID' ) , 40 ); ?></div>
    <div class="emri"><shkruan><nga>Autor:</nga><?php the_author(); ?></shkruan>
    <div class="ora"><?php echo get_the_time('d F Y | G:i');?></div></div>
</div> 

<?php else : ?>
<div class="shkruan-single">
    <div class="foto"><img src="<?php echo get_template_directory_uri(); ?>/logo/avatari.png"></div>
    <div class="emri"><shkruan>ArsenalTimes</shkruan>
    <div class="ora"><?php echo get_the_time('d F Y | G:i');?></div></div>
</div>
<?php endif; ?>
	</div><!-- Gazetari -->
        <div class="sociale mobile">
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,left=660,top=190,width=600,height=600'); return false;" target="_blank"><rrjetet><img src="<?php echo get_template_directory_uri(); ?>/logo/face.svg"></rrjetet></a>
        <a href="https://twitter.com/intent/tweet?text=<?php the_permalink();?>" target="_blank"><rrjetet><img src="<?php echo get_template_directory_uri(); ?>/logo/tw.svg"></rrjetet></a>
        <a id="copy" class="toast-trigger toast-auto" data-toast="toast-name-2" data-clipboard-text="<?php the_permalink();?>"><rrjetet><img src="<?php echo get_template_directory_uri(); ?>/logo/clink.svg"></rrjetet></a>
    </div>
</div><!-- Gazetari Sociale -->


<div class="foto-lajmi" style="position: relative;">
<?php the_post_thumbnail('full'); ?>
</div><!-- Foto Lajmi -->

<div class="teksti">
<?php
$paragraphAfter= 3; //display after the first paragraph
$content = apply_filters('the_content', get_the_content());
$closing_p = '</p>';
$content = explode($closing_p, $content);
for ($i = 0; $i <count($content); $i++ ) {
if ($i == $paragraphAfter) {  ?>

<div class="nmes">
    <div class="reklama-nmes">
        <!-- <script></script> -->
        <!-- Composite Start -->
<div id="M720773ScriptRootC1501028"></div>
<script src="https://jsc.mgid.com/a/r/arsenaltimes.net.1501028.js" async></script>
<!-- Composite End -->
    </div>
    <div class="lajme-nmes desktop">
        <div class="titull">Read also:</div>
        <?php 
$args= array(
'category__in' => wp_get_post_categories( get_queried_object_id() ),
'posts_per_page'=>3,
'post__not_in' => array( get_queried_object_id() )
);
 //$i=0;
$otherLoop = new WP_Query( $args );
while ($otherLoop -> have_posts() ) : $otherLoop->the_post();
?>
        <div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 20, '...' );?></a></div>
    <?php endwhile; wp_reset_query();  ?>
    </div>
</div><!-- nmes -->

<?php }
echo $content[$i] . "</p>";
} ?>


<!-- Lajmi ne zhvillim -->
<?php
$featured_posts = get_field('lajme');
if( $featured_posts ): ?>
<div class="lajmi-zhvillim-emri">News in progress</div>
    <?php foreach( $featured_posts as $post ): 
        setup_postdata($post); ?>
<div class="lajmi-zhvillim">

            <div class="titulli"><?php the_title(); ?></div>
            <div class="ora"><?php echo get_the_date( 'j F, Y - G:i' ); ?></div>

<?php the_content();
?>

<!-- share poshte -->
<div class="sociale sc">
    Shpërndaje:
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,left=660,top=190,width=600,height=600'); return false;" target="_blank"><rrjetet><img src="<?php echo get_template_directory_uri(); ?>/logo/face.svg"></rrjetet></a>
        <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&via=arsenaltimes&url=<?php the_permalink();?>" target="_blank"><rrjetet><img src="<?php echo get_template_directory_uri(); ?>/logo/tw.svg"></rrjetet></a>
        <a id="copy" class="toast-trigger toast-auto" data-toast="toast-name-2" data-clipboard-text="<?php the_permalink();?>"><rrjetet><img src="<?php echo get_template_directory_uri(); ?>/logo/clink.svg"></rrjetet></a>
    </div>
    
</div><!-- lajmi zhvillim -->

<div class="reklama mobile" style="width: 300px;margin-bottom: 30px !important;margin: auto;">
<!-- <center></center> -->
<!-- Composite Start -->
<div id="M720773ScriptRootC1501028"></div>
<script src="https://jsc.mgid.com/a/r/arsenaltimes.net.1501028.js" async></script>
<!-- Composite End -->

</div>

<div class="reklama desktop" style="margin-bottom: 30px;">
    <!-- <center></center> -->
    <!-- Composite Start -->
<div id="M720773ScriptRootC1501028"></div>
<script src="https://jsc.mgid.com/a/r/arsenaltimes.net.1501028.js" async></script>
<!-- Composite End -->
</div>
    <?php endforeach; ?>

    <?php 
    wp_reset_postdata(); ?>
<?php endif; ?>

<!-- Lajmi ne zhvillim mbaron -->


<?php if( has_tag() ) : ?>
<div class="etiketimet"><?php the_tags( ' ','' ); ?></div>
<?php endif; ?>

<!-- share poshte -->
<div class="sociale sc mobile">
    Shpërndaje:
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" onclick="window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,left=660,top=190,width=600,height=600'); return false;" target="_blank"><rrjetet><img src="<?php echo get_template_directory_uri(); ?>/logo/face.svg"></rrjetet></a>
        <a href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&via=arsenaltimes&url=<?php the_permalink();?>" target="_blank"><rrjetet><img src="<?php echo get_template_directory_uri(); ?>/logo/tw.svg"></rrjetet></a>
        <a id="copy" class="share-button"><rrjetet><img src="<?php echo get_template_directory_uri(); ?>/logo/ndaje.svg"></rrjetet></a>
    </div>
</div>
</div><!-- lajmi lexo2 -->

<!-- Nga Rubrika -->
<div class="hiqe-kontent">
<div class="kontenti mobile">
	
	<!-- mgid -->
    <!-- Composite Start -->
<div id="M720773ScriptRootC1501028"></div>
<script src="https://jsc.mgid.com/a/r/arsenaltimes.net.1501028.js" async></script>
<!-- Composite End -->

<div class="reklama desktop" style="margin-bottom: 20px;">
<!-- <center>
</center> -->

</div>
	
	
		<!-- mgid -->
<div class="reklama mobile">
    <!-- <center></center> -->
    <!-- Composite Start -->
<div id="M720773ScriptRootC1501028"></div>
<script src="https://jsc.mgid.com/a/r/arsenaltimes.net.1501028.js" async></script>
<!-- Composite End -->
</div>
	
	
<titulli>Similar News</titulli>
<div class="lajme">
<?php 
$args= array(
'category__in' => wp_get_post_categories( get_queried_object_id() ),
'posts_per_page'=>8,
'post__not_in' => array( get_queried_object_id() )
);
 $i=0;
$otherLoop = new WP_Query( $args );
while ($otherLoop -> have_posts() ) : $otherLoop->the_post();$i++;
?>

<div class="lajmet">
        	<div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
			<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 36, '...' );?></a></div>
        </div><!-- lajmet -->
<?php endwhile; wp_reset_query(); ?>

</div><!-- lajme -->
</div><!-- kontenti -->
</div><!-- hiqe kontent -->
<!-- Nga Rubrika -->

<div class="anash-lajmi">
    

<center>
<div class="reklama desktop">
    <!-- <center></center> -->
    <!-- Composite Start -->
<div id="M720773ScriptRootC1500969"></div>
<script src="https://jsc.mgid.com/a/r/arsenaltimes.net.1500969.js" async></script>
<!-- Composite End -->
</div>
<div class="reklama mobile">
   <!-- <script></script> -->
 <!-- Composite Start -->
<div id="M720773ScriptRootC1500969"></div>
<script src="https://jsc.mgid.com/a/r/arsenaltimes.net.1500969.js" async></script>
<!-- Composite End -->
</div>
</center>

	<div class="spotlight">
        	<div class="titulli-spotilight">Latest News</div>
<?php
                            $args= array(
                            'posts_per_page'=>5,
                            'cat'=>array(-13,-14),
                            'post__not_in' => array( get_queried_object_id() )
                            );
                            $i=0;
                            $funLoop = new WP_Query( $args );
                            while ($funLoop -> have_posts() ) : $funLoop->the_post(); $i++;
                            $cat = get_the_category($post->ID)[0];
                        ?> 
        	<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 36, '...' );?></a>
        	<div class="ora"><?php echo get_the_time('d F Y');?></div>
        	</div>
<?php endwhile; ?>
        </div>
 
 <div class="reklama mobile">
    <!-- <center></center> -->
    <!-- hekur-->
 </div>       

</div>
</div><!-- lajmi lexo -->
	
	
	<!-- mgid -->
<div class="reklama desktop">
    <!-- <center>

</center> -->
</div>
	
	
</div><!-- kontenti -->


<!-- Nga Rubrika -->
<div class="kontenti desktop">
<titulli>Similar News</titulli>
<div class="lajme">
<?php 
$args= array(
'category__in' => wp_get_post_categories( get_queried_object_id() ),
'posts_per_page'=>8,
'post__not_in' => array( get_queried_object_id() )
);
 $i=0;
$otherLoop = new WP_Query( $args );
while ($otherLoop -> have_posts() ) : $otherLoop->the_post();$i++;
?>

<div class="lajmet sh">
        	<div class="foto">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('full'); ?>
			</a>
			</div>
			<div class="cat-ora"><cat><?php $category = get_the_category();$firstCategory = $category[0]->cat_name; echo $firstCategory;?></cat></div>
			<div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 36, '...' );?></a></div>
        </div><!-- lajmet -->
<?php endwhile; wp_reset_query(); ?>

</div><!-- lajme -->
</div><!-- kontenti -->
<!-- Nga Rubrika -->



<script>
    const shareButton = document.querySelector('.share-button');
const shareDialog = document.querySelector('.share-dialog');
const closeButton = document.querySelector('.close-button');

shareButton.addEventListener('click', event => {
  if (navigator.share) { 
   navigator.share({
      title: '<?php the_title(); ?>',
      url: '<?php the_permalink();?>'
    }).then(() => {
      console.log('Thanks for sharing!');
    })
    .catch(console.error);
    } else {
        shareDialog.classList.add('is-open');
    }
});

closeButton.addEventListener('click', event => {
  shareDialog.classList.remove('is-open');
});
</script>


<?php
//get_sidebar();
get_footer();
