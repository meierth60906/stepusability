<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings | step</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/custom.css"/>

</head>
<body>
<!-- Sidebar und Header-->
<?php include('navigation.html'); ?>
<section id="settings" class="page-content">
    <div class="row titlebar px-3 py-3">
        <div class="col-8">
            <h1>Bibliothek</h1>
        </div>
        <div class="col-4 text-right align-self-center ">
            <a class="titlebar-link" href="#">
                <div class=" d-inline-block px-2"></div>
                <span class="hidden-sm-down">Drucken</span></a>
            <a class="titlebar-link" href="#">
                <div class=" d-inline-block px-2"></div>
                <span class="hidden-sm-down">Bearbeiten</span></a>
        </div>
    </div>

        <!--innere Navigationsleiste-->

        <div class="sidebar-wrapper col-lg-3" id="sidebarLibrary">
            <a class="dropdown-toggle p-3 nav-link " href="#einverständniserklärung">Einverständniserklärung</a>
            <a class="dropdown-item card-item p-1 nav-link " href="#vorlage1">Vorlage 1</a>
            <a class="dropdown-toggle p-3 nav-link" href="#protocol">Protokollleitfaden</a>
            <a class="dropdown-item card-item p-1 nav-link " href="#">Vorlage 1</a>
            <a class="dropdown-toggle p-3 nav-link" href="#">Testskript</a>
            <a class="dropdown-item card-item p-1 nav-link " href="#">Vorlage 1</a>
            <a class="dropdown-toggle p-3 nav-link" href="#">Testplan</a>
            <a class="dropdown-item card-item p-1 nav-link " href="#">Vorlage 1</a>
            <a class="dropdown-toggle p-3 nav-link" href="#">Testbericht</a>
        </div>

</section>


</body>
</html>