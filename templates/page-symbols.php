<php
/*
Template name: Государственные символы
*/
?>

<?php
    get_header();
?>

<div class="header-slide">
        <div class="carousel-item active">
        <img src="<?php the_field('bg-image') ?>" class="header-background" alt="Background"> 
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

  <section class="history">
      <div class="container first">
        <div class="row text-center justify-content-center">
            <div class="col-lg-6">
                <img src="<?php the_field('image'); ?>" alt="Symbol" class="p-4">
            </div>
            <div class="col-lg-12">
            
                <h2 class="mt-5 mb-4"><?php the_field('headtag'); ?></h2>
                
               
            </div>
            <div class="col-lg-10">
            <p><?php the_field('text'); ?></p>
            </div>
        </div>
      </div>
    
  </section>

<?php
    get_footer();
?>
