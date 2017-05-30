<?php

//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

$id = 7;
$art = "Szenario";
$desc = "Dieses Szenario wurde mit einem ButtonKlick erstellt!";
$ut_id = "";


$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT BESCHREIBUNG FROM ABSCHNITT WHERE ART_AB = 'Szenario'");
oci_execute($stid);

while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    foreach ($row as $item) {
        echo "<li class='scenario element-allgemein mb-3'>";
        echo "<div class='row p-3'>";
        echo "<div class='col-10'>";
        echo "<a href='#testaufgaben' onclick='editScenario()' data-toggle='tooltip' data-placement='bottom' title='Szenario bearbeiten' class='link-noblue font-weight-bold'>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : '&nbsp;') . "</a>";
        echo "</div>";
        echo "<div class='col-2 text-right'>";
        echo "<a href='#testaufgaben' onclick='createTask(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Aufgabe' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>";
        echo "</div>";
        echo "</div>";
        echo "<ol class='task-container pl-0'>";
        echo "<hr class='m-0'>";
        echo "</ol>";
        echo "</li>";
    }
}

?>
    
