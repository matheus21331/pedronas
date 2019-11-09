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
<header>
    <a href="index.php">
        <div  id="Inicio">
            <img src="wp-content\themes\pedra-vidros\images\logo-png.png" id ="logo">
        </div>
    </a>
    <div class="dropdown textos2" id="Exames" >"LOREM"
        <div class="dropdown-content textos2">
            <ul id="menuexames" class="lista textos2">
                            
            </ul>
        </div>
    </div>
    <a href="agendar.php"><div class="dropdown textos2" id="Agendar">"LOREM"</div>
    </a>
    <div class="dropdown textos2" id="Login"><a href="usuario.php">"LOREM"</a>
            <div class="dropdown-content" id="divcontent2">
                <ul class="lista textos2">
                </ul>
            </div>
        </div>
        <a href="login.php"><div class="dropdown textos2" id="Login">"LOREM"</div>
    </a>
    <a href="Cadastro.php"><div class="dropdown textos2" id="Cadastro">"LOREM"</div></a>
</header>
    <div class="content-wrapper">
      <style>
            
}
div{
    width: 100%;
}
#logo{
    height:80px;
    width:80px;
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
.textos{
    font-family:tahoma;
    font-size: 25px;
}
h{
 font-family:tahoma;   
}


a{
    color: inherit;
    text-decoration: none;
}
#texto1{
/*    border: 1px solid black;*/
    margin-top: -200px;
    text-align:center;
    width: 100%;
    
}
.dropdown {
  position: relative;
  display: inline-block;
  float:left;
  width:16%;
  padding-top: 20px;
  padding-bottom: 20px;
  background-color: #07dfb4;
  text-align:center;
  color: white;
}

#Inicio:hover{
    animation-name: hover;
     animation-duration: 0.3s;
     background-color:#07d1b4;
}



.dropdown:hover{
     animation-name: hover;
     animation-duration: 0.3s;
     background-color:#07d1b4;
}
.dropdown-content{
  position: absolute;
  background-color: #4CFFDBaa;
  min-width: 160px;
  z-index: 1;
  width: 100%;
  margin-top:20px;
  height: 0px;
  transition-property: height, display;
  transition-duration: 0.3s;
  -webkit-transition:  height 0.3s;
  transition-timing-function: ease;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {
    color:white;
    background-color: #07dfb4;
}

.dropdown:hover .dropdown-content {
  display: block;
  margin-top: 20px;
  height: 450px;
}

@keyframes hover{
  from{ background-color: #07dfb4;} 
  to{ background-color: #07d1b4;}
}

@keyframes lista{
    from{display: none;}
    to{display: block;}
}


.lista {
   display: block;
   height: 0%;
   transition-property: height, display;
  transition-duration: 1s;
  -webkit-transition:  height 1s, display 1s;
  transition-timing-function: linear;
}

#divcontent{
  position: absolute;
  background-color: #4CFFDBaa;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  width: 100%;
  height: 0px;
  transition-property: height, display;
  transition-duration: 0.3s;
  -webkit-transition:  height 0.3s;
  transition-timing-function: ease;
}

.lista li{
    display:block;
    visibility: hidden;
    height:0px;
    transition-property: height, visibility;
    transition-duration: 0.3s;
    transition-delay:1s;
    -webkit-transition:  height 1s;
  transition-timing-function: ease; 
}


.limpafloat{
    clear:both;
}
body {
padding: 0 0;
margin: 0 0;
}
.dropdown:hover #divcontent{
    height: 120px;
}
.dropdown:hover .lista li{
   visibility:visible;
    height:35px;
   transition-property: height, display;
  transition-duration: 0.3s;
  -webkit-transition:  height 0.3s;
  transition-timing-function: ease;
}

.textos2{
    font-family: tahoma;
}



header{
    width: 100%;
}
#divcontent2{
  position: absolute;
  background-color: #4CFFDBaa;
  min-width: 140px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  width: 100%;
  height: 0px;
  transition-property: height, display;
  transition-duration: 0.3s;
  -webkit-transition:  height 0.3s;
  transition-timing-function: ease;
}
.dropdown:hover #divcontent2{
    height: 70px;
}

      </style>