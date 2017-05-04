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
            <div class="col-8">
                <h1>Projekt 1</h1>
            </div>
            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" href="../settings.php">
                    <div class="icon-cog d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Einstellungen</span></a>
            </div>
        </div>
        <div class="row project-tabs ">
            <div class="col-md-12 p-0">
                <ul id="tabs" class="px-1 px-md-4 nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" href="#allgemein" data-target="#allgemein" role="tab" data-toggle="tab">Allgemein</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testaufgaben" data-target="#testaufgaben" role="tab" data-toggle="tab">Testaufgaben</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projektunterlagen" data-target="#projektunterlagen" role="tab" data-toggle="tab">Projektunterlagen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#evaluation" data-target="#evaluation" role="tab" data-toggle="tab">Evaluation</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane active" id="allgemein" role="tabpanel">
                <div class="inner-body row">
                    <div class="body-allgemein pre-scrollable">
                        <div class="col-md-9 px-5 pt-5">
                            <div class="row">
                                <div class="col-lg-8 headline">
                                    Projektinformationen
                                </div>
                                <div class="col-lg-4 text-right">
                                    <a href="project1.php"><span class="icon-pencil"></span> Bearbeiten</a>
                                </div>
                                <div class="col-lg-12"><hr class="pb-3"></div>
                            </div>
                            <div class="row pb-2">

                            </div>
                            <div class="row pb-2">
                                <div class="col-lg-4">Kunde:</div>
                                <div class="col-lg-8 font-weight-bold">Musterfirma</div>
                            </div>
                            <div class="row pb-2">
                                <div class="col-lg-4">Ansprechpartner:</div>
                                <div class="col-lg-8 font-weight-bold"><a href="../new_contact.php">Max Mustermann</a></div>
                            </div>

                            <div class="row pb-2">
                                <div class="col-lg-4">Projektbeschreibung:</div>
                                <div class="col-lg-8 font-weight-bold">
                                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                    invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                    accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                    sanctus est Lorem ipsum dolor sit amet.
                                </div>
                            </div>
                        </div>
                        <div id="goals" class="col-md-9 p-5">
                            <?php include("goals.html") ?>
                        </div>
                    </div>
                    <!--
                                        <div class="inner-sidebar c-grey-bg">
                                            <div class="row mb-3 mt-5">
                                                <div class="col-md-12 text-center">
                                                    <a href="" class="btn btn-submit-orange inner-sidebar-button btn-lg"><i class="icon-check"></i> Test starten</a>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 text-center">
                                                    <a href="#" class="btn btn-submit-grey inner-sidebar-button"><i class="icon-check"></i> Projekt abschließen</a>
                                                </div>
                                            </div>
                                            <div class="row pt-5 px-3">
                                                <div class="col-lg-12 headline">
                                                    Beteiligt
                                                </div>
                                                <div class="col-lg-12"><hr class="pb-3"></div>
                                            </div>

                                            <div class="teammember row">
                                                <div class="pl-0 col-2">
                                                    <div class="img-placeholder c-darkgrey-bg">AA</div>
                                                </div>
                                                <div class="pl-0 col-10">
                                                    Anna Apfel
                                                    <div class="text-muted small">Protokollant</div>
                                                </div>
                                            </div>

                                            <div class="teammember row">
                                                <div class="pl-0 col-2">
                                                    <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                                </div>
                                                <div class="pl-0 col-10">
                                                    Bernd Bogner
                                                    <div class="text-muted small">Moderator</div>
                                                </div>
                                            </div>

                                            <div class="teammember row">
                                                <div class="pl-0 col-2">
                                                    <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                                </div>
                                                <div class="pl-0 col-10">
                                                    Bernd Bogner
                                                    <div class="text-muted small">Moderator</div>
                                                </div>
                                            </div>

                                            <div class="teammember row">
                                                <div class="pl-0 col-2">
                                                    <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                                </div>
                                                <div class="pl-0 col-10">
                                                    Bernd Bogner
                                                    <div class="text-muted small">Moderator</div>
                                                </div>
                                            </div>

                                            <div class="teammember row">
                                                <div class="pl-0 col-2">
                                                    <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                                </div>
                                                <div class="pl-0 col-10">
                                                    Bernd Bogner
                                                    <div class="text-muted small">Moderator</div>
                                                </div>
                                            </div>

                                            <div class="teammember row">
                                                <div class="pl-0 col-2">
                                                    <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                                </div>
                                                <div class="pl-0 col-10">
                                                    Bernd Bogner
                                                    <div class="text-muted small">Moderator</div>
                                                </div>
                                            </div>

                                            <div class="teammember row">
                                                <div class="pl-0 col-2">
                                                    <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                                </div>
                                                <div class="pl-0 col-10">
                                                    Bernd Bogner
                                                    <div class="text-muted small">Moderator</div>
                                                </div>
                                            </div>

                                        </div> -->
                </div>

            </div>
            <div class="tab-pane" id="testaufgaben" role="tabpanel">

                <div class="row inner-body">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-lg-9 p-0 body-allgemein">
                                <div class="col-md-12 px-5 pt-5">
                                    <div class="row">
                                        <div class="col-lg-8 headline">
                                            Projektinformationen
                                        </div>
                                        <div class="col-lg-4 text-right">
                                            <a href="project1.php"><span class="icon-pencil"></span> Bearbeiten</a>
                                        </div>
                                        <div class="col-lg-12"><hr class="pb-3"></div>
                                    </div>
                                    <div class="row pb-2">

                                    </div>
                                    <div class="row pb-2">
                                        <div class="col-lg-4">Kunde:</div>
                                        <div class="col-lg-8 font-weight-bold">Musterfirma</div>
                                    </div>
                                    <div class="row pb-2">
                                        <div class="col-lg-4">Ansprechpartner:</div>
                                        <div class="col-lg-8 font-weight-bold"><a href="../new_contact.php">Max Mustermann</a></div>
                                    </div>

                                    <div class="row pb-2">
                                        <div class="col-lg-4">Projektbeschreibung:</div>
                                        <div class="col-lg-8 font-weight-bold">
                                            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                            invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                            accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                            sanctus est Lorem ipsum dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                                <div id="goals" class="col-md-12 p-5">
                                    <?php include("goals.html") ?>
                                </div>
                            </div>
                            <div class="project-sidebar p-0">
                                <div class="inner-sidebar c-grey-bg">
                                    <div class="row mb-3 mt-5">
                                        <div class="col-md-12 text-center">
                                            <a href="" class="btn btn-submit-orange inner-sidebar-button btn-lg"><i class="icon-check"></i> Test starten</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <a href="#" class="btn btn-submit-grey inner-sidebar-button"><i class="icon-check"></i> Projekt abschließen</a>
                                        </div>
                                    </div>
                                    <div class="row pt-5 px-3">
                                        <div class="col-lg-12 headline">
                                            Beteiligt
                                        </div>
                                        <div class="col-lg-12"><hr class="pb-3"></div>
                                    </div>

                                    <div class="teammember row">
                                        <div class="pl-0 col-2">
                                            <div class="img-placeholder c-darkgrey-bg">AA</div>
                                        </div>
                                        <div class="pl-0 col-10">
                                            Anna Apfel
                                            <div class="text-muted small">Protokollant</div>
                                        </div>
                                    </div>

                                    <div class="teammember row">
                                        <div class="pl-0 col-2">
                                            <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                        </div>
                                        <div class="pl-0 col-10">
                                            Bernd Bogner
                                            <div class="text-muted small">Moderator</div>
                                        </div>
                                    </div>

                                    <div class="teammember row">
                                        <div class="pl-0 col-2">
                                            <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                        </div>
                                        <div class="pl-0 col-10">
                                            Bernd Bogner
                                            <div class="text-muted small">Moderator</div>
                                        </div>
                                    </div>

                                    <div class="teammember row">
                                        <div class="pl-0 col-2">
                                            <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                        </div>
                                        <div class="pl-0 col-10">
                                            Bernd Bogner
                                            <div class="text-muted small">Moderator</div>
                                        </div>
                                    </div>

                                    <div class="teammember row">
                                        <div class="pl-0 col-2">
                                            <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                        </div>
                                        <div class="pl-0 col-10">
                                            Bernd Bogner
                                            <div class="text-muted small">Moderator</div>
                                        </div>
                                    </div>

                                    <div class="teammember row">
                                        <div class="pl-0 col-2">
                                            <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                        </div>
                                        <div class="pl-0 col-10">
                                            Bernd Bogner
                                            <div class="text-muted small">Moderator</div>
                                        </div>
                                    </div>

                                    <div class="teammember row">
                                        <div class="pl-0 col-2">
                                            <img class="img-fluid img-placeholder rounded-circle" src="../img/user.jpg">
                                        </div>
                                        <div class="pl-0 col-10">
                                            Bernd Bogner
                                            <div class="text-muted small">Moderator</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane" id="projektunterlagen" role="tabpanel">...</div>
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
<!--<script>
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>-->
<script>
    var h = $(window).height();
    var w = $(window).width();
    var header_h = $(".page-top").height();
    var innerbody = $(".inner-body");
    var aufgabenfeld = $(".aufgabenfeld");
    var innersidebar = $(".inner-sidebar");
    var nav = $(".sidebar-wrapper");
    var bodyallgemein = $(".body-allgemein");
    var projectsidebar = $(".project-sidebar");

    innersidebar.css('height', h - header_h );
    innerbody.css("padding-top", header_h);

    var aufgabenfeld_h = aufgabenfeld.height();
    var bodyallgemein_w = bodyallgemein.width();

    $(".protokollant-container").height(h - aufgabenfeld_h - header_h);
    bodyallgemein.height(h - header_h - 1);
    projectsidebar.width(w - bodyallgemein_w);
    innersidebar.width(w - bodyallgemein_w);

    $( window ).resize( function(){
        h = $(window).height();
        $(".protokollant-container").height(h - aufgabenfeld_h - header_h);
        $('.inner-sidebar').css('height', h - header_h );
        bodyallgemein.height(h - header_h - 1);
        projectsidebar.width(w - bodyallgemein_w);
        innersidebar.width(w - bodyallgemein_w);
    });



    //    alert("WindowHeight: " + h + " Innerbody: " + aufgabenfeld_h + " Header_h: " + header_h);

    /*    $(".nav-item .active").hover(
     function() {
     $(".nav-tabs").css("border-bottom", "solid 5px #ff512d");
     $(this).css("background-color", "#ff512d");
     },
     function() {
     $(".nav-tabs").css("border-bottom", "solid 5px #e84a29");
     $(this).css("background-color", "#e84a29");
     }
     )*/


    $(function(){
        var hash = window.location.hash;
        hash && $('ul.nav a[href="' + hash + '"]').tab('show');

        $('.nav-tabs a').click(function () {
            $(this).tab('show');
            var scrollmem = $('body').scrollTop() || $('html').scrollTop();
            window.location.hash = this.hash;
            $('html,body').scrollTop(scrollmem);
        });
    });

</script>
<script>

    $('.goal').click(function () {
        $(this).tab('show');
        var scrollmem = $('body').scrollTop() || $('html').scrollTop();
        window.location.hash = this.hash;
        $('html,body').scrollTop(scrollmem);
    });

</script>
</body>

</html>