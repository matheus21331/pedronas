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
$postDest = new WP_Query( $args ); ?>
<div class="container">
    <div class="row">
        <?php if ($postDest->have_posts()): while($postDest->have_posts()):  $postDest->the_post()?>
            <div class="col-md-4">
                <div class="card" >
                    <img class="card-img-top" src="<?php the_post_thumbnail_url()?>" alt="Thumb">
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title()?></h5>
                        <p class="card-text"><?php the_content()?></p>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-<?php the_ID();?>">
                        Open modal
                        </button>  
                </div>
                
            </div>
            <?php if( have_rows('galeria_ambientes') ):  ?>
                <div class="modal fade" id="myModal-<?php the_ID()?>" role="dialog">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-slider-start">
                                <?php while( have_rows('galeria_ambientes') ): the_row();
                                    $imageIn = get_sub_field('imagem_ambientes_inside');
                                ?>
                                    <div>
                                        <img src="<?php echo $imageIn['url']?>" alt="">
                                    </div>
                                <?php endwhile;?>
                            </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif?>
        <?php endwhile;endif;?>
    </div>
</div>

<?php
get_footer();

?>
<style>
.card{
    margin:20px;
}
</style>
