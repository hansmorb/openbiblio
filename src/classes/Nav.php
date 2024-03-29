<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
$_Nav_menu = [];
$_Nav_unparented = [];
class Nav {
  # The given $url is an URL do not HTML-escape it!
  function node($path, $title, $url=NULL) {
    (new Nav())->_node($path, $title, $url);
    (new Nav())->_reparent();
  }
  function _node($path, $title, $url) {
    $parent =& (new Nav())->_getParent($path);
    $parent[] = ['path'=>$path, 'title'=>$title, 'url'=>$url, 'children'=>[]];
  }
  function display($activePath) {
    global $_Nav_menu;
    (new Nav())->_display($activePath, $_Nav_menu);
  }
  function _display($activePath, $menu, $class='nav_main') {
    echo '<ul class="'.$class.'">';
    foreach ($menu as $m) {
      if ($m['path'] != $activePath) {
        $link = '<a href="'.H($m['url']).'">'.H($m['title']).'</a>';
      } else {
        $link = H($m['title']);
      }
      if ((new Nav())->_pathWithin($activePath, $m['path'])) {
        echo '<li class="nav_selected">'.$link;
        (new Nav())->_display($activePath, $m['children'], 'nav_sub');
        echo '</li>';
      } elseif ($m['url']) {
        echo '<li>'.$link.'</li>';
      }
    }
    echo '</ul>';
  }
  function _pathWithin($sub, $path) {
    return ($sub == $path) or ($path.'/' == substr($sub, 0, strlen($path)+1));
  }
  function &_getParent($path) {
    global $_Nav_menu;
    if (preg_match('|^(.*)/([^/]*)?$|', $path, $m)) {
      $path = $m[1];
    } else {
      $path = "";
    }
    return (new Nav())->_getParent_real($path, $_Nav_menu);
  }
  function &_getParent_real($path, &$menu, $curpath="") {
    global $_Nav_unparented;
    if ($path == $curpath) {
      return $menu;
    }
    # Not using foreach because it assigns copies, not references.
    for ($i=0; $i < (is_countable($menu) ? count($menu) : 0); $i++) {
      if ((new Nav())->_pathWithin($path, $menu[$i]['path'])) {
        return (new Nav())->_getParent_real($path, $menu[$i]['children'], $menu[$i]['path']);
      }
    }
    return $_Nav_unparented;
  }
  function _reparent() {
    global $_Nav_unparented;
    $nodes = $_Nav_unparented;
    $_Nav_unparented = [];
    foreach ($nodes as $n) {
      (new Nav())->_node($n['path'], $n['title'], $n['url']);
    }
  }
}

?>
