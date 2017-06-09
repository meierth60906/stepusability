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





//LOAD TASKS AND SZENARIOS ERSTE EBENE
$stid = oci_parse($conn, "SELECT * FROM (SELECT * FROM ABSCHNITT WHERE UT_ID = 39 AND ART_AB = 'Aufgabe' AND IN_SZENARIO IS NULL UNION SELECT * FROM ABSCHNITT WHERE UT_ID = 39 AND ART_AB = 'Szenario') ORDER BY AB_ORDER;");
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $output[] = '';
    if($row['ART_AB'] == 'Aufgabe') {
        $output[] = "<li class='element-allgemein mb-3 task item-hover' data-id='". $row['ID'] ."' data-order='". $row['AB_ORDER'] ."'>
            <div class='row p-3'>
            <div class='col-lg-12'>
            <a href='#testaufgaben' onclick='editTask()' data-toggle='tooltip' data-placement='bottom' title='Aufgabe bearbeiten' class='button-addTask link-noblue'>
            <span class='pr-2 icon-list icon-align text-muted'></span>" . $row['NAME_AB'] . "
            </a>
            </div>
            </div>
            </li>";
    } else if ($row['ART_AB'] == 'Szenario') {
        $output[] = "<li class='scenario element-allgemein mb-3' data-id='" . $row['ID'] . "' data-order='". $row['AB_ORDER'] ."'>
    <div class='row p-3'>
    <div class='col-10'>
    <a href='#testaufgaben' onclick='editScenario()' data-toggle='tooltip' data-placement='bottom' title='Szenario bearbeiten' class='link-noblue font-weight-bold'>" . $row['NAME_AB'] . "</a>
    </div>
    <div class='col-2 text-right'>
    <a href='#testaufgaben' onclick='createTask(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Aufgabe' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>
    </div>
    </div>
    <ol class='task-container pl-0'>
    <hr class='m-0'>
    </ol>
    </li>";
    } else if ($row['ART_AB'] == 'KatPostSession') {
        $output[] = "<li class='postSessionRubrik element-allgemein mb-3' data-id='" . $row['ID'] . "'>
<div class='row p-3'>
<div class='col-10'>" . $row['NAME_AB'] . "</div>
<div class='col-2 text-right'>
<a href='#testaufgaben' onclick='createPostSessionQuestion(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Interview-Frage' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>
</div>
</div>
<ol class='pl-0 ps-question-container'>
<hr class='m-0'>
</ol>
</li>";
    } else if ($row['ART_AB'] == 'KatConclusion') {
        $output[] = "<li class='conclusionRubrik element-allgemein mb-3' data-id='" . $row['ID'] . "'>
    <div class='row p-3'>
        <div class='col-10'>" . $row['NAME_AB'] . "</div>
        <div class='col-2 text-right'>
            <a href='#testaufgaben' onclick='createConclusionQuestion(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Abschlussfrage' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>
            </div>
        </div>
    <ol class='cc-question-container pl-0'>
        <hr class='m-0'>
        </ol>
    </li>";
    }

}


//LOAD ZWEITE EBENE
//$stid = oci_parse($conn, "
//  SELECT *
//  FROM ABSCHNITT
//  WHERE UT_ID = '$ut_id'
//  AND IN_SZENARIO IS NULL
//ORDER BY AB_ORDER");
//oci_execute($stid);
//
//
//while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
//    $output[] = '';
//    if($row['ART_AB'] == 'Aufgabe') {
//        $output[] = "<li class='element-allgemein mb-3 task item-hover' data-id='". $row['ID'] ."' data-order='". $row['AB_ORDER'] ."'>
//            <div class='row p-3'>
//            <div class='col-lg-12'>
//            <a href='#testaufgaben' onclick='editTask()' data-toggle='tooltip' data-placement='bottom' title='Aufgabe bearbeiten' class='button-addTask link-noblue'>
//            <span class='pr-2 icon-list icon-align text-muted'></span>" . $row['NAME_AB'] . "
//            </a>
//            </div>
//            </div>
//            </li>";
//    } else if ($row['ART_AB'] == 'Szenario') {
//        $output[] = "<li class='scenario element-allgemein mb-3' data-id='" . $row['ID'] . "' data-order='". $row['AB_ORDER'] ."'>
//    <div class='row p-3'>
//    <div class='col-10'>
//    <a href='#testaufgaben' onclick='editScenario()' data-toggle='tooltip' data-placement='bottom' title='Szenario bearbeiten' class='link-noblue font-weight-bold'>" . $row['NAME_AB'] . "</a>
//    </div>
//    <div class='col-2 text-right'>
//    <a href='#testaufgaben' onclick='createTask(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Aufgabe' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>
//    </div>
//    </div>
//    <ol class='task-container pl-0'>
//    <hr class='m-0'>
//    </ol>
//    </li>";
//    } else if ($row['ART_AB'] == 'KatPostSession') {
//        $output[] = "<li class='postSessionRubrik element-allgemein mb-3' data-id='" . $row['ID'] . "'>
//<div class='row p-3'>
//<div class='col-10'>" . $row['NAME_AB'] . "</div>
//<div class='col-2 text-right'>
//<a href='#testaufgaben' onclick='createPostSessionQuestion(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Interview-Frage' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>
//</div>
//</div>
//<ol class='pl-0 ps-question-container'>
//<hr class='m-0'>
//</ol>
//</li>";
//    } else if ($row['ART_AB'] == 'KatConclusion') {
//        $output[] = "<li class='conclusionRubrik element-allgemein mb-3' data-id='" . $row['ID'] . "'>
//    <div class='row p-3'>
//        <div class='col-10'>" . $row['NAME_AB'] . "</div>
//        <div class='col-2 text-right'>
//            <a href='#testaufgaben' onclick='createConclusionQuestion(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Abschlussfrage' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>
//            </div>
//        </div>
//    <ol class='cc-question-container pl-0'>
//        <hr class='m-0'>
//        </ol>
//    </li>";
//    }
//
//}
//

////LOAD SZENARIOS
//$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT WHERE ART_AB = 'Szenario' AND UT_ID = '$ut_id' ORDER BY AB_ORDER");
//oci_execute($stid);
//
//
//while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
//    $szenarios[]= "<li class='scenario element-allgemein mb-3' data-id='" . $row['ID'] . "' data-order='". $row['AB_ORDER'] ."'>
//    <div class='row p-3'>
//    <div class='col-10'>
//    <a href='#testaufgaben' onclick='editScenario()' data-toggle='tooltip' data-placement='bottom' title='Szenario bearbeiten' class='link-noblue font-weight-bold'>" . $row['NAME_AB'] . "</a>
//    </div>
//    <div class='col-2 text-right'>
//    <a href='#testaufgaben' onclick='createTask(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Aufgabe' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>
//    </div>
//    </div>
//    <ol class='task-container pl-0'>
//    <hr class='m-0'>
//    </ol>
//    </li>";
//}
//
////LOAD TASKS ONLY
//$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT WHERE ART_AB = 'Aufgabe' AND UT_ID = '$ut_id' AND IN_SZENARIO IS NULL ORDER BY AB_ORDER");
//oci_execute($stid);
//
//
//while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
//    $tasksOnly[] = "<li class='element-allgemein mb-3 task item-hover' data-id='". $row['ID'] ."' data-order='". $row['AB_ORDER'] ."'>
//            <div class='row p-3'>
//            <div class='col-lg-12'>
//            <a href='#testaufgaben' onclick='editTask()' data-toggle='tooltip' data-placement='bottom' title='Aufgabe bearbeiten' class='button-addTask link-noblue'>
//            <span class='pr-2 icon-list icon-align text-muted'></span>" . $row['NAME_AB'] . "
//            </a>
//            </div>
//            </div>
//            </li>";
//}
//
////LOAD TASKS IN SZENARIO
//$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT WHERE ART_AB = 'Aufgabe' AND UT_ID = '$ut_id' AND IN_SZENARIO IS NOT NULL ORDER BY AB_ORDER");
//oci_execute($stid);
//
//
//while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
//    $szenId[] = $row['IN_SZENARIO'];
//    $data[] = "<li class='task item-hover' data-id='" .$row['ID']."' data-order='". $row['AB_ORDER'] ."'>
//        <div class='row p-3'>
//        <div class='col-lg-12'>
//        <a href='#testaufgaben' onclick='editTask()' data-toggle='tooltip' data-placement='bottom' title='Aufgabe bearbeiten' class='button-addTask link-noblue'>
//        <span class='pr-2 icon-list icon-align text-muted'></span>" . $row['NAME_AB'] . "
//        </a>
//        </div>
//        </div>
//        </li>";
//}


echo json_encode(array(
    "szenarioid" => $szenId,
    "echo" => $data,
    "szenarios" => $szenarios,
    "output" => $output
));

?>

