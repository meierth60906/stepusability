<!DOCTYPE html>
<html lang="de">
<head>
    <title>Testfenster Moderator</title>

    <?php include ('head.html'); ?>
</head>
<body>


<section id="testfenster_mod">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-8">
                <h1>Testfenster</h1>
            </div>
            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" href="projects/index.php">
                    <div class="icon-play d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Test beenden</span></a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="inner-body row">
            <div class="col-md-9 p-5 pb-3">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <a href="projects/project1.php"><span class="icon-pencil"></span> Bearbeiten</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 font-weight-bold">Testskript:</div>
                </div>
            </div>
            <div class="inner-sidebar c-grey-bg col-md-3">
                <div class="row">
                    <div class="col-md-8">
                        <div class="h3 text-center">Anmerkungen:</div>
                    </div>
                    <div class="col-md-4">
                        <i class="icon-plus"></i>

                    </div>
                </div>
            </div>
        </div>

    </div>

</section>
<?php include ('scripts.html'); ?>
<script>
    var h = $(window).height();
    var header_h = $(".page-top").height();
    $('.inner-sidebar').css('height', h - header_h );
    $(".inner-body").css("padding-top", header_h);

</script>
</body>

</html>