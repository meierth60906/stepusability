<?php

//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$ut_id = $_POST['utid'];
$t_id = $_POST['tid'];
$name = $_POST['inputScenarioName'];
$anmerkung = $_POST['inputScenarioDescription'];


$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid_ab = oci_parse($conn, "UPDATE ABSCHNITT SET NAME_AB='".$name."' WHERE ID='".$t_id."'");
oci_execute($stid_ab, OCI_COMMIT_ON_SUCCESS);

$stid_tb = oci_parse($conn, "UPDATE TEXTBAUSTEIN SET ANMERKUNG='".$anmerkung."' WHERE AB_ID='".$t_id."'");
oci_execute($stid_tb, OCI_COMMIT_ON_SUCCESS);

$stid_output = oci_parse($conn, "SELECT * FROM ABSCHNITT a, TEXTBAUSTEIN t WHERE a.ID = t.AB_ID AND t.AB_ID = '".$t_id."'");
oci_execute($stid_output);

$fetchRow = oci_fetch_array($stid_output);

echo json_encode(array(
    "taskid" => $fetchRow[0],
    "art" => $fetchRow[1],
    "name" => $fetchRow[3],
    "inszenario" => $fetchRow[4],
    "id" => $fetchRow[5],
    "bereitgestellt" => $fetchRow[6],
    "vorbedingung" => $fetchRow[7],
    "loesungsschritt" => $fetchRow[8],
    "anmerkung" => $fetchRow[9],
    "bestandenwenn" => $fetchRow[12],
    "abbruchwenn" => $fetchRow[13],
    "ausgewaehlt" => $fetchRow[14],
    "ausgewaehltweil" => $fetchRow[15]));

?>

