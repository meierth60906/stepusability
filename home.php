<!DOCTYPE html>
<html lang="de">
<head>
    <title>Dashboard | step</title>

    <?php include ('head.html'); ?>
</head>
<body>

<?php include ('navigation.html'); ?>

<section id="dashboard" class="page-content">
    <div class="container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-8">
                <h1>Home</h1>

                <!--            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>-->
            </div>
            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" href="settings.php"><div class="icon-cog d-inline-block px-2"></div>Einstellungen</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card my-3">
                    <div class="card-header red">
                        Projekte
                    </div>
                    <div class="card-block pre-scrollable pt-0">
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1">
                                    <div class="icon-folder d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Projekt 1
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1">
                                    <div class="icon-folder d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Projekt 2
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1">
                                    <div class="icon-folder d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Projekt 3
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1">
                                    <div class="icon-folder d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Projekt 4
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1">
                                    <div class="icon-folder d-inline text-muted"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Projekt 5
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="card my-3">
                    <div class="card-header red">
                        Zuletzt geöffnete Dokumente
                    </div>
                    <div class="card-block pre-scrollable pt-0">
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1">
                                    <div class="icon-file-text d-inline c-bericht"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Testbericht
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="doc-date text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1">
                                    <div class="icon-file-text d-inline c-plan"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Testplan
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="doc-date text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1">
                                    <div class="icon-file-text d-inline c-skript"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Testskript
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="doc-date text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1">
                                    <div class="icon-file-text d-inline c-einverst"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Einverständniserklärung
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="doc-date text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>
                        <hr>
                        <a class="card-item-link" href="home.php">
                            <div class="row card-item p-3">
                                <div class="card-item-icon col-1">
                                    <div class="icon-file-text d-inline c-protokoll"></div>
                                </div>
                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0">
                                    Protokoll
                                    <div class="text-muted small">Projekt 1</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="doc-date text-muted">07.04.2017</div>
                                </div>
                            </div>
                        </a>

                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="card my-3">
                    <div class="card-header red">
                        <div class="icon-calendar-1 d-inline"></div> Termine
                    </div>
                    <div class="card-block text-center">
                        <div class="icon-folder"></div> Projekt 1
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="card my-3">
                    <div class="card-header red">
                        <div class="icon-star d-inline"></div> Favoriten
                    </div>
                    <div class="card-block text-center">
                        <div class="icon-folder"></div> Projekt 1
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<?php include ('scripts.html'); ?>
</body>

</html>