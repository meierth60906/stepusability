<?php

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM PERSON WHERE FAVORIT = 1 ORDER BY NAME");
oci_execute($stid);

$stid_if = oci_parse($conn, "SELECT * FROM PERSON WHERE FAVORIT = 1 ORDER BY NAME");
oci_execute($stid_if);

$fetchRowCount = oci_fetch_row($stid_if);

if($fetchRowCount) {
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
        $nameinitial = substr($row['NAME'], 0, 1);
        $vornameinitial = substr($row['VORNAME'], 0, 1);

        echo "<a class='card-item-link' href='contacts.php?id=". $row['ID'] ."'>
                            <div class='row card-item p-3'>
                                <div class='card-item-icon col-1 middle-two-line'>
                                    <div class='icon-star d-inline text-muted'></div>
                                </div>
                                <div class='col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0'>
                                    " . $row['NAME'] . ", " . $row['VORNAME'] . "
                                    <div class='text-muted small'>" . $row['FIRMA'] . "</div>
                                </div>
                                <div class='col-4 hidden-xs-down text-right middle-two-line'>
                                    <div class='img-placeholder c-darkgrey-bg'>" . $nameinitial . $vornameinitial . "</div>
                                </div>
                            </div>
                        </a><hr>";

    }
} else {
    echo "<div id='noprojectsdashboard' class='mt-5 text-muted text-center'>Derzeit sind noch keine Kontakte angelegt.</div>";
}

?>