
<?php
  get_header();
?>

    <div id="carouselExampleControls" class="carousel slide header-slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
          // параметры по умолчанию
          $my_posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => 'slider',
            'orderby'     => 'date',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );

          foreach( $my_posts as $post ){
            setup_postdata( $post );
            ?>
              <div class="carousel-item 
              <?php
                $field = get_field('slider_first_check');
                if ($field == 'yes') {
                  echo 'active';
                }
               
               ?>">
              <img class="header-background" src="<?php the_field('slider_img'); ?>" alt="Doc">
              <div class="container">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="content">
                      <h1>
                      <?php the_field('slider_headtag') ?>
                      </h1>
                      <p><?php the_field('slider_text') ?></p>
                      <?php
                $field = get_field('slider_btn');
                if ($field == 'on') {
                  ?>
                    <a href="<?php the_field('slider_btn_link') ?>" class="btn"><?php the_field('slider_btn_text') ?></a>;
                  <?php
                  
                }
               
               ?>
                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }

          wp_reset_postdata(); // сброс
        ?>

   
   
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- <img class="header-background" src="<?php echo bloginfo('template_url'); ?>/assets/img/header-bg.jpg" alt="Doc"> -->
    <div class="container visibility-hidden">
      <div class="row">
        <div class="col-lg-12">
          <div class="content">
            <h1><b>Медицинский Центр</b><br> Которому можно Доверять</h1>
            <p>Медицинский центр Medicare - это команда врачей, готовых ответить на все ваши медицинские вопросы. Наша
              специализированная команда не оставит желать лучшего.</p>
            <a href="#" class="btn">О Нас</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container xtra">
      <div class="row xtra-header">
        
        <div class="col-lg-12">
          <div class="xtra-header-items">
            <div class="item">
              <h3>График работы</h3>
              <div class="d-flex">
                <p>Пн-Пт:</p>
                <p><?php the_field('schedule_1'); ?></p>
              </div>
              <div class="d-flex">
                <p>Сб-Вс:</p>
                <p><?php the_field('schedule_2'); ?></p>
              </div>
              <a class="phone" href="tel:<?php the_field('phone_number_1_link'); ?>"><i class="fas fa-phone"></i><?php the_field('phone_number_1'); ?></a>
            </div>
            <div class="item">
              <h3>График работы</h3>
              <div class="d-flex">
                <p>Пн-Пт:</p>
                <p>8:00-23:00</p>
              </div>
              <div class="d-flex">
                <p>Сб-Вс:</p>
                <p>8:00-22:00</p>
              </div>
              <a class="phone" href="tel:+998712780470"><i class="fas fa-phone"></i> +998 (71) 278-04-70</a>
            </div>
            <div class="item">
              <h3>Новости</h3>
              <p>Последние новости медицнского центра</p>
              <div class="but">
                <a class="btn" href="#">Все новости</a>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </header>

  <section class="news">
    <div class="container">
      <div class="row text-center heading">
        <div class="col-lg-12">
          <h2><?php the_field('news_headtag'); ?></h2>
          <p><?php the_field('news_text'); ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="item">
            <div class="image">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/new1.jpg" alt="New">
            </div>
            <div class="item-body">
              <p class="date">3 Ноября 2021</p>
              <h3>Диагностика болезней и инфекций</h3>
              <p>Прогнозируемый опыт на основе мультимедиа и стратегии кросс-медиа роста. Легко визуализируйте
                качественный интеллектуальный капитал без превосходного сотрудничества и ...</p>
              <a href="#" class="more">Читать полностью <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item">
            <div class="image">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/new2.jpg" alt="New">
            </div>
            <div class="item-body">
              <p class="date">3 Ноября 2021</p>
              <h3>Диагностика болезней и инфекций</h3>
              <p>Прогнозируемый опыт на основе мультимедиа и стратегии кросс-медиа роста. Легко визуализируйте
                качественный интеллектуальный капитал без превосходного сотрудничества и ...</p>
              <a href="#" class="more">Читать полностью <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="item">
            <div class="image">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/new3.jpg" alt="New">
            </div>
            <div class="item-body">
              <p class="date">3 Ноября 2021</p>
              <h3>Диагностика болезней и инфекций</h3>
              <p>Прогнозируемый опыт на основе мультимедиа и стратегии кросс-медиа роста. Легко визуализируйте
                качественный интеллектуальный капитал без превосходного сотрудничества и ...</p>
              <a href="#" class="more">Читать полностью <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="current">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-3 col-md-4">
          <div class="item">
            <i class="fas fa-procedures"></i>
            <h3><?php the_field('current_all'); ?></h3>
            <p>Общее количество <br> коек</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="item">
            <i class="fas fa-bed"></i>
            <h3><?php the_field('current_free'); ?></h3>
            <p>Количество свободных <br> коек</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-4">
          <div class="item">
            <i class="fas fa-hospital"></i>
            <h3><?php the_field('current_day'); ?></h3>
            <p>Свободные места для дневного стационара</p>
          </div>
        </div>
      </div>
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
            <h4><?php the_field('main_address'); ?></h4>
            <p>Знайте наши офисы и филиалы. Свяжитесь с нами сегодня.</p>
          </div>
        </div>
        <div class="d-flex">
          <span class="icon">
            <i class="fas fa-phone"></i>
          </span>
          <div class="txt">
            <h4><span class="fir"><?php the_field('phone_number_1'); ?></span> <span class="slash">/</span> <span class="sec"><?php the_field('phone_number_2'); ?></span></h4>
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
              <p><?php the_field('schedule_1'); ?></p>
            </div>
            <div class="d-flex">
              <p>Сб-Вс:</p>
              <p><?php the_field('schedule_2'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


<section class="gov">
  <div class="container">
    <div class="row gov-links">
      <div class="col-lg-12">
         <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
          
            <li class="glide__slide">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/gerb.png" alt="Open data logotype">
              <a href="https://ssv.uz/">Министерство здравоохранения Республики Узбекистан</a>
            </li>
            <li class="glide__slide">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/gerb.png" alt="Open data logotype">
              <a href="https://www.gov.uz/">Правительственный портал Республики Узбекистан</a>
            </li>
            <li class="glide__slide">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/gov-services-logo.png" alt="Open data logotype">
              <a href="https://my.gov.uz/">Единый портал интерактивных государственных услуг</a>
            </li>
            <li class="glide__slide">
              <img src="<?php echo bloginfo('template_url'); ?>/assets/img/gov-data-logo.png" alt="Open data logotype">
              <a href="https://data.gov.uz/">Портал открытых данных Республики Узбекистан</a>
            </li>
          </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left btn" data-glide-dir="<"><i class="fas fa-chevron-left"></i></button>
          <button class="glide__bullet" data-glide-dir="=0"></button>
          <button class="glide__bullet" data-glide-dir="=1"></button>
          <button class="glide__bullet" data-glide-dir="=2"></button>
          <button class="glide__bullet" data-glide-dir="=3"></button>
          <button class="glide__arrow glide__arrow--right btn" data-glide-dir=">"><i class="fas fa-chevron-right"></i></button>
          </span>
          
      </div>
      </div>
      
    </div>
  </div>
</section>

<?php
  get_footer();
?>

<?php
  
?>