<?php

//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$ut_id = $_POST['utid'];
$t_id = $_POST['tid'];
$name = $_POST['inputCCQuestion'];


$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid_del2 = oci_parse($conn, "DELETE FROM TEXTBAUSTEIN WHERE AB_ID='".$t_id."'");
oci_execute($stid_del2, OCI_COMMIT_ON_SUCCESS);

$stid_del = oci_parse($conn, "DELETE FROM ABSCHNITT WHERE ID='".$t_id."'");
oci_execute($stid_del, OCI_COMMIT_ON_SUCCESS);

?>

