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

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');

//$stid = oci_parse($conn, "INSERT INTO USABILITYTEST(NAME, AUFTRAGGEBER, BESCHREIBUNG, ZULETZT_GEAENDERT) VALUES('".$title."', '".$ag."', '".$desc."', CURRENT_TIMESTAMP)");
$stid = oci_parse($conn, "update USABILITYTEST SET NAME='".$title."', AUFTRAGGEBER='".$ag."', BESCHREIBUNG='".$desc."' WHERE ID='".$ut_id."'");
//$stid = oci_parse($conn, "update P_BETEILIGT_UT SET PERSON_ID='".$talkto."', AUFTRAGGEBER='".$title."', BESCHREIBUNG='".$title."' WHERE ID='".$projectId."'");


// The OCI_NO_AUTO_COMMIT flag tells Oracle not to commit the INSERT immediately
// Use OCI_DEFAULT as the flag for PHP <= 5.3.1.  The two flags are equivalent

$r = oci_execute($stid, OCI_COMMIT_ON_SUCCESS);

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

$stid2 = oci_parse($conn, "SELECT * FROM USABILITYTEST WHERE ID = '$ut_id'");
oci_execute($stid2);

$fetchRow = oci_fetch_array($stid2);

//echo json_encode($fetchRow);
echo json_encode(array(
    "id" => $fetchRow[0],
    "name" => $fetchRow[1],
    "status" => $fetchRow[2],
    "auftraggeber" => $fetchRow[3],
    "erstellt" => $fetchRow[4],
    "geaendert" => $fetchRow[5],
    "beschreibung" => $fetchRow[6]));

?>

