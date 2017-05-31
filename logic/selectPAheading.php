<?php

$projectId = $_GET['id'];

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM USABILITYTEST WHERE ID = '$projectId'");
oci_execute($stid);

$fetchRow = oci_fetch_array($stid);

echo $fetchRow[1];

?>