<?php
//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$art = "Szenario";
$name = "Szenario";
$ut_id = $_POST['utid'];

// Insert into several tables, rolling back the changes if an error occurs

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');

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

$stid_tb = oci_parse($conn, "INSERT INTO TEXTBAUSTEIN(AB_ID, AB_UT_ID) VALUES('".$fetchRowCount[0]."', '".$ut_id."')");
oci_execute($stid_tb, OCI_COMMIT_ON_SUCCESS);

echo "<li class='scenario element-allgemein mb-3 aufgabenliste-task' data-id='" . $fetchRowCount[0] . "'>";
echo "<div class='row p-3'>";
echo "<div class='col-10'>";
echo "<a href='#testaufgaben' onclick='editScenario(this)' data-id='" . $fetchRowCount[0] . "' data-toggle='tooltip' data-placement='bottom' title='Szenario bearbeiten' class=' aufgabenliste-task-a link-noblue font-weight-bold'>" . $fetchRowCount[3] . "</a>";
echo "</div>";
echo "<div class='col-2 text-right'>";
echo "<a href='#testaufgaben' onclick='createTask(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Aufgabe' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>";
echo "</div>";
echo "</div>";
echo "<ol class='task-container pl-0'>";
echo "<hr class='m-0'>";
echo "</ol>";
echo "</li>";

?>
    
