<?php
//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:index.php");
//    die();
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bibliothek | step</title>
    <?php include('head.html') ?>
</head>
<body id="library-body">
<!-- Sidebar und Header-->

<?php include('navigation.html'); ?>

<section id="library" class="page-content">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-8">
                <h1>Bibliothek</h1>
            </div>
            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" href="#">
                    <div class=" icon-print d-inline-block px-2 icon-align"></div>
                    <span class="hidden-sm-down"> Drucken</span>
                </a>
            </div>


        </div>


        <!--innere Navigationsleiste-->
        <div class="container row">
            <div class="col-lg-3 p-0" id="sidebarLibrary">

                <div class="text-center">
                    <!-- Switch Button-->
                    <ul id="switch" class="nav" role="tablist">
                        <li class="nav-item">
                            <a id="buttonlinks" class="nav-link active" href="#projects" role="tab" data-toggle="tab">Projekte</a>
                        </li>
                        <li class="nav-item">
                            <a id="buttonrechts" class="nav-link" href="#archiv" role="tab" data-toggle="tab">Archiv</a>
                        </li>
                    </ul>
                </div>



                <!--                Seitenleisten-Inhalt -->

                <div class="tab-content">

                    <!--                    Projekte-->


                    <div class="tab-pane active" id="projects" role="tabpanel">
                        <div class="panel-group">
                            <div class="panel panel-default">

                                <!--Demo-->

                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#demo"
                                           class="icon-angle-right">Demo</a>
                                    </h4>
                                </div>
                                <div id="demo" class="panel-collapse collapse">
                                    <ul class="flex-column nav">
                                        <li class="nav-item">
                                            <a class="p-3 nav-link"
                                               href="#einverstaendniserklaerungdemo" role="tab"
                                               data-toggle="tab">Keine Dokumente vorhanden</a></li>
                                    </ul>
                                </div>

                                <!--step projekt-->

                                <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="icon-angle-right" data-toggle="collapse"
                                       href="#step">step Projekt</a>
                                </h4>
                            </div>
                            <div id="step" class="panel-collapse collapse">
                                <ul class="flex-column nav">
                                    <li class="nav-item">
                                        <a class="icon-file-text-o p-3 nav-link"
                                           href="#einverstaendniserklaerungstep"
                                           role="tab"
                                           data-toggle="tab"> Einverständniserklärung</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="icon-file-text-o p-3 nav-link"
                                           href="#protokollleitfadenstep"
                                           role="tab"
                                           data-toggle="tab"> Protokollleitfaden</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="icon-file-text-o p-3 nav-link" href="#testskriptstep"
                                           role="tab"
                                           data-toggle="tab"> Testskript</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="icon-file-text-o p-3 nav-link" href="#testplanstep"
                                           role="tab"
                                           data-toggle="tab"> Testplan</a>
                                    </li>
                                </ul>
                            </div>



                                <!--wetter.com-->

                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="icon-angle-right" data-toggle="collapse"
                                           href="#wetter">wetter.com</a>
                                    </h4>
                                </div>
                                <div id="wetter" class="panel-collapse collapse">
                                    <ul class="flex-column nav">
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link"
                                               href="#einverstaendniserklaerungwetter"
                                               role="tab"
                                               data-toggle="tab"> Einverständniserklärung</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link"
                                               href="#protokollleitfadenwetter"
                                               role="tab"
                                               data-toggle="tab"> Protokollleitfaden</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link" href="#testskriptwetter"
                                               role="tab"
                                               data-toggle="tab"> Testskript</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link" href="#testplanwetter"
                                               role="tab"
                                               data-toggle="tab"> Testplan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link" href="#testberichtwetter"
                                               role="tab"
                                               data-toggle="tab"> Testbericht</a>
                                        </li>
                                    </ul>
                                </div>

                                <!--Social App-->

                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="icon-angle-right" data-toggle="collapse"
                                           href="#socialapp">Social App</a>
                                    </h4>
                                </div>
                                <div id="socialapp" class="panel-collapse collapse">
                                    <ul class="flex-column nav">
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link"
                                               href="#einverstaendniserklaerungsocialapp"
                                               role="tab"
                                               data-toggle="tab"> Einverständniserklärung</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link" href="#testskriptsocialapp"
                                               role="tab"
                                               data-toggle="tab"> Testskript</a>
                                        </li>
                                    </ul>
                                </div>


                                <!--Hochschulwebsite -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="icon-angle-right" data-toggle="collapse"
                                           href="#hochschule">Hochschulwebsite</a>
                                    </h4>
                                </div>
                                <div id="hochschule" class="panel-collapse collapse">
                                    <ul class="flex-column nav">
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link"
                                               href="#einverstaendniserklaerunghochschule"
                                               role="tab"
                                               data-toggle="tab"> Einverständniserklärung</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link"
                                               href="#protokollleitfadenhochschule"
                                               role="tab"
                                               data-toggle="tab"> Protokollleitfaden</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link" href="#testskripthochschule"
                                               role="tab"
                                               data-toggle="tab"> Testskript</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link" href="#testplanhochschule"
                                               role="tab"
                                               data-toggle="tab"> Testplan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link" href="#testberichthochschule"
                                               role="tab"
                                               data-toggle="tab"> Testbericht</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--                   Archiv-->

                    <div class="tab-pane" id="archiv" role="tabpanel">
                        <div class="panel-group">
                            <div class="panel panel-default">


                                <!--amazon-->


                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="icon-angle-right" data-toggle="collapse"
                                           href="#amazon">amazon</a>
                                    </h4>
                                </div>
                                <div id="amazon" class="panel-collapse collapse">
                                    <ul class="flex-column nav">
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link active"
                                               href="#einverstaendniserklaerungamazon" role="tab"
                                               data-toggle="tab"> Einverständniserklärung</a>
                                        </li>
                                    </ul>
                                </div>

                                <!--TH-->

                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" href="#th"
                                           class="icon-angle-right">TH Nürnberg</a>
                                    </h4>
                                </div>
                                <div id="th" class="panel-collapse collapse">
                                    <ul class="flex-column nav">
                                        <li class="nav-item">
                                            <a class="icon-file-text-o p-3 nav-link" href="#einverstaendniserklaerungth"
                                               role="tab"
                                               data-toggle="tab"> Einverständniserklärung</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="tab-content">

            <!--            wetter.com-->

            <div class="tab-pane row" id="einverstaendniserklaerungwetter" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Einverständniserklärung</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <p>Vielen Dank, dass Sie uns helfen, die Anwendung, die wir gerade entwickeln zu
                                    verbessern. </p>
                                <p>Wir bewerten nicht Sie. Wir bewerten das Produkt.<br>
                                    Sie können jederzeit abbrechen.<br>
                                    Wenn Sie eine Pause benötigen, können Sie das einfach sagen.</p>
                                <p>Um uns die Arbeit zu erleichtern, werden wir die Testsitzung auf Video und Audio
                                    aufzeichnen. Die Aufzeichnung wird nur intern und für unseren Auftraggeber
                                    zugänglich gemacht, um die Testergebnisse zu demonstrieren. Die Aufzeichnung
                                    wird nicht veröffentlicht.<br></p>
                                <p>Bitte lesen Sie die folgende Erklärung und unterschreiben Sie darunter.
                                    <br>Vielen Dank!</p>
                        </tr>
                        <tr>
                            <td>
                                <p>Ich bin damit einverstanden. dass ich in Ton und Bild aufgezeichnet werde,
                                    während
                                    ich an dem Test teilnehme.</p>
                                <p>Ich gestatte es ausdrücklich, diese Aufzeichnung zu Zwecken der Untersuchung
                                    und Demonstration der Testergebnisse intern und dem Auftraggeber gegenüber zu
                                    verwenden.</p>
                        </tr>
                        <tr>
                            <th>
                                <p>Name, Vorname (Bitte in Druckbuchstaben ausfüllen):</p><br>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p>Datum, Ort, Unterschrift:</p>
                                <br>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane row" id="protokollleitfadenwetter" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Aufgabenanweisung</th>
                            <th>Einstiegsseite</th>
                            <th>Lösungsschritte</th>
                            <th>Beobachtungen</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                Welches Wetter ist morgen bei Ihnen Zuhause gemeldet? Was ist die Temperatur um 12 Uhr?
                            </td>
                            <td>
                                Startseite
                            </td>
                            <td>
                                <ul>
                                    <li>Ort über Suchfeld eingeben</li>
                                    <li>„morgen“ auswählen (3 Möglichkeiten)</li>
                                    <li>Leiste „Mittag“ finden und aufklappen</li>
                                    <li>Temperatur für 12.00 Uhr nennen</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                Wie wandern die Wolken über Bayern? Ab wann ist Nürnberg morgen stark bewölkt?
                            </td>
                            <td>
                            </td>
                            <td>
                                <ul>
                                    <li>Auswählen „Niederschlagsradar“ (rechte Spalte)</li>
                                    <li>Auswahlmenü („Niederschlagsradar“) nutzen und „Bewölkung“ auswählen</li>
                                    <li>Play-Button drücken</li>
                                    <li>(Ergebnis: 6:00 – 8:00 Uhr)
                                        Alternative: 1
                                    </li>
                                    <li>Menü „Wetterkarten“ > Untermenü „Bewölkung“</li>
                                    <li>Menü „Wetterkarten“</li>
                                </ul>
                            </td>

                            <td></td>
                        </tr>
                        <tr>
                            <td>Finden Sie ein Sommerurlaubsziel in Südamerika, welches im Juli eine Durchschnittstemperatur von 18 bis 30 Grad Celsius hat.
                            </td>
                            <td>Startseite
                            </td>
                            <td>
                                <ul>
                                    <li>Menü: „Reise und Freizeit“ > Untermenü „Urlaubswetter“  auswählen
                                    </li>
                                    <li>Parameter einstellen und unzutreffende abwählen</li>
                                    <li>18-30 Grad</li>
                                    <li>Juli (Januar streichen)
                                    </li>
                                    <li>Südamerika (Europa streichen)</li>
                                    <li>Button „Ergebnisse anzeigen “ auswählen
                                    </li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane row" id="testskriptwetter" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Testskript</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <p><b>Technische Vorbereitung</b></p>
                                <p>Browsercache löschen
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Briefing</b></p>
                                <p>Geheimhaltungsvereinbarung und Einverständniserklärung zur Video-Aufzeichnung
                                    unterschreiben lassen.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Einleitung und Beschreibung des Testgegenstands</b></p>
                                <p>Wir möchten Sie bitten, die Seite www.wetter.com für uns zu testen. Sie helfen uns damit, die
                                    Website hinsichtlich ihrer Gebrauchstauglichkeit zu verbessern.
                                </p>
                                <p>Herzlichen Dank, dass sie sich mit der Aufzeichnung des Tests einverstanden erklärt
                                    haben. Alle Eingaben werden nur für die Dauer des Tests und seiner Auswertung
                                    gespeichert. Sie müssen sich daher keine Sorgen um die unrechtmäßige Verwendung
                                    ihrer Daten machen.
                                    Vor Ihnen befindet sich eine Technologie mit der wir registrieren können, wo auf den
                                    Bildschirm Sie gerade blicken. Da jeder Mensch einen anderen Augenabstand hat,
                                    werden wir das Gerät zunächst gemäß ihrem Augenabstand kalibrieren. Ich führe das
                                    jetzt gemeinsam mit Ihnen durch. Bitte setzen Sie sich so hin, wie Sie bequem am
                                    Computer arbeiten können.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Augencheck</b></p>
                                <p>Auf dem Bildschirm vor Ihnen erscheint gleich ein roter Punkt, ich bitte Sie, diesen
                                    mit den Augen zu verfolgen.
                                </p>
                                <p><b>Kalibration</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Anweisung vor den Aufgaben</b></p>
                                <p>Ganz wichtig ist, wir evaluieren nicht Sie sondern Sie evaluieren für uns wetter.com.
                                    Damit helfen Sie uns wetter.com zu verbessern.
                                    Dazu erhalten Sie jetzt Aufgaben. Diese lese ich Ihnen vor. Zusätzlich bekommen sie
                                    von mir ein Blatt mit der Aufgabenformulierung, damit Sie jederzeit nachlesen
                                    können.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Anweisung Think-Aloud</b></p>
                                <p>Während Sie das System bedienen bitte ich Sie, laut zu denken und Ihren Eindruck vom
                                    System zu schildern, dabei ist jede Bemerkung gleich wertvoll, egal ob negativ oder
                                    positiv.
                                    Wir möchten wissen, was Sie überrascht, was Sie freut, was Sie irritiert oder sogar
                                    frustriert. Wenn Sie an einen Punkt kommen, an dem Sie nicht sicher sind was Sie tun
                                    sollen oder Sie versuchen herauszufinden, was Sie hier tun sollen, dann sagen Sie
                                    uns bitte, was Sie denken.
                                </p>
                                <p>Sie können jederzeit Fragen stellen, haben Sie im Moment Fragen?
                                </p>
                                <p><b>Start der Eyetracking-Aufzeichnung
                                    </b></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane row" id="testplanwetter" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Testplan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane row" id="testberichtwetter" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Testbericht</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!--            Step Projekt-->

            <div class="tab-pane row" id="einverstaendniserklaerungstep" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Einverständniserklärung</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <p>Vielen Dank, dass Sie uns helfen, die Anwendung, die wir gerade entwickeln zu
                                    verbessern. </p>
                                <p>Wir bewerten nicht Sie. Wir bewerten das Produkt.<br>
                                    Sie können jederzeit abbrechen.<br>
                                    Wenn Sie eine Pause benötigen, können Sie das einfach sagen.</p>
                                <p>Um uns die Arbeit zu erleichtern, werden wir die Testsitzung auf Video und Audio
                                    aufzeichnen. Die Aufzeichnung wird nur intern und für unseren Auftraggeber
                                    zugänglich gemacht, um die Testergebnisse zu demonstrieren. Die Aufzeichnung
                                    wird nicht veröffentlicht.<br></p>
                                <p>Bitte lesen Sie die folgende Erklärung und unterschreiben Sie darunter.
                                    <br>Vielen Dank!</p>
                        </tr>
                        <tr>
                            <td>
                                <p>Ich bin damit einverstanden. dass ich in Ton und Bild aufgezeichnet werde,
                                    während
                                    ich an dem Test teilnehme.</p>
                                <p>Ich gestatte es ausdrücklich, diese Aufzeichnung zu Zwecken der Untersuchung
                                    und Demonstration der Testergebnisse intern und dem Auftraggeber gegenüber zu
                                    verwenden.</p>
                        </tr>
                        <tr>
                            <th>
                                <p>Name, Vorname (Bitte in Druckbuchstaben ausfüllen):</p><br>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p>Datum, Ort, Unterschrift:</p>
                                <br>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane row" id="protokollleitfadenstep" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Aufgabenanweisung</th>
                            <th>Einstiegsseite</th>
                            <th>Lösungsschritte</th>
                            <th>Beobachtungen</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Sie haben einen neuen Evaluierungsprojektauftrag bekommen und möchten nun ein neues Projekt anlegen.<br>
                                Bitte erstellen Sie ein neues Projekt und nennen Sie es "Demo". Der Auftraggeber ist "Technische Hochschule".
                            </td>
                            <td>
                            Dashboard
                            </td>
                            <td>
                                <ul>
                                    <li>"Projekte" in der linken Menüleiste auswählen</li>
                                    <li>auf "+ Erstellen" - Button klicken</li>
                                    <li>bei "Titel" den Namen "Demo" eingeben</li>
                                    <li>auf "Erstellen" klicken</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                            Suchen Sie bitte das Projekt "Social App" und finden Sie den Ansprechpartner sowie alle Projektbeteiligten heraus.
                            </td>
                            <td>
                                Projektübersicht
                            </td>
                            <td>
                                <ul>
                                    <li>Projekt "Social App" in der Liste auswählen</li>
                                    <li>Ansprechpartner ist Meier Thomas</li>
                                    <li>Beteiligten sind Meier Thomas, Schark Alina, Steinbinder Nathalie</li>
                                </ul>
                            </td>
                            <td></td>

                        </tr>
                        <tr>
                            <td>Sie wollen für Ihren anstehenden Usability Test eine neue Testaufgabe erstellen<br>
                                Legen Sie bitte eine neue Testaufgabe mit dem Inhalt "Senden Sie eine Nachricht an: Thomas" an.
                            </td>
                            <td>Projektseite
                            </td>
                            <td>
                                <ul>
                                    <li>Den Reiter "Testaufgaben" auswählen</li>
                                    <li>Auf das "+" bei "Aufgabenliste" klicken</li>
                                   <li>Im Dropdown - Menü "Testaufgabe" auswählen</li>
                                    <li>Auf "Testaufgabe" klicken</li>
                                    <li>in "Aufgabenbeschreibung" "Senden Sie eine Nachricht an: Thomas" eingeben</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane row" id="testskriptstep" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Testskript</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <p><b>Technische Vorbereitung</b></p>
                                <p>Browsercache löschen
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Briefing</b></p>
                                <p>Geheimhaltungsvereinbarung und Einverständniserklärung zur Video-Aufzeichnung
                                    unterschreiben lassen.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Einleitung und Beschreibung des Testgegenstands</b></p>
                                <p>Wir möchten Sie bitten, die Webanwendung step für uns zu testen. Sie helfen uns damit, die
                                    Webanwendung hinsichtlich ihrer Gebrauchstauglichkeit zu verbessern.
                                </p>
                                <p>Herzlichen Dank, dass sie sich mit der Aufzeichnung des Tests einverstanden erklärt
                                    haben. Alle Eingaben werden nur für die Dauer des Tests und seiner Auswertung
                                    gespeichert. Sie müssen sich daher keine Sorgen um die unrechtmäßige Verwendung
                                    ihrer Daten machen.
                                    Vor Ihnen befindet sich eine Technologie mit der wir registrieren können, wo auf den
                                    Bildschirm Sie gerade blicken. Da jeder Mensch einen anderen Augenabstand hat,
                                    werden wir das Gerät zunächst gemäß ihrem Augenabstand kalibrieren. Ich führe das
                                    jetzt gemeinsam mit Ihnen durch. Bitte setzen Sie sich so hin, wie Sie bequem am
                                    Computer arbeiten können.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Augencheck</b></p>
                                <p>Auf dem Bildschirm vor Ihnen erscheint gleich ein roter Punkt, ich bitte Sie, diesen
                                    mit den Augen zu verfolgen.
                                </p>
                                <p><b>Kalibration</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Anweisung vor den Aufgaben</b></p>
                                <p>Ganz wichtig ist, wir evaluieren nicht Sie sondern Sie evaluieren für uns wetter.com.
                                    Damit helfen Sie uns wetter.com zu verbessern.
                                    Dazu erhalten Sie jetzt Aufgaben. Diese lese ich Ihnen vor. Zusätzlich bekommen sie
                                    von mir ein Blatt mit der Aufgabenformulierung, damit Sie jederzeit nachlesen
                                    können.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Anweisung Think-Aloud</b></p>
                                <p>Während Sie das System bedienen bitte ich Sie, laut zu denken und Ihren Eindruck vom
                                    System zu schildern, dabei ist jede Bemerkung gleich wertvoll, egal ob negativ oder
                                    positiv.
                                    Wir möchten wissen, was Sie überrascht, was Sie freut, was Sie irritiert oder sogar
                                    frustriert. Wenn Sie an einen Punkt kommen, an dem Sie nicht sicher sind was Sie tun
                                    sollen oder Sie versuchen herauszufinden, was Sie hier tun sollen, dann sagen Sie
                                    uns bitte, was Sie denken.
                                </p>
                                <p>Sie können jederzeit Fragen stellen, haben Sie im Moment Fragen?
                                </p>
                                <p><b>Start der Eyetracking-Aufzeichnung
                                    </b></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

<!--Social App-->

            <div class="tab-pane row" id="einverstaendniserklaerungsocialapp" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Einverständniserklärung</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <p>Vielen Dank, dass Sie uns helfen, die Anwendung, die wir gerade entwickeln zu
                                    verbessern. </p>
                                <p>Wir bewerten nicht Sie. Wir bewerten das Produkt.<br>
                                    Sie können jederzeit abbrechen.<br>
                                    Wenn Sie eine Pause benötigen, können Sie das einfach sagen.</p>
                                <p>Um uns die Arbeit zu erleichtern, werden wir die Testsitzung auf Video und Audio
                                    aufzeichnen. Die Aufzeichnung wird nur intern und für unseren Auftraggeber
                                    zugänglich gemacht, um die Testergebnisse zu demonstrieren. Die Aufzeichnung
                                    wird nicht veröffentlicht.<br></p>
                                <p>Bitte lesen Sie die folgende Erklärung und unterschreiben Sie darunter.
                                    <br>Vielen Dank!</p>
                        </tr>
                        <tr>
                            <td>
                                <p>Ich bin damit einverstanden. dass ich in Ton und Bild aufgezeichnet werde,
                                    während
                                    ich an dem Test teilnehme.</p>
                                <p>Ich gestatte es ausdrücklich, diese Aufzeichnung zu Zwecken der Untersuchung
                                    und Demonstration der Testergebnisse intern und dem Auftraggeber gegenüber zu
                                    verwenden.</p>
                        </tr>
                        <tr>
                            <th>
                                <p>Name, Vorname (Bitte in Druckbuchstaben ausfüllen):</p><br>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p>Datum, Ort, Unterschrift:</p>
                                <br>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane row" id="protokollleitfadensocialapp" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Aufgabenanweisung</th>
                            <th>Einstiegsseite</th>
                            <th>Lösungsschritte</th>
                            <th>Beobachtungen</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                Welches Wetter ist morgen bei Ihnen Zuhause gemeldet? Was ist die Temperatur um 12 Uhr?
                            </td>
                            <td>
                                Startseite
                            </td>
                            <td>
                                <ul>
                                    <li>Ort über Suchfeld eingeben</li>
                                    <li>„morgen“ auswählen (3 Möglichkeiten)</li>
                                    <li>Leiste „Mittag“ finden und aufklappen</li>
                                    <li>Temperatur für 12.00 Uhr nennen</li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                Wie wandern die Wolken über Bayern? Ab wann ist Nürnberg morgen stark bewölkt?
                            </td>
                            <td>
                            </td>
                            <td>
                                <ul>
                                    <li>Auswählen „Niederschlagsradar“ (rechte Spalte)</li>
                                    <li>Auswahlmenü („Niederschlagsradar“) nutzen und „Bewölkung“ auswählen</li>
                                    <li>Play-Button drücken</li>
                                    <li>(Ergebnis: 6:00 – 8:00 Uhr)
                                        Alternative: 1
                                    </li>
                                    <li>Menü „Wetterkarten“ > Untermenü „Bewölkung“</li>
                                    <li>Menü „Wetterkarten“</li>
                                </ul>
                            </td>

                            <td></td>
                        </tr>
                        <tr>
                            <td>Finden Sie ein Sommerurlaubsziel in Südamerika, welches im Juli eine Durchschnittstemperatur von 18 bis 30 Grad Celsius hat.
                            </td>
                            <td>Startseite
                            </td>
                            <td>
                                <ul>
                                    <li>Menü: „Reise und Freizeit“ > Untermenü „Urlaubswetter“  auswählen
                                    </li>
                                    <li>Parameter einstellen und unzutreffende abwählen</li>
                                    <li>18-30 Grad</li>
                                    <li>Juli (Januar streichen)
                                    </li>
                                    <li>Südamerika (Europa streichen)</li>
                                    <li>Button „Ergebnisse anzeigen “ auswählen
                                    </li>
                                </ul>
                            </td>
                            <td></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane row" id="testskriptsocialapp" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Testskript</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <p><b>Technische Vorbereitung</b></p>
                                <p>Browsercache löschen
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Briefing</b></p>
                                <p>Geheimhaltungsvereinbarung und Einverständniserklärung zur Video-Aufzeichnung
                                    unterschreiben lassen.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Einleitung und Beschreibung des Testgegenstands</b></p>
                                <p>Wir möchten Sie bitten, die Social App für uns zu testen. Sie helfen uns damit, die
                                    App hinsichtlich ihrer Gebrauchstauglichkeit zu verbessern.
                                </p>
                                <p>Herzlichen Dank, dass sie sich mit der Aufzeichnung des Tests einverstanden erklärt
                                    haben. Alle Eingaben werden nur für die Dauer des Tests und seiner Auswertung
                                    gespeichert. Sie müssen sich daher keine Sorgen um die unrechtmäßige Verwendung
                                    ihrer Daten machen.
                                    Vor Ihnen befindet sich eine Technologie mit der wir registrieren können, wo auf den
                                    Bildschirm Sie gerade blicken. Da jeder Mensch einen anderen Augenabstand hat,
                                    werden wir das Gerät zunächst gemäß ihrem Augenabstand kalibrieren. Ich führe das
                                    jetzt gemeinsam mit Ihnen durch. Bitte setzen Sie sich so hin, wie Sie bequem am
                                    Computer arbeiten können.
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Augencheck</b></p>
                                <p>Auf dem Bildschirm vor Ihnen erscheint gleich ein roter Punkt, ich bitte Sie, diesen
                                    mit den Augen zu verfolgen.
                                </p>
                                <p><b>Kalibration</b></p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Anweisung vor den Aufgaben</b></p>
                                <p>Ganz wichtig ist, wir evaluieren nicht Sie sondern Sie evaluieren für uns wetter.com.
                                    Damit helfen Sie uns wetter.com zu verbessern.
                                    Dazu erhalten Sie jetzt Aufgaben. Diese lese ich Ihnen vor. Zusätzlich bekommen sie
                                    von mir ein Blatt mit der Aufgabenformulierung, damit Sie jederzeit nachlesen
                                    können.</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p><b>Anweisung Think-Aloud</b></p>
                                <p>Während Sie das System bedienen bitte ich Sie, laut zu denken und Ihren Eindruck vom
                                    System zu schildern, dabei ist jede Bemerkung gleich wertvoll, egal ob negativ oder
                                    positiv.
                                    Wir möchten wissen, was Sie überrascht, was Sie freut, was Sie irritiert oder sogar
                                    frustriert. Wenn Sie an einen Punkt kommen, an dem Sie nicht sicher sind was Sie tun
                                    sollen oder Sie versuchen herauszufinden, was Sie hier tun sollen, dann sagen Sie
                                    uns bitte, was Sie denken.
                                </p>
                                <p>Sie können jederzeit Fragen stellen, haben Sie im Moment Fragen?
                                </p>
                                <p><b>Start der Eyetracking-Aufzeichnung
                                    </b></p>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane row" id="testplansocialapp" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Testplan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane row" id="testberichtsocialapp" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Testbericht</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!--            amazon-->
            <div class="tab-pane row" id="einverstaendniserklaerungamazon" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Einverständniserklärung</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <p>Vielen Dank, dass Sie uns helfen, die Anwendung, die wir gerade entwickeln zu
                                    verbessern. </p>
                                <p>Wir bewerten nicht Sie. Wir bewerten das Produkt.<br>
                                    Sie können jederzeit abbrechen.<br>
                                    Wenn Sie eine Pause benötigen, können Sie das einfach sagen.</p>
                                <p>Um uns die Arbeit zu erleichtern, werden wir die Testsitzung auf Video und Audio
                                    aufzeichnen. Die Aufzeichnung wird nur intern und für unseren Auftraggeber
                                    zugänglich gemacht, um die Testergebnisse zu demonstrieren. Die Aufzeichnung
                                    wird nicht veröffentlicht.<br></p>
                                <p>Bitte lesen Sie die folgende Erklärung und unterschreiben Sie darunter.
                                    <br>Vielen Dank!</p>
                        </tr>
                        <tr>
                            <td>
                                <p>Ich bin damit einverstanden. dass ich in Ton und Bild aufgezeichnet werde,
                                    während
                                    ich an dem Test teilnehme.</p>
                                <p>Ich gestatte es ausdrücklich, diese Aufzeichnung zu Zwecken der Untersuchung
                                    und Demonstration der Testergebnisse intern und dem Auftraggeber gegenüber zu
                                    verwenden.</p>
                        </tr>
                        <tr>
                            <th>
                                <p>Name, Vorname (Bitte in Druckbuchstaben ausfüllen):</p><br>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p>Datum, Ort, Unterschrift:</p>
                                <br>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>


            </div>
            <!--            TH-->
            <div class="tab-pane row" id="einverstaendniserklaerungth" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Einverständniserklärung</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <p>Vielen Dank, dass Sie uns helfen, die Anwendung, die wir gerade entwickeln zu
                                    verbessern. </p>
                                <p>Wir bewerten nicht Sie. Wir bewerten das Produkt.<br>
                                    Sie können jederzeit abbrechen.<br>
                                    Wenn Sie eine Pause benötigen, können Sie das einfach sagen.</p>
                                <p>Um uns die Arbeit zu erleichtern, werden wir die Testsitzung auf Video und Audio
                                    aufzeichnen. Die Aufzeichnung wird nur intern und für unseren Auftraggeber
                                    zugänglich gemacht, um die Testergebnisse zu demonstrieren. Die Aufzeichnung
                                    wird nicht veröffentlicht.<br></p>
                                <p>Bitte lesen Sie die folgende Erklärung und unterschreiben Sie darunter.
                                    <br>Vielen Dank!</p>
                        </tr>
                        <tr>
                            <td>
                                <p>Ich bin damit einverstanden. dass ich in Ton und Bild aufgezeichnet werde,
                                    während
                                    ich an dem Test teilnehme.</p>
                                <p>Ich gestatte es ausdrücklich, diese Aufzeichnung zu Zwecken der Untersuchung
                                    und Demonstration der Testergebnisse intern und dem Auftraggeber gegenüber zu
                                    verwenden.</p>
                        </tr>
                        <tr>
                            <th>
                                <p>Name, Vorname (Bitte in Druckbuchstaben ausfüllen):</p><br>
                            </th>
                        </tr>
                        <tr>
                            <th>
                                <p>Datum, Ort, Unterschrift:</p>
                                <br>
                            </th>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>
<?php include('scripts.html'); ?>
<script>

    $(document).ready(function () {

//        changes the active collapse class to 'on' for changing the text to bold

        $(function () {
            $('.panel-heading a').click(function () {
                $(this).toggleClass('on');
            });
        });

        //shows different page content

        $(function () {
            $('.nav-item').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });

        $(function () {
            $('nav-link').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });
    });

</script>
</body>

</html>