<?php get_header(); ?>

    <div class="jumbotron bg-white jumbotron-fluid">
        <div class="container d-flex flex-column justify-content-center align-items-center">
            <img src="<?php echo get_template_directory_uri(); ?>/img/mkg_headshot.jpg" alt="headshot of mkg" class="rounded-circle mg-fluid img-thumbnail" width="175px" height="175px" >
            
            <h1 class="display-4 pt-3">Front End Developer</h1>
            <div class="">
                    <div class="row align-items-start">
                      <div class="col">
                        
                      </div>
                      <div class="col-sm-12 col-md-10">
                            <p class="lead pt-3">Duis aliquam erat est, ut volutpat urna commodo ullamcorper. Donec tempor, elit quis pellentesque convallis, tellus nunc fermentum enim, vel mollis est lorem id turpis. Duis aliquam erat est, ut volutpat urna commodo ullamcorper. Donec tempor, elit quis pellentesque convallis, tellus nunc fermentum enim, vel mollis est lorem id turpis.</p>
                      </div>
                      <div class="col">
                       
                      </div>
                    </div>
            
            </div>
        </div>
    </div>
    <div class="py-5">
        <div class="">
            <h3 class="pb-4">Client Work</h3>
            <div class="row">

            <?php 
            
            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => 3,
                'order'   => 'ASC',
            );

            $projectposts = new WP_Query($args);

            while($projectposts->have_posts()) {
                $projectposts->the_post();
            
            
            ?>

                <div class="col-lg-4 col-md-6">
                  <div class="card mb-4 shadow-sm">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="portfolio-image" class="border-bottom" width="100%" height="225">
                        <div class="card-body">
                            <a href="<?php the_permalink(); ?>"><h4 class="portfolio-title"><?php the_title(); ?></h4></a>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-secondary">View</a>
                                </div>
                            </div>
                        </div>
                  </div>
                </div>

            <?php }
            wp_reset_query(); 
            ?>

                
                
            </div>
            <a class="" href="<?php echo site_url('/portfolio'); ?>">View Portfolio</a>
        </div>
    </div>
    <div class="py-5">
        <div class="">
            <h3 class="pb-4">Blog Posts</h3>

            <?php 
            
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order'   => 'ASC',
            );

            $blogposts = new WP_Query($args);

            while($blogposts->have_posts()) {
                $blogposts->the_post();
            
            
            ?>

            <div class="row">
                <div class="col">
                    <div class="mb-4">
                        <div class="">
                            <a href="<?php the_permalink(); ?>"><h4 class=""><?php the_title(); ?></h4></a>
                        </div>
                    </div>
                </div>
            </div><?php }
            wp_reset_query(); 
            ?>

            <a class="" href="<?php echo site_url('/blog'); ?>">View All Posts</a>
        </div>
    </div>

    <?php get_footer(); ?>