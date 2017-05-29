<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
$output = '';

$email = $_POST['login-email'];
$passwort = $_POST['login-passwort'];

//Verbindung aufbauen
$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


if (isset($email) || isset($passwort)) {
    if (empty($email) || empty($passwort)) {
        $error = "Email oder Passwort sind ungültig!";
    } else {
        $checkUser = oci_parse($conn, "SELECT * FROM BENUTZER WHERE BENUTZERNAMEN = '$email'");
        oci_execute($checkUser);

        $fetchUser = oci_fetch_row($checkUser);

        if($fetchUser) {

            $checkPassword = oci_parse($conn, "SELECT PASSWORT FROM BENUTZER WHERE BENUTZERNAMEN = '$email'");
            oci_execute($checkPassword);

            $fetch = oci_fetch_array($checkPassword, OCI_BOTH);

            if (password_verify($passwort, $fetch['PASSWORT'])) {
                $output = "success";
                $_SESSION['login_user']= $email;
            } else {
                $output = "invalid";
            }

        }

    }
}

echo $output;
?>