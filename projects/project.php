<?php
//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}

if (!isset($_GET['id'])) {
    header("Location: index.php");
    die();
} else {
    $user_id = $_GET['id'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Projekt 1 | step</title>

    <?php include ('head.html'); ?>
</head>
<body id="body-singleproject">

<?php include ('navigation.html'); ?>

<section id="singleproject" class="page-content">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-6">
                <h1 id="project-heading"></h1>
            </div>
            <div class="col-6 text-right align-self-center ">
                <a class="btn btn-submit-orange" href="../testfenster_mod.php">
                    <div class="icon-play d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Test starten</span></a>
            </div>

        </div>


        <!--<div class="row titlebar px-3 py-3">
            <div class="col-8">
                <h1>Projekt 1</h1>
            </div>
            <div class="col-4 text-center">
                <a href="../testfenster_mod.php" class="btn btn-submit-orange m-4"><i class="icon-play"></i> Test starten</a>
            </div>
        </div>
    </div>-->
        <div class="row project-tabs ">
            <div class="col-md-12 p-0">
                <ul id="tabs" class="px-1 px-md-4 nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" href="#allgemein" data-target="#allgemein" role="tab" data-toggle="tab"><span class="icon-align icon-folder"></span><span class="pl-2 hidden-sm-down">Allgemein</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testaufgaben" data-target="#testaufgaben" role="tab" data-toggle="tab"><span class="icon-align icon-list"></span><span class="pl-2 hidden-sm-down">Testaufgaben</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projektunterlagen" data-target="#projektunterlagen" role="tab" data-toggle="tab"><span class="icon-align icon-file-text"></span><span class="pl-2 hidden-sm-down">Projektunterlagen</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#evaluation" data-target="#evaluation" role="tab" data-toggle="tab"><span class="icon-align icon-check-1"></span><span class="pl-2 hidden-sm-down">Evaluation</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">



        <!--        TABS -->



        <div class="tab-content">
            <!--            Allgemein -->
            <div class="tab-pane active" id="allgemein" role="tabpanel">
                <div class="row inner-body">
                    <div id="content-allgemein" class="col-lg-12 py-3">


                        <!--                        Projektinfo + Beteiligte -->
                        <div class="row pr-3">

                            <!--                            Projektinfo -->
                            <div class="col-lg-8 pl-0 pl-md-3 pr-0 pr-md-3 pr-lg-0">
                                <div class="row my-3 ml-2 ml-lg-3 mr-2">
                                    <div class="col-lg-12 element-allgemein p-3">
                                        <div class="row">
                                            <div class="col-10 col-sm-6 headline">
                                                Projektinformationen
                                            </div>
                                            <div class="col-2 col-sm-6 text-right">
                                                <a id="projectinfo-edit" href="#editprojectinfo" data-target="#editprojectinfo" data-toggle="modal"><span class="icon-pencil"></span><span class="hidden-md-down"> Bearbeiten</span></a>
                                            </div>
                                            <div class="col-12"><hr class="pb-3"></div>
                                        </div>
                                        <div class="row pb-2">
                                            <div class="col-xl-4 font-weight-bold">Status:</div>
                                            <div id="project-status" class="col-xl-8"></div>
                                        </div>
                                        <div class="row pb-2">
                                            <div class="col-xl-4 font-weight-bold">Auftraggeber:</div>
                                            <div id="project-auftraggeber" class="col-xl-8"></div>
                                        </div>
                                        <div class="row pb-2 row-optional">
                                            <div class="col-xl-4 font-weight-bold">Ansprechpartner:</div>
                                            <div id="project-ansprechpartner" class="col-xl-8"></div>
                                        </div>

                                        <div class="row pb-2 row-optional">
                                            <div class="col-xl-4 font-weight-bold">Projektbeschreibung:</div>
                                            <div id="project-desc" class="col-xl-8"></div>
                                        </div>

                                        <div class="row pb-2">
                                            <div class="col-lg-12 text-right">
                                                <a href="#" class="btn btn-submit-grey"><i class="icon-check-1"></i> Projekt abschließen</a>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="row my-3 ml-2 ml-lg-3 mr-2">
                                    <div class="col-lg-12 element-allgemein p-3">
                                        <div class="row">
                                            <div class="col-lg-12 headline">
                                                Meilensteine
                                            </div>
                                            <div class="col-lg-12"><hr class="pb-3"></div>
                                        </div>
                                        <div class="row">
                                            <div id="goals" class="col-lg-12 p-3">
                                                <?php include("goals.html") ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--                            Beteiligte -->
                            <div class="col-lg-4 pr-0 pl-0 pl-md-3 pl-lg-0">
                                <div class="row my-3 ml-2 mr-lg-3 mr-2">
                                    <div class="col-lg-12 element-allgemein p-3">
                                        <div class="row">
                                            <div class="col-10 col-sm-6 col-lg-4 headline">
                                                Beteiligte
                                            </div>
                                            <div class="col-2 col-sm-6 col-lg-8 text-right">
                                                <a href="project.php"><span class="icon-pencil"></span><span class="hidden-lg-down"> Bearbeiten</span></a>
                                            </div>
                                            <div class="col-12"><hr class="pb-3"></div>
                                        </div>
                                        <div class="teammember row">
                                            <div class="pl-0 col-2 hidden-lg-down">
                                                <div class="img-placeholder c-darkgrey-bg">AA</div>
                                            </div>
                                            <div class="pl-0 col-10 pl-xl-2">
                                                Anna Apfel
                                                <div class="text-muted small">Protokollant</div>
                                            </div>
                                        </div>

                                        <div class="teammember row">
                                            <div class="pl-0 col-2 hidden-lg-down">
                                                <img class="img-placeholder rounded-circle" src="../img/user.jpg">
                                            </div>
                                            <div class="pl-0 col-10 pl-xl-2">
                                                Bernd Bogner
                                                <div class="text-muted small">Moderator</div>
                                            </div>
                                        </div>

                                        <div class="teammember row">
                                            <div class="pl-0 col-2 hidden-lg-down">
                                                <img class="img-placeholder rounded-circle" src="../img/user.jpg">
                                            </div>
                                            <div class="pl-0 col-10 pl-xl-2">
                                                Bernd Bogner
                                                <div class="text-muted small">Moderator</div>
                                            </div>
                                        </div>

                                        <div class="teammember row">
                                            <div class="pl-0 col-2 hidden-lg-down">
                                                <img class="img-placeholder rounded-circle" src="../img/user.jpg">
                                            </div>
                                            <div class="pl-0 col-10 pl-xl-2">
                                                Bernd Bogner
                                                <div class="text-muted small">Moderator</div>
                                            </div>
                                        </div>

                                        <div class="teammember row">
                                            <div class="pl-0 col-2 hidden-lg-down">
                                                <img class="img-placeholder rounded-circle" src="../img/user.jpg">
                                            </div>
                                            <div class="pl-0 col-10 pl-xl-2">
                                                Bernd Bogner
                                                <div class="text-muted small">Moderator</div>
                                            </div>
                                        </div>

                                        <div class="teammember row">
                                            <div class="pl-0 col-2 hidden-lg-down">
                                                <img class="img-placeholder rounded-circle" src="../img/user.jpg">
                                            </div>
                                            <div class="pl-0 col-10 pl-xl-2">
                                                Bernd Bogner
                                                <div class="text-muted small">Moderator</div>
                                            </div>
                                        </div>

                                        <div class="teammember row">
                                            <div class="pl-0 col-2 hidden-lg-down">
                                                <img class="img-placeholder rounded-circle" src="../img/user.jpg">
                                            </div>
                                            <div class="pl-0 col-10 pl-xl-2">
                                                Bernd Bogner
                                                <div class="text-muted small">Moderator</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>


                    </div>
                    <!--<div id="sidebar-allgemein" class="col-lg-3 c-grey-bg">
                        <div class="row pt-3">
                            <div class="col-lg-12 headline">
                                Benachrichtigungen
                            </div>
                            <div class="col-lg-12"><hr class="pb-3"></div>
                            <div class="col-lg-12 small">

                                <div class="row px-3 ">
                                    <div id="goalcard-projekt" class="goalcard col-lg-12 p-3 mb-3">

                                        <div class="font-weight-bold"><span class="icon-file-text d-inline text-muted"></span> Testskript aktualisiert</div>
                                        <small class="text-muted">Am 18.04.17 von <a href="../new_contact.php">Bernd Bogner</a></small>

                                    </div>
                                </div>
                                <div class="row px-3">
                                    <div id="goalcard-einverst" class="goalcard col-lg-12 p-3 mb-3">

                                        <div class="font-weight-bold"><span class="icon-file-text d-inline text-muted"></span> Einverständniserklärung für Proband 2 erstellt</div>
                                        <small class="text-muted">Am 18.04.17 von <a href="../new_contact.php">Bernd Bogner</a></small>

                                    </div>
                                </div>
                                <div class="row px-3">
                                    <div id="goalcard-skript" class="goalcard col-lg-12 p-3 mb-3">

                                        <div class="font-weight-bold"><span class="icon-file-text d-inline text-muted"></span> Einverständniserklärung für Proband 1 erstellt</div>
                                        <small class="text-muted">Am 18.04.17 von <a href="../new_contact.php">Bernd Bogner</a></small>

                                    </div>
                                </div>
                                <div class="row px-3">
                                    <div id="goalcard-plan" class="goalcard col-lg-12 p-3 mb-3">

                                        <div class="font-weight-bold"><span class="icon-folder d-inline text-muted"></span> Projekt "Projekt 1" erstellt</div>
                                        <small class="text-muted">Am 18.04.17 von <a href="../new_contact.php">Bernd Bogner</a></small>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>









            <!--            Testaufgaben -->
            <div class="tab-pane" id="testaufgaben" role="tabpanel">
                <div class="row inner-body">
                    <div id="sidebar-aufgaben" class="col-lg-3 c-grey-bg">
                        <div class="spc-container row pt-3 mt-3">
                            <div class="col-6 headline">
                                Aufgabenliste
                            </div>
                            <div class="col-6 text-right">
                                <!--                                Menu rechts mit Dropdown-->
                                <a href="#" data-toggle="dropdown" class="link-noblue"><span class="icon-plus-1 icon-align"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right links-noblue">
                                    <a class="new-task" onclick="createTaskOnly(); return false;" href="#testaufgaben"><li>Testaufgabe</li></a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="new-scenario" onclick="createScenario(); return false;" href="#testaufgaben"><li>Szenario</li></a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="new-postsession" onclick="createPostSession(); return false;" href="#testaufgaben"><li>Post Session Interview</li></a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="new-conclusion" onclick="createConclusion(); return false;" href="#testaufgaben"><li>Abschlussfragen</li></a>
                                </ul>

                            </div>
                            <div class="col-lg-12"><hr class="mb-3"></div>

                            <ol class="scenario-container col-lg-12 links-noblue mb-0"></ol>
                            <ol class="postSession-container col-lg-12 links-noblue mb-0"></ol>
                            <ol class="conclusion-container col-lg-12 links-noblue mb-0"></ol>


                        </div>
                    </div>

                    <div id="content-aufgaben" class="offset-lg-3 col-lg-9 py-3">

                    </div>

                </div>
            </div>






            <!--            Projektunterlagen -->
            <div class="tab-pane" id="projektunterlagen" role="tabpanel">
                <div class="row inner-body">
                    <div id="sidebar-unterlagen" class="col-lg-3 c-grey-bg">
                        <!--<div class="row pt-3 mt-3">
                            <div class="col-lg-6 headline">
                                Dokumente
                            </div>
                            <div class="col-lg-6 text-right">
                                <span class="icon-ellipsis-v"></span>
                            </div>
                            <div class="col-lg-12"><hr class="pb-3"></div>

                            <div class="col-lg-12 links-noblue">

                                <div class="row px-3 ">
                                    <div id="goalcard-projekt" class="goalcard col-lg-12 mb-3">
                                        <div class="row py-3">
                                            <div class="col-lg-10">
                                                <a data-toggle="collapse" href="#dok-einverst" aria-expanded="false" aria-controls="collapseExample"><span class="font-weight-bold">Einverständniserklärung</span></a>
                                            </div>
                                            <div class="col-lg-2 text-right">
                                                <a data-toggle="collapse" href="#dok-einverst" aria-expanded="false" aria-controls="collapseExample"><span class="icon-angle-down"></span></a>
                                            </div>
                                        </div>

                                        <div id="dok-einverst" class="collapse">
                                            <hr class="m-0">
                                            <div class="row item-hover">
                                                <div class="col-lg-12 py-3">
                                                    <span class="icon-file-text pr-2 text-muted"></span>Testteilnehmer #1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row px-3 ">
                                    <div id="goalcard-projekt" class="goalcard col-lg-12 mb-3">
                                        <div class="row py-3">
                                            <div class="col-lg-10">
                                                <a data-toggle="collapse" href="#dok-protokoll" aria-expanded="false" aria-controls="collapseExample"><span class="font-weight-bold">Protokollleitfaden</span></a>
                                            </div>
                                            <div class="col-lg-2 text-right">
                                                <a data-toggle="collapse" href="#dok-protokoll" aria-expanded="false" aria-controls="collapseExample"><span class="icon-angle-down"></span></a>
                                            </div>
                                        </div>

                                        <div id="dok-protokoll" class="collapse">
                                            <hr class="m-0">
                                            <div class="row item-hover">
                                                <div class="col-lg-12 py-3">
                                                    <span class="icon-file-text pr-2 text-muted"></span>Testteilnehmer #1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row px-3 ">
                                    <div id="goalcard-projekt" class="goalcard col-lg-12 mb-3">
                                        <div class="row py-3">
                                            <div class="col-lg-10">
                                                <a data-toggle="collapse" href="#dok-plan" aria-expanded="false" aria-controls="collapseExample"><span class="font-weight-bold">Testplan</span></a>
                                            </div>
                                            <div class="col-lg-2 text-right">
                                                <a data-toggle="collapse" href="#dok-plan" aria-expanded="false" aria-controls="collapseExample"><span class="icon-angle-down"></span></a>
                                            </div>
                                        </div>

                                        <div id="dok-plan" class="collapse">
                                            <hr class="m-0">
                                            <div class="row item-hover">
                                                <div class="col-lg-12 py-3">
                                                    <span class="icon-file-text pr-2 text-muted"></span>Testteilnehmer #1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row px-3 ">
                                    <div id="goalcard-projekt" class="goalcard col-lg-12 mb-3">
                                        <div class="row py-3">
                                            <div class="col-lg-10">
                                                <a data-toggle="collapse" href="#dok-skript" aria-expanded="false" aria-controls="collapseExample"><span class="font-weight-bold">Testskript</span></a>
                                            </div>
                                            <div class="col-lg-2 text-right">
                                                <a data-toggle="collapse" href="#dok-skript" aria-expanded="false" aria-controls="collapseExample"><span class="icon-angle-down"></span></a>
                                            </div>
                                        </div>

                                        <div id="dok-skript" class="collapse">
                                            <hr class="m-0">
                                            <div class="row item-hover">
                                                <div class="col-lg-12 py-3">
                                                    <span class="icon-file-text pr-2 text-muted"></span>Testteilnehmer #1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row px-3 ">
                                    <div id="goalcard-projekt" class="goalcard col-lg-12 mb-3">
                                        <div class="row py-3">
                                            <div class="col-lg-10">
                                                <a data-toggle="collapse" href="#dok-loesweg" aria-expanded="false" aria-controls="collapseExample"><span class="font-weight-bold">Lösungsweg-Zusammenfassung</span></a>
                                            </div>
                                            <div class="col-lg-2 text-right">
                                                <a data-toggle="collapse" href="#dok-loesweg" aria-expanded="false" aria-controls="collapseExample"><span class="icon-angle-down"></span></a>
                                            </div>
                                        </div>

                                        <div id="dok-loesweg" class="collapse">
                                            <hr class="m-0">
                                            <div class="row item-hover">
                                                <div class="col-lg-12 py-3">
                                                    <span class="icon-file-text pr-2 text-muted"></span>Testteilnehmer #1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row px-3 ">
                                    <div id="goalcard-projekt" class="goalcard col-lg-12 mb-3">
                                        <div class="row py-3">
                                            <div class="col-lg-10">
                                                <a data-toggle="collapse" href="#dok-bericht" aria-expanded="false" aria-controls="collapseExample"><span class="font-weight-bold">Testbericht</span></a>
                                            </div>
                                            <div class="col-lg-2 text-right">
                                                <a data-toggle="collapse" href="#dok-bericht" aria-expanded="false" aria-controls="collapseExample"><span class="icon-angle-down"></span></a>
                                            </div>
                                        </div>

                                        <div id="dok-bericht" class="collapse">
                                            <hr class="m-0">
                                            <div class="row item-hover">
                                                <div class="col-lg-12 py-3">
                                                    <span class="icon-file-text pr-2 text-muted"></span>Testteilnehmer #1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->

                        <div class="spc-container row pt-3 mt-3">
                            <div class="col-6 headline">
                                Dokumente
                            </div>
                            <div class="col-6 text-right">
                                <!--                                Menu rechts mit Dropdown-->
                                <a href="#" data-toggle="dropdown" class="link-noblue"><span class="icon-plus-1 icon-align"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right links-noblue">
                                    <a class="dok-einverst" onclick="createAgreement(); return false;" href="#unterlagen"><li>Einverständniserklärung</li></a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dok-protocol" onclick="createProtocol(); return false;" href="#unterlagen"><li>Protokoll</li></a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dok-skript" onclick="createTestskript(); return false;" href="#unterlagen"><li>Testskript</li></a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dok-plan" onclick="createTestplan(); return false;" href="#unterlagen"><li>Testplan</li></a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dok-bericht" onclick="createTestbericht(); return false;" href="#unterlagen"><li>Testbericht</li></a>
                                    <div class="dropdown-divider m-0"></div>
                                    <a class="dok-loesweg" onclick="createLoesweg(); return false;" href="#unterlagen"><li>Lösungsweg</li></a>
                                </ul>

                            </div>
                            <div class="col-lg-12"><hr class="mb-3"></div>

                            <ol class="agreement-container col-lg-12 links-noblue mb-0"></ol>
                            <ol class="protocol-container col-lg-12 links-noblue mb-0"></ol>
                            <ol class="testskript-container col-lg-12 links-noblue mb-0"></ol>
                            <ol class="testplan-container col-lg-12 links-noblue mb-0"></ol>
                            <ol class="testbericht-container col-lg-12 links-noblue mb-0"></ol>
                            <ol class="loesweg-container col-lg-12 links-noblue mb-0"></ol>


                        </div>
                    </div>

                    <div id="content-unterlagen" class="offset-lg-3 col-lg-9 py-3">
                    </div>
                </div>
            </div>
            <!--<div class="row">

            </div>


            <!--                        Projektinfo + Beteiligte -->
            <!--<div class="row">

                <!--                            Projektinfo -->
            <!--<div class="col-lg-8 pl-0 pl-md-3 pr-0 pr-md-3 pr-lg-0">
                <div class="row my-3 ml-2 ml-lg-3 mr-2">
                    <div class="col-lg-12 element-allgemein p-3">
                        <div class="row">
                            <div class="col-10 col-sm-6 headline">
                                Projektinformationen
                            </div>
                            <div class="col-2 col-sm-6 text-right">
                                <a href="project.php"><span class="icon-pencil"></span><span class="hidden-md-down"> Bearbeiten</span></a>
                            </div>
                            <div class="col-12"><hr class="pb-3"></div>
                        </div>
                        <div class="row pb-2">
                            <div class="col-xl-4 font-weight-bold">Kunde:</div>
                            <div class="col-xl-8">Musterfirma</div>
                        </div>
                        <div class="row pb-2">
                            <div class="col-xl-4 font-weight-bold">Ansprechpartner:</div>
                            <div class="col-xl-8"><a href="../new_contact.php">Max Mustermann</a></div>
                        </div>

                        <div class="row pb-2">
                            <div class="col-xl-4 font-weight-bold">Projektbeschreibung:</div>
                            <div class="col-xl-8">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                sanctus est Lorem ipsum dolor sit amet.
                            </div>
                        </div>

                        <div class="row pb-2">
                            <div class="col-xl-4 font-weight-bold">Status:</div>
                            <div class="col-xl-8">
                                Laufend
                            </div>
                        </div>

                        <div class="row pb-2">
                            <div class="col-lg-12 text-right">
                                <a href="#" class="btn btn-submit-grey"><i class="icon-check-1"></i> Projekt abschließen</a>
                            </div>
                        </div>


                    </div>
                </div>
                <div class="row my-3 ml-2 ml-lg-3 mr-2">
                    <div class="col-lg-12 element-allgemein p-3">
                        <div class="row">
                            <div class="col-lg-12 headline">
                                Meilensteine
                            </div>
                            <div class="col-lg-12"><hr class="pb-3"></div>
                        </div>
                        <div class="row">
                            <div id="goals" class="col-lg-12 p-3">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--                            Beteiligte -->
            <!--<div class="col-lg-4 pr-0 pr-md-3 pl-0 pl-md-3 pl-lg-0">
                <div class="row my-3 ml-2 mr-lg-3 mr-2">
                    <div class="col-lg-12 element-allgemein p-3">
                        <div class="row">
                            <div class="col-10 col-sm-6 col-lg-4 headline">
                                Beteiligte
                            </div>
                            <div class="col-2 col-sm-6 col-lg-8 text-right">
                                <a href="project.php"><span class="icon-pencil"></span><span class="hidden-lg-down"> Bearbeiten</span></a>
                            </div>
                            <div class="col-12"><hr class="pb-3"></div>
                        </div>
                        <div class="teammember row">
                            <div class="pl-0 col-2 hidden-lg-down">
                                <div class="img-placeholder c-darkgrey-bg">AA</div>
                            </div>
                            <div class="pl-0 col-10 pl-xl-2">
                                Anna Apfel
                                <div class="text-muted small">Protokollant</div>
                            </div>
                        </div>

                        <div class="teammember row">
                            <div class="pl-0 col-2 hidden-lg-down">
                                <img class="img-placeholder rounded-circle" src="../img/user.jpg">
                            </div>
                            <div class="pl-0 col-10 pl-xl-2">
                                Bernd Bogner
                                <div class="text-muted small">Moderator</div>
                            </div>
                        </div>

                        <div class="teammember row">
                            <div class="pl-0 col-2 hidden-lg-down">
                                <img class="img-placeholder rounded-circle" src="../img/user.jpg">
                            </div>
                            <div class="pl-0 col-10 pl-xl-2">
                                Bernd Bogner
                                <div class="text-muted small">Moderator</div>
                            </div>
                        </div>

                        <div class="teammember row">
                            <div class="pl-0 col-2 hidden-lg-down">
                                <img class="img-placeholder rounded-circle" src="../img/user.jpg">
                            </div>
                            <div class="pl-0 col-10 pl-xl-2">
                                Bernd Bogner
                                <div class="text-muted small">Moderator</div>
                            </div>
                        </div>

                        <div class="teammember row">
                            <div class="pl-0 col-2 hidden-lg-down">
                                <img class="img-placeholder rounded-circle" src="../img/user.jpg">
                            </div>
                            <div class="pl-0 col-10 pl-xl-2">
                                Bernd Bogner
                                <div class="text-muted small">Moderator</div>
                            </div>
                        </div>

                        <div class="teammember row">
                            <div class="pl-0 col-2 hidden-lg-down">
                                <img class="img-placeholder rounded-circle" src="../img/user.jpg">
                            </div>
                            <div class="pl-0 col-10 pl-xl-2">
                                Bernd Bogner
                                <div class="text-muted small">Moderator</div>
                            </div>
                        </div>

                        <div class="teammember row">
                            <div class="pl-0 col-2 hidden-lg-down">
                                <img class="img-placeholder rounded-circle" src="../img/user.jpg">
                            </div>
                            <div class="pl-0 col-10 pl-xl-2">
                                Bernd Bogner
                                <div class="text-muted small">Moderator</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



    </div>

</div>
</div>














<!--            Evaluation -->

            <!-- TOMMYs LÖSUNG
              <div class="aufgabenfeld inner-body row c-grey-bg">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 text-right p-3">
                            <a class="c-orange" href="#"><i class="question-angles icon-angle-left"></i></a>
                        </div>
                        <div class="col-8 p-3">
                            <p class="font-weight-bold text-center">Aufgabe 1</p>
                            <p class="text-center">
                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                            accusam et justo duo dolores et ea rebum.
                            </p>
                        </div>
                        <div class="col-2 p-3">
                            <a class="c-orange" href="#"><i class="question-angles icon-angle-right"></i></a>
                        </div>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="protokollant-container col-md-6">
                    <div class="protokollant-card m-5">
                        <div class="row px-4 p-4">
                            <div class="col-md-12">
                                <div class="img-placeholder c-darkgrey-bg">AA</div>
                                    <p class="font-weight-bold middle-two-line d-inline pl-3">Anna Apfel</p>
                                    <hr>
                            </div>
                        </div>
                        <div class="row px-4">
                            <div class="col-lg-4">Lösungsschritte:</div>
                            <div class="col-lg-8 font-weight-bold">
                                Lorem ipsum dolor sit amet, consetetur
                                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                dolores et ea rebum.
                            </div>
                        </div>
                        <div class="row px-4 p-4">
                            <div class="col-lg-4">Anmerkungen:</div>
                            <div class="col-lg-8 font-weight-bold">
                                Lorem ipsum dolor sit amet, consetetur
                                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua.
                            </div>
                        </div>
                    </div>

                    <div class="protokollant-card m-5">
                        <div class="row px-4 p-4">
                            <div class="col-md-12">
                                <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                    <p class="font-weight-bold middle-two-line d-inline pl-3">Bernd Bogner</p>
                                    <hr>
                            </div>
                        </div>
                        <div class="row px-4">
                            <div class="col-lg-4">Lösungsschritte:</div>
                            <div class="col-lg-8 font-weight-bold">
                                Lorem ipsum dolor sit amet, consetetur
                                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                dolores et ea rebum.
                            </div>
                        </div>
                        <div class="row px-4 p-4">
                           <div class="col-lg-4">Anmerkungen:</div>
                            <div class="col-lg-8 font-weight-bold">
                                Lorem ipsum dolor sit amet, consetetur
                                sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                magna aliquyam erat, sed diam voluptua.
                            </div>
                        </div>
                    </div>
               </div>
               <div class="col-md-6">
                Editor
               </div>
            </div>-->



            <!--


            <div class="row inner-body">
                <div id="sidebar-eval" class="col-lg-3 c-grey-bg">
                    <div class="spc-container row pt-3 mt-3">
                        <div class="col-6 headline">
                            Aufgabenliste
                        </div>

                        <div class="col-lg-12"><hr class="mb-3"></div>

                        <ol class="scenario-container col-lg-12 links-noblue mb-0"></ol>
                        <ol class="postSession-container col-lg-12 links-noblue mb-0"></ol>
                        <ol class="conclusion-container col-lg-12 links-noblue mb-0"></ol>


                    </div>
                </div>

                <div id="content-eval" class="offset-lg-3 col-lg-9 p-0">


                    <div class="col-12">
                        <div class="row">
                            <div class="col-2 text-right p-3">
                                <a class="c-orange" href="#"><i class="question-angles icon-angle-left"></i></a>
                            </div>
                            <div class="col-8 p-3">
                                <p class="font-weight-bold text-center">Aufgabe 1</p>
                                <p class="text-center">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et justo duo dolores et ea rebum.
                                </p>
                            </div>
                            <div class="col-2 p-3">
                                <a class="c-orange" href="#"><i class="question-angles icon-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>-->
            <!--<div id="aufgabe-eval" class="row m-0 p-3">
                <div class="col-lg-8 aufgabe-middle">Aufgabe Und hier noch ein Bisschen Fülltext. Das ist die Frage, die dem Probanden gestellt wird.</div>
                <div class="col-lg-4 text-right"><span class="img-placeholder c-darkgrey-bg mr-2">PN</span>Proband Name</div>
            </div>


            -->
            <!-- ALINAS VERSION 22.07.2107---->
            <div class="tab-pane" id="evaluation" role="tabpanel">

                <div class="row inner-body">
                    <div id="sidebar-eval" class="col-lg-3 c-grey-bg">
                        <div class="spc-container row pt-3 mt-3">
                            <div class="col-6 headline">
                                Aufgabenliste
                            </div>

                            <div class="col-lg-12"><hr class="mb-3"></div>

                            <ol class="scenario-container col-lg-12 links-noblue mb-0"></ol>
                            <ol class="postSession-container col-lg-12 links-noblue mb-0"></ol>
                            <ol class="conclusion-container col-lg-12 links-noblue mb-0"></ol>


                        </div>
                    </div>

                    <div id="content-eval" class="offset-lg-3 col-lg-4 p-0">


                        <div class="col-12">
                            <div class="row">
                                <div class="col-2 text-right p-3">
                                    <a class="c-orange" href="#"><i class="question-angles icon-angle-left"></i></a>
                                </div>
                                <div class="col-8 p-3">
                                    <p class="font-weight-bold text-center">Aufgabe 1</p>
                                    <p class="text-center">
                                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                        accusam et justo duo dolores et ea rebum.
                                    </p>
                                </div>
                                <div class="col-2 p-3">
                                    <a class="c-orange" href="#"><i class="question-angles icon-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="protokollant-container col-12">
                                <div class="protokollant-card m-5">
                                    <div class="row px-4 p-4">
                                        <div class="col-md-12">
                                            <div class="img-placeholder c-darkgrey-bg">AA</div>
                                            <p class="font-weight-bold middle-two-line d-inline pl-3">Anna Apfel</p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row px-4">
                                        <div class="col-lg-4">Lösungsschritte:</div>
                                        <div class="col-lg-8 font-weight-bold">
                                            Lorem ipsum dolor sit amet, consetetur
                                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            dolores et ea rebum.
                                        </div>
                                    </div>
                                    <div class="row px-4 p-4">
                                        <div class="col-lg-4">Anmerkungen:</div>
                                        <div class="col-lg-8 font-weight-bold">
                                            Lorem ipsum dolor sit amet, consetetur
                                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                            magna aliquyam erat, sed diam voluptua.
                                        </div>
                                    </div>
                                </div>

                                <div class="protokollant-card m-5">
                                    <div class="row px-4 p-4">
                                        <div class="col-md-12">
                                            <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                            <p class="font-weight-bold middle-two-line d-inline pl-3">Bernd Bogner</p>
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="row px-4">
                                        <div class="col-lg-4">Lösungsschritte:</div>
                                        <div class="col-lg-8 font-weight-bold">
                                            Lorem ipsum dolor sit amet, consetetur
                                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                            dolores et ea rebum.
                                        </div>
                                    </div>
                                    <div class="row px-4 p-4">
                                        <div class="col-lg-4">Anmerkungen:</div>
                                        <div class="col-lg-8 font-weight-bold">
                                            Lorem ipsum dolor sit amet, consetetur
                                            sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                            magna aliquyam erat, sed diam voluptua.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="editor" class="offset-lg-5 col-lg-5 p-0">
                        EDITOR
                    </div>
                </div>
                <!--<div class="row inner-body">
                    <div id="sidebar-eval" class="col-lg-2 c-grey-bg">
                        <div class="spc-container row pt-3 mt-3">
                            <div class="col-6 headline">
                                Protokollliste
                            </div>
                        </div>
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <!--                        Testaufgabe 1-->
                <!--   <div class="panel-heading">

                       <h4 class="panel-title">
                           <a class="icon-angle-right active" href="#testaufgabe1" data-toggle="collapse" >Testaufgabe 1</a>
                       </h4>

                   </div>
                   <div id="testaufgabe1" class="panel-collapse collapse active">
                       <ul class="flex-column nav">
                           <li class="nav-item" >
                               <a class="icon-file-text-o p-3 nav-link active" href="#testaufgabe1tn1" role="tab" data-toggle="tab" aria-expanded="true"> Proband A</a>
                           </li>
                       </ul>
                   </div>
                   <!--                            Testaufgabe 2-->

                <!-- <div class="panel-heading">
                     <h4 class="panel-title">
                         <a class="icon-angle-right" href="#testaufgabe2" data-toggle="collapse">Testaufgabe 2</a>
                     </h4>
                 </div>

                 <div id="testaufgabe2" class="panel-collapse collapse">
                     <ul class="flex-column nav">
                         <li class="nav-item" >
                             <a class="icon-file-text-o p-3 nav-link active" href="#testaufgabe2tn1" role="tab" data-toggle="tab"> Proband A</a>
                         </li>
                     </ul>
                 </div>
                 <!--Testaufgabe 3-->
                <!--<div class="panel-heading">
                    <h4 class="panel-title">
                        <a class="icon-angle-right" data-toggle="collapse" href="#testaufgabe3" >Testaufgabe 3</a>
                    </h4>
                </div>
                <div id="testaufgabe3" class="panel-collapse collapse">
                    <ul class="flex-column nav">
                        <li class="nav-item" >
                            <a class="icon-file-text-o p-3 nav-link" href="#testaufgabe3tn1" role="tab" data-toggle="tab"> Proband A</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-12"><hr class="mb-3"></div>
        <ol class="scenario-container col-lg-12 links-noblue mb-0"></ol>
        <ol class="postSession-container col-lg-12 links-noblue mb-0"></ol>
        <ol class="conclusion-container col-lg-12 links-noblue mb-0"></ol>
    </div>
    </div>

    <div id="content-eval" class="offset-2 col-lg-5 p-3">
    <div class="tab-content">
        <div class="tab-pane active" id="testaufgabe1tn1" role="tabpanel">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 text-right p-3">
                            <a class="c-orange" href="#"><i class="question-angles icon-angle-left"></i></a>
                        </div>
                        <div class="col-8 p-3">
                            <p class="font-weight-bold text-center">Testaufgabe 1</p>
                            <p class="text-center">
                                Sie haben einen neuen Evaluierungsprojektauftrag bekommen und möchten nun ein neues Projekt anlegen.
                                Bitte erstellen Sie ein neues Projekt und nennen Sie es "Demo", der Auftraggeber ist "Technische Hochschule".
                            </p>
                        </div>
                        <div class="col-2 p-3">
                            <a class="c-orange" href="#"><i class="question-angles icon-angle-right"></i></a>
                        </div>
                    </div>
                </div>

                <!--<div class="col-12 pl-4 p-3">-->
                <!-- <div class="row">
                     <div class="protokollant-container col-md-12">
                         <div class="protokollant-card">
                             <div class="row px-4 p-4">
                                 <div class="col-md-12">
                                     <div class="img-placeholder c-darkgrey-bg">AA</div>
                                     <p class="font-weight-bold middle-two-line d-inline pl-3">Anna Apfel</p>
                                     <hr>
                                 </div>
                             </div>
                             <div class="row px-4">
                                 <div class="col-lg-4">Lösungsschritte:</div>
                                 <div class="col-lg-8 font-weight-bold">
                                     Lorem ipsum dolor sit amet, consetetur
                                     sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                     magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                     dolores et ea rebum.
                                 </div>
                             </div>
                             <div class="row px-4 p-4">
                                 <div class="col-lg-4">Anmerkungen:</div>
                                 <div class="col-lg-8 font-weight-bold">
                                     Lorem ipsum dolor sit amet, consetetur
                                     sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                     magna aliquyam erat, sed diam voluptua.
                                 </div>
                             </div>
                         </div>

                         <div class="protokollant-card">
                             <div class="row px-4 p-4">
                                 <div class="col-md-12">
                                     <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                     <p class="font-weight-bold middle-two-line d-inline pl-3">Bernd Bogner</p>
                                     <hr>
                                 </div>
                             </div>
                             <div class="row px-4">
                                 <div class="col-lg-4">Lösungsschritte:</div>
                                 <div class="col-lg-8 font-weight-bold">
                                     Lorem ipsum dolor sit amet, consetetur
                                     sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                     magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                     dolores et ea rebum.
                                 </div>
                             </div>
                             <div class="row px-4 p-4">
                                 <div class="col-lg-4">Anmerkungen:</div>
                                 <div class="col-lg-8 font-weight-bold">
                                     Lorem ipsum dolor sit amet, consetetur
                                     sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                     magna aliquyam erat, sed diam voluptua.
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--<div class="loesungsfeld">

                     <table class="table table-bordered">
                         <tr>
                             <td>
                                 <p>Erwartete Lösungsschritte</p>
                                 <ul><li>"Projekte" in der linken Menüleiste auswählen</li>
                                     <li>Auf "+ Erstellen" - Button klicken</li>
                                     <li>Bei "Titel" den Namen "XYZ" eingeben</li>
                                     <li>Bei "Auftraggeber" "TH-Nürnberg eingeben</li>
                                     <li>Auf "Senden" klicken</li></ul>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <p>Geschafft / Nicht geschafft</p>
                             </td>
                         </tr>
                         <tr>
                             <td>
                                 <p> Tatsächliche Lösungsschritte</p>

                             </td>
                         </tr>

                     </table>
                 </div>-->

                <!-- </div>
             </div>
             <div class="tab-pane row" id="testaufgabe2tn1" role="tabpanel">
                 <div class="row">
                     <div class="col-12">
                         <div class="row">
                             <div class="col-2 text-right p-3">
                                 <a class="c-orange" href="#"><i class="question-angles icon-angle-left"></i></a>
                             </div>
                             <div class="col-8 p-3">
                                 <p class="font-weight-bold text-center">Testaufgabe 2</p>
                                 <p class="text-center">
                                     Suchen Sie bitte das Projekt "Social App" und finden Sie den jeweiligen Ansprechpartner und nennen Sie 2 der Projektbeteiligten
                                 </p>
                             </div>
                             <div class="col-2 p-3">
                                 <a class="c-orange" href="#"><i class="question-angles icon-angle-right"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="col-12 pl-4 p-3">
                         <div class="loesungsfeld">

                             <table class="table table-bordered">

                                 <tr>
                                     <td>
                                         <p>Erwartete Lösungsschritte</p>
                                         <ul>
                                             <li>Projekt "Social App" in der Liste auswählen</li>
                                             <li>Ansprechpartner ist step</li>
                                             <li>Play-Button drücken</li>
                                             <li>2 Beteiligten sind Maura Maier, Thomas Meier,
                                                 Alina Schark, Isabel Eichner und
                                                 Nathalie Steinbinder</li></ul>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <p>Geschafft / Nicht geschafft</p>
                                 </tr>
                                 <tr>
                                     <th>
                                         Tatsächliche Lösungsschritte
                                     </th>
                                 </tr>
                             </table>
                         </div>
                     </div>

                 </div>
             </div>
             <div class="tab-pane row" id="testaufgabe3tn1" role="tabpanel">
                 <div class="row">
                     <div class="col-12">
                         <div class="row">
                             <div class="col-2 text-right p-3">
                                 <a class="c-orange" href="#"><i class="question-angles icon-angle-left"></i></a>
                             </div>
                             <div class="col-8 p-3">
                                 <p class="font-weight-bold text-center">Testaufgabe 3</p>
                                 <p class="text-center">
                                     Sie wollen für Ihren anstehenden Usability Test eine neue Testaufgabe
                                     für ein Szenario erstellen.
                                     Legen Sie bitte eine neue Testaufgabe an.
                                 </p>
                             </div>
                             <div class="col-2 p-3">
                                 <a class="c-orange" href="#"><i class="question-angles icon-angle-right"></i></a>
                             </div>
                         </div>
                     </div>
                     <div class="col-12 pl-4 p-3">
                         <div class="loesungsfeld">

                             <table class="table table-bordered">

                                 <tr>
                                     <td>
                                         <p>Erwartete Lösungsschritte</p>
                                         <ul>
                                             <li>Den Reiter "Testaufgaben" auswählen</li>
                                             <li> Auf das "+" bei "Aufgabenliste" klicken</li>
                                             <li>Im Dropdown - Menü "Szenario" aufwählen</li>
                                             <li>Das "+" bei Szenario </li>
                                             <li>Auf "Testaufgabe" klicken</li>
                                             <li>Angaben reinschreiben</li></ul>
                                     </td>
                                 </tr>
                                 <tr>
                                     <td>
                                         <p>Geschafft / Nicht geschafft</p>
                                 </tr>
                                 <tr>
                                     <th>
                                         Tatsächliche Lösungsschritte
                                     </th>
                                 </tr>

                             </table>
                         </div>
                     </div>
                     <!--hier Ende content-->
            </div>
        </div>


        <!--
                    <div class="row">
                        <div class="protokollant-container col-md-6">
                            <div class="protokollant-card m-5">
                                <div class="row px-4 p-4">
                                    <div class="col-md-12">
                                        <div class="img-placeholder c-darkgrey-bg">AA</div>
                                        <p class="font-weight-bold middle-two-line d-inline pl-3">Anna Apfel</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col-lg-4">Lösungsschritte:</div>
                                    <div class="col-lg-8 font-weight-bold">
                                        Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                        dolores et ea rebum.
                                    </div>
                                </div>
                                <div class="row px-4 p-4">
                                    <div class="col-lg-4">Anmerkungen:</div>
                                    <div class="col-lg-8 font-weight-bold">
                                        Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua.
                                    </div>
                                </div>
                            </div>

                            <div class="protokollant-card m-5">
                                <div class="row px-4 p-4">
                                    <div class="col-md-12">
                                        <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                        <p class="font-weight-bold middle-two-line d-inline pl-3">Bernd Bogner</p>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col-lg-4">Lösungsschritte:</div>
                                    <div class="col-lg-8 font-weight-bold">
                                        Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
                                        dolores et ea rebum.
                                    </div>
                                </div>
                                <div class="row px-4 p-4">
                                    <div class="col-lg-4">Anmerkungen:</div>
                                    <div class="col-lg-8 font-weight-bold">
                                        Lorem ipsum dolor sit amet, consetetur
                                        sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
                                        magna aliquyam erat, sed diam voluptua.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            Editor
                        </div>
                    </div>-->


        <!--<div id="aufgabe-eval" class="row m-0 p-3">
            <div class="col-lg-8 aufgabe-middle">Aufgabe Und hier noch ein Bisschen Fülltext. Das ist die Frage, die dem Probanden gestellt wird.</div>
            <div class="col-lg-4 text-right"><span class="img-placeholder c-darkgrey-bg mr-2">PN</span>Proband Name</div>
        </div>


        <div class="row">

            <!--                            Projektinfo -->
        <!--
        <div class="col-lg-12 p-3">
            <div class="row my-3 ml-2 ml-lg-3 mr-2">
                <div class="col-lg-12 element-allgemein p-3">
                    <div class="row">
                        <div class="col-10 col-sm-6 headline">
                            Projektinformationen
                        </div>
                        <div class="col-2 col-sm-6 text-right">
                            <a href="project.php"><span class="icon-pencil"></span><span class="hidden-md-down"> Bearbeiten</span></a>
                        </div>
                        <div class="col-12"><hr class="pb-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->





    </div>
    </div>

</section>

<div class="modal fade" id="editprojectinfo" tabindex="-1" role="dialog" aria-labelledby="editProjectInfoModal" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProjectInfoModalTitle">Projektinformationen bearbeiten</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editProjectInfoForm" class="form" action="../logic/editProjectInfo.php" method="post">
                <div class="modal-body">

                    <!--Titel-->
                    <div class="form-group row formTask pt-3">
                        <label for="editProjectInfo-title" class="col-lg-4 form-control-label">Titel:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="editProjectInfo-title" id="editProjectInfo-title" placeholder="Titel des Projekts" required/>
                        </div>
                    </div>

                    <!--Auftraggeber-->
                    <div class="form-group row formTask">
                        <label for="editProjectInfo-ag" class="col-lg-4 form-control-label">Auftraggeber:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="editProjectInfo-ag" id="editProjectInfo-ag" placeholder="Auftraggeber" value=""/>
                        </div>
                    </div>

                    <!--Ansprechpartner-->
                    <div class="form-group row formTask">
                        <label for="editProjectInfo-talkto" class="col-lg-4 form-control-label">Ansprechpartner:</label>
                        <div class="col-lg-8">
                            <select class="form-control" name="editProjectInfo-talkto" id="editProjectInfo-talkto">
                                <option value="" disabled selected>Auswählen...</option>
                            </select>
                            <!--                            <input class="form-control" name="editProjectInfo-talkto" id="editProjectInfo-talkto" placeholder="Ansprechpartner"/>-->
                        </div>
                    </div>

                    <!--Projektbeschreibung-->
                    <div class="form-group row formTask">
                        <label for="editProjectInfo-desc" class="col-lg-4 form-control-label">Projektbeschreibung:</label>
                        <div class="col-lg-8">
                            <textarea rows="3" class="form-control" name="editProjectInfo-desc" id="editProjectInfo-desc" placeholder="Projektbeschreibung"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer text-center">
                    <input type="submit" value="Speichern" class="btn btn-submit-blue" />
                </div>
            </form>

        </div>
    </div>
</div>

<?php include ('scripts.html'); ?>

<script src="../js/jquery-sortable-min.js"></script>


<!--ALLGEMEIN-->
<!--Projektinfos laden-->
<script>
    var pageId = '<?php echo $user_id ?>';

    $( function loadInputUT() {
        $.ajax({
            type: 'get',
            data: 'id='+pageId,
            dataType: 'json',
            url: '../logic/selectProjectInfo.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                $("#project-heading").text(response.name);
                $("#project-auftraggeber").text(response.auftraggeber);
                $("#project-status").text(response.status);
                if(response.beschreibung !== null) {
                    $("#project-desc").text(response.beschreibung);
                } else {
                    $("#project-desc").html("<span class='text-muted'>Keine Beschreibung vorhanden</span>")
                }
                $("#editProjectInfo-title").val(response.name);
                $("#editProjectInfo-ag").val(response.auftraggeber);
                $("#editProjectInfo-desc").val(response.beschreibung);
            }
        });
    });




</script>

<script>
    $( function loadInputTalkTo() {
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: '../logic/selectProjectInfoTalkTo.php',
            data: 'utid='+pageId,
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                if(response.name && response.vorname !== null) {
                    $("#project-ansprechpartner").html("<a href='../view_contact.php?id=" + response.id + "'>" + response.name + ", " + response.vorname + "</a>");
                } else {
                    $("#project-ansprechpartner").html("<span class='text-muted'>Kein Ansprechpartner vorhanden</span>")
                }
            }
        })
    });

    $( function loadInputTalkToAuswahlliste() {
        $.ajax({
            type: 'post',
            url: '../logic/selectProjectInfoTalkToAuswahlliste.php',
            data: 'utid='+pageId,
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                $("#editProjectInfo-talkto").append(response);
            }
        })
    });



</script>

<!--Projektinformationen bearbeiten-->
<script>


    $("#editProjectInfoForm").submit(function(event){
        // cancels the form submission
        event.preventDefault();

        editProjectInfo();
        $("#editprojectinfo").modal('toggle');
    });

    function editProjectInfo() {
        var projectSerialize = $("#editProjectInfoForm").serialize();

        $.ajax({
            type: 'post',
            dataType: 'json',
            url: '../logic/editProjectInfo.php',
            data: projectSerialize+'&utid='+pageId,
            success: function (response) {
                $("#project-heading").text(response.name);
                $("#project-auftraggeber").text(response.auftraggeber);
                $("#project-status").text(response.status);
                if(response.beschreibung !== null) {
                    $("#project-desc").text(response.beschreibung);
                } else {
                    $("#project-desc").html("<span class='text-muted'>Keine Beschreibung vorhanden</span>")
                }
                $("#editProjectInfo-title").val(response.name);
                $("#editProjectInfo-ag").val(response.auftraggeber);
                $("#editProjectInfo-desc").val(response.beschreibung);
                if(response.talkname && response.talkvorname !== null) {
                    $("#project-ansprechpartner").html("<a href='../view_contact.php?id=" + response.talkid + "'>" + response.talkname + ", " + response.talkvorname + "</a>");
                } else {
                    $("#project-ansprechpartner").html("<span class='text-muted'>Kein Ansprechpartner vorhanden</span>")
                }
                loadInputTalkTo();
            }
        });

    }
</script>



<!-- Rubriken erstellen ALINA -->
<script>
    var agreementContainer = $(".agreement-container");
    var protocolContainer = $(".protocol-container");
    var testskriptContainer = $(".testskript-container");
    var testplanContainer = $(".testplan-container");
    var testberichtContainer = $(".testbericht-container");
    var loeswegContainer = $(".loesweg-container");




    function createAgreement() {

        function insideAgreement() {
            return "<li class='agreementRubrik element-allgemein mb-3'>" +
                "<div class='row p-3'>" +
                "<div class='col-10'>Einverständniserklärung</div>" +
                "<div class='col-2 text-right'>" +
                "<a href='#unterlagen' onclick='createAgreementNew(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Einverständniserklärung' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>" +
                "</div>" +
                "</div>" +
                "<ol class='agreement-container pl-0'>" +
                "<hr class='m-0'>" +
                "</ol>" +
                "</li>";
        }

        if(!(agreementContainer.find('.agreementRubrik').length !== 0)) {

            agreementContainer.append(insideAgreement());

        } else {
            alert("Sie haben bereits eine Einverständniserklärungs-Rubrik erstellt.");
        }

    }
    function createAgreementNew(event) {

        function insideAgreementNew() {
            return "<li class='task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#unterlagen' onclick='editAgreement()' data-toggle='tooltip' data-placement='bottom' title='Dokument bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-comment icon-align text-muted'></span>Proband #1" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }

        var parentAgreementNew= $(event).closest(".agreementRubrik");
        var agmtContainer = parentAgreementNew.find(".agreement-container");
        agmtContainer.append(insideAgreementNew);

    }
    function createProtocol() {

        function insideProtocol() {
            return "<li class='protocolRubrik element-allgemein mb-3'>" +
                "<div class='row p-3'>" +
                "<div class='col-10'>Protokoll</div>" +
                "<div class='col-2 text-right'>" +
                "<a href='#unterlagen' onclick='createProtocolNew(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Einverständniserklärung' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>" +
                "</div>" +
                "</div>" +
                "<ol class='protocol-container pl-0'>" +
                "<hr class='m-0'>" +
                "</ol>" +
                "</li>";
        }

        if(!(protocolContainer.find('.protocolRubrik').length !== 0)) {

            protocolContainer.append(insideProtocol());

        } else {
            alert("Sie haben bereits eine Protokoll-Rubrik erstellt.");
        }

    }
    function createProtocolNew(event) {

        function insideProtocolNew() {
            return "<li class='task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#unterlagen' onclick='editProtocol()' data-toggle='tooltip' data-placement='bottom' title='Dokument bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-comment icon-align text-muted'></span>Protokollant #1" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }

        var parentProtocolNew= $(event).closest(".protocolRubrik");
        var protContainer = parentProtocolNew.find(".protocol-container");
        protContainer.append(insideProtocolNew);

    }
    function createTestskript() {

        function insideTestskript() {
            return "<li class='testskriptRubrik element-allgemein mb-3'>" +
                "<div class='row p-3'>" +
                "<div class='col-10'>Testskript</div>" +
                "<div class='col-2 text-right'>" +
                "<a href='#unterlagen' onclick='createTestskriptNew(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Einverständniserklärung' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>" +
                "</div>" +
                "</div>" +
                "<ol class='testskript-container pl-0'>" +
                "<hr class='m-0'>" +
                "</ol>" +
                "</li>";
        }

        if(!(testskriptContainer.find('.testskriptRubrik').length !== 0)) {

            testskriptContainer.append(insideTestskript());

        } else {
            alert("Sie haben bereits eine Testskript-Rubrik erstellt.");
        }

    }
    function createTestskriptNew(event) {

        function insideTestskriptNew() {
            return "<li class='task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#unterlagen' onclick='editTestskript()' data-toggle='tooltip' data-placement='bottom' title='Dokument bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-comment icon-align text-muted'></span>Version #1" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }

        var parentTestskriptNew= $(event).closest(".testskriptRubrik");
        var tskriptContainer = parentTestskriptNew.find(".testskript-container");
        tskriptContainer.append(insideTestskriptNew);

    }

    function createTestplan() {

        function insideTestplan() {
            return "<li class='testplanRubrik element-allgemein mb-3'>" +
                "<div class='row p-3'>" +
                "<div class='col-10'>Testplan</div>" +
                "<div class='col-2 text-right'>" +
                "<a href='#unterlagen' onclick='createTestplanNew(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Einverständniserklärung' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>" +
                "</div>" +
                "</div>" +
                "<ol class='testplan-container pl-0'>" +
                "<hr class='m-0'>" +
                "</ol>" +
                "</li>";
        }

        if(!(testplanContainer.find('.testplanRubrik').length !== 0)) {

            testplanContainer.append(insideTestplan());

        } else {
            alert("Sie haben bereits eine Testplan-Rubrik erstellt.");
        }

    }
    function createTestplanNew(event) {

        function insideTestplanNew() {
            return "<li class='task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#unterlagen' onclick='editTestplan()' data-toggle='tooltip' data-placement='bottom' title='Dokument bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-comment icon-align text-muted'></span>Version #1" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }

        var parentTestplanNew= $(event).closest(".testplanRubrik");
        var tplanContainer = parentTestplanNew.find(".testplan-container");
        tplanContainer.append(insideTestplanNew);

    }

    function createTestbericht() {

        function insideTestbericht() {
            return "<li class='testberichtRubrik element-allgemein mb-3'>" +
                "<div class='row p-3'>" +
                "<div class='col-10'>Testbericht</div>" +
                "<div class='col-2 text-right'>" +
                "<a href='#unterlagen' onclick='createTestberichtNew(this)' data-toggle='tooltip' data-placement='bottom' title='Neuer Testbericht' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>" +
                "</div>" +
                "</div>" +
                "<ol class='testbericht-container pl-0'>" +
                "<hr class='m-0'>" +
                "</ol>" +
                "</li>";
        }

        if(!(testberichtContainer.find('.testberichtRubrik').length !== 0)) {

            testberichtContainer.append(insideTestbericht());

        } else {
            alert("Sie haben bereits eine Testbericht-Rubrik erstellt.");
        }

    }
    function createTestberichtNew(event) {

        function insideTestberichtNew() {
            return "<li class='task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#unterlagen' onclick='editTestbericht()' data-toggle='tooltip' data-placement='bottom' title='Dokument bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-comment icon-align text-muted'></span>Version #1" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }

        var parentTestberichtNew= $(event).closest(".testberichtRubrik");
        var tberichtContainer = parentTestberichtNew.find(".testbericht-container");
        tberichtContainer.append(insideTestberichtNew);

    }

    function createLoesweg() {

        function insideLoesweg() {
            return "<li class='loeswegRubrik element-allgemein mb-3'>" +
                "<div class='row p-3'>" +
                "<div class='col-10'>Lösungswege</div>" +
                "<div class='col-2 text-right'>" +
                "<a href='#unterlagen' onclick='createLoeswegNew(this)' data-toggle='tooltip' data-placement='bottom' title='Neuer Testbericht' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>" +
                "</div>" +
                "</div>" +
                "<ol class='loesweg-container pl-0'>" +
                "<hr class='m-0'>" +
                "</ol>" +
                "</li>";
        }

        if(!(loeswegContainer.find('.loeswegRubrik').length !== 0)) {

            loeswegContainer.append(insideLoesweg());

        } else {
            alert("Sie haben bereits eine Lösungsweg-Rubrik erstellt.");
        }

    }
    function createLoeswegNew(event) {

        function insideLoeswegNew() {
            return "<li class='task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#unterlagen' onclick='editLoesweg()' data-toggle='tooltip' data-placement='bottom' title='Dokument bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-comment icon-align text-muted'></span>Version #1" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }

        var parentLoeswegNew= $(event).closest(".loeswegRubrik");
        var loeswegContainer = parentLoeswegNew.find(".loesweg-container");
        loeswegContainer.append(insideLoeswegNew);

    }

</script>

<!-- TESTAUFGABEN UND DOKUMENTE BILDSCHIRM ÖFFNEN -->
<script>
    var contentAufgaben = $("#content-aufgaben");
    var contentUnterlagen = $("#content-unterlagen");

    function editTask() {
        contentAufgaben.load("taskForm.html");
    }

    function editPsQuestion() {
        contentAufgaben.load("psQuestionForm.html");
    }

    function editCcQuestion() {
        contentAufgaben.load("ccQuestionForm.html");
    }

    function editScenario() {
        contentAufgaben.load("scenarioForm.html");
    }
    function editAgreement() {
        contentUnterlagen.load("agreementForm.html");
    }
    function editProtocol() {
        contentUnterlagen.load("protocolForm.html");
    }
    function editTestskript() {
        contentUnterlagen.load("testskriptForm.html");
    }

    function editTestplan() {
        contentUnterlagen.load("testplanForm.html");
    }
    function editTestbericht() {
        contentUnterlagen.load("testberichtForm.html");
    }
    function editLoesweg() {
        contentUnterlagen.load("loeswegForm.html");
    }
</script>

<!-- Evaluation Function -->

<script>
    $(document).ready(function () {


        $(function () {
//        changes the active collapse class to 'on' for changing the text to bold
            $('.panel-heading a').click(function () {
                $(this).toggleClass('on');
            });

        });

        $(function () {
            $('.nav-item').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });

    });


</script>

<!--LOAD FUNCTIONS -->
<script>

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

    $( function loadScenarios() {
        $.ajax({
            type: 'post',
            data: 'utid='+pageId,
            url: '../logic/loadScenario.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                scenarioContainer.append(response);
            }
        });
    });

    $( function loadConclusion() {
        $.ajax({
            type: 'post',
            data: 'utid='+pageId,
            url: '../logic/loadConclusion.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                conclusionContainer.append(response);
            }
        });
    });

    $( function loadPostSession() {
        $.ajax({
            type: 'post',
            data: 'utid='+pageId,
            url: '../logic/loadPostSession.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                postSessionContainer.append(response);
            }
        });
    });

    $( function loadTasks() {


        $.ajax({
            type: 'post',
            data: 'utid='+pageId,
            dataType: 'json',
            url: '../logic/loadTasks.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                var scenarioId = response.szenarioid;

                for(i in scenarioId) {
                    var scenario = $(".scenario[data-id='" +scenarioId[i] + "']");
                    var taskContainer = scenario.find(".task-container");
                    taskContainer.append(response.echo[i]);
                }


            }
        });
    });

    $( function loadPostSessionQuestion() {
        $.ajax({
            type: 'post',
            data: 'utid='+pageId,
            dataType: 'json',
            url: '../logic/loadPostSessionQuestion.php',
            success: function (response) {
                var psId = response.postsessionid;

                for(i in psId) {
                    var psq = $(".postSessionRubrik");
                    var psqContainer = psq.find(".ps-question-container");
                    psqContainer.append(response.echo[i]);
                }
            }
        });
    });

    $( function loadConclusionQuestion() {
        $.ajax({
            type: 'post',
            data: 'utid='+pageId,
            dataType: 'json',
            url: '../logic/loadConclusionQuestion.php',
            success: function (response) {
                var conId = response.conclusionid;

                for(i in conId) {
                    var con = $(".conclusionRubrik");
                    var conContainer = con.find(".cc-question-container");
                    conContainer.append(response.echo[i]);
                }
            }
        });
    });

</script>

<!-- CREATE FUNCTIONS -->
<script>

    var scenarioContainer = $(".scenario-container");
    var postSessionContainer = $(".postSession-container");
    var conclusionContainer = $(".conclusion-container");


    function createTask(event) {

        var parentScenario = $(event).closest(".scenario");
        var taskContainer = parentScenario.find(".task-container");

        var scenarioId = parentScenario.data('id');

        $.ajax({
            data: 'utid='+pageId+'&scenarioid='+scenarioId,
            type: 'post',
            url: '../logic/insertTask.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                taskContainer.append(response);
            }
        });



    }

    function createTaskOnly() {

        $.ajax({
            data: 'utid='+pageId,
            type: 'post',
            url: '../logic/insertTaskOnly.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                scenarioContainer.append(response);
            }
        })

    }



    function createConclusionQuestion(event) {

        var parentCon = $(event).closest(".conclusionRubrik");
        var conContainer = parentCon.find(".cc-question-container");


        var conId = parentCon.data('id');

        $.ajax({
            data: 'utid='+pageId+'&conid='+conId,
            type: 'post',
            url: '../logic/insertConclusionQuestion.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                conContainer.append(response);
            }
        })

    }

    function createScenario() {
        $.ajax({
            data: 'utid='+pageId,
            type: 'post',
            url: '../logic/insertScenario.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                scenarioContainer.append(response);
            }
        });

    }



    function createConclusion() {

        if (!(conclusionContainer.find('.conclusionRubrik').length !== 0)) {
            $.ajax({
                data: 'utid='+pageId,
                type: 'post',
                url: '../logic/insertConclusion.php',
                success: function (response) {//response is value returned from php (for your example it's "bye bye"
                    conclusionContainer.append(response);
                }
            })
        } else {
            alert("Sie haben bereits eine Abschlussfragen-Rubrik erstellt.")
        }
    }

    function createPostSession() {

        if(!(postSessionContainer.find('.postSessionRubrik').length !== 0)) {
            $.ajax({
                data: 'utid='+pageId,
                type: 'post',
                url: '../logic/insertPostSession.php',
                success: function (response) {//response is value returned from php (for your example it's "bye bye"
                    postSessionContainer.append(response);
                }
            })

        } else {
            alert("Sie haben bereits eine Post-Session-Interview-Rubrik erstellt.");
        }

    }

    function createPostSessionQuestion(event) {

        var parentPSQ = $(event).closest(".postSessionRubrik");
        var psqContainer = parentPSQ.find(".ps-question-container");

        var psqId = parentPSQ.data('id');

        $.ajax({
            data: 'utid='+pageId+'&psqid='+psqId,
            type: 'post',
            url: '../logic/insertPostSessionQuestion.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                psqContainer.append(response);
            }
        })

    }

</script>

<script src="../js/projektfensterSetStyle.js"></script>

<script src="../js/testaufgabenSortieren.js"></script>


</body>

</html>