<?php get_header(); ?>
<main class="ambientes">
    <div class="container">
        <div class="content">
            <?php $query = get_queried_object();
                echo $query->post_content
            ?>
        </div>
    <?php if( have_rows('galeria_materiais') ): ?>
        <div class="row">
            <?php 
                while( have_rows('galeria_materiais') ): the_row(); 
                $imgmateriais = get_sub_field('imagem_materiais_inside');
            ?>
                <div class="col-md-4">
                    <div class="block-img">
                        <a class="popup-img" href="<?php echo $imgmateriais['url']?>">
                            <div class="list-img" style="background-image: url( '<?php echo $imgmateriais['url']?>' )"></div>
                            <h3 class="title-inseide"><?php the_sub_field('titulo_materiais_inside'); ?></h3>
                        </a>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
        
    <?php endif;?>    
</main>
<?php get_footer(); ?>