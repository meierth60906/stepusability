<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | step</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
</head>
<body>

<?php include ('navigation.html'); ?>

<section id="dashboard" class="page-content">
<div class="container-fluid">
    <div class="row titlebar px-5 py-3">
        <div class="col-lg-10 align-self-center">
            <h1>Home</h1>

            <!--            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>-->
        </div>
        <div class="col-lg-2 text-right align-self-center">
            <div class="icon-cog d-inline"></div> Einstellungen
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card m-5">
                <div class="card-header red">
                    Projekte
                </div>
                <div class="card-block text-center">
                    <div class="icon-folder"></div> Projekt 1
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="card m-5">
                <div class="card-header red">
                    Projekte
                </div>
                <div class="card-block text-center">
                    <div class="icon-folder"></div> Projekt 1
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="card m-5">
                <div class="card-header red">
                    Projekte
                </div>
                <div class="card-block text-center">
                    <div class="icon-folder"></div> Projekt 1
                </div>

            </div>
        </div>
        <div class="col-lg-6">
            <div class="card m-5">
                <div class="card-header red">
                    Projekte
                </div>
                <div class="card-block text-center">
                    <div class="icon-folder"></div> Projekt 1
                </div>

            </div>
        </div>
    </div>
</div>
</section>

<script src="js/jquery-3.2.0.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $(function(){
            $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>

</html>