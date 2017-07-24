<?php

//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$art = "KatConclusion";
$name = "Abschlussfragen";
$ut_id = $_POST['utid'];

// Insert into several tables, rolling back the changes if an error occurs

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');

$stid = oci_parse($conn, "INSERT INTO ABSCHNITT(ART_AB, NAME_AB, UT_ID) VALUES('".$art."', '".$name."', '".$ut_id."')");



// The OCI_NO_AUTO_COMMIT flag tells Oracle not to commit the INSERT immediately
// Use OCI_DEFAULT as the flag for PHP <= 5.3.1.  The two flags are equivalent

$r = oci_execute($stid, OCI_NO_AUTO_COMMIT);
if (!$r) {
    $e = oci_error($stid);
    oci_rollback($conn);  // rollback changes to both tables
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

// Commit the changes to both tables
$r = oci_commit($conn);
if (!$r) {
    $e = oci_error($conn);
    trigger_error(htmlentities($e['message']), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT WHERE ID = ( select max(ID) from ABSCHNITT )");
oci_execute($stid);

$fetchRowCount = oci_fetch_row($stid);

echo "<li class='conclusionRubrik element-allgemein mb-3' data-id='" . $fetchRowCount[0] . "'>
    <div class='row p-3'>
        <div class='col-10'>" . $fetchRowCount[3] . "</div>
        <div class='col-2 text-right'>
            <a href='#testaufgaben' onclick='createConclusionQuestion(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Abschlussfrage' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>
            </div>
        </div>
    <ol class='cc-question-container pl-0'>
        <hr class='m-0'>
        </ol>
    </li>";

?>