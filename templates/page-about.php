<?php
/*
Template name: О центре
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
  <!-- <div class="container">
      <div class="row">
          <div class="col-lg-12">
            <?php the_content(); ?>
          </div>
      </div>
  </div> -->

  <section class="history">
      <div class="container first">
          <div class="row justify-content-center text-center">
              <div class="col-lg-8">
                  <img src="<?php the_field('about-image'); ?>" alt="TB center">
              </div>
              <div class="col-lg-8">
                    <h3>О нашем центре</h2>
                    <p><?php the_field('about-text'); ?></p>
                    <a href="#" class="btn">Записаться на консультацию</a>
              </div>
          </div>
      </div>
      <div class="container second">
          <div class="row justify-content-between">
             
              <div class="col-lg-5">
                    <h3>Посмотрите видеоролик о нашем центре</h2>
                    <p>Погрузитесь в наш центр через ролик и виртуально посетите все отделения республиканского специализированного научно-практического медицинского центра фтизиатрии и пульмонологии</p>
              </div>
              <div class="col-lg-6">
                <iframe src="https://www.youtube.com/embed/hJH5AflSPD4?loop=1&modestbranding=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
      </div>
  </section>

<?php
    get_footer();
?>
