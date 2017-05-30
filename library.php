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
<body>
<!-- Sidebar und Header-->

<?php include('navigation.html'); ?>

<section id="library" class="page-content">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <h1>Bibliothek</h1>

            <div class="offset-8 text-right align-self-center ">
                <a class="titlebar-link" href="#">
                    <div class=" d-inline-block px-2"></div>
                    <span class="hidden-sm-down icon-print"> Drucken</span>
                </a>
                <a class="titlebar-link" href="library.php">
                    <div class=" d-inline-block px-2"></div>
                    <span class="hidden-sm-down icon-pencil"> Bearbeiten</span>
                </a>
            </div>
        </div>


        <!--innere Navigationsleiste-->
        <div class="container row">
            <div class="col-lg-3 p-0" id="sidebarLibrary">


                <!--                <!--                    Switch Button-->
                <!--                <div class="container">-->
                <!--                    <div class=btn-group" data-toggle="buttons">-->
                <!--                        <label class="btn btn-primary active">-->
                <!--                            <a class="active switchlink" href="#projects"><input type="radio" name="options"-->
                <!--                                                                                 id="option1" autocomplete="off"-->
                <!--                                                                                 checked>Projekte-->
                <!--                            </a>-->
                <!--                        </label>-->
                <!--                        <label class="btn btn-primary">-->
                <!--                            <a class="switchlink" href="#archiv"><input type="radio" name="options" id="option2"-->
                <!--                                                                        autocomplete="off">Archiv</a>-->
                <!--                        </label>-->
                <!--                    </div>-->
                <!--                </div>-->

                <div class="panel-group">
                    <div class="panel panel-default">


                        <!--                    innere Navigationsleiste -->

                        <!--Projekt 1-->


                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="icon-angle-right active" data-toggle="collapse"
                                   href="#projekt1">Projekt
                                    1</a>
                            </h4>
                        </div>
                        <div id="projekt1" class="panel-collapse collapse active">
                            <ul class="flex-column nav">
                                <li class="nav-item" >
                                    <a class="icon-file-text-o p-3 nav-link active" href="#einver" role="tab" data-toggle="tab"> Einverständniserklärung</a>
                                </li>
                            </ul>
                        </div>

                        <!--Projekt 2-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#projekt2"
                                   class="icon-angle-right">Projekt
                                    2</a>
                            </h4>
                        </div>
                        <div id="projekt2" class="panel-collapse collapse">
                            <ul class="flex-column nav">
                                <li class="nav-item" >
                                    <a class="icon-file-text-o p-3 nav-link" href="#einver1" role="tab" data-toggle="tab"> Einverständniserklärung</a></li>
                            </ul>
                        </div>

                        <!--Projekt 3-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#projekt3"
                                   class="icon-angle-right">Projekt 3</a>
                            </h4>
                        </div>
                        <div id="projekt3" class="panel-collapse collapse">
                            <ul class="flex-column nav">
                                <li class="nav-item" >
                                    <a class="icon-file-text-o p-3 nav-link" href="#leitfaden2" role="tab" data-toggle="tab">
                                        Protokollleitfaden</a></li>
                            </ul>
                        </div>

                        <!--Projekt 4-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#projekt4" class="icon-angle-right">Projekt
                                    4</a>
                            </h4>
                        </div>
                        <div id="projekt4" class="panel-collapse collapse">
                            <ul class="flex-column nav">
                                <li class="nav-item" >
                                    <a class="icon-file-text-o p-3 nav-link" href="#leitfaden1" role="tab" data-toggle="tab"> Protokollleitfaden</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    page content-->

    <div class="container-fluid">
        <div class="tab-content">

            <div class="tab-pane active" id="einver" role="tabpanel">
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

            <div class="tab-pane row" id="einver1" role="tabpanel">
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


            <div class="tab-pane row" id="leitfaden1" role="tabpanel">
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


            <div class="tab-pane row" id="leitfaden2" role="tabpanel">
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


    });

</script>
</body>

</html>