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
<section class="ambientes" >
    <div class="container">
        <div class="row">
            <?php if ($postAmbientes->have_posts()): while($postAmbientes->have_posts()):  $postAmbientes->the_post()?>
            <div class="col-md-4">
                <div data-aos="fade-right" class="block-wrapper">
                    <div class="card">
                    <a href="<?php the_permalink() ?>">
                        <div class="thumb-image card-img-top" style="background-image: url('<?php the_post_thumbnail_url() ?>')">
                        </div>
                        <div class="card-body">
                        <div class="overlay"></div>
                            <h5 class="card-title"><?php the_title()?></h5>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <?php endwhile;endif;?>
        </div>
    </div>
</section>


<?php get_footer();?>
