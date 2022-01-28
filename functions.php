<?php
  function wp_limited_content($content, $limit = 0) {
    $content = strip_tags(get_the_content());
    $articleContentLength = strlen($content);
    if ($articleContentLength > $limit) {
      return mb_substr($content, 0, $limit, 'utf-8').'...';
    }
    else {
      return $content;
    }
  }
?>
