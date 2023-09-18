<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */
 
/****************************************************************************
 * result types:
 * OBIB_ASSOC - associative array result type
 * OBIB_NUM - numeric array result type
 * OBIB_BOTH - both assoc and numeric array result type
 ****************************************************************************
 */
const OBIB_ASSOC = "1";
const OBIB_NUM   = "2";
const OBIB_BOTH  = "3";

/****************************************************************************
 * search types:
 * OBIB_SEARCH_TITLE
 * OBIB_SEARCH_AUTHOR
 * OBIB_SEARCH_SUBJECT
 ****************************************************************************
 */
const OBIB_SEARCH_BARCODE = "1";
const OBIB_SEARCH_TITLE   = "2";
const OBIB_SEARCH_AUTHOR  = "3";
const OBIB_SEARCH_SUBJECT = "4";
const OBIB_SEARCH_NAME    = "5";
const OBIB_SEARCH_CALLNO  = "6";
const OBIB_SEARCH_KEYWORD = "7";

/****************************************************************************
 *  Misc. system constants
 ****************************************************************************
 */
const OBIB_CODE_VERSION = "0.7.3g";
const OBIB_LATEST_DB_VERSION = "0.7.1";
const OBIB_DEFAULT_STATUS = "in";
const OBIB_STATUS_IN = "in";
const OBIB_STATUS_OUT = "out";
const BIB_STATUS_ON_LOAN = "ln";
const BIB_STATUS_ON_ORDER = "ord";
const OBIB_STATUS_SHELVING_CART = "crt";
const OBIB_STATUS_ON_HOLD = "hld";
const OBIB_MBR_CLASSIFICATION_JUVENILE = "j";
const OBIB_DEMO_FLG = FALSE;
const OBIB_HIGHLIGHT_I18N_FLG = FALSE;
const OBIB_SEARCH_MAXPAGES = 1000;

const OBIB_MYSQL_DATETIME_TYPE = "datetime";
const OBIB_MYSQL_DATETIME_FORMAT = "Y-m-d H:i:s";
const OBIB_MYSQL_DATE_TYPE = "date";
const OBIB_MYSQL_DATE_FORMAT = "Y-m-d";

const OBIB_BARCODE_RE = '/^[A-Za-z0-9._\/\-]+$/';

const OBIB_LOCALE_ROOT = "../locale";

# Not fully implemented yet.
const DB_TABLENAME_PREFIX = "";
const BARCODENMBR = "barcodeNmbr";

?>
