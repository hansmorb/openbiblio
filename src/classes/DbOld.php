<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
/* More compatibility for old Query/DbConnection classes.
 * FIXME - lose this cruft.
 */
class DbOld {
  function __construct($results, $id) {
    $this->results = $results;
    $this->id = $id;
  }
  function getInsertId() {
    return $this->id;
  }
  function numRows() {
    $link = (new QueryAny())->db();
    return $link->num_rows($this->results);
  }
  function fetchRow($arrayType=OBIB_ASSOC) {
    if (is_bool($this->results)) {
      return false;
    }
    $link = (new QueryAny())->db();
    return match ($arrayType) {
        OBIB_NUM => $link->fetch_row($this->results),
        OBIB_BOTH => $link->fetch_array_both($this->results),
        default => $link->fetch_assoc($this->results),
    };
    return false;
  }
  function resetResult() {
    $link = (new QueryAny())->db();
    $link->data_seek($this->results, 0);
  }
}
?>