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
$komm0 = $_POST['contact-komm0'];
$komm1 = $_POST['contact-komm1'];
$komm2 = $_POST['contact-komm2'];

$kommId0 = $_POST['kid0'];
$kommId1 = $_POST['kid1'];
$kommId2 = $_POST['kid2'];

$adress = $_POST['contact-adress'];
$birth = $_POST['contact-birth'];
$skill = $_POST['contact-skill'];

$skillEinzeln[] = explode(",", $skill);

$skillArray = array();

$role = $_POST['contact-role'];

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');


$stid = oci_parse($conn, "UPDATE PERSON SET NAME = '". $name ."', VORNAME = '". $vorname ."', FIRMA = '". $company ."', GEBURTSDATUM = '". $birth ."'  WHERE ID='".$c_id."'");
oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

$stid2 = oci_parse($conn, "UPDATE KOMMUNIKATIONSANSCHLUSS SET BEZEICHNUNG = '". $komm0 ."' WHERE ID='".$kommId0."'");
oci_execute($stid2, OCI_COMMIT_ON_SUCCESS);

$stid3 = oci_parse($conn, "UPDATE KOMMUNIKATIONSANSCHLUSS SET BEZEICHNUNG = '". $komm1 ."' WHERE ID='".$kommId1."'");
oci_execute($stid3, OCI_COMMIT_ON_SUCCESS);

$stid4 = oci_parse($conn, "UPDATE KOMMUNIKATIONSANSCHLUSS SET BEZEICHNUNG = '". $komm2 ."' WHERE ID='".$kommId2."'");
oci_execute($stid4, OCI_COMMIT_ON_SUCCESS);

//foreach ($skillEinzeln as $x) {
//    $stid5 = oci_parse($conn, "SELECT ID FROM FAEHIGKEIT WHERE BEZEICHNUNG = '". $x ."'");
//    oci_execute($stid5);
//
//    while ($fetchRowSkills = oci_fetch_array($stid5, OCI_ASSOC+OCI_RETURN_NULLS)) {
//        $skillArray[] = $fetchRowSkills['ID'];
//    }
//}


//
//$stid6 = oci_parse($conn, "UPDATE P_HAT_F SET FAEHIGKEIT_ID = '". $komm2 ."' WHERE ID='".$kommId2."'");
//oci_execute($stid6, OCI_COMMIT_ON_SUCCESS);

$stid5 = oci_parse($conn, "UPDATE KOMMUNIKATIONSANSCHLUSS SET BEZEICHNUNG = '". $adress ."' WHERE PERSON_ID='".$c_id."'");
oci_execute($stid5, OCI_COMMIT_ON_SUCCESS);


//$stid_output = oci_parse($conn, "SELECT * FROM PERSON WHERE ID = '$c_id'");
//oci_execute($stid_output);
//$fetchRow = oci_fetch_array($stid_output);


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
//
//
//
//$nameinitial = substr($fetchRow[1], 0,1);
//$vornameinitial = substr($fetchRow[2],0,1);
//
//
//
//echo json_encode(array(
//    "id" => $fetchRow[0],
//    "name" => $fetchRow[1],
//    "vorname" => $fetchRow[2],
//    "geburtsdatum" => $fetchRow[3],
//    "anrede" => $fetchRow[4],
//    "firma" => $fetchRow[5],
//    "favorit" => $fetchRow[6],
//    "team" => $fetchRow[7],
//    "proband" => $fetchRow[8],
//    "kunde" => $fetchRow[9],
//    "nameinitial" => $nameinitial,
//    "vornameinitial" => $vornameinitial,
//    "email" => $fetchRowEmail[2],
//    "privat" => $fetchRowPrivat[2],
//    "mobil" => $fetchRowMobil[2],
//    "adresse" => $fetchRowAdresse[2]
//));

?>

