<?php

$count = 0;

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM USABILITYTEST WHERE STATUS = 'Laufend'");
oci_execute($stid);

$fetchRowCount = oci_fetch_row($stid);

if($fetchRowCount) {
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        $count++;
    }
}

echo $count;

?>