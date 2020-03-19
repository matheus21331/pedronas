<?php get_header(); ?>
<main class="ambientes">
    <div class="container">
        <div class="content">
            <?php $query = get_queried_object();
                echo $query->post_content
            ?>
        </div>
    <?php if( have_rows('galeria_ambientes') ): ?>
        <div class="row">
            <?php 
                while( have_rows('galeria_ambientes') ): the_row(); 
                $imgAmbientes = get_sub_field('imagem_ambientes_inside');
            ?>
                <div class="col-md-4">
                    <div class="block-img">
                        <a class="popup-img" title="<?php the_sub_field('titulo_ambientes_inside'); ?>" href="<?php echo $imgAmbientes['url']?>">
                            <div class="list-img" style="background-image: url( '<?php echo $imgAmbientes['url']?>' )"></div>
                        </a>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
    <?php endif;?> 
   
</main>
   
   
<?php get_footer(); ?>