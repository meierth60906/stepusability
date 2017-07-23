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

//$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT WHERE ART_AB = 'Szenario' AND UT_ID = '$ut_id'");
//oci_execute($stid);

$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT WHERE ART_AB = 'Szenario' AND UT_ID = '$ut_id'");
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<li class='scenario element-allgemein mb-3 aufgabenliste-task' data-id='" . $row['ID'] . "' >";
    echo "<div class='row p-3'>";
    echo "<div class='col-10'>";
    echo "<a href='#testaufgaben' onclick='loadScenarioQuestionEval(this)' data-id='" . $row['ID'] . "' data-toggle='tooltip' data-placement='bottom' title='Szenario bearbeiten' class='aufgabenliste-task-a link-noblue font-weight-bold'>" . $row['NAME_AB'] . "</a>";
    echo "</div>";
    echo "</div>";
    echo "<ol class='task-container pl-0'>";
    echo "<hr class='m-0'>";
    echo "</ol>";
    echo "</li>";
}

?>

