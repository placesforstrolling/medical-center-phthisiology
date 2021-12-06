<php
/*
Template name: Видео центра
*/
?>

<?php
    get_header();
?>

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

  <section class="history">

      <div class="container second">
          <div class="row justify-content-between">
             
              <div class="col-lg-5">
                    <h3>Посмотрите видеоролик о нашем центре</h2>
                    <p>Погрузитесь в наш центр через ролик и виртуально посетите все отделения республиканского специализированного научно-практического медицинского центра фтизиатрии и пульмонологии</p>
              </div>
              <div class="col-lg-6">
              <?php the_field('video', 2); ?>
            </div>
          </div>
      </div>
  </section>

<?php
    get_footer();
?>
