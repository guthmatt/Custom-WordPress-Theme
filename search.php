<?php get_header(); ?>




  <div class="container">

      <div class="row mb-4">
      
          <!-- Blog Entries Column -->
          <div class="col-md-8">

            <h3 class="my-4">Search results for:
                <?php echo get_search_query(); ?>
            </h3>

            <?php if(have_posts()) { ?>

              <?php 
                  
              while(have_posts()) {
                  the_post();
              
              ?>
          
              <!-- Blog Post -->
              <div class="card mb-5">
                <img class="card-img-top border-bottom" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
                  <div class="card-body">
                      <a href="<?php the_permalink(); ?>"><h2 class="card-title"><?php the_title(); ?></h2></a>
                          <p class="card-text"><?php echo get_the_excerpt(); ?></p>
                          <a href="<?php the_permalink(); ?>" class="btn btn-primary">View →</a>
                  </div>
                  <div class="card-footer text-muted">
                  Posted on <span class="entry-date"><?php echo get_the_date(); ?></span>
                  
                  <span class="post-categories"><?php echo get_the_category_list(', '); ?></span>
                  
                  </div>
              </div>

              <?php }
                  wp_reset_query(); 
              ?>

            <?php } else { ?>
                <div class="no-results">
                   <p class="">Sorry, no search results found.</p>
                </div>
            <?php } ?>


                <?php echo paginate_links(); ?>
                
            
          </div>

          <!-- Sidebar Widgets Column -->
        <div class="col-md-4 my-4" id="sidebar">
            <?php dynamic_sidebar('main_sidebar'); ?>
      </div>
  </div>
  

<?php get_footer(); ?>