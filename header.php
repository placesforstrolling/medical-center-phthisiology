<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); echo ' | '; bloginfo('description')?></title>
  <?php 
    wp_head(); 
  ?>
</head>

<body>
  <header>
    <div class="container-fluid">
      <div class="row under-menu">
        <div class="col-lg-12">
          <nav class="navbar under-menu-in">
            
            <ul class="left">
            <?php pll_the_languages(); ?>
            </ul>
            <ul class="right">
              <li class="link">
                <a href="#" class="eyeBtn"><i class="far fa-eye"></i></a>
              </li>|
              <li class="link">
                <a href="<?php echo get_home_url(); ?>/sitemap_index.xml"><i class="fas fa-sitemap"></i></a>
              </li>|
              <li class="link">
                <a href="<?php echo get_home_url(); ?>/feed" targer="_blank"><i class="fas fa-rss"></i></a>
              </li>|
              <li class="link">
                <a id="mobileView" href="#"><i class="fas fa-mobile-alt"></i></a>
              </li>|
              <li class="link">
                <a href="#" onClick="window.print()"><i class="fas fa-print"></i></a>
              </li>|
              <li class="link">
                <a href="<?php echo get_home_url(); ?>/gerb"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/gerb.png" alt="Gerb"></a>
              </li>
              <li class="link">
                <a href="<?php echo get_home_url(); ?>/flag"><img src="<?php echo bloginfo('template_url'); ?>/assets/img/flag.png" alt="Flag"></a>
              </li>
              <li class="link">
                <a href="<?php echo get_home_url(); ?>/gimn"><i class="fas fa-music"></i></a>
              </li>|
            </ul>
          </nav>

        </div>
      </div>
      <div class="row">
        <nav class="navbar navbar-expand-xl navbar-light bg-light">
        
            <div class="container-fluid">
              <div class="navbar-brand" href="#">
               <?php the_custom_logo(); ?>
               <span class="title">Республиканский специализированный<br> научно - 
практический медицинский центр <br>фтизиатрии и пульмонологии</span>
                </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
              // свой класс построения меню:

            wp_nav_menu( [
              'theme_location'  => 'header-menu',
              'container'       => false,
               'menu_class'     => 'navbar-nav',
              'menu_id'         => '',
              'echo'            => true,
              'fallback_cb'     => 'wp_page_menu',
              'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
              'depth'           => 3,
              'walker'          => '',
            ] );
            
            ?>
                <!-- <ul class="navbar-nav">
               
                  <li class="nav-item">
                    <a class="nav-link" href="#">Главная</a>

                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropped" href="#">О центре</a>
                    <ul class="sub-menu">
                      <li class="sub-menu-link"><a href="./center-history.html" class="link">История центра</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Структура центра</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Руководство центра</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Врачи центра</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Совет центра</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Филиалы центра</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Паспорт центра</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Реквезиты центра</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Научная часть центра</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Медицинский журнал центра</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Международное сотрудничество</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Международные конференции и выставки</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Вакансии</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropped" href="#">Отделы и подразделения</a>
                    <ul class="sub-menu">
                      <li class="sub-menu-link"><a href="#" class="link">Научный отдел</a></li>
                      <li class="sub-menu-link sub-sub">
                        <a href="#" class="link">Клинические подразделения</a>
                        <ul class="sub-menu">
                          <li class="sub-menu-link"><a href="#" class="link">Приёмно-консультативная поликлиника</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделение пульмонологии</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделение детского лёгочного туберкулёза</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделение реанимации и интенсивной терапии</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделение поли резистентного туберкулёза</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделение лёгочного туберкулёза</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделение костно-суставного туберкулёза</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделение внелёгочного туберкулёза</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделения диагностики и лечения патологии лёгких и плевры</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделение урогенитального туберкулёза</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделение хирургии лёгких</a></li>
                        </ul>
                      </li>
                      <li class="sub-menu-link sub-sub">
                        <a href="#" class="link">Диагностические подразделения</a>
                        <ul class="sub-menu">
                          
                          <li class="sub-menu-link"><a href="#" class="link">Отделение флюорографии</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделение рентген-функциональной диагностики</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Национальная Референс лаборатория центра по диагностике туберкулёза</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделение клинико-диагностической лаборатории</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Отделение патоморфологии</a></li>
                        </ul>
                      </li>
                      <li class="sub-menu-link"><a href="#" class="link">Медицинский туризм</a></li>
                      <li class="sub-menu-link sub-sub">
                        <a href="#" class="link">Общество</a>
                        <ul class="sub-menu"> 
                          <li class="sub-menu-link"><a href="#" class="link">Республиканское общество фтизиатров и пульмонологов</a></li>
                          <li class="sub-menu-link"><a href="#" class="link">Ассоциация пульмонологов Центральной Азии</a></li>
                        </ul>
                      </li>
                      <li class="sub-menu-link"><a href="#" class="link">Отдел ГРП ГФ</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Отдел закупа</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Аптека</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropped" href="#">Специалистам</a>
                    <ul class="sub-menu">
                      <li class="sub-menu-link"><a href="#" class="link">Усовершенствование врачей и медсестёр</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Постдипломное образование</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Клиническая ординатура</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Кафедра фтизиатрии ТМА</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Кафедра фтизиатрии ТашИУВ</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Кафедра фтизиатрии ТашПМИ</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Библиотека</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropped" href="#">Пациентам</a>
                    <ul class="sub-menu">
                      <li class="sub-menu-link"><a href="#" class="link">Школа ХОБЛ</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Школа астматиков</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Памятка для больных туберкулёзом</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">FAQ (Вопрос-Ответ)</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropped" href="#">Интерактивные услуги</a>
                    <ul class="sub-menu">
                      <li class="sub-menu-link"><a href="#" class="link">График работы врачей</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">График приёма администрацией</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Калькулятор услуг</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Прейскурант</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Онлайн запись на приём</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link dropped" href="#">Пресс-центр</a>
                    <ul class="sub-menu">
                      <li class="sub-menu-link"><a href="#" class="link">Новости центра</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Новости о туберкулёзе в мире</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Фотогалерея</a></li>
                      <li class="sub-menu-link"><a href="#" class="link">Видео центра</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Контакты</a>
                  </li>
                </ul> -->
                <a href="https://technomed.uz/OnlineRecord/AllDoctor?UniqueID=FF9E547268804594BDB98542CEF5AF25"
                  class="btn me-2"><?php pll_e('online appointment'); ?></a>
                <!-- <form class="d-flex">
                              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                              <button class="btn btn-outline-success" type="submit">Search</button>
                            </form> -->
              </div>
            </div>
          </nav>
      </div>
    </div>