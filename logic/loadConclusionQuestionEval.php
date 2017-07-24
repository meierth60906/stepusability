<?php

//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$ut_id = $_POST['utid'];


$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT WHERE ID = '".$t_id."'");
oci_execute($stid);

$fetchRow = oci_fetch_array($stid);

echo json_encode(array(
    "id" => $fetchRow[0],
    "art" => $fetchRow[1],
    "utid" => $fetchRow[2],
    "name" => $fetchRow[3]));


?>