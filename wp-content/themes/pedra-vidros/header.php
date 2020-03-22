<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(); ?></title>
    
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/images/favicon.ico" type="image/x-icon">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <meta name="google-site-verification" content="cmP2M5wxfpqIenNodcXF7Io-pUFo2BjTHIYxWNmvp9Y" />
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>"/>
    <meta name="google-site-verification" content="cmP2M5wxfpqIenNodcXF7Io-pUFo2BjTHIYxWNmvp9Y" />
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">

    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <nav class="navbar navbar-light light-blue lighten-4 ">
        <div class="divzona d-flex">
            <div class="divbrand">
                <a class="navbar-brand" href="<?php echo home_url()?>">
                    <img  id = "imgmenu" src ="<?php echo get_template_directory_uri(); ?>/images/logo-png.png"> 
                    </img>
                </a>
            </div>
            <div class="divbutton">
                
            </div>
        </div>
        
    </nav>
</header>