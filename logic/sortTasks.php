<?php

//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$ab_id = $_POST['sortedList'];

// Insert into several tables, rolling back the changes if an error occurs

//$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');

//$stid = oci_parse($conn, "INSERT INTO ABSCHNITT(AB_ORDER) VALUES('".$art."')");
//
//
//
//// The OCI_NO_AUTO_COMMIT flag tells Oracle not to commit the INSERT immediately
//// Use OCI_DEFAULT as the flag for PHP <= 5.3.1.  The two flags are equivalent
//
//$r = oci_execute($stid, OCI_NO_AUTO_COMMIT);
//if (!$r) {
//    $e = oci_error($stid);
//    oci_rollback($conn);  // rollback changes to both tables
//    trigger_error(htmlentities($e['message']), E_USER_ERROR);
//}
//
//// Commit the changes to both tables
//$r = oci_commit($conn);
//if (!$r) {
//    $e = oci_error($conn);
//    trigger_error(htmlentities($e['message']), E_USER_ERROR);
//}

foreach ($ab_id as $order) {

    $stid = oci_parse($conn, "UPDATE ABSCHNITT SET AB_ORDER = $ab_id where ID = $order");
    oci_execute($stid);


}



?>