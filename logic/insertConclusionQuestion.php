<?php

//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$art = "ConclusionQ";
$name = "Abschlussfrage";
$ut_id = $_POST['utid'];
$con_id = $_POST['conid'];

// Insert into several tables, rolling back the changes if an error occurs

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');

$stid = oci_parse($conn, "INSERT INTO ABSCHNITT(ART_AB, NAME_AB, UT_ID, IN_SZENARIO) VALUES('".$art."', '".$name."', '".$ut_id."', '".$con_id."')");



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

$stid_tb = oci_parse($conn, "INSERT INTO TEXTBAUSTEIN(AB_ID, AB_UT_ID) VALUES('".$fetchRowCount[0]."', '".$ut_id."')");
oci_execute($stid_tb, OCI_COMMIT_ON_SUCCESS);

echo "<li class='task item-hover aufgabenliste-task' data-id='". $fetchRowCount[0] ."'>
    <div class='row p-3'>
        <div class='col-lg-12'>
        <a href='#testaufgaben' data-id='". $fetchRowCount[0] ."' onclick='editCcQuestion(this)' data-toggle='tooltip' data-placement='bottom' title='Frage bearbeiten' class=' aufgabenliste-task-a button-addTask link-noblue'>
        <span class='pr-2 icon-question icon-align text-muted'></span>" . $fetchRowCount[3] . "
        </a>
        </div>
        </div>
        </li>";

?>