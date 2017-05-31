<?php
//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$title = $_POST['createProject-title'];
$ag = $_POST['createProject-ag'];


// Insert into several tables, rolling back the changes if an error occurs

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');

$stid = oci_parse($conn, "INSERT INTO USABILITYTEST(NAME, STATUS, AUFTRAGGEBER, ERSTELLDATUM, ZULETZT_GEAENDERT) VALUES('".$title."', 'Laufend', '".$ag."', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");


// The OCI_NO_AUTO_COMMIT flag tells Oracle not to commit the INSERT immediately
// Use OCI_DEFAULT as the flag for PHP <= 5.3.1.  The two flags are equivalent

$r = oci_execute($stid, OCI_NO_AUTO_COMMIT);
if (!$r) {
    $e = oci_error($stid);
    oci_rollback($conn);  // rollback changes to both tables
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

// Commit the changes to both tables
$r = oci_commit($conn);
if (!$r) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$print = oci_parse($conn, "SELECT * FROM USABILITYTEST WHERE NAME = '$title'");

oci_execute($print);

$row = oci_fetch_array($print);

echo"<a href='project.php?id=" . $row['ID'] . "' onClick='getPage(" . $row['ID'] . ")' class='link-noblue link-orangehover'>";
echo"<div class='row m-3 p-3 element-allgemein'>";
echo"<div class='col-1 project-status'>" . $row['STATUS'] ."</div>";
echo"<div class='link-orangehover-child font-weight-bold col-4'>" . $row['NAME'] ."</div>";
echo"<div class='col-3'>" . $row['AUFTRAGGEBER'] ."</div>";
echo"<div class='col-2 text-right'>" . $row['ERSTELLDATUM'] ."</div>";
echo"<div class='col-2 text-right'>" . $row['ZULETZT_GEAENDERT'] ."</div>";
echo"</div>";
echo"</a>";

?>

