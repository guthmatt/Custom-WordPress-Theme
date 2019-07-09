<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>
    
  </head>
  <body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light border-bottom">
            <a class="navbar-brand" href="<?php echo site_url(''); ?>">mkg</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse center-nav-for-desktop justify-content-end" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active px-3 border-right" href="<?php echo site_url('/portfolio'); ?>">Portfolio <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link px-3 border-right" href="<?php echo site_url('/blog'); ?>">Blog</a>
                <a class="nav-item nav-link px-3" href="<?php echo site_url('/now'); ?>">Now</a>
                </div>
            </div>
        </nav>
    </header>