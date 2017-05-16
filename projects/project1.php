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
            <div class="col-12">
                <h1>Projekt 1</h1>
            </div>
        </div>
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
                    <div id="content-allgemein" class="col-lg-9 py-3">
                        <div class="row pt-4 hidden-lg-up">
                            <div class="col-lg-12 text-center">
                                <a href="#" class="btn btn-submit-orange mx-4 mt-3 mb-4"><i class="icon-play"></i> Test starten</a>
                            </div>
                        </div>
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
                                                <a href="project1.php"><span class="icon-pencil"></span><span class="hidden-md-down"> Bearbeiten</span></a>
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
                                                <a href="project1.php"><span class="icon-pencil"></span><span class="hidden-lg-down"> Bearbeiten</span></a>
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
                    <div id="sidebar-allgemein" class="col-lg-3 c-grey-bg">
                        <div class="row pt-4 hidden-md-down">
                            <div class="col-lg-12 text-center">
                                <a href="#" class="btn btn-submit-orange m-4"><i class="icon-play"></i> Test starten</a>
                            </div>
                        </div>
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
                    </div>
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
                                    <li><a class="new-task" onclick="createTaskOnly(); return false;" href="#testaufgaben">Testaufgabe</a></li>
                                    <div class="dropdown-divider m-0"></div>
                                    <li><a class="new-scenario" onclick="createScenario(); return false;" href="#testaufgaben">Szenario</a></li>
                                    <div class="dropdown-divider m-0"></div>
                                    <li><a class="new-postsession" onclick="createPostSession(); return false;" href="#testaufgaben">Post Session Interview</a></li>
                                    <div class="dropdown-divider m-0"></div>
                                    <li><a class="new-conclusion" onclick="createConclusion(); return false;" href="#testaufgaben">Abschlussfragen</a></li>
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
                        <div class="row pt-3 mt-3">
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
                        </div>
                    </div>

                    <div id="content-unterlagen" class="offset-lg-3 col-lg-9 py-3">

                        <div class="row">

                        </div>


                        <!--                        Projektinfo + Beteiligte -->
                        <div class="row">

                            <!--                            Projektinfo -->
                            <div class="col-lg-8 pl-0 pl-md-3 pr-0 pr-md-3 pr-lg-0">
                                <div class="row my-3 ml-2 ml-lg-3 mr-2">
                                    <div class="col-lg-12 element-allgemein p-3">
                                        <div class="row">
                                            <div class="col-10 col-sm-6 headline">
                                                Projektinformationen
                                            </div>
                                            <div class="col-2 col-sm-6 text-right">
                                                <a href="project1.php"><span class="icon-pencil"></span><span class="hidden-md-down"> Bearbeiten</span></a>
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
                                                <?php include("goals.html") ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--                            Beteiligte -->
                            <div class="col-lg-4 pr-0 pr-md-3 pl-0 pl-md-3 pl-lg-0">
                                <div class="row my-3 ml-2 mr-lg-3 mr-2">
                                    <div class="col-lg-12 element-allgemein p-3">
                                        <div class="row">
                                            <div class="col-10 col-sm-6 col-lg-4 headline">
                                                Beteiligte
                                            </div>
                                            <div class="col-2 col-sm-6 col-lg-8 text-right">
                                                <a href="project1.php"><span class="icon-pencil"></span><span class="hidden-lg-down"> Bearbeiten</span></a>
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

                        <!--                        Meilensteine drunter -->
                        <!--                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row m-3">
                                    <div class="col-lg-12 element-allgemein p-3">
                                        <div class="row">
                                            <div class="col-lg-12 headline">
                                                Meilensteine
                                            </div>
                                            <div class="col-lg-12"><hr class="pb-3"></div>
                                        </div>
                                        <div class="row">
                                            <div id="goals" class="col-lg-12 p-3">
                                                <?php /*include("goals.html") */?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->


                    </div>

                </div>

            </div>
            <div class="tab-pane" id="evaluation" role="tabpanel">
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
                </div>
            </div>
        </div>
    </div>

</section>

<?php include ('scripts.html'); ?>
<script>

    var h = $(window).height();
    var w = $(window).width();
    var header_h = $(".page-top").height();
    var innerbody = $(".inner-body");
    var nav = $(".sidebar-wrapper");

    //    Initial Functions
    innerbody.css("padding-top", header_h);

    //Nav Width
    var nav_w = nav.width();

    //Sidebars
    var sidAllg = $("#sidebar-allgemein");
    var sidAufg = $("#sidebar-aufgaben");
    var sidUnt = $("#sidebar-unterlagen");

    //Contents
    var conAllg = $("#content-allgemein");
    var conAufg = $("#content-aufgaben");
    var conUnt = $("#content-unterlagen");



    $(function() {
        if(w > 991) {
            //Set Sidebar Height
            sidAllg.height(h-header_h);
            sidAufg.height(h-header_h);
            sidUnt.height(h-header_h);

            //Set Content Height
            conAllg.height(h-header_h - 32);
            conAufg.height(h-header_h - 32);
            conUnt.height(h-header_h - 32);

            //Set Content Width
            conAllg.width(w - sidAllg.width() - 60 - nav_w);
            conAufg.width(w - sidAufg.width() - 60 - nav_w);
            conUnt.width(w - sidUnt.width() - 60 - nav_w);
        }
    });


    //Function for Window Resize
    $(window).on('resize', function(){
        //Window Height
        h = $(window).height();
        w = $(window).width();
        nav_w = nav.width();

        if(w > 991) {
            //Set Sidebar Height
            sidAllg.height(h - header_h);
            sidAufg.height(h - header_h);
            sidUnt.height(h - header_h);

            //Set Content Height
            conAllg.height(h - header_h - 32);
            conAufg.height(h - header_h - 32);
            conUnt.height(h - header_h - 32);

            //Set Content Width
            conAllg.width(w - sidAllg.width() - 60 - nav_w);
            conAufg.width(w - sidAufg.width() - 60 - nav_w);
            conUnt.width(w - sidUnt.width() - 60 - nav_w);
        }
    });

</script>

<script src="../js/jquery-sortable-min.js"></script>
<script>
    /*
     var h = $(window).height();
     var header_h = $(".page-top").height();
     var innerbody = $(".inner-body");
     var aufgabenfeld = $(".aufgabenfeld");

     var container_allg = $("#content-allgemein");
     var sidebar_allg = $("#sidebar-allgemein");

     var container_aufg = $("#content-aufgaben");
     var sidebar_aufg = $("#sidebar-aufgaben");

     var container_unterlagen = $("#content-unterlagen");
     var sidebar_unterlagen = $("#sidebar-unterlagen");






     $(".protokollant-container").height(h - aufgabenfeld.height() - header_h);

     if(container_aufg.height() > (h - header_h) {
     sidebar_aufg.height(container_aufg);
     } else {
     sidebar_aufg.height(h - header_h);
     }

     if(container_allg.height() > (h - header_h) {
     sidebar_allg.height(container_allg);
     } else {
     sidebar_allg.height(h - header_h);
     }



     //    Functions on Window Resize
     $( window ).resize( function(){

     $(".protokollant-container").height(h - aufgabenfeld.height() - header_h);



     if(container_allg.height() > (h - header_h) {
     sidebar_allg.height(container_allg);
     } else {
     sidebar_allg.height(h - header_h);
     }

     if(container_aufg.height() > (h - header_h) {
     sidebar_aufg.height(container_aufg);
     } else {
     sidebar_aufg.height(h - header_h);
     }
     });

     */

</script>

<!-- Rubriken erstellen -->
<script>
    var scenarioContainer = $(".scenario-container");
    var postSessionContainer = $(".postSession-container");
    var conclusionContainer = $(".conclusion-container");

    function createTask(event) {

        function insideTask() {
            return "<li class='task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#testaufgaben' onclick='editTask()' data-toggle='tooltip' data-placement='bottom' title='Aufgabe bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-list icon-align text-muted'></span>Aufgabe 1" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }


        var parentScenario = $(event).closest(".scenario");
        var taskContainer = parentScenario.find(".task-container");
        taskContainer.append(insideTask);

    }

    function createTaskOnly() {

        function insideTask() {
            return "<li class='element-allgemein mb-3 task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#testaufgaben' onclick='editTask()' data-toggle='tooltip' data-placement='bottom' title='Aufgabe bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-list icon-align text-muted'></span>Aufgabe 1" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }


        scenarioContainer.append(insideTask);

    }

    function createPostSessionQuestion(event) {

        function insidePSQ() {
            return "<li class='task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#testaufgaben' onclick='editQuestion()' data-toggle='tooltip' data-placement='bottom' title='Frage bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-comment icon-align text-muted'></span>Post-Session-Interview-Frage" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }

        var parentPSQ = $(event).closest(".postSessionRubrik");
        var psqContainer = parentPSQ.find(".ps-question-container");
        psqContainer.append(insidePSQ);

    }

    function createConclusionQuestion(event) {

        function insideCon() {
            return "<li class='task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#testaufgaben' onclick='editQuestion()' data-toggle='tooltip' data-placement='bottom' title='Frage bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-question icon-align text-muted'></span>AbschlussFrage" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }

        var parentCon = $(event).closest(".conclusionRubrik");
        var conContainer = parentCon.find(".cc-question-container");
        conContainer.append(insideCon);

    }

    function createScenario() {

        function insideScenario() {
            return "<li class='scenario element-allgemein mb-3'>" +
                        "<div class='row p-3'>" +
                            "<div class='col-10'>" +
                                "<a href='#testaufgaben' onclick='editScenario()' data-toggle='tooltip' data-placement='bottom' title='Szenario bearbeiten' class='link-noblue'>Szenario Name</a>" +
                            "</div>" +
                            "<div class='col-2 text-right'>" +
                                "<a href='#testaufgaben' onclick='createTask(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Aufgabe' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>" +
                            "</div>" +
                        "</div>" +
                        "<ol class='task-container pl-0'>" +
                            "<hr class='m-0'>" +
                        "</ol>" +
                    "</li>";
        }

        scenarioContainer.append(insideScenario);

    }

    function createPostSession() {

        function insidePostSession() {
            return "<li class='postSessionRubrik element-allgemein mb-3'>" +
                "<div class='row p-3'>" +
                "<div class='col-10'>Post Session Interview</div>" +
                "<div class='col-2 text-right'>" +
                "<a href='#testaufgaben' onclick='createPostSessionQuestion(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Interview-Frage' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>" +
                "</div>" +
                "</div>" +
                "<ol class='ps-question-container pl-0'>" +
                "<hr class='m-0'>" +
                "</ol>" +
                "</li>";
        }

        if(!(postSessionContainer.find('.postSessionRubrik').length !== 0)) {

            postSessionContainer.append(insidePostSession);

        } else {
            alert("Sie haben bereits eine Post-Session-Interview-Rubrik erstellt.");
        }

    }

    function createConclusion() {

        function insideConclusion() {
            return "<li class='conclusionRubrik element-allgemein mb-3'>" +
                "<div class='row p-3'>" +
                "<div class='col-10'>Abschlussfragen</div>" +
                "<div class='col-2 text-right'>" +
                "<a href='#testaufgaben' onclick='createConclusionQuestion(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Abschlussfrage' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>" +
                "</div>" +
                "</div>" +
                "<ol class='cc-question-container pl-0'>" +
                "<hr class='m-0'>" +
                "</ol>" +
                "</li>";
        }

        if (!(conclusionContainer.find('.conclusionRubrik').length !== 0)) {
            conclusionContainer.append(insideConclusion);
        } else {
            alert("Sie haben bereits eine Abschlussfragen-Rubrik erstellt.")
        }

    }
</script>

<!-- Edits verknüpfen -->
<script>
    var contentAufgaben = $("#content-aufgaben");

    function editTask() {
        contentAufgaben.load("taskForm.html");
    }

    function editQuestion() {
        contentAufgaben.load("questionForm.html");
    }

    function editScenario() {
        contentAufgaben.load("scenarioForm.html");
    }

</script>

<!-- Testaufgaben Aufgaben-Switch -->
<script>
//    var taskForm_formGroup = $("#taskForm .form-group");
//    var taskForm_hr = $("#taskForm .hline");
//    var headline = $("#headline-aufgaben");
//
//    var radioTask = $("#radioTask");
//    var radioPostSession = $("#radioPostSession");
//    var radioConclusion = $("#radioConclusion");
//
//    var formTask = $(".formTask");
//    var formPostSession = $(".formPostSession");
//    var formConclusion = $(".formConclusion");
//
//    $(document).ready(function(){
//        if(radioTask.is(':checked')) {
//            headline.html("<span class='icon-align icon-list mr-2'></span>Testaufgabe");
//            $(taskForm_formGroup).not(formTask).hide();
//            $(taskForm_hr).not(formTask).hide();
//            $(formTask).show();
//        } else if (radioPostSession.is(':checked')) {
//            headline.html("<span class='icon-align icon-comment pr-2'></span>Post-Session-Interview-Frage");
//            $(taskForm_formGroup).not(formPostSession).hide();
//            $(taskForm_hr).not(formPostSession).hide();
//            $(formPostSession).show();
//        } else if (radioConclusion.is(':checked')) {
//            headline.html("<span class='icon-align icon-question pr-2'></span>Abschlussfrage");
//            $(taskForm_formGroup).not(formConclusion).hide();
//            $(taskForm_hr).not(formConclusion).hide();
//            $(formConclusion).show();
//        }
//
//        $('input[type="radio"]').click(function(){
//            var inputValue = $(this).attr("value");
//            var necessaryInput = $("." + inputValue);
//            $(taskForm_formGroup).not(necessaryInput).hide();
//            $(taskForm_hr).not(necessaryInput).hide();
//            $(necessaryInput).show();
//
//            if(inputValue === "formTask") {
//                headline.html("<span class='icon-align icon-list mr-2'></span>Testaufgabe");
//            } else if (inputValue === "formPostSession") {
//                headline.html("<span class='icon-align icon-comment pr-2'></span>Post-Session-Interview-Frage");
//            } else if (inputValue === "formConclusion") {
//                headline.html("<span class='icon-align icon-question pr-2'></span>Abschlussfrage");
//            }
//        });
//    });
</script>


<script>




</script>
<script>

    // Javascript to enable link to tab
    var hash = document.location.hash;
    if (hash) {
        $('.nav-tabs a[href="'+hash+'"]').tab('show');
    }

    // Change hash for page-reload
    $('.nav-tabs a').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
        if(w > 991) {
            //Set Sidebar Height
            sidAllg.height(h - header_h);
            sidAufg.height(h - header_h);
            sidUnt.height(h - header_h);

            //Set Content Height
            conAllg.height(h - header_h - 32);
            conAufg.height(h - header_h - 32);
            conUnt.height(h - header_h - 32);

            //Set Content Width
            conAllg.width(w - sidAllg.width() - 60 - nav_w);
            conAufg.width(w - sidAufg.width() - 60 - nav_w);
            conUnt.width(w - sidUnt.width() - 60 - nav_w);
        }
    });

</script>

<!-- Sortierfunktion Testaufgaben -->
<script>
    $(function  () {

        var adjustment;

        $("ol.scenario-container").sortable({
            nested: true,
            placeholderClass: 'placeholder',
            placeholder: "<li class='placeholder' style='border: 2px dashed #a9a9a9; border-radius: 5px; height: 60px;'></li>",
            isValidTarget: function ($item, container) {
                var depth = 1, // Start with a depth of one (the element itself)
                    maxDepth = 2,
                    children = $item.find('ol'); /*.first().find('li'); */


                // Add the amount of parents to the depth
                depth += container.el.parents('ol').length;

                // Increment the depth for each time a child
                while (children.length) {
                    depth++;
                    children = children.find('ol'); /*.first().find('li');*/
                }

                return depth <= maxDepth;
            },
            // animation on drop
            onDrop: function  ($item, container, _super) {

                var $clonedItem = $('<li/>').css({height: $item.height()});
                $item.before($clonedItem);
                $clonedItem.animate({'height': $item.height()});

                $item.animate($clonedItem.position(), function  () {
                    $clonedItem.detach();
                    _super($item, container);
                });

                if($item.is('.task') && $item.parent().is('.task-container')) {
                    $item.removeClass("element-allgemein mb-3");
                } else {
                    $item.addClass("element-allgemein mb-3");
                }

            },

            // set $item relative to cursor position
            onDragStart: function ($item, container, _super) {
                var offset = $item.offset(),
                    pointer = container.rootGroup.pointer;

                adjustment = {
                    left: pointer.left - offset.left,
                    top: pointer.top - offset.top
                };

                _super($item, container);
            },
            onDrag: function ($item, position) {
                $item.css({
                    left: position.left - adjustment.left,
                    top: position.top - adjustment.top
                });
            }
        });


    });
</script>

<!-- Sortierfunktion PostSession -->
<script>
    $(function () {
        $("ol.postSession-container").sortable({
            exclude: ".postSessionRubrik",
            placeholderClass: 'placeholder',
            placeholder: "<li class='placeholder' style='border: 2px dashed #a9a9a9; border-radius: 5px; height: 60px;'></li>",
            isValidTarget: function($item, container) {
                if( !$item.closest("ol").is(container.el)){
                    return false;
                    // additional rules
                } else return true;
            },
            // animation on drop
            onDrop: function  ($item, container, _super) {

                var $clonedItem = $('<li/>').css({height: $item.height()});
                $item.before($clonedItem);
                $clonedItem.animate({'height': $item.height()});

                $item.animate($clonedItem.position(), function  () {
                    $clonedItem.detach();
                    _super($item, container);
                });

            },

            // set $item relative to cursor position
            onDragStart: function ($item, container, _super) {
                var offset = $item.offset(),
                    pointer = container.rootGroup.pointer;

                adjustment = {
                    left: pointer.left - offset.left,
                    top: pointer.top - offset.top
                };

                _super($item, container);
            },
            onDrag: function ($item, position) {
                $item.css({
                    left: position.left - adjustment.left,
                    top: position.top - adjustment.top
                });
            }
        });
    })
</script>

<!-- Sortierfunktion Conclusion -->
<script>
    $(function () {
        $("ol.conclusion-container").sortable({
            exclude: ".conclusionRubrik",
            placeholderClass: 'placeholder',
            placeholder: "<li class='placeholder' style='border: 2px dashed #a9a9a9; border-radius: 5px; height: 60px;'></li>",
            isValidTarget: function($item, container) {
                if( !$item.closest("ol").is(container.el)){
                    return false;
                    // additional rules
                } else return true;
            },
            // animation on drop
            onDrop: function  ($item, container, _super) {

                var $clonedItem = $('<li/>').css({height: $item.height()});
                $item.before($clonedItem);
                $clonedItem.animate({'height': $item.height()});

                $item.animate($clonedItem.position(), function  () {
                    $clonedItem.detach();
                    _super($item, container);
                });

            },

            // set $item relative to cursor position
            onDragStart: function ($item, container, _super) {
                var offset = $item.offset(),
                    pointer = container.rootGroup.pointer;

                adjustment = {
                    left: pointer.left - offset.left,
                    top: pointer.top - offset.top
                };

                _super($item, container);
            },
            onDrag: function ($item, position) {
                $item.css({
                    left: position.left - adjustment.left,
                    top: position.top - adjustment.top
                });
            }
        });
    })
</script>

</body>

</html>