<?php

//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$ut_id = $_POST['utid'];
$szenId = array();
$data = array();


$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT WHERE ART_AB = 'Aufgabe' AND UT_ID = '$ut_id' AND IN_SZENARIO IS NOT NULL");
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $szenId[] = $row['IN_SZENARIO'];
    $data[] = "<li class='task item-hover' data-id='" .$row['ID']. "'>
        <div class='row p-3'>
        <div class='col-lg-12'>
        <a href='#testaufgaben' onclick='editTask()' data-toggle='tooltip' data-placement='bottom' title='Aufgabe bearbeiten' class='button-addTask link-noblue'>
        <span class='pr-2 icon-list icon-align text-muted'></span>" . $row['NAME_AB'] . "
        </a>
        </div>
        </div>
        </li>";
}

echo json_encode(array(
    "szenarioid" => $szenId,
    "echo" => $data
));

?>
    
