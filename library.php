<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings | step</title>
    <?php include('head.html') ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
                    <span class="hidden-sm-down">Drucken</span></a>
                <a class="titlebar-link" href="#">
                    <div class=" d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Bearbeiten</span></a>
            </div>
        </div>

        <!--innere Navigationsleiste-->

        <!--innere Navigationsleiste-->
        <div class="row" id="sidebarLibrary">
            <div class="col p-0"
            <div class="panel-group">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#einverständniserklärung">Einverständniserklärung</a>

                        </h4>
                    </div>
                    <div id="einverständniserklärung" class="panel-collapse collapse">
                        <div class="panel-body">Vorlage</div>
                        <div class="panel-body">Einverständniserklärung 1</div>
                        <div class="panel-body">Einverständniserklärung 2</div>
                    </div>

                    <!--Protkollleitfaden-->
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#protokollleitfaden">Protokollleitfaden</a>
                        </h4>
                    </div>
                    <div id="protokollleitfaden" class="panel-collapse collapse">
                        <div class="panel-body">Vorlage</div>
                        <div class="panel-body">Protokollleitfaden 1</div>
                        <div class="panel-body">Protokollleitfaden 2</div>
                    </div>
                    <!--Testskript-->
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#testskript">Testskript</a>
                        </h4>
                    </div>
                    <div id="testskript" class="panel-collapse collapse">
                        <div class="panel-body">Vorlage</div>
                        <div class="panel-body">Testskript 1</div>
                        <div class="panel-body">Testskript 2</div>
                    </div>

                    <!--                    Testplan-->

                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#testplan">Testplan</a>
                        </h4>
                    </div>
                    <div id="testplan" class="panel-collapse collapse">
                        <div class="panel-body">Vorlage</div>
                        <div class="panel-body">Testplan 1</div>
                        <div class="panel-body">Testplan 2</div>
                    </div>

                    <!--                    Testbericht-->

                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" href="#testbericht">Testbericht</a>
                        </h4>
                    </div>
                    <div id="testbericht" class="panel-collapse collapse">
                        <div class="panel-body">Vorlage 1</div>
                        <div class="panel-body">Testbericht 1</div>
                        <div class="panel-body">Testbericht 2</div>
                    </div>
                </div>
            </div>

</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
    $( function() {
        $('.panel-title').click( function() {
            $(this).toggleClass('on');
        } )
    });
</script>
</body>

</html>