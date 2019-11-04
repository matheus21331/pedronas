<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-9">
                <div id="post-entries">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            <h2 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                            <?php the_excerpt(); ?>
                            <div class="meta"> Posted by: <?php the_author() ?> on <?php the_date(); ?> @ <?php the_time() ?> <?php edit_post_link(__('Edit This')); ?><br/>
                                <?php _e("Filed under:"); ?> <?php the_category(',') ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                <?php endwhile; ?>
                </div>
                <?php else: ?>
                    <div class="notfound">
                        <h2 class="storytitle">Not Found</h2>
                        <div class="entry-content">Sorry, but we could not find anything matching your search criteria.</div>
                        <?php require_once(TEMPLATEPATH . "/searchform.php"); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>