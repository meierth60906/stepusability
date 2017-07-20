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
    <title>Testfenster</title>

    <?php include ('head.html'); ?>
</head>
<body id="body-testfenster_mod">


<section id="testfenster" class="page-content">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-4">
                <h1>Testfenster</h1>
            </div>
            <div class="col-4">
                <ul id="TestfensterSwitch" class="nav" role="tablist">
                    <li class="nav-item">
                        <a id="buttonTestfensterLinks" class="nav-link active" href="#moderator" role="tab" data-toggle="tab">Moderator</a>
                    </li>
                    <li class="nav-item">
                        <a id="buttonTestfensterRechts" class="nav-link" href="#protokollant" role="tab" data-toggle="tab">Protokollant</a>
                    </li>
                </ul>
            </div>


            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" href="projects/index.php">
                    <div class="icon-stop d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Test beenden</span></a>
            </div>
        </div>

        <div class="tab-content">
            <div class="tab-pane active" id="moderator" role="tabpanel">


                <div class="row project-tabs" >
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


                <div class="container-fluid">
                    <div class="tab-content">
                        <div class="tab-pane active" id="vorbereitung" role="tabpanel">
                            <div class="row inner-body">
                                <div id="content-vorbereitung" class="col-lg-9 py-3">


                                    <!--                        Projektinfo + Beteiligte -->
                                    <div class="row">

                                        <div class="col-lg-12 pr-3 text-right">
                                            <a href="projects/project.php"><span class="icon-pencil"></span> Bearbeiten</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!--  <div class="col-lg-8 font-weight-bold"><h1>Testskript:</h1></div>-->
                                        <div class="col-md-12">
                                            <h3>Technische Vorbereitung:</h3>
                                            <p>Browsercache löschen</p>

                                            <h5>Briefing:</h5>
                                            <p>Geheimhaltungsvereinbarung und Einverständniserklärung zur Video-Aufzeichnung unterschreiben lassen.
                                                Einleitung und Beschreibung des Testgegenstands.<br>
                                                Wir möchten Sie bitten, www.wetter.com für uns zu testen. Sie helfen uns damit, die Webseite hinsichtlich ihrer Gebrauchstauglichkeit zu verbessern.
                                            </p>
                                            <h5>Technische Vorbereitung</h5>
                                            <p>Herzlichen Dank, dass sie sich mit der Aufzeichnung des Tests einverstanden erklärt haben. Alle Eingaben werden nur für die Dauer des Tests und seiner Auswertung gespeichert.
                                                <br>
                                                Sie müssen sich daher keine Sorgen um die unrechtmäßige Verwendung ihrer Daten machen.
                                                Vor Ihnen befindet sich eine Technologie mit der wir registrieren können, wo auf den Bildschirm Sie gerade blicken. Da jeder Mensch einen anderen Augenabstand hat, werden wir das Gerät zunächst gemäß ihrem  Augenabstand kalibrieren. Ich führe das jetzt gemeinsam mit Ihnen durch. Bitte setzen Sie sich so hin, wie Sie bequem am Computer arbeiten können.
                                            </p>
                                            <h5>Augencheck</h5>
                                            <p>Auf dem Bildschirm vor Ihnen erscheint gleich ein roter Punkt, ich bitte Sie, diesen mit den Augen zu verfolgen.
                                                Kalibration
                                            </p>
                                            <h5>Anweisung vor den Aufgaben</h5>
                                            <p>Ganz wichtig ist, wir evaluieren nicht Sie sondern Sie evaluieren für uns wetter.com. <br>
                                                Damit helfen Sie uns wetter.com zu verbessern.
                                                Dazu erhalten Sie jetzt Aufgaben. Diese lese ich Ihnen vor. <br>
                                                Zusätzlich bekommen sie von mir ein Blatt mit der Aufgabenformulierung, damit Sie jederzeit nachlesen
                                            </p>

                                            <h5>Anweisung Think-Aloud</h5>
                                            <p>Während Sie das System bedienen bitte ich Sie, laut zu denken und Ihren Eindruck vom System zu schildern, dabei ist jede Bemerkung gleich wertvoll, egal ob negativ oder positiv.<br>
                                                Wir möchten wissen, was Sie überrascht, was Sie freut, was Sie irritiert oder sogar frustriert. <br>
                                                Wenn Sie an einen Punkt kommen, an dem Sie nicht sicher sind was Sie tun sollen oder Sie versuchen herauszufinden, was Sie hier tun sollen, dann sagen Sie uns bitte, was Sie denken.
                                                <br>
                                                Sie können jederzeit Fragen stellen, haben Sie im Moment Fragen?
                                            </p>
                                            <h5>Start der Eyetracking-Aufzeichnung</h5>
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
                                                <div class="col-md-8">
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
                                                    </div></div>
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
                                                <div class="col-md-8">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="">
                                                            <span class="cr"><i class="cr-icon icon-check"></i></span>
                                                            Eyetracking aktiviert</label>
                                                    </div></div>



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
                                            <td>Welches Wetter ist morgen bei Ihnen Zuhause gemeldet?<br> Was ist die Temperatur um 12 Uhr?</td>
                                            <td>Startseite</td>
                                            <td></td>
                                            <td><ul>
                                                    <li>Ort über Suchfeld eingeben</li>
                                                    <li>„morgen“ auswählen (3 Möglichkeiten)</li>
                                                    <li>Leiste „Mittag“ finden und aufklappen</li>
                                                    <li>Temperatur für 12.00 Uhr nennen</li>
                                                </ul></td>
                                        </tr>
                                        <tr>
                                            <td>Wie wandern die Wolken über Bayern? <br>Ab wann ist Nürnberg morgen stark bewölkt?</td>
                                            <td></td>
                                            <td></td>
                                            <td><ul>
                                                    <li>Auswählen „Niederschlagsradar“ (rechte Spalte)</li>
                                                    <li>Auswahlmenü („Niederschlagsradar“) nutzen und „Bewölkung“  auswählen</li>
                                                    <li>Play-Button drücken</li>
                                                    <li>(Ergebnis: 6:00 – 8:00 Uhr)</li>

                                                    <li><u>Alternative: 1</u></li>
                                                    <li>Menü „Wetterkarten“ > Untermenü „Bewölkung“</li>
                                                    <li>...</li>
                                                    <li><u>Alternative 2:</u></li>
                                                    <li>Menü „Wetterkarten“</li>
                                                    <li>Auf Seite auswählen Kachel „Bewölkung“</li>
                                                    <li>...</li>
                                                </ul></td>
                                        </tr>
                                        <tr>
                                            <td>Finden Sie ein Sommerurlaubsziel in Südamerika, <br>
                                                welches im Juli eine Durchschnittstemperatur von 18 bis 30 Grad Celsius hat.</td>
                                            <td>Startseite</td>
                                            <td></td>
                                            <td><ul>
                                                    <li>Menü: „Reise und Freizeit“ > Untermenü „Urlaubswetter“  auswählen</li>
                                                    <li>Parameter einstellen und unzutreffende abwählen</li>
                                                    <li>18-30 Grad</li>
                                                    <li>Juli (Januar streichen)</li>

                                                    <li>Südamerika (Europa streichen)</li>
                                                    <li>Button „Ergebnisse anzeigen “ auswählen</li>
                                                    <li>Stadt angeben (bel.)</li>

                                                </ul></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>



                            </div>
                        </div>

                        <div class="tab-pane" id="postsession" role="tabpanel">
                            <div class="row inner-body pt-0">
                                <div id="content-postsession" class="col-9 py-3 ">
                                    <div class="row">

                                        <div class="col-lg-12 pr-3 text-right">
                                            <a href="projects/project.php"><span class="icon-pencil"></span> Bearbeiten</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <!--  <div class="col-lg-8 font-weight-bold"><h1>Testskript:</h1></div>-->
                                        <div class="col-md-12">
                                            <h3>Vielen Dank!</h3>
                                            <p>Wir sind jetzt mit den Aufgaben fertig. Abschließend habe ich noch ein paar Fragen an Sie.<br>
                                                Zunächst bitte ich Sie um Ihre Bemerkungen zu den Testaufgaben.<br></p>
                                            <ul>
                                                <li>Waren die Testaufgaben realistisch? </li>
                                                <li>Sind es Aufgaben, die Sie im echten Leben durchführen würden? </li>
                                                <li>Welche Aufgaben haben gefehlt? </li>
                                            </ul>


                                            <h5>Post-Session Interview Fragen</h5>
                                            <p>Ich bitte Sie nun um Ihre Bewertung der Webseite. </p>
                                            <ul>
                                                <li>Welche zwei bis drei Dinge haben Ihnen besonders gefallen?</li>
                                                <li>Welche zwei bis drei Dinge haben Ihnen am wenigsten gefallen?</li>
                                            </ul>
                                            <h5>UEQ-Fragebogen:</h5>
                                            <p>Ich bitte Sie nun, außen Platz zu nehmen und für uns diesen Fragebogen auszufüllen.</p>
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
            </div>

            <div class="tab-pane" id="protokollant" role="tabpanel">
                <div class="container-fluid">
                    <div class="inner-body row c-grey-bg">
                        <div class="col-2 text-right p-5">
                            <a class="c-orange" href=""><i class="question-angles icon-angle-left"></i></a>
                        </div>
                        <div class="col-8 p-5">
                            <p class="font-weight-bold text-center">Aufgabe 1</p>
                            <p class="text-center">
                                Sie haben einen neuen Projektauftrag XYZ bekommen und möchten nun ein neues Projekt anlegen.<br> Bitte erstellen Sie ein neues Projekt und nennen Sie es XYZ, der Auftraggeber ist TH-Nürnberg.

                            </p>
                        </div>
                        <div class="col-2 p-5">
                            <a class="c-orange" href=""><i class="question-angles icon-angle-right"></i></a>
                        </div>
                    </div>

                    <div class="row px-5 py-2">

                        <div class="col-sm-12">
                            <div class="radio text-center">
                                <label style="font-size: 1.5em">
                                    <input type="radio" name="o5" value="">
                                    <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                    Geschafft
                                </label>
                                <p>       </p>
                                <label style="font-size: 1.5em">
                                    <input type="radio" name="o5" value="">
                                    <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                    Nicht geschafft
                                </label>
                            </div>

                            <label for="inputRole" class="col-lg-3 form-control-label">Lösungsschritte</label>

                            <div class="form-group col-12 py-2">
                                <ul>
                                    <li>"Projekte" in der linken Menüleiste auswählen</li>
                                    <li>Auf "+ Erstellen" - Button klicken</li>
                                    <li>Bei "Titel" den Namen "XYZ" eingeben</li>
                                    <li>Bei "Auftraggeber" "TH-Nürnberg eingeben</li>
                                    <li>Auf "Senden" klicken</li>
                                </ul>
                            </div>

                            <form action="/logic/insertTestfensterProt.php">

                                <label for="inputRole" class="col-lg-3 form-control-label">Beobachtung</label>
                                <div class="form-group col-12 text-center py-2">
                                    <textarea name="Beobachtung" class="form-control" id="message-text" placeholder=""></textarea>
                                </div>

                                <label for="inputRole" class="col-lg-3 form-control-label">Shortcuts</label>
                                <div class="form-group col-12 text-center py-2">
                                    <textarea class="form-control" id="message-text" placeholder=""></textarea>
                                </div>
                                <input type="hidden" name="Protokollant" value="1">
                                <input type="hidden" name="Termin" value="1">
                                <input type="hidden" name="TerminUt" value="1">
                                <input type="hidden" name="Textbaustein" value="1">
                                <input type="hidden" name="TextbausteinAbschnitt" value="2">
                                <input type="hidden" name="TextbausteinAbschnittUt" value="1">


                                <input type="submit" value="Speichern">

                            </form>
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