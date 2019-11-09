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
    <div class="backgroundHeader">
    <div class="container-fluid">
<header>
    <a href="index.php" >
        <div  id="logo" class = "barraHeader">
            <img src="wp-content\themes\pedra-vidros\images\logo-png.png" id ="imglogo">
        </div>
    </a>
    <a href="index.php">
        <div  id="Inicio" class = "barraHeader">
           Inicio
        </div>
    </a>
    <a>
    <div class = "barraHeader" id = "Sobre" >"Sobre"
      
    </div>
    </a>
        <a href="agendar.php">
        <div class = "barraHeader" id="Servicos">
        Servicos
        </div>
        </a>

        <a >
    <div class = "barraHeader" id="Contato">
        Contato
     </div>
     </a>
    
</header>
</div>

</div>
    <div class="content-wrapper">

    
      <style>
div{
    width: 100%;
}

#imglogo{
    width:80px;
}
.backgroundHeader{
    background-color:black;
}
#Inicio{
  width:20%;
  position: relative;
  float:left;
  padding-top: 20px;
  padding-bottom: 20px;
  background-color: #07dfb4;
  text-align:center;
}

a{
    color: inherit;
    text-decoration: none;
}

.barraHeader {
  position: relative;
  display: inline-block;
  float:left;
  width:20%;
  padding-top: 20px;
  padding-bottom: 20px;
  background-color: #07dfb4;
  text-align:center;
  color: white;
}

.limpafloat{
    clear:both;
}

body {
padding: 0 0;
margin: 0 0;
}

header{
    width: 100%;
}
      </style>