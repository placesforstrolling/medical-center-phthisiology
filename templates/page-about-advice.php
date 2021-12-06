<php
/*
Template name: Совет центра
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
      <div class="container first">
          <div class="row justify-content-center advice">
          <?php
          // параметры по умолчанию
          $my_posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => 'advice',
            'orderby'     => 'date',
            'order' => 'ASC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );
            $accordion = 0;
          foreach( $my_posts as $post ){
            setup_postdata( $post );
            ?>
       <div class="col-lg-4">
           <div class="item">
                <i class="fas fa-user-nurse"></i>
               <h4><?php the_field('name') ?></h4>
               <span class="role">
               <?php the_field('role') ?>
               </span>
               <p><?php the_field('work') ?></p>
           </div>
       </div>
      <?php
      $accordion++;
          }
          
          wp_reset_postdata(); // сброс
        ?>
          </div>
      </div>
  </section>

<?php
    get_footer();
?>
