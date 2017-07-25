<?php

//Variablen festlegen
$vorname = $_POST['contact-vorname'];
$nachname = $_POST['contact-nachname'];
$firma = $_POST['contact-firma'];
$strasse = $_POST['contact-strasse'];
$plz = $_POST['contact-plz'];
$ort = $_POST['contact-ort'];
$geburtsdatum = $_POST['contact-geburtsdatum'];
$favorit = $_POST['contact-favourite'];

if (isset($_POST['contact-team'])) {
    $team = $_POST['contact-team'];
} else {
    $team = 0;
}

if (isset($_POST['contact-proband'])) {
    $proband = $_POST['contact-proband'];
} else {
    $proband = 0;
}


if (isset($_POST['contact-kunde'])) {
    $kunde = $_POST['contact-kunde'];
} else {
    $kunde = 0;
}

/*echo $_POST['com_type'][0];
echo $_POST['com_value'][0];
echo $_POST['com_type'][1];
echo $_POST['com_value'][1];*/

//Verbindung aufbauen
$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


//Insert Abfrage für Person Tabelle
$personInsert="insert into Person (Name, Vorname, Geburtsdatum, Firma, Team, Proband, Kunde, Favorit) values('".$nachname."', '".$vorname."', to_date('$geburtsdatum','yyyy-mm-dd'), '".$firma."',$team,$proband,$kunde, $favorit) returning id into :id";
$stid = oci_parse($conn, $personInsert);
oci_bind_by_name($stid, ":id",   $id, -1, SQLT_INT);
if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
    $e = oci_error();
    echo $personInsert;
    echo $e['message'];
}


//Insert in den Kommunikationsanschluss
for ($i = 0; $i < count($_POST['com_type']); $i++) {
    $kommunikationInsert = "insert into KOMMUNIKATIONSANSCHLUSS (KTYP, BEZEICHNUNG, PERSON_ID) values ('".$_POST['com_type'][$i]."', '".$_POST['com_value'][$i]."', $id)";
    $stid = oci_parse($conn, $kommunikationInsert);
    if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
        $e = oci_error();
        echo $kommunikationInsert;
        echo $e['message'];
    }
}

//Insert in die Fähigkeit
for ($i = 0; $i < count($_POST['skill_value']); $i++) {
    $faehigkeitInsert = "insert into FAEHIGKEIT (BEZEICHNUNG, PERSON_ID) values ('".$_POST['skill_value'][$i]."', $id)";
    $stid = oci_parse($conn, $faehigkeitInsert);
    if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
        $e = oci_error();
        echo $faehigkeitInsert;
        echo $e['message'];
    }
}



//Insert in die Anschrift
$anschriftInsert="insert into ANSCHRIFT(STRASSE, STADT, POSTLEITZAHL, PERSON_ID) values ('".$strasse."', '".$ort."', '$plz', $id)";
$stid = oci_parse($conn, $anschriftInsert);
if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
    $e = oci_error();
    echo $anschriftInsert;
    echo $e['message'];
} else {
    header("Location: /new_contact.php");
}
?>


