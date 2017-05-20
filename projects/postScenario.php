<?php

$id = 5;
$art = "Szenario";
$desc = "Dieses Szenario wurde mit einem Button-Klick erstellt!";
$ut_id = 2;


$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$sql = 'INSERT INTO ABSCHNITT(ID, ART_AB, BESCHREIBUNG, UT_ID) values(:id, :art, :desc, :ut_id)';

$stid = oci_parse($conn, $sql);

oci_bind_by_name($stid, ':id', $id);
oci_bind_by_name($stid, ':art', $art);
oci_bind_by_name($stid, ':desc', $desc);
oci_bind_by_name($stid, ':ut_id', $ut_id);

oci_execute($stid);

//echo "<li class='scenario element-allgemein mb-3'>";
//echo "<div class='row p-3'>";
//echo "<div class='col-10'>";
//echo "<a href='#testaufgaben' onclick='editScenario()' data-toggle='tooltip' data-placement='bottom' title='Szenario bearbeiten' class='link-noblue'>" . htmlentities($desc, ENT_QUOTES) . "</a>";
//echo "</div>";
//echo "<div class='col-2 text-right'>";
//echo "<a href='#testaufgaben' onclick='createTask(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Aufgabe' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>";
//echo "</div>";
//echo "</div>";
//echo "<ol class='task-container pl-0'>";
//echo "<hr class='m-0'>";
//echo "</ol>";
//echo "</li>";

?>
    
