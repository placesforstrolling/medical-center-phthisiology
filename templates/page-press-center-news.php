<php
/*
Template name: Новости центра
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

  <section class="news">
      <div class="container">
          <div class="row">
          <?php
          // параметры по умолчанию
          $my_posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => 'news',
            'orderby'     => 'date',
            'order' => 'DESC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );

          foreach( $my_posts as $post ){
            setup_postdata( $post );
            ?>
      <div class="col-md-4 mt-4">
          <div class="item">
            <div class="image">
              <img src="<?php the_field('news_image'); ?>" alt="New">
            </div>
            <div class="item-body">
              <p class="date"><?php the_time('j F Y'); ?></p>
              <h3><?php echo get_the_title(); ?></h3>
              <p><?php echo kama_excerpt( [ 'maxchar'=>200, 'text'=>get_field('news_text') ] );  ?></p>
              <a href="<?php the_permalink(); ?>" class="more">Читать полностью <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      <?php
          }

          wp_reset_postdata(); // сброс
        ?>
          </div>
      </div>
  </section>

<?php
    get_footer();
?>
