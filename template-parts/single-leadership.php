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
            <div class="row text-center">
                <div class="col-lg-12">
                    <img src="<?php the_field('image'); ?>" alt="Leader">
                    <h5><?php the_title(); ?></h5>
                    <span class="role"><?php the_field('role'); ?></span>
                    <p><?php the_field('biography'); ?></p>
                    <p><?php pll_e('Номер телефона'); ?>: <?php the_field('phone'); ?></p>
                    <a href="<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                    <b><p><?php pll_e('Прием'); ?> <?php the_field('days'); ?></p> </b>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();