<php /* Template name: Калькулятор услуг */ ?>

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




  <section class="calculator">
    <div class="container first">
      <div class="row justify-content-between">
        <div class="d-flex align-items-start">



        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <?php
      $parent_id = 178;

      $sub_cats = get_categories( array(
        'child_of' => $parent_id,
        'hide_empty' => 0
      ) );
      if( $sub_cats ){

        foreach( $sub_cats as $cat ){
          ?>
          <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#<?php echo $cat->slug ?>"
          type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php echo $cat->name ?></button>
          <?php
        }
      }
?>

        
            
          </div>

          <div class="tab-content" id="v-pills-tabContent">
          <?php
        $sub_cats = get_categories( array(
          'child_of' => $parent_id,
          'hide_empty' => 0
        ) );
        if( $sub_cats ){
          foreach( $sub_cats as $cat ){

            $myposts = get_posts( array(
              'numberposts' => -1,
              'category'    => $cat->cat_ID,
              'orderby'     => 'post_date',
              'order'       => 'ASC',
            ) );
            global $post;
            ?>
            <div class="tab-pane fade" id="<?php echo $cat->slug ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <?php
            foreach($myposts as $post){
              setup_postdata($post);
              ?>
              <div class="d-flex calcItem" data-price="<?php the_field('service_price') ?>">
                <div class="name"><?php the_field('service_name') ?></div>
                <div class="price"><?php the_field('service_price') ?></div>
                <div class="price no"><?php the_field('service_price_no') ?></div>
                <input class="select" type="checkbox">
              </div>
              <?php
             
            }
            ?>
             </div> 
            <?php
          }

          wp_reset_postdata(); // сбрасываем глобальную переменную пост
        }
?>
            
          </div>

<div class="total"></div>




          <!-- <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
              type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
              type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
          </div>
          <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">1</div>
            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">2
            </div>
          </div> -->

          

        </div>
      </div>
    </div>

  </section>

  <?php
    get_footer();
?>