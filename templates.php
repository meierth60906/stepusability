<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings | step</title>
    <?php include('head.html') ?>

</head>
<body>
<!-- Sidebar und Header-->

<?php include('navigation.html'); ?>

<section id="templates" class="page-content">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <h1>Vorlagen</h1>

            <div class="offset-8 text-right align-self-center ">
                <a class="titlebar-link" href="templates.php">
                    <div class=" d-inline-block px-2"></div>
                    <span class="hidden-sm-down icon-pencil"> Bearbeiten</span>
                </a>
            </div>
        </div>


        <!--innere Navigationsleiste-->

        <div class="container row">
            <div class="col-lg-3 p-0" id="sidebarTemplates">
                <div class="panel-group">
                    <div class="panel panel-default">


                        <!--                        Einverständniserklärung-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#einverstaendniserklaerung"
                                   class="icon-angle-right active">Einverständniserklärung</a>
                            </h4>
                        </div>
                        <div id="einverstaendniserklaerung" class="panel-collapse collapse active">
                            <ul class="list-group">
                                <li class="list-group-item icon-file-text-o active"><a
                                            href="#einverstaendniserklaerung1"> Vorlage 1</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#einverstaendniserklaerung3">
                                        Vorlage 2</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#einverstaendniserklaerung3">
                                        Vorlage 3</a></li>
                            </ul>
                        </div>


                        <!--                            Protkollleitfaden-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#protokollleitfaden"
                                   class="icon-angle-right">Protokollleitfaden</a>
                            </h4>
                        </div>
                        <div id="protokollleitfaden" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item icon-file-text-o"><a href="#protokollleitfaden1">
                                        Vorlage 1</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#protokollleitfaden2"> Vorlage
                                        2</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#protokollleitfaden3"> Vorlage
                                        3</a></li>
                            </ul>
                        </div>


                        <!--Testskript-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#testskript" class="icon-angle-right">Testskript</a>
                            </h4>
                        </div>
                        <div id="testskript" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item icon-file-text-o"><a href="#testskript1"> Vorlage 1</a>
                                </li>
                                <li class="list-group-item icon-file-text-o"><a href="#testskript2"> Vorlage 2</a>
                                </li>
                                <li class="list-group-item icon-file-text-o"><a href="#testskript3"> Vorlage 3</a>
                                </li>
                            </ul>
                        </div>
                        <!--                    Testplan-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#testplan" class="icon-angle-right">Testplan</a>
                            </h4>
                        </div>
                        <div id="testplan" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item icon-file-text-o"><a href="#testplan1"> Vorlage 1</a>
                                </li>
                                <li class="list-group-item icon-file-text-o"><a href="#testplan2"> Vorlage 2</a>
                                </li>
                                <li class="list-group-item icon-file-text-o"><a href="#testplan3"> Vorlage 3</a>
                                </li>
                            </ul>
                        </div>


                        <!--                    Testbericht-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#testbericht"
                                   class="icon-angle-right">Testbericht</a>
                            </h4>
                        </div>
                        <div id="testbericht" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item icon-file-text-o"><a href="#testbericht1"> Vorlage
                                        1</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#testbericht2"> Vorlage
                                        2</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#testbericht3"> Vorlage
                                        3</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="tab-content">


            <div class="tab-pane active" id="einverstaendniserklaerung1" role="tabpanel">
                <div class="row">
                    <div class="col-lg-8 offset-lg-4">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Einverständniserklärung</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="tab-pane row" id="einverstaendniserklaerung2" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Einverständniserklärung</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane row" id="einverstaendniserklaerung3" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Einverständniserklärung</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane row" id="protokollleitfaden1" role="tabpanel">
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


            <div class="tab-pane row" id="testskript1" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Testskript</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <div class="tab-pane row" id="testplan1" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Testplan</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="tab-pane row" id="testbericht1" role="tabpanel">
                <div class="col-lg-8 offset-lg-4">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Testbericht</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</section>
<?php include('scripts.html'); ?>
<script>
    $(document).ready(function () {


        $(function () {
//        changes the active collapse class to 'on' for changing the text to bold
            $('.panel-heading a').click(function () {
                $(this).toggleClass('on');
            })
        });


        $(function () {
            $('.list-group-item a').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            })
        });

        $(function () {
            $('.panel-heading a').click(function (e) {
                $(this).removeClass('.icon-angle-right');
                $(this).addClass('.icon-angle-down');
            })
        });

    });


</script>
</body>

</html>