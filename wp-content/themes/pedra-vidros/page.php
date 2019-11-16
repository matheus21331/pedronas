<?php get_header(); ?>
<main class="front-page">
    AQUI É A PAGINA INICIAL
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