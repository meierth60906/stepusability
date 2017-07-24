<?php

$c_id = $_GET['id'];
$komm = array();

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM PERSON WHERE ID = '".$c_id."'");
oci_execute($stid);

$fetchRow = oci_fetch_array($stid);

$stid_email = oci_parse($conn, "SELECT * FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '".$c_id."' AND KTYP = 'Email'");
oci_execute($stid_email);

$fetchRowEmail = oci_fetch_array($stid_email);

$stid_privat = oci_parse($conn, "SELECT * FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '".$c_id."' AND KTYP = 'Privat'");
oci_execute($stid_privat);

$fetchRowPrivat = oci_fetch_array($stid_privat);

$stid_mobil = oci_parse($conn, "SELECT * FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '".$c_id."' AND KTYP = 'Mobil'");
oci_execute($stid_mobil);

$fetchRowMobil = oci_fetch_array($stid_mobil);

$stid_adresse = oci_parse($conn, "SELECT * FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '".$c_id."' AND KTYP = 'Adresse'");
oci_execute($stid_adresse);

$fetchRowAdresse = oci_fetch_array($stid_adresse);


$nameinitial = substr($fetchRow[1], 0,1);
$vornameinitial = substr($fetchRow[2],0,1);



echo json_encode(array(
    "id" => $fetchRow[0],
    "name" => $fetchRow[1],
    "vorname" => $fetchRow[2],
    "geburtsdatum" => $fetchRow[3],
    "anrede" => $fetchRow[4],
    "firma" => $fetchRow[5],
    "favorit" => $fetchRow[6],
    "team" => $fetchRow[7],
    "proband" => $fetchRow[8],
    "kunde" => $fetchRow[9],
    "nameinitial" => $nameinitial,
    "vornameinitial" => $vornameinitial,
    "email" => $fetchRowEmail[2],
    "privat" => $fetchRowPrivat[2],
    "mobil" => $fetchRowMobil[2],
    "adresse" => $fetchRowAdresse[2]
    ));

?>