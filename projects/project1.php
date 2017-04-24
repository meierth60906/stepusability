<!DOCTYPE html>
<html lang="de">
<head>
    <title>Projekt 1 | step</title>

    <?php include ('head.html'); ?>
</head>
<body>

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
                <ul class="px-1 px-md-4 nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" href="#allgemein" role="tab" data-toggle="tab">Allgemein</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testaufgaben" role="tab" data-toggle="tab">Testaufgaben</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projektunterlagen" role="tab" data-toggle="tab">Projektunterlagen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#evaluation" role="tab" data-toggle="tab">Evaluation</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="tab-content">
            <div class="tab-pane active" id="allgemein" role="tabpanel">
                <div class="inner-body row">
                    <div class="col-9 p-5">
                        <div class="row">
                            <div class="col-lg-12 text-right">
                                <a href="project1.php"><span class="icon-pencil"></span> Bearbeiten</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">Kunde:</div>
                            <div class="col-lg-8 font-weight-bold">Musterfirma</div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">Ansprechpartner:</div>
                            <div class="col-lg-8 font-weight-bold"><a href="../new_contact.php">Max Mustermann</a></div>
                        </div>

                        <div class="row py-3">
                            <div class="col-lg-4">Projektbeschreibung:</div>
                            <div class="col-lg-8 font-weight-bold">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et
                                accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
                                sanctus est Lorem ipsum dolor sit amet.
                            </div>
                        </div>

                        <div class="row py-3">
                            <div class="col-md-12">
                                <div style="display:inline-block;width:100%;overflow-y:auto;">
                                    <ul class="timeline timeline-horizontal">
                                        <li class="timeline-item">
                                            <div class="timeline-badge primary"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <p class="timeline-title">Mussum ipsum cacilds 1</p>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis faiz elementum girarzis, nisi eros gostis.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge success"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <p class="timeline-title">Mussum ipsum cacilds 2</p>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Mussum ipsum cacilds, vidis faiz elementum girarzis, nisi eros gostis.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge info"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <p class="timeline-title">Mussum ipsum cacilds 3</p>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipisci. Mé faiz elementum girarzis, nisi eros gostis.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge danger"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <p class="timeline-title">Mussum ipsum cacilds 4</p>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge warning"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <p class="timeline-title">Mussum ipsum cacilds 5</p>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <div class="timeline-badge"><i class="glyphicon glyphicon-check"></i></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <p class="timeline-title">Mussum ipsum cacilds 6</p>
                                                    <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> 11 hours ago via Twitter</small></p>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="inner-sidebar grey-bg col-3">
                        Hiiii
                    </div>
                </div>

            </div>
            <div class="tab-pane" id="testaufgaben" role="tabpanel">...</div>
            <div class="tab-pane" id="projektunterlagen" role="tabpanel">...</div>
            <div class="tab-pane" id="evaluation" role="tabpanel">...</div>
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
<script>
    var h = $(window).height();
    var header_h = $(".page-top").height();
    $('.inner-sidebar').css('height', h - header_h );
    $(".inner-body").css("padding-top", header_h)

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
</script>
</body>

</html>