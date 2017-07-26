<?php

$c_id = $_GET['id'];
$komm[] = array();
$kommId[] = array();

$skill[] = array();
$skillId[] = array();

$isTeam = 0;
$isProband = 0;
$isKunde = 0;

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM PERSON WHERE ID = '".$c_id."'");
oci_execute($stid);
$fetchRow = oci_fetch_array($stid);

$stid_komm = oci_parse($conn, "SELECT * FROM STUDI132.KOMMUNIKATIONSANSCHLUSS WHERE PERSON_ID = '".$c_id."'");
oci_execute($stid_komm);

while ($fetchRowKomms = oci_fetch_array($stid_komm, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $komm[] = $fetchRowKomms['BEZEICHNUNG'];
    $kommId[] = $fetchRowKomms['ID'];
}

array_splice($komm, 0, 1);
array_splice($kommId, 0, 1);

$stid_skill = oci_parse($conn, "SELECT f.ID, f.BEZEICHNUNG FROM STUDI132.FAEHIGKEIT f JOIN STUDI132.P_HAT_F p on p.FAEHIGKEIT_ID = f.ID WHERE PERSON_ID = '".$c_id."'");
oci_execute($stid_skill);

while ($fetchRowSkills = oci_fetch_array($stid_skill, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $skill[] = $fetchRowSkills['BEZEICHNUNG'];
    $skillId[] = $fetchRowSkills['ID'];
}

$stid_roles = oci_parse($conn, "SELECT TEAM, PROBAND, KUNDE FROM PERSON WHERE ID = '".$c_id."'");
oci_execute($stid_roles);

while ($fetchRowRoles = oci_fetch_array($stid_roles, OCI_ASSOC+OCI_RETURN_NULLS)) {
    $isTeam = $fetchRowRoles['TEAM'];
    $isProband = $fetchRowRoles['PROBAND'];
    $isKunde = $fetchRowRoles['KUNDE'];
}

$stidAdresse = oci_parse($conn, "SELECT STRASSE, STADT, POSTLEITZAHL FROM ANSCHRIFT WHERE PERSON_ID = '".$c_id."'");
oci_execute($stidAdresse);
$fetchRowAdresse = oci_fetch_array($stidAdresse);


$nameinitial = substr($fetchRow[1], 0,1);
$vornameinitial = substr($fetchRow[2],0,1);



echo json_encode(array(
    "id" => $fetchRow[0],
    "name" => $fetchRow[1],
    "vorname" => $fetchRow[2],
    "geburtsdatum" => $fetchRow[3],
    "firma" => $fetchRow[5],
    "favorit" => $fetchRow[6],
    "nameinitial" => $nameinitial,
    "vornameinitial" => $vornameinitial,
    "komm" => $komm,
    "kommId" => $kommId,
    "skill" => $skill,
    "skillId" => $skillId,
    "isTeam" => $isTeam,
    "isProband" => $isProband,
    "isKunde" => $isKunde,
    "strasse" => $fetchRowAdresse[0],
    "ort" => $fetchRowAdresse[1],
    "plz" => $fetchRowAdresse[2]
    ));

?>