<?php
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/js/customaccordion.js"></script>
          <link href='https://fonts.googleapis.com/css?family=Raleway:300,500,600,400' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54307054-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-545b872b4bd11a59" async="async"></script>




<section id="header">
<div class="row">

<div class="small-1 medium-3 large-3 columns">	
     <div class="mentors">    
         <a href="<?php echo esc_url( home_url( '/' ) ); ?>wp-login.php" rel="mentors"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/mentorIcon.png"><h3>contact mentors</h3></a>
     </div>
</div>


<div class="small-11 medium-9 large-9 columns">	
	<div class="searchBox"><?php get_search_form(); ?></div>
	<div class="social">
		<a href="https://twitter.com/TMstaffs" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/twitterIcon.png"></a>
		<a href="https://www.facebook.com/lichfieldtalentmatch/" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/facebookIcon.png"></a>
		<a href="https://www.youtube.com/channel/UCZ2KMk8oV8VT6brvE07EG9Q" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/youTubeIcon.png"></a>
        <a href="https://www.instagram.com/talentmatchstaffordshire/?hl=en" target="_blank"><img src="<?php echo esc_url( home_url( '/' ) ); ?>wp-content/uploads/instagram-dreamstale43.png" width="30px"></a>
	</div>
</div>


</div>
</section>



<div id="headerMenu">
<div class="row">
<div class="wrapper">

	<div class="small-12 medium-12 large-6 columns">	
        	<div class="logo">
            	<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">Talent Match  </a></h1>
            	<h2>Staffordshire</h2>
          	</div>
            
            <a class="serviceMenuA" href="https://www.talentmatchstaffs.org.uk/talent-match-services-2/">
            <div class="menu-youthsection-container"> 
                <div class="servicesMenu">
                    <li>Click here for services</li>
                </div>
            </div>
            </a>
	</div>

	<div class="small-12 medium-12 large-6 columns">	


				<nav class="mainnav">			
				<a class='menuBtn'>Menu</a>		
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
				</nav>




	</div>

</div>
</div>
</div> 
   