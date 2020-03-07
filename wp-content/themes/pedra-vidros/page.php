<?php get_header(); ?>
<main class="front-page">
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="wp-content\themes\pedra-vidros\slick-1.8.1\slick-1.8.1\slick\slick.min.js"></script>
    
</main>
    <div class="container">
    <div class="row">
        <div class="col-md-6 image">
            <div  class="bg-service" alt="Responsive image" style ="background-image: url('wp-content/themes/pedra-vidros/images/ambientes.jpg')">
                <a href="ambientes" class="text">Ambientes</a>
            </div>
        </div>
        <div class="col-md-6 image">
            <div  class="bg-service" alt="Responsive image" style ="background-image: url('wp-content/themes/pedra-vidros/images/cozinha.jpg')">
                <a href="#" class="text">Coleções</a>
            </div>
        </div>
    </div>  
</div>
<section class="about">
    <div class = "container">
        <?php if( have_rows('text_gallery') ): ?>

            <div class = "row">

            <?php while( have_rows('text_gallery') ): the_row(); 

                // vars
                $image = get_sub_field('imagem_home');
                $content = get_sub_field('texto_home');
                ?>

                <div class = "col-md-4  icones">
                    <div class="bx-sh shadow-sm rounded">
                        <i class="fa fa-building  fa-4x" aria-hidden="true"></i>
                        <p><?php echo $content?></p>
                    </div>
                
                </div>
            <?php endwhile; ?>

            </div>

            <?php endif; ?>
            
        </div>
    </div>
</section>


<?php get_footer(); ?>
<style>
.about {
    margin: 60px 0;
}
.bx-sh {
    padding: 20px
}
.icones{
    text-align:center;

}
.bg-service {
    height: 500px;
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
}
.image-left {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
}
.image-right {
    opacity: 1;
    display: block;
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
}
.middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%)
}
.text {
    width:50%;
    text-align:center;
    background-color: #222;
    color: white;
    font-size: 16px;
    padding: 16px 32px;
}

.image:hover .image-left {
    opacity: 0.3;
}
.image:hover .image-right {
    opacity: 0.3;
}
.image:hover .middle {
    opacity: 1;
}
.image{
    text-align:center;
    position: relative;
    width: 50%;
}
</style>
