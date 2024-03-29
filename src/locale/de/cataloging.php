<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */

/**********************************************************************************
 *   Instructions for translators:
 *
 *   All gettext key/value pairs are specified as follows:
 *     $trans["key"] = "<php translation code to set the $text variable>";
 *   Allowing translators the ability to execute php code withint the transFunc string
 *   provides the maximum amount of flexibility to format the languange syntax.
 *
 *   Formatting rules:
 *   - Resulting translation string must be stored in a variable called $text.
 *   - Input arguments must be surrounded by % characters (i.e. %pageCount%).
 *   - A backslash ('\') needs to be placed before any special php characters 
 *     (such as $, ", etc.) within the php translation code.
 *
 *   Simple Example:
 *     $trans["homeWelcome"]       = "\$text='Welcome to OpenBiblio';";
 *
 *   Example Containing Argument Substitution:
 *     $trans["searchResult"]      = "\$text='page %page% of %pages%';";
 *
 *   Example Containing a PHP If Statment and Argument Substitution:
 *     $trans["searchResult"]      = 
 *       "if (%items% == 1) {
 *         \$text = '%items% result';
 *       } else {
 *         \$text = '%items% results';
 *       }";
 *
 **********************************************************************************
 */

#****************************************************************************
#*  Common translation text shared among multiple pages
#****************************************************************************
$trans["catalogSubmit"]            = "\$text = '�bermittle';";
$trans["catalogCancel"]            = "\$text = 'Abbrechen';";
$trans["catalogRefresh"]           = "\$text = 'Erneuern';";
$trans["catalogDelete"]            = "\$text = 'L�schen';";
$trans["catalogFootnote"]          = "\$text = 'Felder mit %symbol% sind ben�tigt.';";
$trans["AnswerYes"]                = "\$text = 'Ja';";
$trans["AnswerNo"]                 = "\$text = 'Nein';";

#****************************************************************************
#*  Translation text for page index.php
#****************************************************************************
$trans["indexHdr"]                 = "\$text = 'Katalogisierung';";
$trans["indexBarcodeHdr"]          = "\$text = 'Suche Medium durch Mediennummer';";
$trans["indexBarcodeField"]        = "\$text = 'Mediennummer';";
$trans["indexSearchHdr"]           = "\$text = 'Suche Medium durch';";
$trans["indexKeyword"]             = "\$text = 'Suchbegriff';";
$trans["indexTitle"]               = "\$text = 'Titel';";
$trans["indexAuthor"]              = "\$text = 'Autor';";
$trans["indexSubject"]             = "\$text = 'Schlagwort';";
$trans["indexButton"]              = "\$text = 'Suche';";

#****************************************************************************
#*  Translation text for page biblio_fields.php
#****************************************************************************
$trans["biblioFieldsLabel"]        = "\$text = 'Medium';";
$trans["biblioFieldsMaterialTyp"]  = "\$text = 'Medienart';";
$trans["biblioFieldsCollection"]   = "\$text = 'Genre';";
$trans["biblioFieldsCallNmbr"]     = "\$text = 'Standort';";
$trans["biblioFieldsUsmarcFields"] = "\$text = 'Beschreibungsfelder (nach USMarc)';";
$trans["biblioFieldsOpacFlg"]      = "\$text = 'Anzeige im OPAC';";
$trans["PictDesc"]                 = "\$text = 'Die Bilddatei mu� sich im Verzeichnis openbiblio/pictures befinden.';";

#****************************************************************************
#*  Translation text for page biblio_new.php
#****************************************************************************
$trans["biblioNewFormLabel"]       = "\$text = 'Neues hinzuf�gen';";
$trans["biblioNewSuccess"]         = "\$text = 'Das folgende neue Medium wurde erstellt. Um ein Exemplar hinzuzuf�gen, w�hle \"Neues Exemplar\" aus dem linken Navigationsbereich oder \"F�ge neues Exemplar hinzu\" aus der untenstehenden Information.';";

#****************************************************************************
#*  Translation text for page biblio_edit.php
#****************************************************************************
$trans["biblioEditSuccess"]        = "\$text = 'Das Medium wurde erfolgreich aktualisiert.';";

#****************************************************************************
#*  Translation text for page biblio_copy_new_form.php and biblio_copy_edit_form.php
#****************************************************************************
$trans["biblioCopyNewFormLabel"]   = "\$text = 'F�ge neues Exemplar hinzu';";
$trans["biblioCopyNewBarcode"]     = "\$text = 'Mediennummer';";
$trans["biblioCopyNewDesc"]        = "\$text = 'Beschreibung';";
$trans["biblioCopyNewAuto"]        = "\$text = 'Autom. generieren';";
$trans["biblioCopyNewValidBarco"]  = "\$text = '�berpr�fen';";
$trans["biblioCopyEditFormLabel"]  = "\$text = 'Exemplar bearbeiten';";
$trans["biblioCopyEditFormStatus"] = "\$text = 'Status';";

#****************************************************************************
#*  Translation text for page biblio_copy_new.php
#****************************************************************************
$trans["biblioCopyNewSuccess"]     = "\$text = 'Exemplar erfolgreich erstellt.';";

#****************************************************************************
#*  Translation text for page biblio_copy_edit.php
#****************************************************************************
$trans["biblioCopyEditSuccess"]    = "\$text = 'Exemplar erfolgreich aktualisiert.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del_confirm.php
#****************************************************************************
$trans["biblioCopyDelConfirmErr1"] = "\$text = 'Exemplar konnte nicht gel�scht werden. Das Exemplar darf nicht ausgeliehen sein.';";
$trans["biblioCopyDelConfirmMsg"]  = "\$text = 'M�chten sie wirklich das Exemplar mit der Mediennummer %barcodeNmbr% l�schen? Dieses wird auch die Ausleihhistory �ber dieses Exemplar l�schen.';";

#****************************************************************************
#*  Translation text for page biblio_copy_del.php
#****************************************************************************
$trans["biblioCopyDelSuccess"]     = "\$text = 'Das Exemplar mit der Mediennummer %barcode% wurde erfolgreich gel�scht.';";

#****************************************************************************
#*  Translation text for page biblio_marc_list.php
#****************************************************************************
$trans["biblioMarcListMarcSelect"] = "\$text = 'F�ge neues MARC-Feld hinzu';";
$trans["biblioMarcListHdr"]        = "\$text = 'MARC-Feld Information';";
$trans["biblioMarcListTbleCol1"]   = "\$text = 'Funktion';";
$trans["biblioMarcListTbleCol2"]   = "\$text = 'Tag';";
$trans["biblioMarcListTbleCol3"]   = "\$text = 'Tag-Beschreibung';";
$trans["biblioMarcListTbleCol4"]   = "\$text = 'Ind 1';";
$trans["biblioMarcListTbleCol5"]   = "\$text = 'Ind 2';";
$trans["biblioMarcListTbleCol6"]   = "\$text = 'Unterfeld';";
$trans["biblioMarcListTbleCol7"]   = "\$text = 'Unterfeld-Beschreibung';";
$trans["biblioMarcListTbleCol8"]   = "\$text = 'Feld Daten';";
$trans["biblioMarcListNoRows"]     = "\$text = 'Keine MARC-Felder gefunden.';";
$trans["biblioMarcListEdit"]       = "\$text = 'Bearb.';";
$trans["biblioMarcListDel"]        = "\$text = 'L�sche';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["usmarcSelectHdr"]          = "\$text = 'MARC-Feld Auswahl';";
$trans["usmarcSelectInst"]         = "\$text = 'W�hle einen Feldtyp';";
$trans["usmarcSelectNoTags"]       = "\$text = 'Keine Tags gefunden.';";
$trans["usmarcSelectUse"]          = "\$text = 'benutze';";
$trans["usmarcCloseWindow"]        = "\$text = 'Schlie�e Fenster';";

#****************************************************************************
#*  Translation text for page biblio_marc_new_form.php
#****************************************************************************
$trans["biblioMarcNewFormHdr"]     = "\$text = 'F�ge neues MARC-Feld hinzu';";
$trans["biblioMarcNewFormTag"]     = "\$text = 'Tag';";
$trans["biblioMarcNewFormSubfld"]  = "\$text = 'Unterfeld';";
$trans["biblioMarcNewFormData"]    = "\$text = 'Feld-Daten';";
$trans["biblioMarcNewFormInd1"]    = "\$text = 'Indikator 1';";
$trans["biblioMarcNewFormInd2"]    = "\$text = 'Indikator 2';";
$trans["biblioMarcNewFormSelect"]  = "\$text = 'W�hle aus';";

#****************************************************************************
#*  Translation text for page biblio_marc_new.php
#****************************************************************************
$trans["biblioMarcNewSuccess"]     = "\$text = 'MARC-Feld erfolgreich hinzugef�gt.';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit_form.php
#****************************************************************************
$trans["biblioMarcEditFormHdr"]    = "\$text = 'Bearbeite MARC-Feld';";

#****************************************************************************
#*  Translation text for page biblio_marc_edit.php
#****************************************************************************
$trans["biblioMarcEditSuccess"]    = "\$text = 'MARC-Feld erfolgreich hinzugef�gt.';";

#****************************************************************************
#*  Translation text for page biblio_marc_del_confirm.php
#****************************************************************************
$trans["biblioMarcDelConfirmMsg"]  = "\$text = 'Sind sie sicher das Feld mit dem Tag %tag% und dem Unterfeld %subfieldCd% zu l�schen?';";

#****************************************************************************
#*  Translation text for page biblio_marc_del.php
#****************************************************************************
$trans["biblioMarcDelSuccess"]     = "\$text = 'MARC-Feld erfolgreich gel�scht.';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelConfirmWarn"]     = "\$text = 'Dieses Medium hat %copyCount% Exemplar(e) und %holdCount% Vorbestellung(en).  Bitte l�schen Sie diese Exemplare und/oder Vorbestellungen, bevor sie dieses Medium l�schen.';";
$trans["biblioDelConfirmReturn"]   = "\$text = 'kehre zur Medieninformation zur�ck';";
$trans["biblioDelConfirmMsg"]      = "\$text = 'Sind sie sicher das Medium mit dem Titel %title% zu l�schen?';";

#****************************************************************************
#*  Translation text for page biblio_del_confirm.php
#****************************************************************************
$trans["biblioDelMsg"]             = "\$text = 'Das Medium mit dem Titel, %title%, wurde gel�scht.';";
$trans["biblioDelReturn"]          = "\$text = 'Kehre zur Mediensuche zur�ck';";

#****************************************************************************
#*  Translation text for page biblio_hold_list.php
#****************************************************************************
$trans["biblioHoldListHead"]       = "\$text = 'Medien-Vorbestellungen:';";
$trans["biblioHoldListNoHolds"]    = "\$text = 'Zur Zeit sind keine Exemplare vorbestellt.';";
$trans["biblioHoldListHdr1"]       = "\$text = 'Funktion';";
$trans["biblioHoldListHdr2"]       = "\$text = 'Exemplar';";
$trans["biblioHoldListHdr3"]       = "\$text = 'Vorbestellt';";
$trans["biblioHoldListHdr4"]       = "\$text = 'Benutzer';";
$trans["biblioHoldListHdr5"]       = "\$text = 'Status';";
$trans["biblioHoldListHdr6"]       = "\$text = 'R�ckgabe';";
$trans["biblioHoldListdel"]        = "\$text = 'L�sche';";

#****************************************************************************
#*  Translation text for page noauth.php
#****************************************************************************
$trans["NotAuth"]                 = "\$text = 'Sie sind nicht berechtigt die Katalogisierung zu benutzen';";

#****************************************************************************
#*  Translation text for page upload_usmarc.php and upload_usmarc_form.php
#****************************************************************************
$trans["MarcUploadTest"]            = "\$text = 'Teste Datensatz';";
$trans["MarcUploadTestTrue"]        = "\$text = 'Wahr';";
$trans["MarcUploadTestFalse"]       = "\$text = 'Falsch';";
$trans["MarcUploadTestFileUpload"]  = "\$text = 'USMarc Eingabe-Datei';";
$trans["MarcUploadRecordsUploaded"] = "\$text = 'Datens�tze hochgeladen';";
$trans["MarcUploadMarcRecord"]      = "\$text = 'MARC Eintrag';";
$trans["MarcUploadTag"]             = "\$text = 'Tag';";
$trans["MarcUploadSubfield"]        = "\$text = 'Sub';";
$trans["MarcUploadData"]            = "\$text = 'Daten';";
$trans["MarcUploadRawData"]         = "\$text = 'Reine Daten:';";
$trans["UploadFile"]                = "\$text = 'Datei hochladen';";

#****************************************************************************
#*  Translation text for page usmarc_select.php
#****************************************************************************
$trans["PoweredByOB"]                 = "\$text = 'Powered by OpenBiblio';";
$trans["Copyright"]                   = "\$text = 'Copyright &copy; 2002-2005';";
$trans["underthe"]                    = "\$text = 'under the';";
$trans["GNU"]                 = "\$text = 'GNU General Public License';";

$trans["catalogResults"]                 = "\$text = 'Search Results';";

#****************************************************************************
#*  Translation text for page biblio_history.php
#****************************************************************************
$trans["Bibliography Checkout History:"]     = "\$text = 'Ausleihhistorie des Mediums';";
$trans["Date"]                               = "\$text = 'Datum';";
$trans["Barcode"]                            = "\$text = 'Barcode';";
$trans["New Status"]                         = "\$text = 'Neuer Status';";
$trans["Member"]                             = "\$text = 'Mitglied';";
$trans["Due Date"]                           = "\$text = 'R�ckgabedatum';";
$trans["No history was found."]              = "\$text = 'Keine Historie gefunden.';";

?>
