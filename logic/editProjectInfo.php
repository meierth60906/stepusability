<?php
//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}
$ut_id = $_POST['utid'];
$title = $_POST['editProjectInfo-title'];
$ag = $_POST['editProjectInfo-ag'];
$talkto = $_POST['editProjectInfo-talkto'];
$desc = $_POST['editProjectInfo-desc'];


// Insert into several tables, rolling back the changes if an error occurs

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');


$stid = oci_parse($conn, "update USABILITYTEST SET NAME='".$title."', AUFTRAGGEBER='".$ag."', BESCHREIBUNG='".$desc."' WHERE ID='".$ut_id."'");

$r = oci_execute($stid, OCI_COMMIT_ON_SUCCESS);



$stid_talkto_condition = oci_parse($conn, "SELECT * FROM P_BETEILIGT_UT WHERE UT_ID = '".$ut_id."'");
oci_execute($stid_talkto_condition);

$has_ansprechpartner = oci_fetch_row($stid_talkto_condition);

if($has_ansprechpartner) {
    $stid_talkto = oci_parse($conn, "UPDATE P_BETEILIGT_UT SET PERSON_ID='".$talkto."', ROLLE_ID='29' WHERE UT_ID='".$ut_id."'");
} else {
    $stid_talkto = oci_parse($conn, "INSERT into P_BETEILIGT_UT (UT_ID, PERSON_ID, ROLLE_ID) values ('".$ut_id."', '".$talkto."', '29')");

}


$r_talkto = oci_execute($stid_talkto, OCI_COMMIT_ON_SUCCESS);

//$print = oci_parse($conn, "SELECT * FROM USABILITYTEST WHERE ID='".$ut_id."'");
//
//oci_execute($print);
//
//$row = oci_fetch_array($print);
//
//echo"<a href='project.php?id=" . $row['ID'] . "' class='link-noblue link-orangehover'>";
//echo"<div class='row m-3 p-3 element-allgemein'>";
//echo"<div class='col-1 project-status'>" . $row['STATUS'] ."</div>";
//echo"<div class='link-orangehover-child font-weight-bold col-4'>" . $row['NAME'] ."</div>";
//echo"<div class='col-3'>" . $row['AUFTRAGGEBER'] ."</div>";
//echo"<div class='col-2 text-right'>" . $row['ERSTELLDATUM'] ."</div>";
//echo"<div class='col-2 text-right'>" . $row['ZULETZT_GEAENDERT'] ."</div>";
//echo"</div>";
//echo"</a>";

$stid_allgemein_output = oci_parse($conn, "SELECT * FROM USABILITYTEST WHERE ID = '$ut_id'");
oci_execute($stid_allgemein_output);

$fetchRow = oci_fetch_array($stid_allgemein_output);


$stid_talkto_output = oci_parse($conn, "SELECT p.ID, p.VORNAME, p.NAME FROM P_BETEILIGT_UT b, PERSON p WHERE b.PERSON_ID = p.ID AND b.UT_ID = '$ut_id'");
oci_execute($stid_talkto_output);

$fetchRow_talkto = oci_fetch_array($stid_talkto_output);



//echo json_encode($fetchRow);
echo json_encode(array(
    "id" => $fetchRow[0],
    "name" => $fetchRow[1],
    "status" => $fetchRow[2],
    "auftraggeber" => $fetchRow[3],
    "erstellt" => $fetchRow[4],
    "geaendert" => $fetchRow[5],
    "beschreibung" => $fetchRow[6],
    "talkid" => $fetchRow_talkto[0],
    "talkvorname" => $fetchRow_talkto[1],
    "talkname" => $fetchRow_talkto[2]));

?>

