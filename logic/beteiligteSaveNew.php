<?php
//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$ut_id = $_POST['utid'];
$person = $_POST['chooseProjectMember'];
$role = $_POST['chooseProjectMemberRole'];


$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');

$stid = oci_parse($conn, "INSERT into P_BETEILIGT_UT (UT_ID, PERSON_ID, ROLLE_ID) values (".$ut_id.", ".$person.", ".$role.")");

oci_execute($stid, OCI_COMMIT_ON_SUCCESS);



$stid2 = oci_parse($conn, "SELECT PERSON.ID, PERSON.NAME, PERSON.VORNAME, ROLLE.BEZEICHNUNG FROM P_BETEILIGT_UT JOIN PERSON ON PERSON.ID = P_BETEILIGT_UT.PERSON_ID JOIN ROLLE ON ROLLE.ID = P_BETEILIGT_UT.ROLLE_ID WHERE PERSON_ID = '".$person."'");
oci_execute($stid2);

$stid_if = oci_parse($conn, "SELECT PERSON.ID, PERSON.NAME, PERSON.VORNAME, ROLLE.BEZEICHNUNG FROM P_BETEILIGT_UT JOIN PERSON ON PERSON.ID = P_BETEILIGT_UT.PERSON_ID JOIN ROLLE ON ROLLE.ID = P_BETEILIGT_UT.ROLLE_ID WHERE PERSON_ID = '".$person."'");
oci_execute($stid_if);

$fetchRowCount = oci_fetch_row($stid_if);

if($fetchRowCount) {
        echo "<div class='teammember row' data-id='" . $person . "'>
                                <div class='px-0 col-6 alignmiddle'>
                                    " . $fetchRowCount[1] . ", " . $fetchRowCount[2] . "
                                </div>
                                <div class='px-0 col-4'>
                                    <select class='form-control custom-select' name='chooseProjectMemberRole' id='chooseProjectMemberRole'>
                                        <option value='' disabled selected>Rolle...</option>
                                    </select>
                                </div>
                                <div class='col-2 text-right '>
                                    <a href='#' onclick='deleteMember(this)' data-id='" . $fetchRowCount[0] . "'><div class='minus-placeholder c-orange-bg'>‒</div></a>
                                </div>
                            </div>";
}

?>