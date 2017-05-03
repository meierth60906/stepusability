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

                    <!--                    Switch Button-->
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary active">
                            <input type="radio" name="options" id="option1" autocomplete="off" checked> Projekte
                        </label>
                        <label class="btn btn-primary">
                            <input type="radio" name="options" id="option2" autocomplete="off"> Archiv
                        </label>
                    </div>


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="icon-angle-right active" data-toggle="collapse" href="#einverständniserklärung">Projekt
                                    1</a>
                            </h4>
                        </div>
                        <div id="einverständniserklärung" class="panel-collapse collapse">
                            <a href="">
                                <div class="panel-body icon-file-text-o active"> Einverständniserklärung 1</div>
                            </a>
                            <a href="">
                                <div class="panel-body icon-file-text-o"> Einverständniserklärung 2</div>
                            </a>
                            <a href="">
                                <div class="panel-body icon-file-text-o"> Testaufgaben</div>
                            </a>
                            <a href="#page1">
                                <div class="panel-body icon-file-text-o"> Protokollleitfaden</div>
                            </a>
                            <a href="">
                                <div class="panel-body icon-file-text-o"> Testskript</div>
                            </a>
                        </div>

                        <!--Projekt 1-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#protokollleitfaden" class="icon-angle-right">Projekt
                                    2</a>
                            </h4>
                        </div>
                        <div id="protokollleitfaden" class="panel-collapse collapse">
                            <a href="">
                                <div class="panel-body icon-file-text-o">Einverständniserklärung</div>
                            </a>
                            <div class="panel-body icon-file-text-o"> Testaufgaben</div>
                            <div class="panel-body icon-file-text-o"> Protokollleitfaden 1</div>
                            <a href="#page2">
                                <div class="panel-body icon-file-text-o"> Protokollleitfaden 2</div>
                            </a>
                            <div class="panel-body icon-file-text-o"> Testskript</div>
                        </div>

                        <!--Projekt 2-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#testskript" class="icon-angle-right">Projekt 3</a>
                            </h4>
                        </div>
                        <div id="testskript" class="panel-collapse collapse">
                            <div class="panel-body icon-file-text-o"> Einverständniserklärung</div>
                            <div class="panel-body icon-file-text-o"> Testaufgaben</div>
                        </div>

                        <!--Projekt 3-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#testplan" class="icon-angle-right">Projekt 4</a>
                            </h4>
                        </div>
                        <div id="testplan" class="panel-collapse collapse">
                            <div class="panel-body icon-file-text-o"> Einverständniserklärung</div>
                        </div>

                        <!--Projekt 4-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#testbericht" class="icon-angle-right">Projekt 5</a>
                            </h4>
                        </div>
                        <div id="testbericht" class="panel-collapse collapse">
                            <div class="panel-body icon-file-text-o"> Einverständniserklärung</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="tab-content">


            <div class="tab-pane active" id="page1">
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
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam etLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    eirmod
                                    tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et
                                </td>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam etLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
                                    eirmod
                                    tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et
                                </td>
                                <td>Lorem ipsum dolor sit</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore eLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod
                                    tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et
                                </td>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore e
                                </td>
                                <td>Lorem ipsum dolor sit</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore eLorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                    diam nonumy eirmod
                                    tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et
                                </td>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore e
                                </td>
                                <td>Lorem ipsum dolor sitvidunt ut labore e</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="page2">
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
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et
                                </td>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et
                                </td>
                                <td>Lorem ipsum dolor sit</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore e
                                </td>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore e
                                </td>
                                <td>Lorem ipsum dolor sit</td>
                            </tr>
                            <tr>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore e
                                </td>
                                <td>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                    tempor
                                    invidunt ut labore e
                                </td>
                                <td>Lorem ipsum dolor sitvidunt ut labore e</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<?php include('scripts.html'); ?>
<!--<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>-->
<script>

    $(document).ready(function () {

//        changes the active collapse class to 'on' for changing the text to bold

        $(function () {
            $('.panel-title').click(function () {
                $(this).toggleClass('on');
            })


            //shows different page content

            $(function () {
                $('.nav').click(function (e) {
                    e.preventDefault()
                    $(this).tab('show')
                })
            });


        });


    //    $(function () {
    ////        changes the active collapse class to 'on' for changing the text to bold
    //        $('.btn-primary').click(function () {
    //            $(this).toggleClass('on');
    //        })
    //    });


    //    $(function () {
    //        var hash = window.location.hash;
    //        hash && $('ul.nav a[href="' + hash + '"]').tab('show');
    //
    //        $('.nav-link').click(function () {
    //            $(this).tab('show');
    //            var scrollmem = $('body').scrollTop() || $('html').scrollTop();
    //            window.location.hash = this.hash;
    //            $('html,body').scrollTop(scrollmem);
    //        });
    //    });

    //    $(document).ready(function(){
    //        $('#sidebarLibrary').on('change', function(){
    //            var n = $(this).val();
    //            switch(n)
    //            {
    //                case '1':
    //                    document.getElementById('#show').innerHTML="1st radio button";
    //                    break;
    //                case '2':
    //                    document.getElementById('#show').innerHTML="2nd radio button";
    //                    break;
    //                case '3':
    //                    document.getElementById('#show').innerHTML="3rd radio button";
    //                    break;
    //            }
    //        });
</script>
</body>

</html>