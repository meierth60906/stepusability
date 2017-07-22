<?php

//Variablen festlegen
$templateContent = stripslashes($_POST['templateContent']);

echo $templateContent;

//Verbindung aufbauen
$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


//Insert Abfrage für Vorlagen Tabelle
$vorlagenInsert="insert into Vorlage (Vorlage_art, vorlage_name, vorlage_text) values('Einverständniserklärung', 'Vorlage1', '".$templateContent."' )";
$stid = oci_parse($conn, $vorlagenInsert);
if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
    $e = oci_error();
    echo $documentInsert;
    echo $e['message'];
} else {
    header("Location: /templates.php");
}
?>


