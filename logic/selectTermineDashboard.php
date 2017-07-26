<?php

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT TERMIN.NAME AS TERMIN, USABILITYTEST.NAME AS UT, TO_CHAR(TERMIN.VON, 'Dy, DD.MM.YY' ) AS DAY, TO_CHAR(TERMIN.VON, 'HH24:MI' ) AS TVON, TO_CHAR(TERMIN.BIS, 'HH24:MI' ) AS TBIS FROM TERMIN JOIN USABILITYTEST ON TERMIN.UT_ID = USABILITYTEST.ID ORDER BY TERMIN.VON");
oci_execute($stid);

$stid_if = oci_parse($conn, "SELECT TERMIN.NAME AS TERMIN, USABILITYTEST.NAME AS UT, TO_CHAR(TERMIN.VON, 'Dy, DD.MM.YY' ) AS DAY, TO_CHAR(TERMIN.VON, 'HH24:MI' ) AS TVON, TO_CHAR(TERMIN.BIS, 'HH24:MI' ) AS TBIS FROM TERMIN JOIN USABILITYTEST ON TERMIN.UT_ID = USABILITYTEST.ID ORDER BY TERMIN.VON");
oci_execute($stid_if);

$fetchRowCount = oci_fetch_row($stid_if);

if($fetchRowCount) {
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {

        echo "<a class='card-item-link' href='home.php'>
                            <div class='row card-item p-3'>
                                <div class='card-item-icon col-1 middle-two-line'>
                                    <div class='icon-calendar-1 d-inline text-muted'></div>
                                </div>
                                <div class='col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0'>
                                   " . $row['TERMIN'] . "
                                    <div class='text-muted small'>" . $row['UT'] . "</div>
                                </div>
                                <div class='col-4 hidden-xs-down text-right'>
                                    <!--<div class='text-muted animated infinite flash'>--><div class='text-muted'>" . $row['DAY'] . "</div>
                                    <div class='text-muted small'>" . $row['TVON'] . " - ". $row['TBIS'] . "</div>
                                </div>
                            </div>
                        </a>
                        <hr>";

    }
} else {
    echo "<div id='noprojectsdashboard' class='mt-5 text-muted text-center'>Derzeit sind noch keine Kontakte angelegt.</div>";
}

?>