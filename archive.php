<?php get_header(); ?>

<div class="py-5">
    <div class="container">
        <h3 class="pb-4"><?php the_archive_title(); ?></h3>
        <div class="row">
            <div class="col">

            <?php 

                while(have_posts()) {
                    the_post();
            
            ?>

            
                <div class="card mb-4 shadow-sm">
                    <div class="card-body">
                        <a href="<?php the_permalink(); ?>"><h4 class=""><?php the_title(); ?></h4></a>
                        <span class="post-categories"><?php echo get_the_category_list(', '); ?></span>  
                    </div>
                </div>
            </div>
        </div>
        
        <?php }
            wp_reset_query(); 
        ?>

    </div>
</div>

<?php get_footer(); ?>