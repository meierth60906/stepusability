<?php

$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM PERSON order by NAME");
oci_execute($stid);

while($row=oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<a class='contact-link' onclick='viewContact(this)' data-id='" . $row['ID'] . "' ><div class='contact row py-3'>
                            <div class='col-3 hidden-lg-down text-right'>
                                <div class='img-placeholder c-darkgrey-bg'>" . substr($row['NAME'], 0,1) . substr($row['VORNAME'], 0,1) . "</div>
                            </div>
                            <div class='pl-3 col-9 pl-xl-2'>
                                <div class='contactname alignmiddle'>" . $row['NAME'] . ", " . $row['VORNAME'] . "</div>
                            </div>
                        </div>
                        <hr class='m-0'></a>";
}

?>