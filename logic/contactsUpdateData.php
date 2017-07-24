<?php
//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}
$c_id = $_POST['cid'];
$name = $_POST['contact-name'];
$vorname = $_POST['contact-vorname'];
$company = $_POST['contact-company'];
$mail = $_POST['contact-mail'];
$mobile = $_POST['contact-mobile'];
$private = $_POST['contact-private'];
$adress = $_POST['contact-adress'];
$birth = $_POST['contact-birth'];
$skill = $_POST['contact-skill'];
$role = $_POST['contact-role'];

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');


//
//$stid_condition1 = oci_parse($conn, "SELECT * FROM PERSON WHERE ID = '".$c_id."'");
//oci_execute($stid_condition1);
//$already_set1 = oci_fetch_row($stid_condition1);
//if($already_set1) {
//    $stid1 = oci_parse($conn, "UPDATE PERSON SET NAME = '". $name ."', VORNAME = '". $vorname ."', FIRMA = '". $company ."', GEBURTSDATUM = '". $birth ."'  WHERE ID='".$c_id."'");
//} else {
//    $stid1 = oci_parse($conn, "INSERT INTO PERSON (NAME, VORNAME, FIRMA, GEBURTSDATUM) VALUES ('". $name ."', '". $vorname ."', '". $company ."', '". $birth ."')");
//}
//oci_execute($stid1, OCI_COMMIT_ON_SUCCESS);
//
//
//
//$stid_condition2 = oci_parse($conn, "SELECT * FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '".$c_id."' AND KTYP = 'Email'");
//oci_execute($stid_condition2);
//$already_set2 = oci_fetch_row($stid_condition2);
//if($already_set2) {
//    $stid2 = oci_parse($conn, "UPDATE KOMMUNIKATIONSANSCHLUSS SET BEZEICHNUNG = '". $mail ."' WHERE PERSON_ID='".$c_id."' AND KTYP = 'Email'");
//} else {
//    $stid2 = oci_parse($conn, "INSERT INTO KOMMUNIKATIONSANSCHLUSS (BEZEICHNUNG, KTYP) VALUES ('". $mail ."', 'Email')");
//}
//oci_execute($stid2, OCI_COMMIT_ON_SUCCESS);
//
//
//
//$stid_condition3 = oci_parse($conn, "SELECT * FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '".$c_id."' AND KTYP = 'Mobil'");
//oci_execute($stid_condition3);
//$already_set3 = oci_fetch_row($stid_condition3);
//if($already_set3) {
//    $stid3 = oci_parse($conn, "UPDATE KOMMUNIKATIONSANSCHLUSS SET BEZEICHNUNG = '". $mobile ."' WHERE PERSON_ID='".$c_id."' AND KTYP = 'Mobil'");
//} else {
//    $stid3 = oci_parse($conn, "INSERT INTO KOMMUNIKATIONSANSCHLUSS (BEZEICHNUNG, KTYP) VALUES ('". $mobile ."', 'Mobil')");
//}
//oci_execute($stid3, OCI_COMMIT_ON_SUCCESS);
//
//
//
//$stid_condition4 = oci_parse($conn, "SELECT * FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '".$c_id."' AND KTYP = 'Privat'");
//oci_execute($stid_condition4);
//$already_set4 = oci_fetch_row($stid_condition4);
//if($already_set4) {
//    $stid4 = oci_parse($conn, "UPDATE KOMMUNIKATIONSANSCHLUSS SET BEZEICHNUNG = '". $private ."' WHERE PERSON_ID='".$c_id."' AND KTYP = 'Privat'");
//} else {
//    $stid4 = oci_parse($conn, "INSERT INTO KOMMUNIKATIONSANSCHLUSS (BEZEICHNUNG, KTYP) VALUES ('". $private ."', 'Privat')");
//}
//oci_execute($stid4, OCI_COMMIT_ON_SUCCESS);
//
//
//
//$stid_condition5 = oci_parse($conn, "SELECT * FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '".$c_id."' AND KTYP = 'Adresse'");
//oci_execute($stid_condition5);
//$already_set5 = oci_fetch_row($stid_condition5);
//if($already_set5) {
//    $stid5 = oci_parse($conn, "UPDATE KOMMUNIKATIONSANSCHLUSS SET BEZEICHNUNG = '". $adress ."' WHERE PERSON_ID='".$c_id."' AND KTYP = 'Adresse'");
//} else {
//    $stid5 = oci_parse($conn, "INSERT INTO KOMMUNIKATIONSANSCHLUSS (BEZEICHNUNG, KTYP) VALUES ('". $adress ."', 'Adresse')");
//}
//oci_execute($stid5, OCI_COMMIT_ON_SUCCESS);
//
//
//
//
//$stid_output = oci_parse($conn, "SELECT * FROM PERSON WHERE ID = '$c_id'");
//oci_execute($stid_output);
//$fetchRow = oci_fetch_array($stid_output);
//
//
//$stid_output2 = oci_parse($conn, "SELECT BEZEICHNUNG FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '$c_id' AND KTYP = 'Email'");
//oci_execute($stid_output2);
//$fetchRow2 = oci_fetch_array($stid_output2);
//
//$stid_output3 = oci_parse($conn, "SELECT BEZEICHNUNG FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '$c_id' AND KTYP = 'Mobil'");
//oci_execute($stid_output3);
//$fetchRow3 = oci_fetch_array($stid_output3);
//
//$stid_output4 = oci_parse($conn, "SELECT BEZEICHNUNG FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '$c_id' AND KTYP = 'Privat'");
//oci_execute($stid_output4);
//$fetchRow4 = oci_fetch_array($stid_output4);
//
//$stid_output5 = oci_parse($conn, "SELECT BEZEICHNUNG FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '$c_id' AND KTYP = 'Adresse'");
//oci_execute($stid_output5);
//$fetchRow5 = oci_fetch_array($stid_output5);


$stid = oci_parse($conn, "UPDATE PERSON SET NAME = '". $name ."', VORNAME = '". $vorname ."', FIRMA = '". $company ."', GEBURTSDATUM = '". $birth ."'  WHERE ID='".$c_id."'");
oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

$stid2 = oci_parse($conn, "UPDATE KOMMUNIKATIONSANSCHLUSS SET BEZEICHNUNG = '". $mail ."' WHERE PERSON_ID='".$c_id."' AND KTYP = 'Email'");
oci_execute($stid2, OCI_COMMIT_ON_SUCCESS);

$stid3 = oci_parse($conn, "UPDATE KOMMUNIKATIONSANSCHLUSS SET BEZEICHNUNG = '". $mobile ."' WHERE PERSON_ID='".$c_id."' AND KTYP = 'Mobil'");
oci_execute($stid3, OCI_COMMIT_ON_SUCCESS);

$stid4 = oci_parse($conn, "UPDATE KOMMUNIKATIONSANSCHLUSS SET BEZEICHNUNG = '". $private ."' WHERE PERSON_ID='".$c_id."' AND KTYP = 'Privat'");
oci_execute($stid4, OCI_COMMIT_ON_SUCCESS);

$stid5 = oci_parse($conn, "UPDATE KOMMUNIKATIONSANSCHLUSS SET BEZEICHNUNG = '". $adress ."' WHERE PERSON_ID='".$c_id."' AND KTYP = 'Adresse'");
oci_execute($stid5, OCI_COMMIT_ON_SUCCESS);


$stid_output = oci_parse($conn, "SELECT * FROM PERSON WHERE ID = '$c_id'");
oci_execute($stid_output);
$fetchRow = oci_fetch_array($stid_output);


$stid_output2 = oci_parse($conn, "SELECT BEZEICHNUNG FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '$c_id' AND KTYP = 'Email'");
oci_execute($stid_output2);
$fetchRow2 = oci_fetch_array($stid_output2);

$stid_output3 = oci_parse($conn, "SELECT BEZEICHNUNG FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '$c_id' AND KTYP = 'Mobil'");
oci_execute($stid_output3);
$fetchRow3 = oci_fetch_array($stid_output3);

$stid_output4 = oci_parse($conn, "SELECT BEZEICHNUNG FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '$c_id' AND KTYP = 'Privat'");
oci_execute($stid_output4);
$fetchRow4 = oci_fetch_array($stid_output4);

$stid_output5 = oci_parse($conn, "SELECT BEZEICHNUNG FROM KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '$c_id' AND KTYP = 'Adresse'");
oci_execute($stid_output5);
$fetchRow5 = oci_fetch_array($stid_output5);



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

