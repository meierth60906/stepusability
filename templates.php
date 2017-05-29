<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vorlagen | step</title>
    <?php include('head.html') ?>

</head>
<body>
<!-- Sidebar und Header-->

<?php include('navigation.html'); ?>

<section id="templates" class="page-content">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <h1>Vorlagen</h1>

            <div class="offset-8 text-right align-self-center ">
                <a class="titlebar-link" href="templates.php">
                    <div class=" d-inline-block px-2"></div>
                    <span class="hidden-sm-down icon-pencil"> Bearbeiten</span>
                </a>
            </div>
        </div>


        <!--innere Navigationsleiste-->

        <div class="container row">
            <div class="col-lg-3 p-0" id="sidebarTemplates">


                <div class="panel-group">
                    <div class="panel panel-default">




                        <!--                        Einverständniserklärung-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#einverstaendniserklaerung"
                                   class="icon-angle-right active">Einverständniserklärung</a>
                            </h4>
                        </div>
                        <div id="einverstaendniserklaerung" class="panel-collapse collapse active">
                            <ul class="list-group">
                                <a href="#einverstaendniserklaerung1"><li class="list-group-item icon-file-text-o active"> Vorlage 1</li></a>
                            </ul>
                        </div>


                        <!--                            Protkollleitfaden-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#protokollleitfaden"
                                   class="icon-angle-right">Protokollleitfaden</a>
                            </h4>
                        </div>
                        <div id="protokollleitfaden" class="panel-collapse collapse">
                            <ul class="list-group">
                                <a href="#protokollleitfaden1"><li class="list-group-item icon-file-text-o">
                                        Vorlage 1</li></a>
                            </ul>
                        </div>


                        <!--Testskript-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#testskript" class="icon-angle-right">Testskript</a>
                            </h4>
                        </div>
                        <div id="testskript" class="panel-collapse collapse">
                            <ul class="list-group">
                                <a href="#testskript1"><li class="list-group-item icon-file-text-o"> Vorlage 1
                                </li></a>
                            </ul>
                        </div>
                        <!--                    Testplan-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#testplan" class="icon-angle-right">Testplan</a>
                            </h4>
                        </div>
                        <div id="testplan" class="panel-collapse collapse">
                            <ul class="list-group">
                                <a href="#testplan1"><li class="list-group-item icon-file-text-o"> Vorlage 1
                                </li></a>
                            </ul>
                        </div>


                        <!--                    Testbericht-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#testbericht"
                                   class="icon-angle-right">Testbericht</a>
                            </h4>
                        </div>
                        <div id="testbericht" class="panel-collapse collapse">
                            <ul class="list-group">
                                <a href="#testbericht1"><li class="list-group-item icon-file-text-o"> Vorlage
                                        1</li></a>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--page content -->


    <div class="container-fluid">
        <div class="tab-content">


            <div class="tab-pane active" id="einverstaendniserklaerung1" role="tabpanel">
                <div class="row">
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

            <div class="tab-pane row" id="protokollleitfaden1" role="tabpanel">
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
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td>
                            </td>
                            <td></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane row" id="testskript1" role="tabpanel">
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
                                <p>Wir möchten Sie bitten, www.wetter.com für uns zu testen. Sie helfen uns damit, die
                                    Webseite hinsichtlich ihrer Gebrauchstauglichkeit zu verbessern.
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


            <div class="tab-pane row" id="testplan1" role="tabpanel">
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

            <div class="tab-pane row" id="testbericht1" role="tabpanel">
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
        </div>
    </div>


</section>
<?php include('scripts.html'); ?>
<script>
    $(document).ready(function () {


        $(function () {
//        changes the active collapse class to 'on' for changing the text to bold
            $('.panel-heading a').click(function () {
                $(this).toggleClass('on');
            });

        });

        $(function () {
            $('ul > a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });

    });


</script>
</body>

</html>