<?php
/**
 * Created by PhpStorm.
 * User: Maura
 * Date: 14.05.2017
 * Time: 15:30
 */

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$command="
insert into Person (Name, Vorname, Geburtsdatum, Anrede, Firma)
values('".$_GET["Name"]."',
'".$_GET["Vorname"]."',
'". $_GET["Geburtsdatum"]."',
'". $_GET["Anrede"]."',
'". $_GET["Firma"]."')";
echo $command;

$stid = oci_parse($conn, $command);
if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
    $e = oci_error();
    echo $e['message'];
} else {
    header("Location: index.php");
}

?>


