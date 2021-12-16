<?php

if (in_category('leadership') || in_category('leadership-ru') || in_category('leadership-uz')) {
    include(TEMPLATEPATH.'./template-parts/single-leadership.php');
  } elseif (in_category('news') || in_category('news-ru') || in_category('news-uz')) {
    include(TEMPLATEPATH.'./template-parts/single-news.php');
  }
   else {
    include(TEMPLATEPATH.'/single-default.php');
  }
?>

