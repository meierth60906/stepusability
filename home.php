<!DOCTYPE html>
<html lang="de">
<head>
    <title>Dashboard | step</title>

    <?php include ('head.html'); ?>
</head>
<body id="dashboardbody">

<?php include ('navigation.html'); ?>

<section id="dashboard" class="page-content">
    <div class="container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-8">
                <h1>Home</h1>
            </div>
            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" href="settings.php">
                    <div class="icon-cog d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Einstellungen</span></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row protokollant-container">
            <!-- Projekte -->
            <div class="col-lg-6 protokollant-content">
                <div class="card my-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">Aktuelle Projekte</div>
                            <div class="col-4 text-right">
                                <span class="badge c-orange-bg">5</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-block pre-scrollable pt-0">
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-folder d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0 middle-two-line">
                                    Projekt 1
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-folder d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0 middle-two-line">
                                    Projekt 2
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-folder d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0 middle-two-line">
                                    Projekt 3
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-folder d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0 middle-two-line">
                                    Projekt 4
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-folder d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0 middle-two-line">
                                    Projekt 5
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                    </div>

                </div>
            </div>

            <!-- Dokumente -->
            <div class="col-lg-6">
                <div class="card my-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">Zuletzt geöffnete Dokumente</div>
                            <div class="col-4 text-right">
                                <span class="badge c-orange-bg">5</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-block pre-scrollable pt-0">
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-file-text d-inline c-bericht"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Testbericht
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-file-text d-inline c-plan"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Testplan
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-file-text d-inline c-skript"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Testskript
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-file-text d-inline c-einverst"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Einverständniserklärung
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-file-text d-inline c-protokoll"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Protokoll
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="doc-date text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
            </div>

            <!-- Termine -->
            <div class="col-lg-6">
                <div class="card my-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">Bevorstehende Termine</div>
                            <div class="col-4 text-right">
                                <span class="badge c-orange-bg">5</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-block pre-scrollable pt-0">
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-calendar-1 d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Testdurchlauf
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted animated infinite flash">Morgen</div>
                                    <div class="text-muted small">14:00 - 17:00</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-calendar-1 d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Testdurchlauf
                                    <div class="text-muted small">Projekt 3</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted">Sa, 08.04.17</div>
                                    <div class="text-muted small">14:00 - 17:00</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-calendar-1 d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Testdurchlauf
                                    <div class="text-muted small">Projekt 2</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted">Sa, 15.04.17</div>
                                    <div class="text-muted small">14:00 - 17:00</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-calendar-1 d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Testdurchlauf
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted">Di, 18.04.17</div>
                                    <div class="text-muted small">14:00 - 17:00</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-calendar-1 d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Testdurchlauf
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted">Do, 20.04.17</div>
                                    <div class="text-muted small">14:00 - 17:00</div>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
            </div>

            <!-- Favoriten -->
            <div class="col-lg-6">
                <div class="card my-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">Favoriten</div>
                            <div class="col-4 text-right">
                                <span class="badge c-orange-bg">2</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-block pre-scrollable pt-0">
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-star d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Anna Apfel
                                    <div class="text-muted small">Siemens AG</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right middle-two-line">
                                    <div class="img-placeholder c-darkgrey-bg">AA</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1 middle-two-line">
                                    <div class="icon-star d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Bernd Bogner
                                    <div class="text-muted small">Muster GmbH</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right middle-two-line">
                                    <!--<div class="img-placeholder darkgrey-bg">BB</div>-->
                                    <img class="img-fluid img-placeholder rounded-circle" src="img/user.jpg">
                                </div>
                            </div>
                        </a>
                        <hr>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include ('scripts.html'); ?>
</body>

</html>