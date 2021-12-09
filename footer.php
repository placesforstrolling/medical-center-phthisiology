<footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 footer-block left ">
        <?php the_custom_logo(); ?>
          <div>
            
            <p><?php the_field('phone_number_1', 2); ?></p>
            <p><?php the_field('phone_number_2', 2); ?></p>
          </div>
          <div>
            <p class="mail"><b><?php the_field('email', 2); ?></b></p>
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
            <p class="nav-item">© 2021 <b>"Республиканский специализированный научно - <br> практический медицинский центр фтизиатрии и пульмонологии"</b> </p>


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
  <div class="opportunities">
    <h3>Специальные возможности</h3>
    <div class="d-flex justify-content-center">
      <div class="eye-plus">
        <i class="far fa-plus-square"></i>
      </div>
      <div class="eye-minus">
        <i class="far fa-minus-square"></i>
      </div>
      <div class="eye-reverse">
        <i class="fas fa-file-alt"></i>
      </div>
      <div class="eye-gray">
        <i class="far fa-file-alt"></i>
      </div>
      <div class="eye-normal">
        <i class="far fa-file"></i>
      </div>
     
    </div>
    <i class="far fa-times-circle closer"></i>
   
  </div>
  <?php
    wp_footer();
  ?>
</body>

</html>