<?php get_header(); ?>

<div class="container">
    <div class="row">    
        <!-- Blog Entries Column -->
        <div class="col-md-8 my-4">
            
        <?php 
                
        while(have_posts()) {
            the_post();
        
        ?>
        
            <!-- Blog Post -->
            <div class="card mb-4">
                <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title"><?php the_title(); ?></h2>
                    <p class="text-muted">Posted on <span class="entry-date"><?php echo get_the_date(); ?></span></p>
                    <p class="card-text"><?php echo get_the_content(); ?></p>
                    <div class="card-footer text-muted">
                        <span class="post-categories"><?php echo get_the_category_list(', '); ?></span>
                    </div>
                </div>
            </div>
                
        <?php }

            wp_reset_query(); 
        
        ?>
        
        <?php echo paginate_links(); ?>

                
        
        </div>
        
        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
                </span>
            </div>
            </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                            <a href="#">Web Design</a>
                            </li>
                            <li>
                            <a href="#">HTML</a>
                            </li>
                            <li>
                            <a href="#">Freebies</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            <li>
                            <a href="#">JavaScript</a>
                            </li>
                            <li>
                            <a href="#">CSS</a>
                            </li>
                            <li>
                            <a href="#">Tutorials</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>