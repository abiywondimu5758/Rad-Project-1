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

  function benfiratkaya_add_fragment($url, $fragment = '#') {
    return esc_url($url.$fragment);
  }

  function benfiratkaya_get_comment_pagenum_link($page = 0, $fragment = '#comments') {
    global $wp_rewrite;
    if ($wp_rewrite->using_permalinks()) {
      $pagenum_link = user_trailingslashit(trailingslashit(get_permalink()).$wp_rewrite->comments_pagination_base.'-'.$page, 'commentpaged');
    }
    else {
      $pagenum_link = add_query_arg('cpage', $page);
    }
    return benfiratkaya_add_fragment(esc_url($pagenum_link), $fragment);
  }

  function benfiratkaya_is_comment_by_post_author($comment = null) {
    if (is_object($comment) && $comment->user_id > 0) {
      $user = get_userdata($comment->user_id);
  		$post = get_post($comment->comment_post_ID);
  		if (!empty($user) && !empty($post)) {
  			return $comment->user_id === $post->post_author;
  		}
  	}
  	return false;
  }

  function benfiratkaya_writer_badge() {
    return '<i class="fa fa-check-circle text-primary verifiedCircle" data-toggle="tooltip" data-placement="top" title="'.__('Author').'"></i></span>';
  }

  function benfiratkaya_amp_css($amp_template) {
    $theme_uri = get_template_directory_uri();
    echo "@import '$theme_uri/assets/libs/amp/css/amp.min.css';";
  }
  add_action('amp_post_template_css', 'benfiratkaya_amp_css');

  function benfiratkaya_my_filter_head() {
     remove_action('wp_head', '_admin_bar_bump_cb');
  }
  add_action('get_header', 'benfiratkaya_my_filter_head');

  function benfiratkaya_search_filter($query) {
    if ($query->is_search) {
      $query->set('post_type', 'post');
    }
    return $query;
  }
  add_filter('pre_get_posts','benfiratkaya_search_filter');

  function benfiratkaya_exclude_files($excluded_files = array()) {
    $excluded_files[] = '/wp-content/plugins/enlighter/resources/(.*).js';
    return $excluded_files;
  }
  add_filter('rocket_exclude_defer_js', 'benfiratkaya_exclude_files');

  function benfiratkaya_the_custom_logo() {
  	if (function_exists('the_custom_logo')) {
  		the_custom_logo();
  	}
  }

  function benfiratkaya_custom_logo_output($html) {
  	$html = str_replace('custom-logo-link', 'navbar-brand', $html);
  	return $html;
  }
  add_filter('get_custom_logo', 'benfiratkaya_custom_logo_output');
?>