<?php
/*
Template name: Филиалы центра
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

  <section class="contacts">
      <div class="container">
      <div class="row text-center">
           <div class="col-lg-12">
               <h2><?php pll_e('Данные областных'); ?></h2>
           </div>
       </div>
      </div>
    <div class="container cities">
       <div class="row first">
           <div class="col-lg-12">
               <div class="city-item">
                   <div class="item">
                       <p><?php pll_e('Регион'); ?></p>
                   </div>
                   <div class="item">
                       <p><?php pll_e('ФИО главного врача'); ?></p>
                   </div>
                   <div class="item">
                       <p><?php pll_e('Номер телефона'); ?></p>
                   </div>
                   <div class="item">
                       <p>Email</p>
                   </div>
                   
               </div>
           </div>
       </div>

       <?php
          // параметры по умолчанию
          $my_posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => 'city_item' . $my_lang,
            'orderby'     => 'date',
            'order' => 'ASC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );

          foreach( $my_posts as $post ){
            setup_postdata( $post );
            ?>
       <div class="row">
           <div class="col-lg-12">
               <div class="city-item">
                   <div class="item">
                       <p><?php the_field('city'); ?></p>
                   </div>
                   <div class="item">
                       <p><?php the_field('name'); ?></p>
                   </div>
                   <div class="item">
                       <p><?php the_field('phone'); ?></p>
                   </div>
                   <div class="item">
                       <p><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                   </div>
                   
               </div>
           </div>
       </div>
      <?php
          }

          wp_reset_postdata(); // сброс
        ?>
    </div>
  </section>

<?php
    get_footer();
?>
