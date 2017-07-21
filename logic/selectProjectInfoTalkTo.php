<?php

$ut_id = $_POST['utid'];

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


$stid_talkto_output = oci_parse($conn, "SELECT p.ID, p.VORNAME, p.NAME FROM P_BETEILIGT_UT b, PERSON p WHERE b.PERSON_ID = p.ID AND b.UT_ID = '$ut_id'");
oci_execute($stid_talkto_output);

$fetchRow_talkto = oci_fetch_array($stid_talkto_output);

//echo json_encode($fetchRow);
echo json_encode(array(
    "id" => $fetchRow_talkto[0],
    "vorname" => $fetchRow_talkto[1],
    "name" => $fetchRow_talkto[2]));


?>