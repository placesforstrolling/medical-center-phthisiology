<?php get_header(); ?>
<div class="header-slide">
        <div class="carousel-item active">
            <img src="<?php the_field('bg-image') ?>" class="header-background" alt=""> 
        </div>
    </div>
    
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="content">
            <h1><?php the_title(); ?></h1>
              <div class="breadcrumbs">
              <?php yoast_breadcrumb( '<nav class="yoast-breadcrumbs">', '</nav>' ); ?>
              </div> 
            </div>
          </div>
        </div>
      </div>
  </header>
	<section class="leader">
        <div class="container">
            <div class="row text-center doctor">
                <div class="col-lg-12">
                <img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
                <h4><?php the_title(); ?></h4>
                <span class="role"><?php the_field('role'); ?></span>
                </div>
                <div class="col-lg-12">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>
    </section>

<?php
get_footer();