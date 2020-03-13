<?php
/*
Template Name: Ambientes
*/
get_header();
?>

<?php $args = array(
    'post_status' => 'publish',
    'post_type' => 'ambientes',
    'posts_per_page' => -1,
    'orderby' => 'date',
    'order' => 'DESC',
);
$postAmbientes = new WP_Query( $args ); ?>
<div class="container">
    <div class="row">
        <?php if ($postAmbientes->have_posts()): while($postAmbientes->have_posts()):  $postAmbientes->the_post()?>
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

<?php get_footer();?>
