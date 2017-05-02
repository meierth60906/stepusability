<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings | step</title>
    <?php include('head.html') ?>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

</head>
<body>
<!-- Sidebar und Header-->

<?php include('navigation.html'); ?>

<section id="library" class="page-content">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <h1>Bibliothek</h1>

            <div class="offset-7 text-right align-self-center ">
                <a class="titlebar-link" href="#">
                    <div class=" d-inline-block px-2"></div>
                    <span class="hidden-sm-down icon-print"> Drucken</span>
                </a>
                <a class="titlebar-link" href="library.php">
                    <div class=" d-inline-block px-2"></div>
                    <span class="hidden-sm-down icon-pencil"> Bearbeiten</span>
                </a>
            </div>
        </div>


        <!--innere Navigationsleiste-->
        <div class="row" id="sidebarLibrary">
            <div class="col p-0">
                <div class="panel-group">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#einverständniserklärung" class="icon-angle-right">Einverständniserklärung</a>

                            </h4>
                        </div>
                        <div id="einverständniserklärung" class="panel-collapse collapse">
                            <div class="panel-body icon-file-text-o"> Vorlage 1</div>
                            <div class="panel-body icon-file-text-o"> Vorlage 2</div>
                            <div class="panel-body icon-file-text-o"> Vorlage 3</div>
                        </div>

                        <!--Protkollleitfaden-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#protokollleitfaden" class="icon-angle-right">Protokollleitfaden</a>
                            </h4>
                        </div>
                        <div id="protokollleitfaden" class="panel-collapse collapse">
                            <div class="panel-body icon-file-text-o"> Vorlage 1</div>
                            <div class="panel-body icon-file-text-o"> Vorlage 2</div>
                            <div class="panel-body icon-file-text-o"> Vorlage 3</div>
                        </div>
                        <!--Testskript-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#testskript" class="icon-angle-right">Testskript</a>
                            </h4>
                        </div>
                        <div id="testskript" class="panel-collapse collapse">
                            <div class="panel-body icon-file-text-o"> Vorlage 1</div>
                            <div class="panel-body icon-file-text-o"> Vorlage 2</div>
                            <div class="panel-body icon-file-text-o"> Vorlage 3</div>
                        </div>

                        <!--                    Testplan-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#testplan" class="icon-angle-right">Testplan</a>
                            </h4>
                        </div>
                        <div id="testplan" class="panel-collapse collapse">
                            <div class="panel-body icon-file-text-o"> Vorlage 1</div>
                            <div class="panel-body icon-file-text-o"> Vorlage 2</div>
                            <div class="panel-body icon-file-text-o"> Vorlage 3</div>
                        </div>

                        <!--                    Testbericht-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#testbericht" class="icon-angle-right">Testbericht</a>
                            </h4>
                        </div>
                        <div id="testbericht" class="panel-collapse collapse">
                            <div class="panel-body icon-file-text-o"> Vorlage 1</div>
                            <div class="panel-body icon-file-text-o"> Vorlage 2</div>
                            <div class="panel-body icon-file-text-o"> Vorlage 3</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="tab-pane row" id="protokollleitfaden">
            <div class="col-lg-8 offset-lg-4">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Aufgabenanweisung</th>
                        <th>Lösungsschritte</th>
                        <th>Anmekungen</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>
                        </td>
                        <td>
                        </td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
<?php include('scripts.html'); ?>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
    $(function () {
//        changes the active collapse class to 'on' for changing the text to bold
        $('.panel-title').click(function () {
            $(this).toggleClass('on');
        })
    });

    //    $(function () {
    ////        changes the active collapse class to 'on' for changing the text to bold
    //        $('.btn-primary').click(function () {
    //            $(this).toggleClass('on');
    //        })
    //    });


    $(function () {
        var hash = window.location.hash;
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');

        $('.nav-link').click(function () {
            $(this).tab('show');
            var scrollmem = $('body').scrollTop() || $('html').scrollTop();
            window.location.hash = this.hash;
            $('html,body').scrollTop(scrollmem);
        });
    });
</script>
</body>

</html>