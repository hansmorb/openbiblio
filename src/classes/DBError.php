<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

/* Most DB errors are fatal, but we sometimes have to catch them. */
class DbError extends ObibError {
  function __construct(public $sql, public $msg, public $dberror)
  {
  }
  function toStr() {
    $s = $this->msg.': '.$this->dberror;
    if ($this->sql) {
      $s .= ' -- FULL SQL: '.$this->sql;
    }
    return $s;
  }
}
?>
