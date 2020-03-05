<?php get_header(); ?>
<main class="front-page">

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="wp-content\themes\pedra-vidros\slick-1.8.1\slick-1.8.1\slick\slick.min.js"></script>

    
</main>

<?php
    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post__not_in' => array(9),
        'no_found_rows'  => true,
        'orderby' => 'date',
        'order' => 'ASC',
    );

    $_pages = new WP_Query($args);

    if ($_pages->have_posts()) {
        while ($_pages->have_posts()) {
            $_pages->the_post();
            if(get_page_template_slug($_pages->ID)) {
                include (TEMPLATEPATH . '/'. get_page_template_slug($_pages->ID));
            }
        }
    }

    wp_reset_postdata();
?>

<?php get_footer(); ?>

