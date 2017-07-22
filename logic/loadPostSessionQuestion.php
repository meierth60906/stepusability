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

$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT WHERE ART_AB = 'PostSessionQ' AND UT_ID = '$ut_id'");
oci_execute($stid);

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $psId[] = $row['IN_SZENARIO'];
    $data[] = "<li class='task item-hover aufgabenliste-task' data-id='". $row['ID'] ."'>
            <div class='row p-3'>
                <div class='col-lg-12'>
                    <a href='#testaufgaben' data-id='". $row['ID'] ."' onclick='editPsQuestion(this)' data-toggle='tooltip' data-placement='bottom' title='Frage bearbeiten' class='aufgabenliste-task-a button-addTask link-noblue'>
                        <span class='pr-2 icon-comment icon-align text-muted'></span>" . $row['NAME_AB'] . "
                    </a>
                </div>
            </div>
          </li>";
}

echo json_encode(array(
    "postsessionid" => $psId,
    "echo" => $data
));

?>
    
