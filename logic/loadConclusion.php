<?php

//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$ut_id = $_POST['utid'];


$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT WHERE ART_AB = 'KatConclusion' AND UT_ID = '$ut_id'");
oci_execute($stid);


while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<li class='conclusionRubrik element-allgemein mb-3' data-id='" . $row['ID'] . "'>
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

?>
    
