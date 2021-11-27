<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 footer-block left ">
        <?php the_custom_logo(); ?>
          <div>
            
            <p><?php the_field('phone_number_1'); ?></p>
            <p><?php the_field('phone_number_2'); ?></p>
          </div>
          <div>
            <p class="mail"><b><?php the_field('email'); ?></b></p>
          </div>
          <div>
            <a href="#"><i class="fab fa-linkedin"></i></i>
          </a>
          <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i>
          </a>
          <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>
          </a>
          <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i>
          </a>
          </div>
          
        </div>

        <div class="col-lg-12">
          <nav class="navbar navbar-expand-lg">
            <p class="nav-item">© 2021 <b>Mustafa</b> Technologies Inc.</p>


            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Приватность</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Доступность</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Условия</a>
              </li>

            </ul>

          </nav>
        </div>
      </div>
    </div>
  </footer>

  <?php
    wp_footer();
  ?>
</body>

</html>