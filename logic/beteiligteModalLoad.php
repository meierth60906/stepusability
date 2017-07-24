<?php

$ut_id = $_POST['utid'];

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT PERSON.ID, PERSON.NAME, PERSON.VORNAME, ROLLE.BEZEICHNUNG FROM P_BETEILIGT_UT JOIN PERSON ON PERSON.ID = P_BETEILIGT_UT.PERSON_ID JOIN ROLLE ON ROLLE.ID = P_BETEILIGT_UT.ROLLE_ID WHERE UT_ID = '".$ut_id."'");
oci_execute($stid);

$stid_if = oci_parse($conn, "SELECT PERSON.ID, PERSON.NAME, PERSON.VORNAME, ROLLE.BEZEICHNUNG FROM P_BETEILIGT_UT JOIN PERSON ON PERSON.ID = P_BETEILIGT_UT.PERSON_ID JOIN ROLLE ON ROLLE.ID = P_BETEILIGT_UT.ROLLE_ID WHERE UT_ID = '".$ut_id."'");
oci_execute($stid_if);

$fetchRowCount = oci_fetch_row($stid_if);

if($fetchRowCount) {
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        $nameinitial = substr($fetchRowCount[1], 0, 1);
        $vornameinitial = substr($fetchRowCount[2], 0, 1);

        echo "<div class='teammember row' data-id='" . $row['ID'] . "'>
                                <div class='px-0 col-6 alignmiddle'>
                                    " . $row['NAME'] . ", " . $row['VORNAME'] . "
                                </div>
                                <div class='px-0 col-4'>
                                    <select class='form-control custom-select' name='chooseProjectMemberRole' id='chooseProjectMemberRole'>
                                        <option value='' disabled selected>Rolle...</option>
                                        <option value='29'>Auftraggeber</option>
                                        <option value='30'>Protokollant</option>
                                        <option value='31'>Testteilnehmer</option>
                                        <option value='32'>Administrator</option>
                                        <option value='33'>Evaluator</option>
                                        <option value='34'>Moderator</option>
                                        <option value='35'>Gastgeber</option>
                                    </select>
                                </div>
                                <div class='col-2 text-right '>
                                    <a href='#' onclick='deleteMember(this)' data-id='" . $row['ID'] . "'><div class='minus-placeholder c-orange-bg'>‒</div></a>
                                </div>
                            </div>";
    }
} else {
    echo "<p id='noteammembers' class='mt-5 mb-5 text-muted text-center'>Es wurde niemand zum Projekt hinzugefügt.</p>";
}


//if($fetchRowCount) {
//    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
//        $nameinitial = substr($fetchRowCount[1], 0,1);
//        $vornameinitial = substr($fetchRowCount[2],0,1);
//
////        echo"<div class='teammember row'>
////             <div class='pl-0 col-2 hidden-lg-down'>
////             <div class='img-placeholder c-darkgrey-bg'>'" . $nameinitial  . $vornameinitial . "'</div>
////             </div>
////             <div class='pl-0 col-10 pl-xl-2'>
////             '" . $row[2]  . "' '" .  $row[1] . "'
////             <div class='text-muted small'>'" .  $row[3] . "'</div>
////             </div>
////             </div>";
//        echo "' . $row[2] . '";
//    }
//} else {
//    echo "<h1 id='noteammembers' class='mt-5 pt-5 text-muted text-center'>Es wurde niemand zum Projekt hinzugefügt.</h1>";
//}

?>