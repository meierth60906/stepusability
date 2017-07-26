<?php
//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:index.php");
//    die();
//}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Dashboard | step</title>

    <?php include ('head.html'); ?>
    <?php
/*    setcookie("Name", "Apfel", time() + (86400 * 30), "/"); // 86400 = 1 Tag
    setcookie("Vorname", "Anna", time() + (86400 * 30), "/"); // 86400 = 1 Tag
    setcookie("Geburtsdatum", "01.01.1990", time() + (86400 * 30), "/"); // 86400 = 1 Tag
    setcookie("Anrede", "Frau", time() + (86400 * 30), "/"); // 86400 = 1 Tag
    setcookie("Firma", "Apple", time() + (86400 * 30), "/"); // 86400 = 1 Tag

    */?>


</head>
<body id="dashboardbody">

<?php include ('navigation.html'); ?>

<section id="dashboard" class="page-content">
    <div class="container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-8">
                <h1>Dashboard</h1>
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
            <div class="col-lg-6">
                <div class="card my-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">Aktuelle Projekte</div>
                            <div class="col-4 text-right">
                                <span class="badge c-orange-bg project-count"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-block pre-scrollable pt-0 project-dashboard-content">

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
                                    <div class="text-muted small">Hochschulwebsite</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">26.07.2017</div>
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
                                    <div class="text-muted small">Social App</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">25.07.2017</div>
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
                                    <div class="text-muted small">Testwebsite</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">25.07.2017</div>
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
                                    <div class="text-muted small">Social App</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="text-muted">25.07.2017</div>
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
                                    <div class="text-muted small">wetter.com</div>
                                </div>
                                <div class="col-4 hidden-xs-down text-right">
                                    <div class="text-muted small">Letzte Änderung am</div>
                                    <div class="doc-date text-muted">22.07.2017</div>
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
                                <span class="badge c-orange-bg termin-count"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-block pre-scrollable pt-0 termin-dashboard-content">


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
                                <span class="favs-count badge c-orange-bg"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-block pre-scrollable pt-0 favs-dashboard-content">

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php include ('scripts.html'); ?>
<!-- Seiteninhalt aus Datenbank laden on Page Load-->
<script>
    var projectsDashboardContainer = $(".project-dashboard-content");

    $( function loadProjects() {
        $.ajax({
            url: 'logic/selectProjectlistDashboard.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                projectsDashboardContainer.append(response);
            }
        })
    });

    var favsDashboardContainer = $(".favs-dashboard-content");

    $( function loadFavs() {
        $.ajax({
            url: 'logic/selectFavsDashboard.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                favsDashboardContainer.append(response);
            }
        })
    });

    var terminDashboardContainer = $(".termin-dashboard-content");

    $( function loadTermine() {
        $.ajax({
            url: 'logic/selectTermineDashboard.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                terminDashboardContainer.append(response);
            }
        })
    });
</script>
<script>
    var projectsDashboardCountContainer = $(".project-count");

    $( function loadProjectsCount() {
        $.ajax({
            url: 'logic/selectProjectlistDashboardCount.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                projectsDashboardCountContainer.html(response);
            }
        })
    });

    var favsDashboardCountContainer = $(".favs-count");

    $( function loadFavsCount() {
        $.ajax({
            url: 'logic/selectFavsDashboardCount.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                favsDashboardCountContainer.html(response);
            }
        })
    });

    var terminDashboardCountContainer = $(".termin-count");

    $( function loadTermineCount() {
        $.ajax({
            url: 'logic/selectTermineDashboardCount.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                terminDashboardCountContainer.html(response);
            }
        })
    });
</script>
</body>

</html>