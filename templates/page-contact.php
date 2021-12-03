<php
/*
Template name: Контакты
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
               <h2>Данные областных противотуберкулёзных диспансеров</h2>
           </div>
       </div>

       <div class="row first">
           <div class="col-lg-12">
               <div class="city-item">
                   <div class="item">
                       <p>Регион</p>
                   </div>
                   <div class="item">
                       <p>ФИО главного врача</p>
                   </div>
                   <div class="item">
                       <p>Номер телефона</p>
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
            'category_name'    => 'city_item',
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


  <section class="map">
    <div id="map">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A9e65407916cfe9ef3dd88c07ea049eaa17353a82c96c0727e664ecdc040a6620&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
      <div class="map-content">
        <div class="d-flex">
          <span class="icon">
            <i class="fas fa-map-marker-alt"></i>
          </span>
          <div class="txt">
            <h4><?php the_field('main_address', 2); ?></h4>
            <p>Знайте наши офисы и филиалы. Свяжитесь с нами сегодня.</p>
          </div>
        </div>
        <div class="d-flex">
          <span class="icon">
            <i class="fas fa-phone"></i>
          </span>
          <div class="txt">
            <h4><span class="fir"><?php the_field('phone_number_1', 2); ?></span> <span class="slash">/</span> <span class="sec"><?php the_field('phone_number_2', 2); ?></span></h4>
            <p>Посетите нашу страницу записи на прием, чтобы найти удобное для вас время</p>
          </div>
        </div>
        <div class="d-flex">
          <span class="icon">
            <i class="far fa-clock"></i>
          </span>
          <div class="txt">
            <h4>Часы работы</h4>
            <div class="d-flex">
              <p>Пн-Пт:</p>
              <p><?php the_field('schedule_1', 2); ?></p>
            </div>
            <div class="d-flex">
              <p>Сб-Вс:</p>
              <p><?php the_field('schedule_2', 2); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
    get_footer();
?>
