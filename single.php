<?php
get_header();
?>
<div class="header-slide">
        <div class="carousel-item active">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/header-bg1.jpg" class="header-background" alt=""> 
        </div>
    </div>
    
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="content">
              <h1><?php the_title(); ?></h1>
              <div class="breadcrumbs">
                  <a href="./index.html">Главная</a> / <a href="#">О центре</a> / <a href="#">История центра</a>
              </div> 
            </div>
          </div>
        </div>
      </div>
  </header>
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
