<?php get_header(); ?>
<main class="front-page">

    
</main>
<div class="divPai">

    <div class="justify-content-center btn btnZap">
        Entrar em contato via WhatsApp
    </div>
</div>
    <div class="container">
    <div class="row">
        <div class="col-md-6 image">
            <div  class="bg-service" alt="Responsive image" style ="background-image: url('wp-content/themes/pedra-vidros/images/ambientes.jpg')">
                <a href="<?php echo home_url().'/ambientes'?>" class="text">Ambientes</a>
            </div>
        </div>
        <div class="col-md-6 image">
            <div  class="bg-service" alt="Responsive image" style ="background-image: url('wp-content/themes/pedra-vidros/images/cozinha.jpg')">
                <a href="<?php echo home_url().'/materiais'?>" class="text">Materiais</a>
            </div>
        </div>
    </div>  

<section class="about">
    <div class = "container">
    

            <div class = "row">

            
                <div class = "col-md-4  icones">
                    <div class="bx-sh shadow-sm rounded">
                        <i class="fa fa-building  fa-4x" aria-hidden="true"></i>
                        <p>Trabalhamos com materiais da melhor qualidade, mantendo um alto padrão.</p>
                    </div>
                
                </div>
                <div class = "col-md-4  icones">
                    <div class="bx-sh shadow-sm rounded">
                        <i class="fa fa-graduation-cap  fa-4x" aria-hidden="true"></i>
                        <p>Profissionais com mais de 20 anos de experiência!</p>
                    </div>
                
                </div>
                <div class = "col-md-4  icones">
                    <div class="bx-sh shadow-sm rounded">
                        <i class="fa fa-users  fa-4x" aria-hidden="true"></i>
                        <p>Somos uma empresa familiar, conceituada e bem estabelecida no ramo.</p>
                    </div>
                
                </div>
            </div>

          
            
        </div>
    </div>
    <a href="<?php
    $phone = '55 51 8475-3390';
    $message = 'coco';
    // $message = urlencode($message);
    // $message = str_replace('+','%20',$message);
    $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
    $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
    $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
    $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
    $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
    if ($iphone || $android || $palmpre || $ipod || $berry == true)
    {
    echo ('whatsapp://send?phone='.$phone.'&text='.$message);
    
    echo ("<script>window.location='whatsapp://send?phone='.$phone.'&text='.$message</script>");
    }
    else {
    echo("https://web.whatsapp.com/send?phone='.$phone.'&text='.$message");
    echo( "<script>window.location='https://web.whatsapp.com/send?phone='.$phone.'&text='.$message </script>");
    }
    ?>" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
    </a>
</section>


<?php get_footer(); ?>
