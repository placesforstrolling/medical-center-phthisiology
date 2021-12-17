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
          <?php
$parent_id = 178;

# получаем дочерние рубрики
$sub_cats = get_categories( array(
	'child_of' => $parent_id,
	'hide_empty' => 0
) );
if( $sub_cats ){
	foreach( $sub_cats as $cat ){

		// Данные в объекте $cat

		// $cat->term_id
		// $cat->name (Рубрика 1)
		// $cat->slug (rubrika-1)
		// $cat->term_group (0)
		// $cat->term_taxonomy_id (4)
		// $cat->taxonomy (category)
		// $cat->description ()
		// $cat->parent (0)
		// $cat->count (14)
		// $cat->object_id (2743)
		// $cat->cat_ID (4)
		// $cat->category_count (14)
		// $cat->category_description ()
		// $cat->cat_name (Рубрика 1)
		// $cat->category_nicename (rubrika-1)
		// $cat->category_parent (0)

		
    ?>
    <div class="nav flex-column nav-pills me-3" id="<?php echo $cat->slug; ?>" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#<?php echo $cat->slug; ?>" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php echo $cat->name; ?></button>
  </div>
  <?php
		# получаем записи из рубрики
		$myposts = get_posts( array(
			'numberposts' => -1,
			'category'    => $cat->cat_ID,
			'orderby'     => 'post_date',
			'order'       => 'ASC',
		) );
    ?>
  <div class="tab-content" id="v-pills-tabContent">
    <?php
		# выводим записи
		global $post;
		foreach($myposts as $post){
			setup_postdata($post);
      ?>

    <div class="tab-pane fade show active" id="<?php echo $cat->slug; ?>" role="tabpanel" aria-labelledby="v-pills-home-tab"><?php the_field('service_name'); ?> -> <?php the_field('service_price'); ?></div>
  </div>
      <?php
		}
	}

	wp_reset_postdata(); // сбрасываем глобальную переменную пост
}

?>
  

</div>

          </div>
      </div>
    
  </section>

<?php
    get_footer();
?>
