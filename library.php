<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings | step</title>
    <?php include('head.html') ?>
    <!--    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">-->

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
                    <span class="hidden-sm-down icon-print"> Drucken</span>
                </a>
                <a class="titlebar-link" href="library.php">
                    <div class=" d-inline-block px-2"></div>
                    <span class="hidden-sm-down icon-pencil"> Bearbeiten</span>
                </a>
            </div>
        </div>


        <!--innere Navigationsleiste-->
        <div class="container row">
            <div class="col-lg-3 p-0" id="sidebarLibrary">


                <!--                <!--                    Switch Button-->
                <!--                <div class="container">-->
                <!--                    <div class=btn-group" data-toggle="buttons">-->
                <!--                        <label class="btn btn-primary active">-->
                <!--                            <a class="active switchlink" href="#projects"><input type="radio" name="options"-->
                <!--                                                                                 id="option1" autocomplete="off"-->
                <!--                                                                                 checked>Projekte-->
                <!--                            </a>-->
                <!--                        </label>-->
                <!--                        <label class="btn btn-primary">-->
                <!--                            <a class="switchlink" href="#archiv"><input type="radio" name="options" id="option2"-->
                <!--                                                                        autocomplete="off">Archiv</a>-->
                <!--                        </label>-->
                <!--                    </div>-->
                <!--                </div>-->

                <div class="panel-group">
                    <div class="panel panel-default">


                        <!--                    innere Navigationsleiste -->

                        <!--Projekt 1-->


                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="icon-angle-right active" data-toggle="collapse"
                                   href="#projekt1">Projekt
                                    1</a>
                            </h4>
                        </div>
                        <div id="projekt1" class="panel-collapse collapse active">

                            <ul class="list-group">
                                <li class="list-group-item icon-file-text-o active"><a
                                            href="#pr1ein1"> Einverständniserklärung 1</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr1einv2">
                                        Einverständniserklärung 2</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr1aufg">
                                        Testaufgaben</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr1leit">
                                        Protokollleitfaden</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr1skri">
                                        Testskript</a></li>
                            </ul>
                        </div>

                        <!--Projekt 2-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#projekt2"
                                   class="icon-angle-right">Projekt
                                    2</a>
                            </h4>
                        </div>
                        <div id="projekt2" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item icon-file-text-o"><a
                                            href="#pr2ein1"> Einverständniserklärung 1</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr2einv2">
                                        Einverständniserklärung 2</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr2aufg">
                                        Testaufgaben</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr2leit">
                                        Protokollleitfaden</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr2skri">
                                        Testskript</a></li>
                            </ul>
                        </div>

                        <!--Projekt 3-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#projekt3"
                                   class="icon-angle-right">Projekt 3</a>
                            </h4>
                        </div>
                        <div id="projekt3" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item icon-file-text-o active"><a
                                            href="#pr3ein1"> Einverständniserklärung 1</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr3einv2">
                                        Einverständniserklärung 2</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr3aufg">
                                        Testaufgaben</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr3leit">
                                        Protokollleitfaden</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr3skri">
                                        Testskript</a></li>
                            </ul>
                        </div>

                        <!--Projekt 4-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#projekt4" class="icon-angle-right">Projekt
                                    4</a>
                            </h4>
                        </div>
                        <div id="projekt4" class="panel-collapse collapse">
                            <ul class="list-group">
                                <li class="list-group-item icon-file-text-o"><a
                                            href="#pr1ein1"> Einverständniserklärung 1</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr4einv2">
                                        Einverständniserklärung 2</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr4aufg">
                                        Testaufgaben</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr4leit">
                                        Protokollleitfaden</a></li>
                                <li class="list-group-item icon-file-text-o"><a href="#pr4skri">
                                        Testskript</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    page content-->

    <div class="container-fluid">
        <div class="tab-content">

            <div class="tab-pane active" id="pr1ein1" role="tabpanel">
                <div class="row">
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
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                </td>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed

                                </td>
                                <td>Lorem ipsum dolor sit</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed

                                </td>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed

                                </td>
                                <td>Lorem ipsum dolor sit</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="tab-pane row" id="pr1leit role=" tabpanel
        ">
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
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                    </td>
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed

                    </td>
                    <td>Lorem ipsum dolor sit</td>
                </tr>
                <tr>
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed

                    </td>
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed

                    </td>
                    <td>Lorem ipsum dolor sit</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="tab-pane row" id="pr2leit" role="tabpanel">
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
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed

                    </td>
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed

                    </td>
                    <td>Lorem ipsum dolor sit</td>
                </tr>
                <tr>
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed

                    </td>
                    <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed

                    </td>
                    <td>Lorem ipsum dolor sit</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>


</section>
<?php include('scripts.html'); ?>
<script>

    $(document).ready(function () {

//        changes the active collapse class to 'on' for changing the text to bold

        $(function () {
            $('.panel-heading a').click(function () {
                $(this).toggleClass('on');
            })

            //shows different page content

            $(function () {
                $('.list-group-item a').click(function (e) {
                    e.preventDefault();
                    $(this).tab('show');
                })
            });


        });

</script>
</body>

</html>