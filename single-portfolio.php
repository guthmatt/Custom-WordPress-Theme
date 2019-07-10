<?php get_header(); ?>

<div class="my-5">
    <div>
        <h1><?php the_title(); ?></h1>
        <p class="lead"><?php the_field( "project_excerpt" ); ?></p>
        <a href="<?php the_field( "website_url" ); ?>" class="project-link">Visit site</a>
    </div>
    
    <div class="project-images mt-4">

        <?php 

        $image = get_field('project_image_1');

        if( !empty($image) ): ?>

            <img class="img-fluid border mb-5" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>


        <?php 

        $image = get_field('project_image_2');

        if( !empty($image) ): ?>

            <img class="img-fluid border mb-5" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>

        <?php 

        $image = get_field('project_image_3');

        if( !empty($image) ): ?>

            <img class="img-fluid border mb-5" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>

        <?php 

        $image = get_field('project_image_4');

        if( !empty($image) ): ?>

            <img class="img-fluid border mb-5" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

        <?php endif; ?>

    </div>
</div>


<?php get_footer(); ?>