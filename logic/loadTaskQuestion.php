<?php

$t_id = $_POST['tid'];

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM ABSCHNITT a, TEXTBAUSTEIN t WHERE a.ID = t.AB_ID AND t.AB_ID = '".$t_id."'");
oci_execute($stid);

$fetchRowCount = oci_fetch_row($stid);
if($fetchRowCount) {
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {


        echo"<div class='col-2 text-right'>" . $row['NAME_AB'] ."</div>";

    }
} else {
    echo "<h1 id=\"noprojects\" class=\"mt-5 pt-5 text-muted text-center\">Derzeit sind keine Projekte vorhanden.</h1>";
}

?>