<?php get_header(); ?>

<div class="py-5">
    <div class="container">
        <h3 class="pb-4">Client Work</h3>
        <div class="row">

        <?php 
            
        $args = array(
            'post_type' => 'portfolio',
            
        );

        $projectposts = new WP_Query($args);

        while($projectposts->have_posts()) {
            $projectposts->the_post();
        
        
        ?>

            <div class="col-lg-4 col-md-6">
                <div class="card mb-4 shadow-sm">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="portfolio-image" class="border-bottom" width="100%" height="225">
                    <div class="card-body">
                        <a href="<?php the_permalink(); ?>" class="href"><h4 class="portfolio-title"><?php the_title(); ?></h4></a>
                        <p class="portfolio-text"><?php echo get_the_excerpt(); ?></p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><?php }
                  wp_reset_query(); 
              ?>
    </div>
</div>

<?php get_footer(); ?>