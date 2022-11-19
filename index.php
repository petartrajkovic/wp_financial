<?php get_header(); ?>
<div class="main">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-6">
            <img
              src="<?= get_stylesheet_directory_uri(); ?>/assets/images/image-1.png"
              class="w-100 pt_border-radius-10"
            />
          </div>
          <div class="col-sm-6">
            <h2>Guiding you through every step of the process.</h2>
          </div>
        </div>
        <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <div class="row mt-5">
        <div class="col-sm-4 post_image-div">
        <?php the_post_thumbnail(); ?>
        </div>
        <div class="col-sm-8">
          <h4><?php the_title(); ?></h4>
          <p>
          <?php the_excerpt(); ?>
          </p>
        </div>
      </div>
    <?php
    endwhile;
  endif;
  ?>
        <h3 class="mt-5">
          We would love to help you get on the right track. Learn more about how
          we can help.
        </h3>
        <div class="text-center my-5">
          <button class="pt_button pt_button-yellow">Learn more</button>
        </div>
      </div>
    </div>
<?php get_footer(); ?>
