<?php
//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:index.php");
//    die();
//}
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
                <a class="c-orange" href="#testaufgabenladen"><i class="question-angles icon-angle-left"></i></a>
            </div>
            <div class="col-8 p-5">
                <p class="font-weight-bold text-center">Aufgabe 1</p>
                <p class="text-center">
                    Sie haben einen neuen Evaluierungsprojektauftrag bekommen und möchten nun ein neues Projekt anlegen.<br> Bitte erstellen Sie ein neues Projekt und nennen Sie es "Demo", der Auftraggeber ist "Technische Hochschule".

                </p>
                <p id="questionId" class="font-weight-bold text-center">Aufgabe</p>
                <div class="text-center" id="taskQuestionContainerTF"></div>

            </div>
            <div class="col-2 p-5">
                <a class="c-orange" href="testfenster_prot2.php"><i class="question-angles icon-angle-right"></i></a>
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
                        <li>"Projekte" in der linken Menüleiste auswählen</li>
                        <li>Auf "+ Erstellen" - Button klicken</li>
                        <li>Bei "Titel" den Namen "Demo" eingeben</li>
                        <li>Bei "Auftraggeber" "Technische Hochschule" eingeben</li>
                        <li>Auf "Erstellen" klicken</li>
                    </ul>
                </div>

                <form action="/logic/insertTestfensterProt.php">

                    <label for="inputRole" class="col-lg-3 form-control-label">Beobachtung</label>
                    <div class="form-group col-12 text-center py-2">
                        <textarea name="Beobachtung" class="form-control" id="message-text" placeholder=""></textarea>
                    </div>

                    <!-- <label for="inputRole" class="col-lg-3 form-control-label">Shortcuts</label>
                     <div class="form-group col-12 text-center py-2">
                         <textarea class="form-control" id="message-text" placeholder=""></textarea>
                     </div>-->
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
    </div>
</section>


<?php include ('scripts.html'); ?>
<script>


    var taskQuestionContainerTF = $("#taskQuestionContainerTF");

    function loadTaskQuestionTF(elem) {
        taskId = $(elem).data('id');

        $.ajax({
            data: 'tid=' + taskId,
            type: 'post',
            dataType: 'json',
            url: '../logic/loadTaskQuestionTF.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                $("#taskQuestionContainerTF").html(response.name);
            }
        });
    }
    var scenarioQuestionContainerTF = $("#scenarioQuestionContainerTF");

    function loadScenarioQuestion(elem) {
        taskId = $(elem).data('id');

        $.ajax({
            data: 'tid=' + taskId,
            type: 'post',
            dataType: 'json',
            url: '../logic/loadScenarioQuestionTF.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                $("#scenarioQuestionContainerTF").html(response.name);
            }
        });
    }
    $( function loadTaskOnlys() {
        $.ajax({
            type: 'post',
            data: 'utid='+pageId,
            url: '../logic/loadTaskOnlys.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                scenarioContainer.append(response);

            }
        });
    });
    var scenarioContainerTF= $(".scenario-container-tf");

    $( function loadTaskTestfenster() {
        $.ajax({
            type: 'post',
            data: 'utid='+pageId,
            url: '../logic/loadTaskTestfenster.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                scenarioContainerTF.append(response);

            }
        });
    });
</script>
</body>

</html>