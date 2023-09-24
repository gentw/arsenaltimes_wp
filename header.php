<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Arsenaltimes_new
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="refresh" content="600">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/logo/Icons.png">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/stilet/stilettttttt.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stilet/jquery.flipsters.min.css">
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.flipster.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>

<meta property="fb:pages" content="#" />




<script>
// Kerko sticky
  $(document).ready(function(){
  $('.search-open').click(function(){
  $('.search-box').toggle();
});
});

// Menu sticky

$(window).scroll(function() {
if ($(this).scrollTop() > 300){  
    $('.fixkerko').addClass("sticky").fadeIn();
  }
  else{
    $('.fixkerko').removeClass("sticky").fadeOut;
  }
});

</script>
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4499061,4,0,0,0,00010000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<!-- Histats.com  END  -->

	<?php wp_head(); ?>
    <!-- Google tag (gtag.js) -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Y8LDR9GFYR"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y8LDR9GFYR');
</script>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5207330134803259"
     crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="adxp-sticky" style="background: #fff; left: 50%; transform: translate(-50%, 0);text-align: center;position: fixed;z-index: 999999999;bottom: 0px; transition: height 0.3s; width: 100%;">
    <script>
        var lastScrollTop = window.pageYOffset || document.documentElement.scrollTop; var adxp_sticky = document.querySelector('.adxp-sticky');
        var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent); var adToggleHeight=30;
        var isItClosed = false;
        if (isMobile) {
            window.addEventListener("scroll", function(){
                adToggleHeight=150;
                var st = window.pageYOffset || document.documentElement.scrollTop;
                if(isItClosed != true){
                    if (st > lastScrollTop){ 
                        adxp_sticky.style.height = adToggleHeight+'px';adxp_sticky.firstElementChild.innerHTML  = 'X'; 
                    } else {    
                        adxp_sticky.style.height = adxp_sticky.children[2].offsetHeight+'px'; adxp_sticky.firstElementChild.innerHTML  = 'X'; 
                    } 
                    lastScrollTop = st <= 0 ? 0 : st; adxp_sticky.style.display=adxp_sticky.children[2].style.display
                }
            }, false);
        }
        function toggleSticky(e){
            if(e.parentElement.clientHeight<adToggleHeight+10){ 
                e.parentElement.style.height = adxp_sticky.children[2].offsetHeight+'px'; 
                e.innerHTML  = '▼';
            }
            else{
                e.parentElement.style.height = adToggleHeight+'px';
                e.innerHTML  = 'X';
            }
        }
    </script>
    <span onclick="let elementAdxp = document.querySelector('.adxp-sticky'); 
    if(elementAdxp){elementAdxp.style.display = 'none'; isItClosed = true; this.parentElement.style.display = 'none'; } " style="color: black; width:30px; height:30px; position: absolute; top:-35px; cursor: pointer; right:2px; background: rgba(255, 255, 255, 1); display: flex; align-items: center; justify-content: center; line-height: 1; border: 1px solid black; border-radius: 50%; font-weight: bolder; font-size: larger;">&#10006;</span>
    <!-- <a href="https://www.redbubble.com/shop/ap/149839406"><img style="min-width: 250px;
height: 140px;" src="https://arsenaltimes.net/wp-content/uploads/2023/08/produktibanner.jpg"></a> -->
<div id="M720773ScriptRootC1502562"></div>
<script src="https://jsc.mgid.com/a/r/arsenaltimes.net.1502562.js" async></script>
<!-- <div id="div-gpt-ad-1634633293618-0" style="min-width: 250px; min-height: 50px;">
  <script>
    googletag.cmd.push(function() { googletag.display('div-gpt-ad-1634633293618-0'); });
  </script>
</div>     -->
</div>



<style>
    .sticky {
    position: sticky;
    top:0;
    z-index: 9999;
        -webkit-transition: top 0.5s;
    transition: top 0.5s;
    -webkit-box-shadow: 10px 10px 39px -21px rgba(0,0,0,0.75);
-moz-box-shadow: 10px 10px 39px -21px rgba(0,0,0,0.75);
box-shadow: 10px 10px 39px -21px rgba(0,0,0,0.75);
        
    } 
	
	.mega-tab-post-nav   a {
  color: #fff !important;
}

.mega-tab-post-nav .li.active a {
  color: #000 !important;
}
	
</style>

</head>
<body>
	<div class="fixkerko">
<!-- Kerko -->
<div class="search-box">
<div class="largojee"><a href="javascript:void(0)" class="closebtn search-open">&times;</a></div>
<div class="shtyje-search">
<form role="submit-btn" method="get" class="submit-btn" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label>
<input type="text" name="s" placeholder="Search...">
<button type="submit" class="submit-btn"><img src="<?php echo get_template_directory_uri(); ?>/logo/kerkoje.svg" style="width: 36px;"></button>
</label>
</form>

<titulli>Latest news</titulli>

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
                        
<div class="lajmet-search">
    <div class="foto"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('full'); ?></a></div>
    <div class="titulli"><a href="<?php the_permalink();?>"><?php echo wp_trim_words( get_the_title(), 30, '...' );?></a></div>
</div>

<?php endwhile; wp_reset_postdata(); ?>


</div>
</div>


<style>
    .gt-lang-code {
        display: none !important;
    }
    
.gt_float_switcher {
    font-family: Arial;
    font-size: 20px;
    border-radius: 2px;
    color: #555;
    display: inline-block;
    line-height: 20px;
    padding: 7px;
    box-shadow: unset;
    background: transparent;
    }
    
    .gt_float_switcher .gt-selected {
        background: transparent;
    }
    
    .gt_float_switcher .gt-selected .gt-current-lang span.gt_float_switcher-arrow {
        display: none;
    }
    
    .gt_float_switcher .gt-selected .gt-current-lang {
    padding: 10px 5px;
    }
    
    .gt_float_switcher .gt-open {
    background: #fff;
    position: relative;
    top: 60px
    }
    
    .gt_float_switcher .gt_options a {
    font-size: 0;
    padding: 10px 13px;
    }
    
    .gt_float_switcher .gt-selected {
    position: absolute;
    z-index: 888;
    top: 0;
    padding: 8px;
    background-color: transparent;
    cursor: pointer;
    text-transform: uppercase;
    overflow: hidden;
}

.gt_float_switcher {
    font-family: Arial;
    font-size: 20px;
    border-radius: 2px;
    color: #555;
    display: inline-block;
    line-height: 0;
    padding: 0;
    box-shadow: unset;
    background: transparent;
    width: 60px;
}

.gt_float_switcher .gt_options.gt-open {
    opacity: 1;
    transform: translateX(0px);
    height: 330px;
}

.gt_float_switcher img {
    border-radius: 0;
}

.gt_float_switcher .gt_options {
    max-height: 350px;
}


@media screen and (max-width: 1024px) {
.gt_float_switcher .gt-selected {
    padding: 0 !important;
}

.gt_float_switcher .gt_options a {
    font-size: 0;
    padding: 10px !important;
    }

.gjuhaa {
    width: 35px;
}
.gt_float_switcher img {
    vertical-align: middle;
    display: inline-block;
    width: 30px;
    height: auto;
    margin: 0;
    border-radius: 0;
}

.gt_float_switcher {
    width: 50px;
}


.gt_float_switcher .gt-selected .gt-current-lang {
    padding: 14px 5px;
}

.gt_float_switcher .gt-open {
    top: 52px;
}

}
    
    
</style>


	<div class="kontenti">
	<div class="menu">
	<div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/wp-content/uploads/2023/08/arsenaltimes-e1691021495719.jpg"></a></div><!-- logo mobile -->
		<ul>
           
				<?php
wp_nav_menu( array(
    'theme_location' => 'primary-nav',
    'container' => false,
'items_wrap' => '<ul>%3$s</ul>'
) );
?>

		</ul>



<div class="kerkoni-menumeshume">
    
    
    <!-- <div class="gjuhaa">
        <?php //echo do_shortcode( '[gtranslate]' ); ?>
    </div> -->
    
<div class="kerko search-open">
	<div class="kerkimi"><img src="<?php echo get_template_directory_uri(); ?>/logo/kerkoje.svg" style="width: 26px;"></div><!-- kerkimi -->
</div>
<div class="menumeshume">
<div id="main">
  <span style="font-size:30px;cursor:pointer" onclick="openNav()"><img src="<?php echo get_template_directory_uri(); ?>/logo/r-menu.svg" style="width: 33px;"></span>
</div>
</div>
</div><!-- kerko-menu -->
</div><!-- Menu -->

</div>
</div>


<!-- Menu Mobile shirit -->
<div class="menu-mobile">
        <div class="menu">
        <ul>
<li>
<?php
wp_nav_menu( array(
    'theme_location' => 'primary-nav',
    'container' => false,
'items_wrap' => '<ul>%3$s</ul>'
) );
?>
</li>
</ul>

</div><!-- Menu -->
</div><!-- menu-mobile -->


<!-- Menu Anash -->
<div id="mySidenav" class="sidenav">
  <div class="logo-menu">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="/wp-content/uploads/2023/08/arsenaltimes-e1691021495719.jpg"></a>
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
</div>

<?php
wp_nav_menu( array(
    'theme_location' => 'primary-nav',
    'container'  => false,
    'items_wrap' => '%3$s' 
) );
?>
<div class="sociale-footer">
  <a href="https://www.facebook.com/ArsenalTimesNews" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/logo/facebook_footer.png"></a>
  <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/logo/instagram_footer.png"></a>
  <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/logo/twitter_footer.png"></a>
  <a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/logo/youtube_footer.png"></a>
</div>
</div>
<!-- Menu Anash -->

<script>
    $('.sub-menu ul').hide();
$(".sub-menu a").click(function () {
  $(this).parent(".sub-menu").children("ul").slideToggle("100");
  $(this).find(".right").toggleClass("fa-caret-up fa-caret-down");
});
</script>