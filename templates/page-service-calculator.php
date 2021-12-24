<?php /* Template name: Калькулятор услуг */ ?>

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

      $cate = get_category_by_slug('services' . $my_lang); 
      $parent_id = $cate->term_id;

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
            <table>
              <tr>
                <th></th>
                <th colspan="2"><?php pll_e('Цена'); ?></th>
                <th></th>
              </tr>
              <tr>
                <th class="name"><?php pll_e('Наименование услуги:'); ?></td>
                <th class="price"><label for="resident"><?php pll_e('Резидент'); ?></label> <br><input type="radio" id="resident" name="resident" class="resident" value="data-price"></th>
                <th class="price"><label for="residentNo"><?php pll_e('Не Резидент'); ?></label> <br><input type="radio" id="residentNo" name="resident" class="resident" value="data-priceNo"></th>
                <th class="selector"></td>
              </tr>

            <?php
            foreach($myposts as $post){
              setup_postdata($post);
              ?>
              <tr class="calcItem" data-price="<?php the_field('service_price') ?>" data-priceNo="<?php the_field('service_price_no') ?>">

                  <td class="name"><?php the_field('service_name') ?></td>
                  <td class="price"><?php the_field('service_price') ?></td>
                  <td class="price no"><?php the_field('service_price_no') ?></td>
                  <td class="selector"><input class="select" type="checkbox"></td>
  
            </tr>
              <?php
             
            }
            ?>
            </table>
             </div> 
            <?php
          }

          wp_reset_postdata(); // сбрасываем глобальную переменную пост
        }
?>
            
          </div>






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
        <div class="total"><?php pll_e('Всего:'); ?> <span class="totalCalc">0</span> <?php pll_e('сум'); ?></div>
      </div>
    </div>

  </section>

  <?php
    get_footer();
?>