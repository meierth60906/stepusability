<?php

//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$t_id = $_POST['tid'];


$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid_innertasks= oci_parse($conn, "SELECT * FROM ABSCHNITT WHERE IN_SZENARIO ='".$t_id."'");
oci_execute($stid_innertasks);

while ($row = oci_fetch_array($stid_innertasks, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $innertask_id = $row['ID'];

    $stid_del_innertask2= oci_parse($conn, "DELETE FROM TEXTBAUSTEIN WHERE AB_ID='".$innertask_id."'");
    oci_execute($stid_del_innertask2, OCI_COMMIT_ON_SUCCESS);

    $stid_del_innertask1 = oci_parse($conn, "DELETE FROM ABSCHNITT WHERE ID='".$innertask_id."'");
    oci_execute($stid_del_innertask1, OCI_COMMIT_ON_SUCCESS);
}

$stid_del2 = oci_parse($conn, "DELETE FROM TEXTBAUSTEIN WHERE AB_ID='".$t_id."'");
oci_execute($stid_del2, OCI_COMMIT_ON_SUCCESS);

$stid_del = oci_parse($conn, "DELETE FROM ABSCHNITT WHERE ID='".$t_id."'");
oci_execute($stid_del, OCI_COMMIT_ON_SUCCESS);

?>

