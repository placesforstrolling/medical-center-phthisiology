<?php
/*
Template name: Врачи центра
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
      <div class="row doctors">

<?php
// 1 значение по умолчанию
$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

$the_query = new WP_Query( array(
'posts_per_page' => 12,
'category_name'  => 'doctors' . $my_lang,
'paged'          => $paged,
) );
// цикл вывода полученных записей
while( $the_query->have_posts() ){
$the_query->the_post();
?>

<div class="col-md-3 col-sm-6 mt-4">
  <div class="item">
    <img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
    <h4><a href="<?php the_permalink(); ?>" class=""><?php the_title(); ?></a></h4>
    <span class="role"><?php the_field('role'); ?></span>
  </div>
</div>
<?php 
} 
wp_reset_postdata();

// пагинация для произвольного запроса
$big = 999999999; // уникальное число

// echo paginate_links( array(
// 	'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
// 	'current' => max( 1, get_query_var('paged') ),
// 	'total'   => $the_query->max_num_pages
// ) );
?>
<nav aria-label="Page navigation example" class="">
  <ul class="pagination">
  <?php
echo paginate_links( array(
  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
  'prev_text' => __('<i class="fas fa-angle-double-left"></i>'),
  'next_text' => __('<i class="fas fa-angle-double-right"></i>'),
  'show_all'     => False,
	'end_size'     => 1,
	'mid_size'     => 2,
  'current' => max( 1, get_query_var('paged') ),
  'total' => $the_query->max_num_pages
  ) );
?>
  </ul>
</nav>


          </div>
      </div>
  </section>
<?php
    get_footer();
?>
