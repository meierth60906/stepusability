<?php

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM USABILITYTEST WHERE STATUS = 'Laufend'");
oci_execute($stid);

$stid_contacts = oci_parse($conn, "SELECT * FROM PERSON order by NAME");
oci_execute($stid_contacts);


$fetchRowCount = oci_fetch_row($stid);

if($fetchRowCount) {
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        echo"<a href='project.php?id=" . $row['ID'] . "' class='link-noblue link-orangehover'>";
        echo"<div class='row m-3 p-3 element-allgemein'>";
        echo"<div class='col-1 project-status'>" . $row['STATUS'] ."</div>";
        echo"<div class='link-orangehover-child font-weight-bold col-4'>" . $row['NAME'] ."</div>";
        echo"<div class='col-3'>" . $row['AUFTRAGGEBER'] ."</div>";
        echo"<div class='col-2 text-right'>" . $row['ERSTELLDATUM'] ."</div>";
        echo"<div class='col-2 text-right'>" . $row['ZULETZT_GEAENDERT'] ."</div>";
        echo"</div>";
        echo"</a>";
    }
} else {
    echo "<h1 id=\"noprojects\" class=\"mt-5 pt-5 text-muted text-center\">Derzeit sind keine Projekte vorhanden.</h1>";
}

?>


