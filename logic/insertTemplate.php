<?php

//Variablen festlegen
$templateContent = $_POST['Vorlage_Text'];
$templateName = $_POST['Vorlage_Name'];
$templateArt = $_POST['Vorlage_Art'];

echo $templateName;
echo $templateArt;

//Verbindung aufbauen
$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$vorlagenSelect="select 1 from Vorlage where Vorlage_Art = '".$templateArt."' AND Vorlage_Name = '".$templateName."'";
$stid = oci_parse($conn, $vorlagenSelect);
if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
    $e = oci_error();
    echo $vorlagenSelect;
    echo $e['message'];
}
$results=array();
$numrows = oci_fetch_all($stid, $results, null, null, OCI_FETCHSTATEMENT_BY_ROW);

echo $numrows;
if ($numrows == 0) {
//Insert Abfrage für Vorlagen Tabelle
    $vorlagenInsert = "insert into Vorlage  (Vorlage_art, vorlage_name, vorlage_text) values('" . $templateArt . "', '" . $templateName . "', '" . $templateContent . "' )";
    $stid = oci_parse($conn, $vorlagenInsert);
    if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
        $e = oci_error();
        echo $vorlagenInsert;
        echo $e['message'];
    } else {
        header("Location: templates.php");
        //echo $vorlagenInsert;
    }
} else {
    $vorlagenUpdate = "update Vorlage set Vorlage_Text = '".$templateContent."' WHERE Vorlage_Art = '".$templateArt."' AND Vorlage_Name = '".$templateName."'";
    $stid = oci_parse($conn, $vorlagenUpdate);
    if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
        $e = oci_error();
        echo $vorlagenUpdate;
        echo $e['message'];
    } else {
        header("Location: templates.php");
        //echo $vorlagenUpdate;
    }

}
?>


