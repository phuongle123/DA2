<?php session_start(); ?>
<!DOCTYPE html>

<!-- saved from url=(0035)http://104.131.177.38/demo/wp/iamx/ -->
<html lang="en-US" class="wf-roboto-i9-active wf-roboto-n9-active wf-roboto-i5-active wf-roboto-i7-active wf-roboto-i1-active wf-roboto-i3-active wf-roboto-i4-active wf-roboto-n1-active wf-roboto-n3-active wf-roboto-n4-active wf-roboto-n5-active wf-roboto-n7-active wf-active js csstransforms csstransforms3d csstransitions js_active  vc_mobile  vc_transform  vc_transform skrollr skrollr-desktop" style="height: auto;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link type="text/css" rel="stylesheet" href="./Iamx _files/css/css"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}
</style><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}
</style>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="http://104.131.177.38/demo/wp/iamx/xmlrpc.php">
    <title>Thong tin CV</title>
                        <script src="./Iamx _files/js/webfont.js.tải xuống" type="text/javascript" async></script><script>
                            /* You can add more configuration options to webfontloader by previously defining the WebFontConfig with your options */
                            if ( typeof WebFontConfig === "undefined" ) {
                                WebFontConfig = new Object();
                            }
                            WebFontConfig['google'] = {families: ['Roboto:100,300,400,500,700,900,100italic,300italic,400italic,500italic,700italic,900italic']};

                            (function() {
                                var wf = document.createElement( 'script' );
                                wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.5.3/webfont.js';
                                wf.type = 'text/javascript';
                                wf.async = 'true';
                                var s = document.getElementsByTagName( 'script' )[0];
                                s.parentNode.insertBefore( wf, s );
                            })();
                      </script>
                        <link rel="alternate" type="application/rss+xml" title="Iamx » Feed" href="http://104.131.177.38/demo/wp/iamx/feed/">
<link rel="alternate" type="application/rss+xml" title="Iamx » Comments Feed" href="http://104.131.177.38/demo/wp/iamx/comments/feed/">
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"wpemoji":"http:\/\/104.131.177.38\/demo\/wp\/iamx\/wp-includes\/js\/wp-emoji.js?ver=4.4.14","twemoji":"http:\/\/104.131.177.38\/demo\/wp\/iamx\/wp-includes\/js\/twemoji.js?ver=4.4.14"}};
			( function( window, document, settings ) {
	var src, ready;

	/**
	 * Detect if the browser supports rendering emoji or flag emoji. Flag emoji are a single glyph
	 * made of two characters  , so some browsers (notably, Firefox OS X) don't support them.
	 *
	 * @since 4.2.0
	 *
	 * @param type {String} Whether to test for support of "simple" or "flag" emoji.
	 * @return {Boolean} True if the browser can render emoji, false if it cannot.
	 */
	function browserSupportsEmoji( type ) {
		var canvas = document.createElement( 'canvas' ),
			context = canvas.getContext && canvas.getContext( '2d' ),
			stringFromCharCode = String.fromCharCode,
			tonedata, tone, tone2;

		if ( ! context || ! context.fillText ) {
			return false;
		}

		/*
		 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
		 * it doesn't work when the font is bolder than 500 weight. So, we
		 * check for bold rendering support to avoid invisible emoji in Chrome.
		 */
		context.textBaseline = 'top';
		context.font = '600 32px Arial';

		if ( 'flag' === type ) {
			/*
			 * This works because the image will be one of three things:
			 * - Two empty squares, if the browser doesn't render emoji
			 * - Two squares with 'A' and 'U' in them, if the browser doesn't render flag emoji
			 * - The Australian flag
			 *
			 * The first two will encode to small images (1-2KB data URLs), the third will encode
			 * to a larger image (4-5KB data URL).
			 */
			context.fillText( stringFromCharCode( 55356, 56806, 55356, 56826 ), 0, 0 );
			return canvas.toDataURL().length > 3000;
		} else if ( 'diversity' === type ) {
			/*
			 * This tests if the browser supports the Emoji Diversity specification, by rendering an
			 * emoji with no skin tone specified (in this case, Santa). It then adds a skin tone, and
			 * compares if the emoji rendering has changed.
			 */
			context.fillText( stringFromCharCode( 55356, 57221 ), 0, 0 );
			tonedata = context.getImageData( 16, 16, 1, 1 ).data;

			context.fillText( stringFromCharCode( 55356, 57221, 55356, 57343 ), 0, 0 );
			// Chrome has issues comparing arrays, and Safari has issues converting arrays to strings.
			// So, we create our own string and compare that, instead.
			tonedata = context.getImageData( 16, 16, 1, 1 ).data;
			tone2 = tonedata[0] + ',' + tonedata[1] + ',' + tonedata[2] + ',' + tonedata[3];

			return tone !== tone2;
		} else {
			if ( 'simple' === type ) {
				/*
				 * This creates a smiling emoji, and checks to see if there is any image data in the
				 * center pixel. In browsers that don't support emoji, the character will be rendered
				 * as an empty square, so the center pixel will be blank.
				 */
				context.fillText( stringFromCharCode( 55357, 56835 ), 0, 0 );
			} else {
				/*
				 * To check for Unicode 8 support, let's try rendering the most important advancement
				 * that the Unicode Consortium have made in years: the burrito.
				 */
				context.fillText( stringFromCharCode( 55356, 57135 ), 0, 0 );
			}
			return context.getImageData( 16, 16, 1, 1 ).data[0] !== 0;
		}
	}

	function addScript( src ) {
		var script = document.createElement( 'script' );

		script.src = src;
		script.type = 'text/javascript';
		document.getElementsByTagName( 'head' )[0].appendChild( script );
	}

	settings.supports = {
		simple:    browserSupportsEmoji( 'simple' ),
		flag:      browserSupportsEmoji( 'flag' ),
		unicode8:  browserSupportsEmoji( 'unicode8' ),
		diversity: browserSupportsEmoji( 'diversity' )
	};

	settings.DOMReady = false;
	settings.readyCallback = function() {
		settings.DOMReady = true;
	};

	if ( ! settings.supports.simple || ! settings.supports.flag || ! settings.supports.unicode8 || ! settings.supports.diversity ) {
		ready = function() {
			settings.readyCallback();
		};

		if ( document.addEventListener ) {
			document.addEventListener( 'DOMContentLoaded', ready, false );
			window.addEventListener( 'load', ready, false );
		} else {
			window.attachEvent( 'onload', ready );
			document.attachEvent( 'onreadystatechange', function() {
				if ( 'complete' === document.readyState ) {
					settings.readyCallback();
				}
			} );
		}

		src = settings.source || {};

		if ( src.concatemoji ) {
			addScript( src.concatemoji );
		} else if ( src.wpemoji && src.twemoji ) {
			addScript( src.twemoji );
			addScript( src.wpemoji );
		}
	}

} )( window, document, window._wpemojiSettings );
		</script><script src="./Iamx _files/js/twemoji.js.tải xuống" type="text/javascript"></script><script src="./Iamx _files/js/wp-emoji.js.tải xuống" type="text/javascript"></script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="contact-form-7-css" href="./Iamx _files/css/styles.css" type="text/css" media="all">
<link rel="stylesheet" id="zilla-likes-css" href="./Iamx _files/css/zilla-likes.css" type="text/css" media="all">
<link rel="stylesheet" id="tt-fontawesome-css" href="./Iamx _files/css/font-awesome.min.css" type="text/css" media="all">
<link rel="stylesheet" id="tt-shortcode-css" href="./Iamx _files/css/shortcode.css" type="text/css" media="all">
<link rel="stylesheet" id="tt-flaticon-stroke-css" href="./Iamx _files/css/flaticon.css" type="text/css" media="all">
<link rel="stylesheet" id="tt-bootstrap-css" href="./Iamx _files/css/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" id="tt-owl-carousel-css" href="./Iamx _files/css/owl.carousel.css" type="text/css" media="all">
<link rel="stylesheet" id="tt-owl-theme-css" href="./Iamx _files/css/owl.theme.css" type="text/css" media="all">
<link rel="stylesheet" id="tt-animate-css" href="./Iamx _files/css/animate.css" type="text/css" media="all">
<link rel="stylesheet" id="tt-magnific-css" href="./Iamx _files/css/magnific-popup.css" type="text/css" media="all">
<link rel="stylesheet" id="tt-stylesheet-css" href="./Iamx _files/css/style.css" type="text/css" media="all">
<link rel="stylesheet" id="tt-responsive-css-css" href="./Iamx _files/css/responsive.css" type="text/css" media="all">
<link rel="stylesheet" id="tt-custom-style-css" href="./Iamx _files/php/custom-style.php" type="text/css" media="all">
<link rel="stylesheet" id="js_composer_front-css" href="./Iamx _files/css/js_composer.min.css" type="text/css" media="all">
<link rel="stylesheet" href="./Iamx _files/css/css(1)"><script type="text/javascript" src="./Iamx _files/js/jquery.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/jquery-migrate.js.tải xuống"></script>
<script type="text/javascript">
/* <![CDATA[ */
var zilla_likes = {"ajaxurl":"http:\/\/104.131.177.38\/demo\/wp\/iamx\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="./Iamx _files/js/zilla-likes.js.tải xuống"></script>
<link rel="https://api.w.org/" href="http://104.131.177.38/demo/wp/iamx/wp-json/">
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://104.131.177.38/demo/wp/iamx/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://104.131.177.38/demo/wp/iamx/wp-includes/wlwmanifest.xml"> 
<meta name="generator" content="WordPress 4.4.14">
<link rel="canonical" href="http://104.131.177.38/demo/wp/iamx/">
<link rel="shortlink" href="http://104.131.177.38/demo/wp/iamx/">
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
		<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress.">
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://104.131.177.38/demo/wp/iamx/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><!--[if IE  8]><link rel="stylesheet" type="text/css" href="http://104.131.177.38/demo/wp/iamx/wp-content/plugins/js_composer/assets/css/vc-ie8.min.css" media="screen"><![endif]--><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1467136222667{background-color: #ffffff !important;}.vc_custom_1467136235256{padding-top: 120px !important;background-color: #ffffff !important;}.vc_custom_1459810557797{padding-top: 50px !important;padding-bottom: 100px !important;background-color: #ffffff !important;}.vc_custom_1467136246705{padding-top: 120px !important;padding-bottom: 100px !important;background-color: #1a1e23 !important;}.vc_custom_1467136374326{padding-top: 120px !important;padding-bottom: 110px !important;background-color: #ffffff !important;}.vc_custom_1467136508118{padding-top: 130px !important;padding-bottom: 100px !important;}.vc_custom_1465280214674{padding-top: 110px !important;padding-bottom: 110px !important;}.vc_custom_1467136533390{padding-top: 125px !important;padding-bottom: 100px !important;}.vc_custom_1459716795561{margin-top: 100px !important;margin-bottom: 100px !important;}.vc_custom_1465200538374{margin-top: 50px !important;margin-bottom: 100px !important;}.vc_custom_1462078468210{background-image: url(http://localhost/iamx/wp-content/uploads/2016/01/Candidate-political.jpg?id=2928) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1459746613009{background-color: #ffffff !important;}.vc_custom_1465201911551{padding-bottom: 35px !important;}.vc_custom_1465202259125{padding-top: 10px !important;padding-bottom: 30px !important;}.vc_custom_1459875720144{padding-bottom: 50px !important;}.vc_custom_1462435414479{padding-top: 115px !important;padding-bottom: 115px !important;}.vc_custom_1460851505925{margin-bottom: 50px !important;}.vc_custom_1460352398196{margin-bottom: 30px !important;}.vc_custom_1460353252369{margin-bottom: 50px !important;}.vc_custom_1464627285804{margin-bottom: 40px !important;}</style><noscript>&lt;style type="text/css"&gt; .wpb_animate_when_almost_visible { opacity: 1; }&lt;/style&gt;</noscript><script type="text/javascript" charset="UTF-8" src="./Iamx _files/js/common.js.tải xuống"></script><script type="text/javascript" charset="UTF-8" src="./Iamx _files/js/map.js.tải xuống"></script><script type="text/javascript" charset="UTF-8" src="./Iamx _files/js/util.js.tải xuống"></script><script type="text/javascript" charset="UTF-8" src="./Iamx _files/js/marker.js.tải xuống"></script><style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="./Iamx _files/js/onion.js.tải xuống"></script><script type="text/javascript" charset="UTF-8" src="./Iamx _files/js/controls.js.tải xuống"></script><script type="text/javascript" charset="UTF-8" src="./Iamx _files/js/stats.js.tải xuống"></script></head>

<body id="home" class="home page page-id-2320 page-template page-template-page-templates page-template-template-home page-template-page-templatestemplate-home-php header-banner-one wpb-js-composer js-comp-ver-4.9.2 vc_responsive" data-spy="scroll" data-target=".navbar" data-offset="100">
            <div id="preloader" style="background-color: rgb(255, 255, 255); display: none;">
            <div id="status" style="display: none;">
                <div class="status-mes" style="background-image: url(http://104.131.177.38/demo/wp/iamx/wp-content/themes/iamx/images/preloader.gif);"></div>
            </div>
        </div>
    
    <section class="header-banner banner-style-one tt-fullHeight" data-stellar-background-ratio="0.2" style="background-image: url(&quot;http://104.131.177.38/demo/wp/iamx/wp-content/uploads/2015/11/home2.jpg&quot;); height: 746px; background-position: 0% 22.4px;">
	<div class="intro">

					<?php

					$mongo = new Mongo();
        			$db = $mongo->do_an_2;
        			$collection = $db->thong_tin_cv;

        			$id = $_GET["id"];
        			$condition = array("_id" => new MongoId($id));
        			if($collection->count($condition)==1){
        			$document = $collection->findOne($condition);}
					?>

					<div class="intro-sub">
                    <?php
						echo $document['ho_ten'];
    				?>
                    </div>
					<h1>
						<?php
						echo $document['ten_chuyen_nghanh'];
    				?>
					</h1>
				
		<div class="intro-description">
					<?php
						echo $document['gioi_thieu'];
    				?></div> <!-- .intro-description -->
		
					 <!-- /.social-icons -->			</div> <!-- .intro -->

			<div class="mouse-icon">
			<div class="wheel"></div>
		</div>
	</section>
    <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 62px;"><div class="header-wrapper" style="">
        <nav class="navbar navbar-default">
            <div class="container">
                
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".mobile-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> <!-- .navbar-header -->

                <div class="main-menu-wrapper hidden-xs clearfix">
                    <div class="main-menu">                   
                        <ul id="menu-primary-menu" class="menu nav navbar-nav navbar-right"><li id="menu-item-3549" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3549  has-menu-child active"><a title="Home" href="PHP/home.php">Home</a></li>
<li id="menu-item-3550" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3550  has-menu-child"><a title="About" href="#about">Giới thiệu</a></li>
</ul>                    </div>
                </div> <!-- /navbar-collapse -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="visible-xs">
                    <div class="mobile-menu collapse navbar-collapse mobile-toggle">
                        <ul id="menu-primary-menu-1" class="menu nav navbar-nav"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3549  has-menu-child active"><a title="Home" href="PHP/home.php">Home</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-3550  has-menu-child"><a title="About" href="http://104.131.177.38/demo/wp/iamx/#about">Giới Thiệu</a></li>

</ul>                    </div> <!-- /.navbar-collapse -->
                </div>
            </div><!-- .container-->
        </nav>
    </div></div> <!-- .header-wrapper -->



	
	
		<section id="about" class="vc_row section-wrapper vc_custom_1467136222667 vc_row-has-fill"><div class="container"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
    <div class="section-intro  text-center  vc_custom_1459716795561">
        <h2 style="color:#282828" class="section-title wow fadeInUp">GIỚI THIỆU VỀ TÔI</h2>

                
        
                    <span class="separator" style="background-color:#dd3333"><span style="background-color:#dd3333"></span></span>
        
    </div> <!-- .section-intro -->

<div class="col-md-4 col-md-push-8   vc_custom_1465200538374">
    <div class="biography">
        <div class="myphoto">
                        <?php
						echo '<p ><img  src="'.$document['hinh_anh'].'" ></p>';
    				?>
            <div class="img-frame"></div>
        </div>
        <ul>
                            <li><strong>Tên:&nbsp;</strong>
                             <?php
						echo $document['ho_ten'];
    				?></li>
                            <li><strong>Ngày sinh:&nbsp;</strong>
                             <?php
						echo $document['ngay_sinh'];
    				?>
                            </li>
                            <li><strong>Địa chỉ:&nbsp;</strong>
                             <?php
    					
						echo $document['dia_chi'];
     				 
    				?>
                            </li>
                            <li><strong>Quốc tịch:&nbsp;</strong>
                             <?php
    					
						echo $document['quoc_tich'];
     				 
    				?>
                            </li>
                            <li><strong>Phone:&nbsp;</strong> 
                             <?php
    					
						echo $document['phone'];
     				 
    				?>
                            </li>
                            <li><strong>Email:&nbsp;</strong>
                             <?php
    					
						echo $document['email'];
     				 
    				?>
                             </li>
                    </ul>
    </div>
</div>

<div class="col-md-8 col-md-pull-4">
    <div class="short-info wow fadeInUp">
<h3>Mục tiêu</h3>
<p>
				 <?php
    					
						echo $document['muc_tieu'];
     				 
    				?>
</p>
</div>
<div class="short-info wow fadeInUp">
<h3>Những gì tôi làm ?</h3>
<p>
				 <?php
    					
						echo $document['kinh_nghiem'];
     				 
    				?>
</p>

</div>
    <div class="my-signature">
                  <img src="./Iamx _files/imgage/sign.png" alt="">
    </div>

    
</div>

</div></div></div></div></div></section><section class="vc_row section-wrapper"><div class="container-fullwidth"><div class="row"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">

		    <footer class="footer-wrapper">
		      <div class="container">
		        <div class="row">
		          <div class="col-md-12">
					<div class="copyright text-center">
			        
					            
						            © Copyright by Kai Trần - Sky Lê					            

			        					</div>
		          </div>
		        </div>
		      </div>
		    </footer><!-- End Footer Section -->        

<link rel="stylesheet" id="vc_google_fonts_roboto100100italic300300italicregularitalic500500italic700700italic900900italic-css" href="./Iamx _files/css/css(2)" type="text/css" media="all">
<link rel="stylesheet" id="vc_google_fonts_abril_fatfaceregular-css" href="./Iamx _files/css/css(3)" type="text/css" media="all">
<script type="text/javascript" src="./Iamx _files/js/jquery.form.min.js.tải xuống"></script>
<script type="text/javascript">
/* <![CDATA[ */
var _wpcf7 = {"loaderUrl":"http:\/\/104.131.177.38\/demo\/wp\/iamx\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","recaptchaEmpty":"Please verify that you are not a robot.","sending":"Sending ..."};
/* ]]> */
</script>
<script type="text/javascript" src="./Iamx _files/js/scripts.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/bootstrap.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/owl.carousel.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/js"></script>
<script type="text/javascript" src="./Iamx _files/js/jquery.countTo.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/coundown-timer.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/jquery.shuffle.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/smoothscroll.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/jquery.inview.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/jquery.easing.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/jquery.sticky.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/magnific-popup.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/jquery.stellar.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/jquery.placeholder.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/retina.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/scripts.js(1).tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/wp-embed.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/js_composer_front.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/waypoints.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/ProgressCircle.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/jquery.vc_chart.min.js.tải xuống"></script>
<script type="text/javascript" src="./Iamx _files/js/skrollr.min.js.tải xuống"></script>

<div id="toTop" style="display: block;"><i class="fa fa-angle-up"></i></div></body><div></div></html>