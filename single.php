<?php

if (in_category('leadership') || in_category('leadership-ru') || in_category('leadership-uz')) {
      include(TEMPLATEPATH.'/single-leadership.php');
  }
   else {

    include(TEMPLATEPATH.'/single-default.php');
  }
?>

