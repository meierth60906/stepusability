<?php
/**
 * Created by PhpStorm.
 * User: Nathalie Steinbinder
 * Date: 21.07.2017
 * Time: 18:24
 */
?>
<!DOCTYPE html>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

<html lang="de">
<head>
    <title>Testfenster Protokollant</title>

    <?php include ('head.html'); ?>
</head>
<body>


<section id="testfenster">
    <div class="container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-4">
                <h1>Testfenster</h1>
            </div>
            <span class="col-4 align-self-center text-center">
                    <a class="buttonTestfensterLinks" href="testfenster_mod.php">
                        <span class="hidden-sm-down">Moderator</span></a>
                    <a class="buttonTestfensterRechts" href="testfenster_prot.php">
                        <span class="hidden-sm-down">Protokollant</span></a>
                </span>
                <!--<ul id="switch" class="nav" role="tablist">
                    <li class="nav-item">
                        <a id="buttonlinks" class="nav-link active" href="testfenster_mod.php" role="tab" data-toggle="tab">Moderator</a>
                    </li>
                    <li class="nav-item">
                        <a id="buttonrechts" class="nav-link" href="testfenster_prot.php" role="tab" data-toggle="tab">Protokollant</a>
                    </li>
                </ul>-->


            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" href="projects/index.php">
                    <div class="icon-stop d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Test beenden</span></a>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="inner-body row c-grey-bg">
            <div class="col-2 text-right p-5">
                <a class="c-orange" href="testfenster_prot.php"><i class="question-angles icon-angle-left"></i></a>
            </div>
            <div class="col-8 p-5">
                <p class="font-weight-bold text-center">Aufgabe 2</p>
                <p class="text-center">
                    Suchen Sie  bitte das Projekt „Social App“ und finden Sie den Ansprechpartner sowie zwei der Projektbeteiligten heraus.
                </p>
            </div>
            <div class="col-2 p-5">
                <a class="c-orange" href="testfenster_prot3.php"><i class="question-angles icon-angle-right"></i></a>
            </div>
        </div>

        <div class="row px-5 py-2">

            <div class="col-sm-12">
                <div class="radio text-center">
                    <label style="font-size: 1.5em">
                        <input type="radio" name="o5" value="">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        Geschafft
                    </label>
                    <p>       </p>
                    <label style="font-size: 1.5em">
                        <input type="radio" name="o5" value="">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        Nicht geschafft
                    </label>
                </div>

                <label for="inputRole" class="col-lg-3 form-control-label">Lösungsschritte</label>

                <div class="form-group col-12 py-2">
                    <ul>
                        <li>Projekt "Social App" in der Liste auswählen</li>
                        <li>Ansprechpartner ist step</li>
                        <li>Beteiligten sind Thomas Meier, Nathalie Steinbinder und Alina Schark</li>
                    </ul>
                </div>

                <form action="/logic/insertTestfensterProt.php">

                    <label for="inputRole" class="col-lg-3 form-control-label">Beobachtung</label>
                    <div class="form-group col-12 text-center py-2">
                        <textarea name="Beobachtung" class="form-control" id="message-text" placeholder=""></textarea>
                    </div>

                  <!--  <label for="inputRole" class="col-lg-3 form-control-label">Shortcuts</label>
                    <div class="form-group col-12 text-center py-2">
                        <textarea class="form-control" id="message-text" placeholder=""></textarea>
                    </div>
                    <input type="hidden" name="Protokollant" value="1">
                    <input type="hidden" name="Termin" value="1">
                    <input type="hidden" name="TerminUt" value="1">
                    <input type="hidden" name="Textbaustein" value="1">
                    <input type="hidden" name="TextbausteinAbschnitt" value="2">
                    <input type="hidden" name="TextbausteinAbschnittUt" value="1">-->


                    <input type="submit" value="Speichern">

                </form>
            </div>
        </div>
    </div>
</section>
<?php include ('scripts.html'); ?>

</body>

</html>