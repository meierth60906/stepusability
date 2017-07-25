<?php

$count = 0;

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT COUNT(*) AS COUNT FROM TERMIN");
oci_execute($stid);

$fetchRowCount = oci_fetch_row($stid);
$count = $fetchRowCount[0];
echo $count;

?>