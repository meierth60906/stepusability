<?php

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM USABILITYTEST WHERE STATUS = 'Laufend'");
oci_execute($stid);

$fetchRowCount = oci_fetch_row($stid);

if($fetchRowCount) {
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        echo "<a class='card-item-link' href='projects/project.php'>
                            <div class='row card-item p-3'>
                                <div class='card-item-icon col-1 middle-two-line'>
                                    <div class='icon-folder d-inline text-muted'></div>
                                </div>
                                <div class='col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0 middle-two-line'>
                                    ". $row['NAME'] ."
                                </div>
                                <div class='col-4 hidden-xs-down text-right'>
                                    <div class='text-muted small'>Letzte Änderung am</div>
                                    <div class='text-muted'>". $row['ZULETZT_GEAENDERT'] ."</div>
                                </div>
                            </div>
                        </a>
                        <hr>";

    }
} else {
    echo "<div id='noprojectsdashboard' class='mt-5 text-muted text-center'>Derzeit sind keine Projekte vorhanden.</div>";
}

?>