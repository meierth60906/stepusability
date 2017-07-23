<?php

$projectId = $_POST['id'];
$tasks = 0;
$einverst = 0;
$skript = 0;
$plan = 0;
$protokoll = 0;
$termin = 0;


$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT COUNT(*) AS COUNT FROM ABSCHNITT WHERE UT_ID = '$projectId'");
oci_execute($stid);
$fetchRowCount = oci_fetch_row($stid);
$tasks = $fetchRowCount[0];


$stid_einverst = oci_parse($conn, "SELECT COUNT(*) FROM DOKUMENT WHERE UT_ID = '$projectId' AND BEZEICHNUNG = 'Einverst'");
oci_execute($stid_einverst);
$fetchRowCount = oci_fetch_row($stid_einverst);
$einverst = $fetchRowCount[0];


$stid_skript = oci_parse($conn, "SELECT COUNT(*) FROM DOKUMENT WHERE UT_ID = '$projectId' AND BEZEICHNUNG = 'Skript'");
oci_execute($stid_skript);
$fetchRowCount = oci_fetch_row($stid_skript);
$skript = $fetchRowCount[0];

$stid_plan = oci_parse($conn, "SELECT COUNT(*) FROM DOKUMENT WHERE UT_ID = '$projectId' AND BEZEICHNUNG = 'Plan'");
oci_execute($stid_plan);
$fetchRowCount = oci_fetch_row($stid_plan);
$plan = $fetchRowCount[0];

$stid_proto = oci_parse($conn, "SELECT COUNT(*) FROM DOKUMENT WHERE UT_ID = '$projectId' AND BEZEICHNUNG = 'Protokoll'");
oci_execute($stid_proto);
$fetchRowCount = oci_fetch_row($stid_proto);
$protokoll = $fetchRowCount[0];

$stid_termin = oci_parse($conn, "SELECT COUNT(*) FROM TERMIN WHERE UT_ID = '$projectId'");
oci_execute($stid_termin);
$fetchRowCount = oci_fetch_row($stid_termin);
$termin = $fetchRowCount[0];



//echo json_encode($fetchRow);
echo json_encode(array(
    "taskscreated" => $tasks,
    "einverstcreated" => $einverst,
    "skriptcreated" => $skript,
    "plancreated" => $plan,
    "protokollcreated" => $protokoll,
    "termincreated" => $termin
    ));

?>