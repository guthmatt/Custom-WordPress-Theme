<?php get_header(); ?>

<div class="">
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
        <div class="col-md-4 my-4" id="sidebar">
            <?php dynamic_sidebar('main_sidebar'); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>