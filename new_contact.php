<!DOCTYPE html>
<html lang="de">
<head>
    <title>Kontakte | step</title>

    <?php include ('head.html'); ?>
</head>
<body>

<?php include ('navigation.html'); ?>

<section id="contacts" class="page-content">
    <div class="row titlebar px-3 py-3">
        <div class="col-8">
            <h1>Kontakte</h1>
        </div>
        <div class="col-4 text-right align-self-center ">
            <a class="titlebar-link" href="view_contact.php">
                <div class="icon-check d-inline-block px-2"></div>
                <span class="hidden-sm-down">Speichern</span></a>
        </div>
    </div>

    <div class="col-lg-4" id="secondSidebarContacts">
        <!-- Suchleiste -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <div class="input-group">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span id="search_concept">Filter by</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#Favoriten">Favoriten</a></li>
                                <li><a href="#Kunden">Kunden</a></li>
                                <li><a href="#Team">Team</a></li>
                                <li><a href="#Probanden">Probanden</a></li>
                                <li class="divider"></li>
                                <li><a href="#all">Alle</a></li>
                            </ul>
                        </div>
                        <input type="hidden" name="search_param" value="all" id="search_param">
                        <input type="text" class="form-control" name="x" placeholder="Search term...">
                        <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="icon-search"></span></button>
                </span>
                    </div>
                </div>
            </div>


            <!--<div class="container">
                <div class="row">
                    <div class="col-lg-12 col-lg-offset-1">
                        <span class="icon-search">
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" id="inputSearch" placeholder="Suche">

                            </div>
                    </div>
                </div>
            </div>-->
            <!-- Kontaktliste -->

            <a class="row card-item p-3">A</a>
            <a class="row card-item p-3 nav-link" href="#">Alena Ahorn</a>
            <a class="row card-item p-3 nav-link" href="#">Alessa Albert</a>
            <a class="row card-item p-3 nav-link" href="#">Anna Apfel</a>
            <a href="#" class="header">B</a>
            <a class="row card-item p-3 nav-link" href="#">Benjamin Berger</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
            <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
        </div>
    </div>

    <!--Form-->
    <div class="form-group pt-5 col-lg-8 offset-lg-4">

        <form>
            <div class="form-group row">
                <div class="profile-header-img">
                    <img class="img-circle" src="img/add_picture.png" />
                </div>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="inputFirstName" placeholder="Vorname">
                    <input type="text" class="form-control" id="inputName" placeholder="Nachname">
                    <input type="text" class="form-control" id="inputName" placeholder="Firma">

                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-lg-3 form-control-label">Kontaktmöglichkeiten</label>
                <div class="col-lg-5">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="E-Mail">
                    <input type="text" class="form-control" id="inputPhone" placeholder="Mobil">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputInfo" class="col-lg-3 form-control-label">Geburtsdatum</label>
                <div class="col-lg-5">
                    <input type="date" class="form-control" id="inputBirthday" placeholder="Geburtstag">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputInfo" class="col-lg-3 form-control-label">Fähigkeiten</label>
                <div class="col-lg-5">
                    <div class="chip">
                        <input type="text" class="card-text" id="inputSkill" placeholder="Skill 1">
                        <input type="text" class="card-text" id="inputSkill" placeholder="Skill 2">
                        <input type="text" class="card-text" id="inputSkill" placeholder="Skill 3">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAddress" class="col-lg-3 form-control-label">Anschrift</label>
                <div class="col-lg-5">
                    <input type="text" class="form-control" id="inputAddress" placeholder="Straße & Hausnr.">
                    <input type="text" class="form-control" id="inputAddress" placeholder="PLZ">
                    <input type="text" class="form-control" id="inputName" placeholder="Ort">
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-submit-orange btn-md">Kontakt löschen</button>
            </div>
    </div>
    <!--<div class="row titlebar px-3 py-3">
        <div class="col-8">
            <h1>Kontakte</h1>
        </div>

        <div class="col-4 text-right align-self-center ">
            <a class="titlebar-link" href="#">
                <div class="icon-check d-inline-block px-2"></div>
                <span class="hidden-sm-down">Speichern</span></a>
        </div>
    </div>
            <!--innere Navigationsleiste-->




</section>

<?php include ('scripts.html'); ?>


</body>
</html>