<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

  require_once("../classes/Localize.php");
 
/******************************************************************************
 * Staff represents a library staff member.  Contains business rules for
 * staff member data validation.
 *
 * @author David Stevens <dave@stevens.name>;
 * @version 1.0
 * @access public
 ******************************************************************************
 */
class Staff {
  public $_userid = "";
  public $_lastChangeDt = "";
  public $_lastChangeUserid = "";
  public $_lastChangeUsername = "";
  public $_pwd = "";
  public $_pwdError = "";
  public $_pwd2 = "";
  public $_lastName = "";
  public $_lastNameError = "";
  public $_firstName = "";
  public $_username = "";
  public $_usernameError = "";
  public $_circAuth = false;
  public $_circMbrAuth = FALSE;
  public $_catalogAuth = false;
  public $_adminAuth = false;
  public $_reportsAuth = FALSE;
  public $_suspended = false;
  public $_loc;

  function __construct () {
    $this->_loc = new Localize(OBIB_LOCALE,"classes");
  }

  /****************************************************************************
   * @return boolean true if data is valid, otherwise false.
   * @access public
   ****************************************************************************
   */
  function validateData() {
    $valid = true;
    if ($this->_lastName == "") {
      $valid = false;
      $this->_lastNameError = $this->_loc->getText("staffLastNameReqErr");
    }
    if (strlen($this->_username) < 4) {
      $valid = false;
      $this->_usernameError = $this->_loc->getText("staffUserNameLenErr");
    } elseif (substr_count($this->_username, " ") > 0) {
      $valid = false;
      $this->_usernameError = $this->_loc->getText("staffUserNameCharErr");
    }
    return $valid;
  }

  /****************************************************************************
   * @return boolean true if data is valid, otherwise false.
   * @access public
   ****************************************************************************
   */
  function validatePwd() {
    $valid = true;
    if (strlen($this->_pwd) < 4) {
      $valid = false;
      $this->_pwdError = $this->_loc->getText("staffPwdLenErr");
    } elseif (substr_count($this->_pwd, " ") > 0) {
      $valid = false;
      $this->_pwdError = $this->_loc->getText("staffPwdCharErr");
    } elseif ($this->_pwd != $this->_pwd2) {
      $valid = false;
      $this->_pwdError = $this->_loc->getText("staffPwdMatchErr");
    }
    return $valid;
  }

  /****************************************************************************
   * @return string Staff userid
   * @access public
   ****************************************************************************
   */
  function getUserid() {
    return $this->_userid;
  }
  /****************************************************************************
   * @param string $userid userid of staff member
   * @return void
   * @access public
   ****************************************************************************
   */
  function setUserid($userid) {
    $this->_userid = trim($userid);
  }

  /****************************************************************************
   * @param string $pwd Password of staff member
   * @return void
   * @access public
   ****************************************************************************
   */
  function setPwd($pwd) {
    $this->_pwd = strtolower(trim($pwd));
  }
  function getPwd() {
    return $this->_pwd;
  }
  function getPwdError() {
    return $this->_pwdError;
  }
  function setPwd2($pwd) {
    $this->_pwd2 = strtolower(trim($pwd));
  }
  function getPwd2() {
    return $this->_pwd2;
  }

  /****************************************************************************
   * @return string Staff last name
   * @access public
   ****************************************************************************
   */
  function getLastName() {
    return $this->_lastName;
  }
  /****************************************************************************
   * @return string Last name error text
   * @access public
   ****************************************************************************
   */
  function getLastNameError() {
    return $this->_lastNameError;
  }
  /****************************************************************************
   * @param string $lastName last name of staff member
   * @return void
   * @access public
   ****************************************************************************
   */
  function setLastName($lastName) {
    $this->_lastName = trim($lastName);
  }
  /****************************************************************************
   * @return string first name of staff member
   * @access public
   ****************************************************************************
   */
  function getFirstName() {
    return $this->_firstName;
  }
  /****************************************************************************
   * @param string $firstName first name of staff member
   * @return void
   * @access public
   ****************************************************************************
   */
  function setFirstName($firstName) {
    $this->_firstName = trim($firstName);
  }
  /****************************************************************************
   * @return string Staff username
   * @access public
   ****************************************************************************
   */
  function getUsername() {
    return $this->_username;
  }
  /****************************************************************************
   * @return string Username error text
   * @access public
   ****************************************************************************
   */
  function getUsernameError() {
    return $this->_usernameError;
  }
  /****************************************************************************
   * @param string $username username of staff member
   * @return void
   * @access public
   ****************************************************************************
   */
  function setUsername($username) {
    $this->_username = strtolower(trim($username));
  }
  /****************************************************************************
   * @return boolean true if staff member has circulation authorization
   * @access public
   ****************************************************************************
   */
  function hasCircAuth() {
    return $this->_circAuth;
  }
  /****************************************************************************
   * @param boolean $circAuth true if staff member has circulation authorization
   * @return void
   * @access public
   ****************************************************************************
   */
  function setCircAuth($circAuth) {
    if ($circAuth == true) {
      $this->_circAuth = true;
    } else {
      $this->_circAuth = false;
    }
  }
  /****************************************************************************
   * @return boolean true if staff member has circulation member update authorization
   * @access public
   ****************************************************************************
   */
  function hasCircMbrAuth() {
    return $this->_circMbrAuth;
  }
  /****************************************************************************
   * @param boolean $circAuth true if staff member has circulation member update authorization
   * @return void
   * @access public
   ****************************************************************************
   */
  function setCircMbrAuth($circMbrAuth) {
    if ($circMbrAuth == TRUE) {
      $this->_circMbrAuth = TRUE;
    } else {
      $this->_circMbrAuth = FALSE;
    }
  }
  /****************************************************************************
   * @return boolean true if staff member has catalog authorization
   * @access public
   ****************************************************************************
   */
  function hasCatalogAuth() {
    return $this->_catalogAuth;
  }
  /****************************************************************************
   * @param boolean $catalogAuth true if staff member has catalog authorization
   * @return void
   * @access public
   ****************************************************************************
   */
  function setCatalogAuth($catalogAuth) {
    if ($catalogAuth == true) {
      $this->_catalogAuth = true;
    } else {
      $this->_catalogAuth = false;
    }
  }
  /****************************************************************************
   * @return boolean true if staff member has administration authorization
   * @access public
   ****************************************************************************
   */
  function hasAdminAuth() {
    return $this->_adminAuth;
  }
  /****************************************************************************
   * @param boolean $AdminAuth true if staff member has administration authorization
   * @return void
   * @access public
   ****************************************************************************
   */
  function setAdminAuth($adminAuth) {
    if ($adminAuth == true) {
      $this->_adminAuth = true;
    } else {
      $this->_adminAuth = false;
    }
  }
  /****************************************************************************
   * @return boolean true if staff member has reports authorization
   * @access public
   ****************************************************************************
   */
  function hasReportsAuth() {
    return $this->_reportsAuth;
  }
  /****************************************************************************
   * @param boolean $ReportsAuth true if staff member has reports authorization
   * @return void
   * @access public
   ****************************************************************************
   */
  function setReportsAuth($reportsAuth) {
    if ($reportsAuth == true) {
      $this->_reportsAuth = true;
    } else {
      $this->_reportsAuth = FALSE;
    }
  }
  /****************************************************************************
   * @return boolean true if staff member account has been suspended
   * @access public
   ****************************************************************************
   */
  function isSuspended() {
    return $this->_suspended;
  }
  /****************************************************************************
   * @param boolean $suspended true if staff member has been suspended
   * @return void
   * @access public
   ****************************************************************************
   */
  function setSuspended($suspended) {
    if ($suspended == true) {
      $this->_suspended = true;
    } else {
      $this->_suspended = false;
    }
  }

  function getLastChangeDt() {
    return $this->_lastChangeDt;
  }
  function getLastChangeUserid() {
    return $this->_lastChangeUserid;
  }
  function getLastChangeUsername() {
    return $this->_lastChangeUsername;
  }
  function setCreateDt($value) {
    $this->_createDt = trim($value);
  }
  function setLastChangeDt($value) {
    $this->_lastChangeDt = trim($value);
  }
  function setLastChangeUserid($value) {
    $this->_lastChangeUserid = trim($value);
  }


}

?>
