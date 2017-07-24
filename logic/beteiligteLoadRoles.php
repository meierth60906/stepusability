<?php

$ut_id = $_POST['utid'];

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM ROLLE");
oci_execute($stid);

$stid2 = oci_parse($conn, "SELECT * FROM ROLLE");
oci_execute($stid2);

$fetchRowCount = oci_fetch_row($stid2);

if($fetchRowCount) {
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        echo"<option value='" . $row['ID'] . "'>" . $row['BEZEICHNUNG'] . "</option>";
    }
} else {
    echo "<option disabled>Keine Rollen vorhanden</option>";
}

?>
