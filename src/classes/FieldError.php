<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

/* For when an error applies to a particular form or DB field */
class FieldError extends ObibError {
  /* public */
  public $field;
  function __construct($field, $msg) {
    parent::__construct($msg);
    $this->field = $field;
  }
  function listExtract($errors) {
    $msgs = [];
    $l = [];
    foreach ($errors as $e) {
      if (isset($e->field)) {
        $l[$e->field][] = $e->toStr();
      } else {
        $msgs[] = $e->toStr();
      }
    }
    $msg = implode(' ', $msgs);
    foreach ($l as $k=>$v) {
      $l[$k] = implode(' ', $v);
    }
    return [$msg, $l];
  }
  function backToForm($url, $errors) {
    [$msg, $fielderrs] = FieldError::listExtract($errors);
    $_SESSION["postVars"] = mkPostVars();
    $_SESSION["pageErrors"] = $fielderrs;
    if(strchr($url, '?')) {
      header("Location: ".$url."&msg=".U($msg));
    } else {
      header("Location: ".$url."?msg=".U($msg));
    }
    exit();
  }
}

?>
