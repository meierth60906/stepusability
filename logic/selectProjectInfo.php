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

//echo json_encode($fetchRow);
echo json_encode(array(
    "id" => $fetchRow[0],
    "name" => $fetchRow[1],
    "status" => $fetchRow[2],
    "auftraggeber" => $fetchRow[3],
    "erstellt" => $fetchRow[4],
    "geaendert" => $fetchRow[5],
    "beschreibung" => $fetchRow[6]));

?>