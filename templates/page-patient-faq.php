<php
/*
Template name: FAQ (Вопрос-Ответ)
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
          <div class="row justify-content-center">
          <div class="col-lg-10">
          <div class="accordion accordion-flush" id="accordionFlushExample">
          <?php
          // параметры по умолчанию
          $my_posts = get_posts( array(
            'numberposts' => -1,
            'category_name'    => 'faq',
            'orderby'     => 'date',
            'order' => 'ASC',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );
            $accordion = 0;
          foreach( $my_posts as $post ){
            setup_postdata( $post );
            ?>
       <div class="accordion-item">
                <h4 class="accordion-header" id="flush-heading<?php echo $accordion; ?>">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?php echo $accordion; ?>" aria-expanded="false" aria-controls="flush-collapseOne">
                    <?php the_field('question'); ?>
                </button>
                </h4>
                <div id="flush-collapse<?php echo $accordion; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                <?php the_field('answer'); ?>
                </div>
                </div>
            </div>
      <?php
      $accordion++;
          }
          
          wp_reset_postdata(); // сброс
        ?>
           
           
            
            </div>
          </div>
          </div>
      </div>
    
  </section>

<?php
    get_footer();
?>
