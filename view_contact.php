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
            <a class="titlebar-link" href="edit_contact.php">
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
            <a href="#" class="header">A</a>
            <a class="row card-item p-3 nav-link" href="#">Alena Ahorn</a>
            <a class="row card-item p-3 nav-link" href="#">Alessa Albert</a>
            <a class="row card-item p-3 nav-link active" href="#">Anna Apfel</a>
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
                    <input type="text" class="form-control" id="inputFirstName" value="Anna" placeholder="Vorname">
                    <input type="text" class="form-control" id="inputName" value="Apfel" placeholder="Nachname">
                    <input type="text" class="form-control" id="inputName" value="Apple" placeholder="Firma">

                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-lg-3 form-control-label">Kontaktmöglichkeiten</label>
                <div class="col-lg-5">
                    <input class="form-control" type="email" value="anna.apfel@apple.com" id="inputEmail3" placeholder="E-Mail">
                    <input class="form-control" type="text" value="012345667" id="inputPhone" placeholder="Mobil">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputBirthday" class="col-lg-3 form-control-label">Geburtsdatum</label>
                <div class="col-lg-5">
                    <input class="form-control" type="date"  id="inputBirthday" value="01.01.1990" placeholder="Geburtstag">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputSkill" class="col-lg-3 form-control-label">Fähigkeiten</label>
                <div class="col-lg-5">
                    <div class="chip">
                        <input type="text" class="card-text" id="inputSkill" value="Java" placeholder="Skill 1">
                        <input type="text" class="card-text" id="inputSkill" value="Android" placeholder="Skill 2">
                        <input type="text" class="card-text" id="inputSkill" value="CSS" placeholder="Skill 3">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputAddress" class="col-lg-3 form-control-label">Anschrift</label>
                <div class="col-lg-5">
                    <input type="text" class="form-control" id="inputAddress" value="Ahornstraße 22" placeholder="Straße & Hausnr.">
                    <input type="text" class="form-control" id="inputAddress" value="12345" placeholder="PLZ">
                    <input type="text" class="form-control" id="inputAddress" value="Nürnberg" placeholder="Ort">
                </div>
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-submit-orange btn-md">Kontakt löschen</button>
            </div>
    </div>



</section>

<?php include ('scripts.html'); ?>


</body>
</html>