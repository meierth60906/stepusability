<!DOCTYPE html>
<html lang="de">
<head>
    <title>Projekte | step</title>

    <?php include ('head.html'); ?>
</head>
<body id="body-projects">

<?php include ('navigation.html'); ?>

<section id="projects" class="page-content">
    <div class="container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-8">
                <h1>Projekte</h1>
            </div>
            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" href="../settings.php">
                    <div class="icon-plus-1 icon-align d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Erstellen</span></a>
            </div>
        </div>

    </div>
    <div class="container">
<!--        <div class="row">-->
<!--            <div class="col-sm-12 mt-3">-->
<!--                <table class="table table-hover">-->
<!--                    <thead class="thead-default">-->
<!--                    <tr>-->
<!--                        <th>Status</th>-->
<!--                        <th>Projektname</th>-->
<!--                        <th>Auftraggeber</th>-->
<!--                        <th>Zuletzt geändert am</th>-->
<!--                        <th>Erstellt am</th>-->
<!--                    </tr>-->
<!--                    </thead>-->
<!--                    <tbody>-->
<!--                    <tr class='clickable-row' data-href='project1.php'>-->
<!--                        <td scope="row">Laufend</td>-->
<!--                        <th><a href="project1.php">Projekt 1</a></th>-->
<!--                        <td>Auftrag Geber</td>-->
<!--                        <td>11.04.17</td>-->
<!--                        <td>02.03.17</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td scope="row">Laufend</td>-->
<!--                        <th>Projekt 2</th>-->
<!--                        <td>Auftrag Geber</td>-->
<!--                        <td>11.04.17</td>-->
<!--                        <td>02.03.17</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td scope="row">Laufend</td>-->
<!--                        <th>Projekt 3</th>-->
<!--                        <td>Auftrag Geber</td>-->
<!--                        <td>11.04.17</td>-->
<!--                        <td>02.03.17</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td scope="row">Laufend</td>-->
<!--                        <th>Projekt 4</th>-->
<!--                        <td>Auftrag Geber</td>-->
<!--                        <td>11.04.17</td>-->
<!--                        <td>02.03.17</td>-->
<!--                    </tr>-->
<!--                    </tbody>-->
<!--                </table>-->
<!---->
<!--                <!--<div class="card my-3">-->
<!--                    <div class="card-block pt-0">-->
<!--                        <a class="card-item-link" href="home.php">-->
<!--                            <div class="row card-item p-3">-->
<!--                                <div class="card-item-icon col-1 middle-two-line">-->
<!--                                </div>-->
<!--                                <div class="col-7 pl-sm-1 pl-md-0 pl-lg-2 pl-xl-0 middle-two-line">-->
<!--                                    Projekt 1-->
<!--                                </div>-->
<!--                                <div class="col-4 hidden-xs-down text-right middle-two-line">-->
<!--                                    <div class="img-placeholder darkgrey-bg">AA</div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                        <a href="index.php"><div class="icon-check p-absolute p-4"></div></a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->


        <div class="row p-3 mx-3 font-weight-bold">
            <div class="col-1">Status</div>
            <div class="col-4">Projektname</div>
            <div class="col-3">Auftraggeber</div>
            <div class="col-2 text-right">Erstellt am</div>
            <div class="col-2 text-right">Zuletzt geändert</div>
        </div>


        <div class="row mx-1 font-weight-bold">
            <div class="col-12"><hr class="m-0"></div>
        </div>

        <a href="project1.php">
        <div class="row m-3 p-3 element-allgemein">
            <div class="col-1">Status</div>
            <div class="col-4">Projektname</div>
            <div class="col-3">Auftraggeber</div>
            <div class="col-2 text-right">Erstellt am</div>
            <div class="col-2 text-right">Zuletzt geändert am</div>
        </div>
        </a>

        <div class="row m-3 p-3 element-allgemein">
            <div class="col-1">Status</div>
            <div class="col-4">Projektname</div>
            <div class="col-3">Auftraggeber</div>
            <div class="col-2 text-right">Erstellt am</div>
            <div class="col-2 text-right">Zuletzt geändert am</div>
        </div>

        <div class="row m-3 p-3 element-allgemein">
            <div class="col-1">Status</div>
            <div class="col-4">Projektname</div>
            <div class="col-3">Auftraggeber</div>
            <div class="col-2 text-right">Erstellt am</div>
            <div class="col-2 text-right">Zuletzt geändert am</div>
        </div>

        <div class="row m-3 p-3 element-allgemein">
            <div class="col-1">Status</div>
            <div class="col-4">Projektname</div>
            <div class="col-3">Auftraggeber</div>
            <div class="col-2 text-right">Erstellt am</div>
            <div class="col-2 text-right">Zuletzt geändert am</div>
        </div>

    </div>

</section>

<?php include ('scripts.html'); ?>
<script>
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
</body>

</html>