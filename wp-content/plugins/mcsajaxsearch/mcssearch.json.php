<?php
// set the maximal number of displayed search results here
$max_result_number = 10;

$result = Array();

if ($_GET['s'] != '') {
    $_SERVER['REQUEST_URI'] = str_replace("wp-content/plugins/mcsajaxsearch/mcssearch.xml.php", 
                                          "", $_SERVER['REQUEST_URI']);
    $posts_per_page = $max_result_number + 1;
    global $table_prefix;
    require('../../../wp-blog-header.php');
    if (count($posts) > 0) {
      foreach (array_slice($posts, 0, $max_result_number) as $post) {
        $result[] = Array('title'=>$post->post_title, 'url'=>$post->guid);
      }
    }
}

#header('Cache-Control: no-cache, must-revalidate');
#header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header ('Content-type: application/x-javascript; charset=utf-8');
$str = Array();
foreach($result as $i)
  $str[] = "{'title': '".$i['title']."', 'url': '".$i['url']."'}";
print($_GET["jsoncallback"].'(['.implode(', ', $str).'])');
?>