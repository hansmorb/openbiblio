<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
class Search {
  function type($title, $within, $fields, $method='words', $operator='like', $where='anywhere') {
    return ['title'=>$title, 'within'=>$within, 'fields'=>$fields, 'method'=>$method, 'operator'=>$operator, 'where'=>$where];
  }
  function getParamDefs($types) {
    $l = [];
    foreach ($types as $n=>$t) {
      $l[] = [$n, ['title'=>$t['title']]];
    }
    return [['group', 'terms', ['repeatable'=>true, 'must_have'=>'text'], [['select', 'type', ['title'=>'Search Type'], $l], ['string', 'text', ['title'=>'Search Text']], ['select', 'exact', ['title'=>'Exact Match', 'default'=>'0'], [['0', ['title'=>'No']], ['1', ['title'=>'Yes']]]]]]];
  }
  function getTerms($types, $terms) {
    $ret = [];
    foreach ($terms as $t) {
      assert($t[0] == "group");
      $t = $t[1];
      foreach (['type', 'text', 'exact'] as $n) {
        if ($t[$n]) {
          assert($t[$n][0] == "string");
          $t[$n] = $t[$n][1];
        }
      }
      [$type, $text, $exact] = $t;
      if (!array_key_exists($t['type'], $types)) {
        continue;
      }
      if ($types[$t['type']]['method'] == 'words' and !$t['exact']) {
       $words = (new Search())->explodeQuoted($t['text']);
        // Optimize the query a bit by eliminating duplicates and looking for longer
        // words first.  This should help cut down the number of records that have
        // to be scanned for subsequent words.
        usort($words, ['Search', 'lencmp']);
        foreach (array_unique($words) as $word) {
          if ($word == "") {
            continue;
          }
          array_push($ret, [$t['type'], $word, $t['exact']]);
        }
      } else {
        array_push($ret, [$t['type'], $t['text'], $t['exact']]);
      }
    }
    return $ret;
  }
  // for sorting strings longest to shortest
  function lencmp($a, $b) {
    $ac = is_countable($a) ? count($a) : 0;
    $bc = is_countable($b) ? count($b) : 0;
    if ($ac == $bc) {
      return 0;
    }
    return $ac > \BC ? -1 : +1;
  }
  function explodeQuoted($str) {
    $elements=[];
    $s = "";
    $q = false;
    $bs = false;
    for($i=0; $i<strlen($str); $i++) {
      if ($q) {
        if ($bs) {
          $s .= $str[$i];
          $bs = false;
        } else if ($str[$i] == "\\") {
          $bs = true;
        } else if ($str[$i] == "\"") {
          $q = false;
        } else {
          $s .= $str[$i];
        }
      } else {
        if ($str[$i] == "\"") {
          $q = true;
        } else if ($str[$i] == " " or $str[$i] == "\t"
                   or $str[$i] == "\r" or $str[$i] == "\n") {
          if (strlen($s)) {
            $elements[] = $s;
            $s = "";
          }
        } else {
          $s .= $str[$i];
        }
      }
    }
    if (strlen($s))
      $elements[] = $s;
    return $elements;
  }
}

?>
