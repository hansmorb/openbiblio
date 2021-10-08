<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
class DbIter extends Iter {
  function DbIter($results) {
    $this->results = $results;
  }
  function count() {
    $link = QueryAny::db();
    return $link->num_rows($this->results);
  }
  function next() {
    $link = QueryAny::db();
    $r = $link->fetch_assoc($this->results);
    if ($r === false) {
      return NULL;
    }
    return $r;
  }
}
?>
