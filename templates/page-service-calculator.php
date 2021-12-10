<php
/*
Template name: Калькулятор услуг
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
          <div class="row justify-content-between">
          <div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</button>

  </div>
  <div class="tab-content" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
  </div>
</div>

          </div>
      </div>
    
  </section>

<?php
    get_footer();
?>
