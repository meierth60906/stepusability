<?php

$ut_id = $_POST['utid'];

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM PERSON ORDER BY NAME, VORNAME ASC");
oci_execute($stid);

$stid2 = oci_parse($conn, "SELECT * FROM PERSON ORDER BY NAME, VORNAME ASC");
oci_execute($stid2);

$stid_talkto_output = oci_parse($conn, "SELECT p.ID, p.VORNAME, p.NAME FROM P_BETEILIGT_UT b, PERSON p WHERE b.PERSON_ID = p.ID AND b.UT_ID = '$ut_id'");
oci_execute($stid_talkto_output);

$fetch_talkto = oci_fetch_array($stid_talkto_output);

//$fetchRow = oci_fetch_array($stid2);

//echo json_encode($fetchRow);
//echo json_encode(array(
//    "id" => $fetchRow[0],
//    "name" => $fetchRow[1],
//    "vorname" => $fetchRow[2]));


$fetchRowCount = oci_fetch_row($stid2);

if($fetchRowCount) {
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
            echo"<option value='" . $row['ID'] . "'>" . $row['NAME'] . ", " . $row['VORNAME'] . "</option>";
    }
} else {
    echo "<option disabled>Keine Kontakte vorhanden</option>";
}

?>