<!DOCTYPE html>
<html>
<head>
    <title><?php wp_title(); ?></title>
    
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-152x152.png">
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    
    <link rel="stylesheet" href="wp-content\themes\pedra-vidros\slick-1.8.1\slick-1.8.1\slick\slick.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() ?>/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri() ?>/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri() ?>/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>"/>
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen"/>
    
    
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/js/html5shiv.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrap">
<div class="container-fluid">
    <header>
        <div class="row">
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <a href="index.php" >
                    <div  id="logo" class = "barraHeader">
                        <img class="img-fluid" src="wp-content\themes\pedra-vidros\images\logo-png.png" id ="imglogo">
                    </div>
                </a>
            </div>
            <div class="col-md-2 d-flex justify-content-center align-items-center">
                <a href="index.php">
                    <div  id="Inicio" class = "barraHeader">
                        Inicio
                    </div>
                </a>
            </div>
            <div class="col-md-2 d-flex justify-content-center align-items-center">
            <a href="#">
                <div class = "barraHeader" id = "Sobre" >
                    Sobre
                </div>
            </a>
            </div>
            <div class="col-md-2 d-flex justify-content-center align-items-center">
                <a href="#">
                    <div class = "barraHeader" id="Servicos">
                        Servicos
                    </div>
                </a>
            </div>  
            <div class="col-md-2 d-flex justify-content-center align-items-center">
                <a href="#">
                    <div class = "barraHeader" id="Contato">
                        Contato
                    </div>
                </a>
            </div>
        </div>
    </header>
</div>
  

    
<style>
    .d-flex:hover{
        background-color: #BB1010bb;
    }
    div{
        width: 100%;
    }
    .barraHeader .img-fluid {
        width: 32%;
    }
    .container-fluid{
        padding:0;
    }
    a{
        color: inherit;
        text-decoration: none;
    }
    .barraHeader {
       display: flex;
       justify-content: center;
       align-items: center;
    }
    .limpafloat{
        clear:both;
    }
    header{
        color:white;
        font-size:22px;
        width: 100%;
        background-color: #BB1010aa;
    } 
</style>