<?php

$post_date_at_time_by_author = '%1$s pada %2$s oleh %3$s';
$post_date_by_auther_with_x_comments = '%1$s oleh %2$s dengan ';

load_theme_textdomain( 'kubrick' );

automatic_feed_links();

register_sidebar(array(
  'name' => 'right',
  'before_widget' => '<li class="widget box border %2$s">',
  'after_widget' => '</li>',
  'before_title' => '<h3>',
  'after_title' => '</h3>'."\n",
    ));

register_sidebar(array(
  'name' => 'left',
  'before_widget' => '<li class="widget box border %2$s">',
  'after_widget' => '</li>',
  'before_title' => '<h3>',
  'after_title' => '</h3>',
    ));

?>