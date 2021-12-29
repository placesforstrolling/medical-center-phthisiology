<?php

if (in_category('leadership') || in_category('leadership-en') || in_category('leadership-uz')) {
    include(TEMPLATEPATH.'./template-parts/single-leadership.php');
  } elseif (in_category('news') || in_category('news-en') || in_category('news-uz')) {
    include(TEMPLATEPATH.'./template-parts/single-news.php');
  } elseif (in_category('doctors')) {
    include(TEMPLATEPATH.'./template-parts/single-doctor.php');
  }
   else {
    include(TEMPLATEPATH.'/single-default.php');
  }
?>

