<?php

$ut_id = $_POST['utid'];
$p_id = $_POST['pid'];

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM P_BETEILIGT_UT JOIN ROLLE ON ROLLE.ID = P_BETEILIGT_UT.ROLLE_ID WHERE P_BETEILIGT_UT.PERSON_ID = '" . $p_id . "' AND P_BETEILIGT_UT.UT_ID ='" . $ut_id . "'");
oci_execute($stid);

$stid2 = oci_parse($conn, "SELECT * FROM P_BETEILIGT_UT JOIN ROLLE ON ROLLE.ID = P_BETEILIGT_UT.ROLLE_ID");
oci_execute($stid2);

$fetchRowCount = oci_fetch_row($stid2);

if($fetchRowCount) {
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        if($fetchRowCount['ID'] === $row['ID']) {
            echo"<option value='" . $row['ID'] . "' selected>" . $row['NAME'] . ", " . $row['VORNAME'] . "</option>";
        } else {
            echo"<option value='" . $row['ID'] . "'>" . $row['NAME'] . ", " . $row['VORNAME'] . "</option>";
        }
    }
} else {
    echo "<option disabled>Keine Rollen vorhanden</option>";
}

?>