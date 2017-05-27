<?php

//Variablen festlegen
$email = $_POST['reg-email'];
$passwort = $_POST['reg-passwort'];
$anrede = $_POST['reg-anrede'];
$vorname = $_POST['reg-vorname'];
$name = $_POST['reg-name'];
$firma = $_POST['reg-firma'];
$geb = $_POST['reg-geb'];



//Verbindung aufbauen
$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

//Passwort hashen
$hash = crypt($passwort);




//Insert Abfrage für Person Tabelle
$personInsert="insert into Person (Name, Vorname, Geburtsdatum, Anrede, Firma) values('".$name."', '".$vorname."', '".$geb."', '".$anrede."', '".$firma."')";

$stid = oci_parse($conn, $personInsert);
if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
    $e = oci_error();
    echo $e['message'];
}

$personID = "select ID from PERSON where ID = ( select max(ID) from PERSON )";

debug_to_console($personID);

$userInsert="insert into Benutzer (BENUTZERNAMEN, PASSWORT, PERSONP_HAT_U_ID) select '".$email."', '".$hash."', ID from PERSON where ID = ( select max(ID) from PERSON )";
$emailInsert="insert into Kommunikationsanschluss (KTYP, BEZEICHNUNG, KOMMENTAR, PERSON_ID) select 'Email', '".$email."', NULL, ID from PERSON where ID = ( select max(ID) from PERSON )";


//$stid = oci_parse($conn, $userInsert);
//if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
//    $e = oci_error();
//    echo $e['message'];
//} else {
//        header("Location: ../index.php");
//}

$allInserts = Array($userInsert, $emailInsert);

foreach ($allInserts as $command) {
    $stid = oci_parse($conn, $command);
    if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
        $e = oci_error();
        echo $e['message'];
    } else {
        header("Location: ../index.php");
    }
}


function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}



?>


