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
            <div class="row text-center justify-content-center">
                <div class="col-lg-10">
                    <img src="<?php the_field('news_image'); ?>" alt="New">
                    <p class="date mt-3"><?php the_time('j F Y'); ?></p>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_field('news_text'); ?></p>
                </div>
                <div class="col-lg-10">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();