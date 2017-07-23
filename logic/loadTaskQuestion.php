<?php

$t_id = $_POST['tid'];
$name = $_POST['contentAufgabenBeschreibung'];

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT a, TEXTBAUSTEIN t WHERE a.ID = t.AB_ID AND t.AB_ID = '".$t_id."'");
oci_execute($stid);

$fetchRow = oci_fetch_array($stid);

echo json_encode(array(
    "taskid" => $fetchRow[0],
    "art" => $fetchRow[1],
    "name" => $fetchRow[3],
    "inszenario" => $fetchRow[4],
    "id" => $fetchRow[5]));

?>