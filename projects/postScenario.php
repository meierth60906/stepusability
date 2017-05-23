<?php

$id = 10;
$art = "Szenario";
$desc = "Dieses Szenario wurde mit einem Button-Klick erstellt!";
$ut_id = 2;



//if (!$conn) {
//    $e = oci_error();
//    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
//}
//
//$sql = ;
//
//$stid = oci_parse($conn, $sql);



// Insert into several tables, rolling back the changes if an error occurs

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');

$stid = oci_parse($conn, "INSERT INTO ABSCHNITT(ID, ART_AB, BESCHREIBUNG, UT_ID) VALUES(:id_scenario, :art_scenario, :desc_scenario, :ut_id_scenario)");

oci_bind_by_name($stid, ':id_scenario', $id);
oci_bind_by_name($stid, ':art_scenario', $art);
oci_bind_by_name($stid, ':desc_scenario', $desc);
oci_bind_by_name($stid, ':ut_id_scenario', $ut_id);


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

echo "<li class='scenario element-allgemein mb-3'>";
echo "<div class='row p-3'>";
echo "<div class='col-10'>";
echo "<a href='#testaufgaben' onclick='editScenario()' data-toggle='tooltip' data-placement='bottom' title='Szenario bearbeiten' class='link-noblue font-weight-bold'>" . htmlentities($desc, ENT_QUOTES) . "</a>";
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
    
