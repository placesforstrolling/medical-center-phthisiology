<?php
/*
Template name: Пресс-центр
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

  <section class="history">
      <div class="container first">
      <?
          
$news = new WP_Query(array( //создаем экземпляр класса
    'post_type' => 'page', // выбираем тип записи которые нужно показывать
    'post_parent' => get_the_ID() // выбираем родителя чьи посты показывать
    )
  );
if($news->have_posts()) {
  while($news->have_posts()){
	$news->the_post(); ?>
	<h2><?=get_the_title();?></h2>
	<img src="<?=get_the_post_thumbnail_url( get_the_id(), 'thumbnail' );?>">
	<p><?=get_the_excerpt();?></p>
	<p><a href="<?=get_the_permalink();?>">Подробнее</a></p>
<?
  }
}
wp_reset_query();

?>
      </div>
    
  </section>

<?php
    get_footer();
?>
