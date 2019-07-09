<?php get_header(); ?>




    <div class="container">

<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-8">

    <h1 class="my-4">Page Heading
      <small>Secondary Text</small>
    </h1>

    <?php 
            
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 10,
                'order'   => 'ASC',
            );

            $blogposts = new WP_Query($args);

            while($blogposts->have_posts()) {
                $blogposts->the_post();
            
            
            ?>
    
    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top border-bottom" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
      <div class="card-body">
        <a href="<?php the_permalink(); ?>"><h2 class="card-title"><?php the_title(); ?></h2></a>
        <p class="card-text"><?php echo get_the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More →</a>
      </div>
      <div class="card-footer text-muted">
        Posted on <span class="entry-date"><?php echo get_the_date(); ?></span>
      </div>
    </div>

    <?php }
        wp_reset_query(); 
    ?>

    <!-- Pagination -->
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">← Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer →</a>
      </li>
    </ul>

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

    <!-- Side Widget -->
    <div class="card my-4">
      <h5 class="card-header">Side Widget</h5>
      <div class="card-body">
        You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
      </div>
    </div>

  </div>

</div>
<!-- /.row -->



    <?php get_footer(); ?>