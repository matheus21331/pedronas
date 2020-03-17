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
<section class="materiais">
    <div class="container">
        <div class="row">
            <?php if ($postMateriais->have_posts()): while($postMateriais->have_posts()):  $postMateriais->the_post()?>
            <div class="col-md-4">
                <div class="block-wrapper">
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


<?php get_footer()?>


