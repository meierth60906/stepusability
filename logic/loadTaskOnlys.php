<?php

//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$ut_id = $_POST['utid'];


$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT WHERE ART_AB = 'Aufgabe' AND UT_ID = '$ut_id' AND IN_SZENARIO IS NULL");
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<li class='element-allgemein mb-3 task item-hover' >
            <div class='row p-3'>
            <div class='col-lg-12'>
            <a href='#testaufgaben' data-id='". $row['ID'] ."' onclick='editTask(this)' data-toggle='tooltip' data-placement='bottom' title='Aufgabe bearbeiten' class='button-addTask link-noblue'>
            <span class='pr-2 icon-list icon-align text-muted'></span>" . $row['NAME_AB'] . "
            </a>
            </div>
            </div>
            </li>";
}

?>
    
