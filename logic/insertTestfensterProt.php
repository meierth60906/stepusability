<?php

session_start();
if (!$_SESSION['login_user']){
    $_SESSION['login_user'] = '';
    header("Location:../index.php");
    die();
}

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
insert into protokolliert (beobachtung, baustein_id, baustein_ab_id, baustein_ab_ut_id, termin_id, termin_ut_id, person_id)
values('".$_GET["Beobachtung"]."',".
    $_GET["Textbaustein"].",".
    $_GET["TextbausteinAbschnitt"].",".
    $_GET["TextbausteinAbschnittUt"].",".
    $_GET["Termin"].",".
    $_GET["TerminUt"].",".
    $_GET["Protokollant"].")";
echo $command;

$stid = oci_parse($conn, $command);
if (!oci_execute($stid, OCI_COMMIT_ON_SUCCESS)) {
    $e = oci_error();
    echo $e['message'];
} else {
    header("Location: ../testfenster_prot.php");
}

?>


