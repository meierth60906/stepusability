<?php
session_start();
if (!$_SESSION['login_user']){
    $_SESSION['login_user'] = '';
    header("Location:index.php");
    die();
}
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
            <div class="col-4">
                <div class="btn-group-md testfensterswitch btn-group" data-toggle="buttons">
                    <label class="btn-group-md testfensterswitch btn btn-primary">
                        <a href="testfenster_mod.php" class="switchlink">
                            <input type="radio" name="options" id="option1" autocomplete="off">Moderator
                        </a>
                    </label>
                    <label class="btn-group-lg testfensterswitch btn btn-primary active">
                        <a class="active switchlink" href="testfenster_prot.php">
                            <input type="radio" name="options" id="option2" autocomplete="off" checked>Protokollant</a>
                    </label>
                </div>
            </div>

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
                <a class="c-orange" href=""><i class="question-angles icon-angle-left"></i></a>
            </div>
            <div class="col-8 p-5">
                <p class="font-weight-bold text-center">Aufgabe 1</p>
                <p class="text-center">
                    Welches Wetter ist morgen bei Ihnen Zuhause gemeldet?
                </p>
            </div>
            <div class="col-2 p-5">
                <a class="c-orange" href=""><i class="question-angles icon-angle-right"></i></a>
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
                    <label style="font-size: 1.5em">
                        <input type="radio" name="o5" value="">
                        <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                        Nicht geschafft
                    </label>
                </div>

                <label for="inputRole" class="col-lg-3 form-control-label">Lösungsschritte</label>

                <div class="form-group col-12 py-2">
                    <ul>
                        <li>Ort über Suchfeld eingeben</li>
                        <li>„morgen“ auswählen (3 Möglichkeiten) </li>
                        <li>Leiste „Mittag“ finden und aufklappen</li>
                        <li>Temperatur für 12.00 Uhr nennen"></li></ul>
                </div>

                <form action="/logic/insertTestfensterProt.php">

                    <label for="inputRole" class="col-lg-3 form-control-label">Beobachtung</label>
                    <div class="form-group col-12 text-center py-2">
                        <textarea name="Beobachtung" class="form-control" id="message-text" placeholder=""></textarea>
                    </div>

                    <label for="inputRole" class="col-lg-3 form-control-label">Shortcuts</label>
                    <div class="form-group col-12 text-center py-2">
                        <textarea class="form-control" id="message-text" placeholder=""></textarea>
                    </div>
                    <input type="hidden" name="Protokollant" value="1">
                    <input type="hidden" name="Termin" value="1">
                    <input type="hidden" name="TerminUt" value="1">
                    <input type="hidden" name="Textbaustein" value="1">
                    <input type="hidden" name="TextbausteinAbschnitt" value="2">
                    <input type="hidden" name="TextbausteinAbschnittUt" value="1">


                    <input type="submit" value="Speichern">

                </form>
            </div>
        </div>

</section>
<?php include ('scripts.html'); ?>

</body>

</html>