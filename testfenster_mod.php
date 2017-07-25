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
    <title>Testfenster Moderator</title>

    <?php include ('head.html'); ?>
</head>
<body id="body-testfenster_mod">


<section id="testfenster_mod" class="page-content">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-4">
                <h1>Testfenster</h1>
            </div>
            <span class="col-4 align-self-center text-center">
                    <a class="buttonTestfensterLinks" href="testfenster_mod.php">
                        <span class="hidden-sm-down">Moderator</span></a>
                    <a class="buttonTestfensterRechts" href="testfenster_prot.php">
                        <span class="hidden-sm-down">Protokollant</span></a>
                </span>
            <!--<ul id="switch" class="nav" role="tablist">
                <li class="nav-item">
                    <a id="buttonlinks" class="nav-link active" href="testfenster_mod.php" role="tab" data-toggle="tab">Moderator</a>
                </li>
                <li class="nav-item">
                    <a id="buttonrechts" class="nav-link" href="testfenster_prot.php" role="tab" data-toggle="tab">Protokollant</a>
                </li>
            </ul>-->

            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" href="projects/index.php">
                    <div class="icon-stop d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Test beenden</span></a>
            </div>

        </div>
        <div class="row project-tabs ">
            <div class="col-md-12 p-0">
                <ul id="tabs" class="px-1 px-md-4 nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" href="#vorbereitung" data-target="#vorbereitung" role="tab" data-toggle="tab"><span>Vorbereitung</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testaufgaben" data-target="#testaufgaben" role="tab" data-toggle="tab"><span>Testaufgaben</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#postsession" data-target="#postsession" role="tab" data-toggle="tab"><span>Post-Session Interview</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane active" id="vorbereitung" role="tabpanel">
                <div class="row inner-body">
                    <div id="content-vorbereitung" class="col-lg-9 py-3">


                        <!--                        Projektinfo + Beteiligte -->
                        <div class="row">

                           <!-- <div class="col-lg-12 pr-3 text-right">
                                <a href="projects/project.php"><span class="icon-pencil"></span> Bearbeiten</a>
                            </div>-->
                        </div>
                        <div class="row">
                            <!--  <div class="col-lg-8 font-weight-bold"><h1>Testskript:</h1></div>-->
                            <div class="col-md-12">
                                <h3>Technische Vorbereitung:</h3>
                                <p>Browsercache löschen</p>

                                <h5>Briefing:</h5>
                                <p>Einleitung und Beschreibung des Testgegenstands.<br>
                                    Wir möchten Sie bitten, die Webanwendung step für uns zu testen. Sie helfen uns damit, die Webanwendung hinsichtlich ihrer Gebrauchstauglichkeit zu verbessern.
                                </p>

                                <h5>Anweisung vor den Aufgaben</h5>
                                <p>Ganz wichtig ist, wir evaluieren nicht Sie sondern Sie evaluieren für uns step.<br>
                                    Damit helfen Sie uns die Webanwendung step zu verbessern.
                                    Dazu erhalten Sie jetzt Aufgaben. Diese lese ich Ihnen vor. <br>
                                    Zusätzlich bekommen Sie von mir die Aufgabenformulierung am Tablet, damit Sie diese jederzeit nachlesen können.
                                </p>

                                <h5>Anweisung Think-Aloud</h5>
                                <p>Während Sie das System bedienen bitte ich Sie, laut zu denken und Ihren Eindruck vom System zu schildern, dabei ist jede Bemerkung gleich wertvoll, egal ob negativ oder positiv.<br>
                                    Wir möchten wissen, was Sie überrascht, was Sie freut, was Sie irritiert oder sogar frustriert. <br>
                                    Wenn Sie an einen Punkt kommen, an dem Sie nicht sicher sind was Sie tun sollen oder Sie versuchen herauszufinden, was Sie hier tun sollen, dann sagen Sie uns bitte, was Sie denken.
                                    <br><br>
                                    Falls es sonst von Ihrer Seite keine weiteren Fragen gibt, dann können wir jetzt mit dem Test beginnen.
                                </p>

                                <h5>Szenario</h5>
                                <p>Stellen Sie sich vor Sie sind ein Usability Professional und haben es satt, sich ständig mit den ganzen Papierdokumenten auseinander zu setzten. <br>Vor kurzen sind Sie auf Step gestoßen und möchte nun schauen, was step zu bietet hat.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div id="sidebar-vorbereitung" class="col-lg-3 c-grey-bg">
                        <div class="row pt-4 hidden-md-down">
                            <div class="col-lg-12 text-center">
                                <a href="#" class="btn btn-submit-orange m-4"><i class="icon-plus"> Anmerkungen hinzufügen</i></a>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-lg-12 headline">
                                Anmerkungen
                            </div>
                            <div class="col-lg-12"><hr class="pb-3"></div>
                            <div class="col-lg-12 small">

                                <div class="row px-3 ">
                                    <div class="col-md-8">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                                Browsercache löschen</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                                Briefing</label>
                                        </div></div>
                                    <!-- <div class="col-md-8">
                                         <div class="checkbox">
                                             <label>
                                                 <input type="checkbox" value="">
                                                 <span class="cr"><i class="cr-icon icon-check"></i></span>
                                                 Technische Vorbereitung</label>
                                         </div></div>
                                     <div class="col-md-8">
                                         <div class="checkbox">
                                             <label>
                                                 <input type="checkbox" value="">
                                                 <span class="cr"><i class="cr-icon icon-check"></i></span>
                                                 Augencheck</label>
                                         </div></div>-->
                                    <div class="col-md-8">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                                Anweisungen vor den Aufgaben</label>
                                        </div></div>
                                    <div class="col-md-8">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                                Anweisungen Think-Aloud</label>
                                        </div></div>
                                    <!--  <div class="col-md-8">
                                          <div class="checkbox">
                                              <label>
                                                  <input type="checkbox" value="">
                                                  <span class="cr"><i class="cr-icon icon-check"></i></span>
                                                  Eyetracking aktiviert</label>
                                          </div></div>-->



                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="tab-pane" id="testaufgaben" role="tabpanel">
                <div class="row inner-body">
                    <div id="content-testaufgaben" class="col-12 pt-5">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Aufgabenanweisung</th>
                                <th>Einstiegsseite</th>
                                <th>Vorbedingung</th>
                                <th>Lösungsschritte</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Sie haben einen neuen Evaluierungsprojektauftrag bekommen und möchten nun ein neues Projekt anlegen.<br>Bitte erstellen Sie ein neues Projekt und nennen Sie es "Demo", der Auftraggeber ist "Technische Hochschule".</td>
                                <td>Dashboard</td>
                                <td></td>
                                <td><ul>
                                        <li>"Projekte" in der linken Menüleiste auswählen</li>
                                        <li>Auf "+ Erstellen" - Button klicken</li>
                                        <li>Bei "Titel" den Namen "Demo" eingeben</li>
                                        <li>Bei "Auftraggeber" "Technische Hochschule" eingeben</li>
                                        <li>Auf "Erstellen" klicken</li>
                                    </ul></td>
                            </tr>
                            <tr>
                                <td>Suchen Sie bitte das Projekt "Social App" und finden Sie den Ansprechpartner sowie alle der Projektbeteiligten heraus!</td>
                                <td>Projektübersicht</td>
                                <td></td>
                                <td><ul>
                                        <li>Projekt "Social App" in der Liste auswählen</li>
                                        <li>Ansprechpartner ist Meier Thomas</li>
                                        <li>Beteiligten sind Meier Thomas, Schark Alina, Steinbinder Nathalie</li>
                                    </ul></td>
                            </tr>
                            <tr>
                                <td>Sie wollen für Ihren anstehenden Usability Test eine neue Testaufgabe erstellen.<br> Legen Sie bitte eine neue Testaufgabe mit dem Inhalt "Senden Sie eine Nachricht an: Thomas" an.</td>
                                <td>Projektseite</td>
                                <td></td>
                                <td><ul>
                                        <li>Den Reiter "Testaufgaben" auswählen</li>
                                        <li>Auf das "+" bei "Aufgabenliste" klicken</li>
                                        <li>Im Dropdown - Menü "Testaufgabe" auswählen</li>
                                        <li>Auf "Testaufgabe" klicken</li>
                                        <li>In "Aufgabenbeschreibung" "Senden Sie eine Nachricht an: Thomas" eingeben</li>

                                    </ul></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>



                </div>
            </div>

            <div class="tab-pane" id="postsession" role="tabpanel">
                <div class="row inner-body">
                    <div id="content-postsession" class="col-9 py-3 ">
                        <div class="row">

                          <!--  <div class="col-lg-12 pr-3 text-right">
                                <a href="projects/project.php"><span class="icon-pencil"></span> Bearbeiten</a>
                            </div>-->
                        </div>
                        <div class="row">
                            <!--  <div class="col-lg-8 font-weight-bold"><h1>Testskript:</h1></div>-->
                            <div class="col-md-12">
                                <h3>Vielen Dank!</h3>
                                <p>Wir sind jetzt mit den Aufgaben fertig. Abschließend habe ich noch ein paar Fragen an Sie.<br>

                                <h5>Post-Session Interview Fragen</h5>
                                <p>Ich bitte Sie nun um Ihre Bewertung der Webanwendung. </p>
                                <ul>
                                    <li>Gab es etwas das Ihnen besonders gut oder weniger gut gefallen hat?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-postsession" class="col-lg-3 c-grey-bg">
                        <div class="row pt-4 hidden-md-down">
                            <div class="col-lg-12 text-center">
                                <a href="#" class="btn btn-submit-orange m-4"><i class="icon-plus"> Anmerkungen hinzufügen</i></a>
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-lg-12 headline">
                                Anmerkungen
                            </div>
                            <div class="col-lg-12"><hr class="pb-3"></div>
                            <div class="col-lg-12 small">

                                <div class="row px-3 ">
                                    <div class="col-md-8">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                                für Test bedanken</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                                Bemerkungen des Probanden</label>
                                        </div></div>
                                    <div class="col-md-8">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                                Post-Session Interview</label>
                                        </div></div>
                                    <div class="col-md-8">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                                UEQ-Fragebogen</label>
                                        </div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<?php include ('scripts.html'); ?>

<script>

    var h = $(window).height();
    var w = $(window).width();
    var header_h = $(".page-top").height();
    var innerbody = $(".inner-body");
    var nav = $(".sidebar-wrapper");

    //    Initial Functions
    innerbody.css("padding-top", header_h);

    //Nav Width
    var nav_w = nav.width();

    //Sidebars
    var sidVorb = $("#sidebar-vorbereitung");
    var sidTaufg = $("#sidebar-testaufgaben");
    var sidPostSes = $("#sidebar-postsession");

    //Contents
    var conVorb = $("#content-vorbereitung");
    var conTaufg = $("#content-testaufgaben");
    var conPostSes = $("#content-postsession");



    $(function() {
        if(w > 991) {
            //Set Sidebar Height
            sidVorb.height(h-header_h);
            sidTaufg.height(h-header_h);
            sidPostSes.height(h-header_h);

            //Set Content Height
            conAllg.height(h-header_h - 32);
            conAufg.height(h-header_h - 32);
            conPostSes.height(h-header_h - 32);

            //Set Content Width
            conVorb.width(w - sidVorb.width() - 60 - nav_w);
            conTaufg.width(w - sidTaufg.width() - 60 - nav_w);
            conPostSes.width(w - sidPostSes.width() - 60 - nav_w);
        }
    });


    //Function for Window Resize
    $(window).on('resize', function(){
        //Window Height
        h = $(window).height();
        w = $(window).width();
        nav_w = nav.width();

        if(w > 991) {
            //Set Sidebar Height
            sidVorb.height(h - header_h);
            sidTaufg.height(h - header_h);
            sidPostSes.height(h - header_h);

            //Set Content Height
            conVorb.height(h - header_h - 32);
            conAufg.height(h - header_h - 32);
            conPostSes.height(h - header_h - 32);

            //Set Content Width
            conVorb.width(w - sidVorb.width() - 60 - nav_w);
            conAufg.width(w - sidTaufg.width() - 60 - nav_w);
            conPostSes.width(w - sidPostSes.width() - 60 - nav_w);
        }
    });

</script>

<script src="js/jquery-sortable-min.js"></script>
<script>

    // Javascript to enable link to tab
    var hash = document.location.hash;
    if (hash) {
        $('.nav-tabs a[href="'+hash+'"]').tab('show');
    }

    // Change hash for page-reload
    $('.nav-tabs a').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
        if(w > 991) {
            //Set Sidebar Height
            sidVorb.height(h - header_h);
            sidTaufg.height(h - header_h);
            sidPostSes.height(h - header_h);

            //Set Content Height
            conVorb.height(h - header_h - 32);
            conTaufg.height(h - header_h - 32);
            conPostSes.height(h - header_h - 32);

            //Set Content Width
            conVorb.width(w - sidVorb.width() - 60 - nav_w);
            conTaufg.width(w - sidTaufg.width() - 60 - nav_w);
            conPostSes.width(w - sidPostSes.width() - 60 - nav_w);
        }
    });

</script>


</body>

</html>