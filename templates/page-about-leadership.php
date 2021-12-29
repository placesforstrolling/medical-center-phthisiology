<?php
/*
Template name: Руководство центра
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

    <section class="leadership">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
          <?php
          // параметры по умолчанию
          $my_posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => 'leadership' . $my_lang,
            'orderby'     => 'date',
            'order' => 'ASC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );

          foreach( $my_posts as $post ){
            setup_postdata( $post );
            ?>
       <li class="glide__slide">
            <div class="item">
                    <img src="<?php the_field('image') ?>" alt="">
                    <h5><?php the_title(); ?></h5>
                    <span class="role"><?php the_field('role') ?></span>

                    <p><?php echo kama_excerpt( [ 'maxchar'=>200, 'text'=>get_field('biography') ] );  ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn"><?php pll_e('Подробнее'); ?></a>
             </div>
            </li>
      <?php
          }

          wp_reset_postdata(); // сброс
        ?>
           
          </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left btn" data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
          <button class="glide__arrow glide__arrow--right btn" data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
          </span>
          
      </div>
      </div>
                   
                </div>
            </div>
        </div>
    </section>

<?php
    get_footer();
?>
