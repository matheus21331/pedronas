<?php
/*
Template Name: Materiais
*/

?>
<?php get_header()?>
<?php $args = array(
    'post_status' => 'publish',
    'post_type' => 'materials',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$postMateriais = new WP_Query( $args ); ?>
<div class="container">
    <div class="row">
        <?php if ($postMateriais->have_posts()): while($postMateriais->have_posts()):  $postMateriais->the_post()?>
        <div class=" col-md-4 containerImg">
            <div class="img-block-mat" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
                <div class="overlay">
                    <div class="wrapp-bnt-blocks"><button type="button" class="btn-block"><?php the_title() ?></button></div>
                </div>
            </div>
            
        </div>
        <?php endwhile;endif;?>       
        
    </div>
</div>


<?php get_footer()?>


