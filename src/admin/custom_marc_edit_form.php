<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
  require_once("../shared/common.php");

  session_cache_limiter(null);

  $tab = "admin";
  $nav = "new";
  $focus_form_name = "custommarceditform";
  $focus_form_field = "tag";

  require_once("../functions/inputFuncs.php");
  require_once("../shared/logincheck.php");
  require_once("../catalog/marcFuncs.php");
  require_once("../classes/MaterialFieldQuery.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);

  $postVars = [];
  $pageErrors = [];
  if (isset($_GET["xref_id"])) {
    $xref_id =$_GET["xref_id"];
    $postVars["xref_id"] = $xref_id;
    if (!isset($_GET["materialCd"])) {
      (new Fatal())->internalError('no material code set');
    }
    $materialCd = $_GET["materialCd"];
    $postVars["materialCd"] = $materialCd;
    $matQ = new MaterialFieldQuery;
    $matQ->connect();
    $row = $matQ->get1($xref_id);
    $matQ->close();
    if ($row === NULL) {
      (new Fatal())->internalError('bad xref ID');
    }
    $postVars["tag"] = $row["tag"];
    $postVars["subfieldCd"]  = $row["subfieldCd"];
    $postVars["descr"]  = $row["descr"];
    $postVars["required"] = $row["required"];
    $postVars["cntrltype"] = $row["cntrltype"];
  } else if (isset($_SESSION['postVars'])) {
    $postVars = $_SESSION['postVars'];
    if (isset($_SESSION['pageErrors'])) {
      $pageErrors = $_SESSION['pageErrors'];
    }
    $xref_id = $postVars['xref_id'];
    $materialCd = $postVars['materialCd'];
  }
  if (isset($_GET["tag"])) {
    $postVars["tag"] = $_GET["tag"];
  }
  if (isset($_GET["subfld"])) {
    $postVars["subfieldCd"] = $_GET["subfld"];
  }
  if (isset($_GET["descr"])) {
    $postVars["descr"] = $_GET["descr"];
  }

  require_once("../shared/header.php");

  $returnPg = "../admin/custom_marc_edit_form.php?materialCd=".U($materialCd)."&xref_id=".U($xref_id);
  $fieldid = "";
  $cancelLocation ="../admin/custom_marc_view.php?materialCd=$materialCd";
  if (isset($_GET["msg"])) {
    $msg = "<font class=\"error\">".H($_GET["msg"])."</font><br><br>";
  } else {
    $msg = "";
  }

  #****************************************************************************
  #*  Start of body
  #****************************************************************************
echo $msg;
?>

<form name="custommarceditform" action="custom_marc_edit.php" method="post">
<input type="hidden" name="materialCd" value="<?php echo H($materialCd); ?>">
<input type="hidden" name="xref_id" value="<?php echo H($xref_id); ?>">
<input type="hidden" name="posted" value="posted">
<?php include ("../admin/custom_marc_form_fields.php"); ?>
</FORM>
<?php include("../shared/footer.php");?>
    
