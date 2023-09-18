<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../classes/Localize.php");
  require_once("../functions/formatFuncs.php");

/******************************************************************************
 * BiblioCopy represents a library bibliography copy record.  Contains business rules for
 * bibliography data validation.
 *
 * @author David Stevens <dave@stevens.name>;
 * @version 1.0
 * @access public
 ******************************************************************************
 */
class BiblioCopy {
  public $_bibid = "";
  public $_copyid = "";
  public $_createDt = "";
  public $_copyDesc = "";
  public $_barcodeNmbr = "";
  public $_barcodeNmbrError = "";
  public $_statusCd = OBIB_DEFAULT_STATUS;
  public $_statusBeginDt = "";
  public $_dueBackDt = "";
  public $_daysLate = "";
  public $_mbrid = "";
  public $_loc;
  public $_renewalCount = "";
  public $_custom = [];

  function __construct () {
    $this->_loc = new Localize(OBIB_LOCALE,"classes");
  }

  /****************************************************************************
   * @return boolean true if data is valid, otherwise false.
   * @access public
   ****************************************************************************
   */
  function validateData($validBarco) {
    $valid = true;
    if ($this->_barcodeNmbr == "") {
      $valid = false;
      $this->_barcodeNmbrError = $this->_loc->getText("biblioCopyError1");
    } else if (!preg_match(OBIB_BARCODE_RE, $this->_barcodeNmbr) && $validBarco == "CHECKED") {
      $valid = false;
      $this->_barcodeNmbrError = $this->_loc->getText("biblioCopyError2");
    }
    return $valid;
  }

  function getCustom($field) {
    return $this->_custom[$field] ?? "";
  }
  function setCustom($field, $value) {
    $this->_custom[$field] = $value;
  }
  
  /****************************************************************************
   * Getter methods for all fields
   * @return string
   * @access public
   ****************************************************************************
   */
  function getBibid() {
    return $this->_bibid;
  }
  function getCopyid() {
    return $this->_copyid;
  }
  function getCreateDt() {
    return $this->_createDt;
  }
  function getCopyDesc() {
    return $this->_copyDesc;
  }
  function getBarcodeNmbr() {
    return $this->_barcodeNmbr;
  }
  function getBarcodeNmbrError() {
    return $this->_barcodeNmbrError;
  }
  function getStatusCd() {
    return $this->_statusCd;
  }
  function getStatusBeginDt() {
    return $this->_statusBeginDt;
  }
  function getDueBackDt() {
    return $this->_dueBackDt;
  }
  function getDaysLate() {
    return $this->_daysLate;
  }
  function getMbrid() {
    return $this->_mbrid;
  }
  function getRenewalCount() {
    return $this->_renewalCount;
  }

  /****************************************************************************
   * Setter methods for all fields
   * @param string $value new value to set
   * @return void
   * @access public
   ****************************************************************************
   */
  function setBibid($value) {
    $this->_bibid = trim($value);
  }
  function setCopyid($value) {
    $this->_copyid = trim($value);
  }
  function setCreateDt($value) {
    $this->_createDt = trim($value);
  }
  function setCopyDesc($value) {
    $this->_copyDesc = trim($value);
  }
  function setBarcodeNmbr($value) {
    $this->_barcodeNmbr = trim($value);
  }
  function setStatusCd($value) {
    $this->_statusCd = trim($value);
  }
  function setStatusBeginDt($value) {
    $this->_statusBeginDt = trim($value);
  }
  function setDueBackDt($value) {
    $this->_dueBackDt = trim($value);
  }
  function setDaysLate($value) {
    $this->_daysLate = trim($value);
  }
  function setMbrid($value) {
    $this->_mbrid = trim($value);
  }
  function setRenewalCount($value) {
    $this->_renewalCount = trim($value);
  }
}

?>
