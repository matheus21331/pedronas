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
                <div class="card " >
                    <a href="<?php the_permalink()?>">
                    <div class="card-img-top thumb" style='background-image:url("<?php the_post_thumbnail_url()?>")' alt="Thumb"></div>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title()?></h5>
                        <p class="card-text"><?php the_content()?></p>
                    </div></a>
                </div> 

            </div>
            
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
.card:hover{
    cursor:pointer; 
}
.thumb{
    height:300px;
    background-size:cover;
    background-position:center;
}
</style>
