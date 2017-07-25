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
$conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


// Required field names
$required = array('reg-email', 'reg-passwort', 'reg-anrede', 'reg-vorname', 'reg-name', 'reg-firma', 'reg-geb');

// Loop over field names, make sure each one exists and is not empty
$error = false;
foreach($required as $field) {
    if (empty($_POST[$field])) {
        $error = true;
    }
}

if ($error) {
    echo "Bitte füllen Sie das Formular vollständig aus.";
} else {
    $checkUser = oci_parse($conn, "SELECT * FROM BENUTZER WHERE BENUTZERNAMEN = '$email'");
    oci_execute($checkUser);

    $fetchUser = oci_fetch_row($checkUser);

    if($fetchUser) {
        echo "Diese Email-Adresse ist bereits vorhanden. Verwenden Sie eine andere Email-Adresse.";
    } else {
        //Passwort hashen
        $hash = password_hash($passwort, PASSWORD_DEFAULT);


//Insert Abfrage für Person Tabelle

        $personInsert="insert into PERSON (NAME, VORNAME, GEBURTSDATUM, ANREDE, FIRMA) values('".$name."', '".$vorname."', '$geb', '".$anrede."', '".$firma."')";


        $stid = oci_parse($conn, $personInsert);
        if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
            $e = oci_error();
        }

//else {
//    header("Location: ../index.php");
//}

//$personID = "select ID from PERSON where ID = ( select max(ID) from PERSON )";


        $userInsert="insert into Benutzer (BENUTZERNAMEN, PASSWORT, PERSONP_HAT_U_ID) select '".$email."', '".$hash."', ID from PERSON where ID = ( select max(ID) from PERSON )";
        $emailInsert="insert into Kommunikationsanschluss (KTYP, BEZEICHNUNG, KOMMENTAR, PERSON_ID) select 'Email', '".$email."', NULL, ID from PERSON where ID = ( select max(ID) from PERSON )";

        $allInserts = Array($userInsert, $emailInsert);

        foreach ($allInserts as $command) {
            $stid = oci_parse($conn, $command);
            if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
                $e = oci_error();
            }
        }

        echo "Sie haben sich erfolgreich registriert und können sich nun mit Ihren Login-Daten einloggen";
    }
}

?>


