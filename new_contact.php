<!DOCTYPE html>
<html lang="de">
<head>
    <title>Kontakte | step</title>

    <?php include ('head.html'); ?>
</head>
<body>

<?php include ('navigation.html'); ?>

<section id="contacts" class="page-content">
    <div class="titlebar px-3 py-3">
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

    <div class="sidebar-wrapper col-lg-2" id="secondSidebarContacts">

        <!-- Suchleiste -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-1">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-1">
                    <form action="" class="search-form">
                        <div class="form-group has-feedback">
                            <label for="search" class="sr-only">Search</label>
                            <input type="text" class="form-control" name="search" id="search" placeholder="search">
                            <span class="icon-users"></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Kontaktliste -->
        <a class="row card-item p-3 nav-link active" href="#">Alena Ahorn</a>
        <a class="row card-item p-3 nav-link" href="#">Alessa Albert</a>
        <a class="row card-item p-3 nav-link" href="#">Anna Apfel</a>
        <a class="row card-item p-3 nav-link" href="#">Benjamin Berger</a>
        <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
        <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
        <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
        <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
    </div>
    <!--Form-->
    <div class="form-group pt-5 col-lg-8 offset-lg-3">
            <form>
                <div class="form-group row">
                    <label for="inputFirstName" class="col-lg-2 form-control-label">Name</label>
                    <div class="col-lg-5">
                        <input type="name" class="form-control" id="inputFirstName" placeholder="Vorname">
                        <input type="name" class="form-control" id="inputName" placeholder="Nachname">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputFirm" class="col-lg-2 form-control-label">Firma</label>
                    <div class="col-lg-5">
                        <input type="firm" class="form-control" id="inputName" placeholder="Firma">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-lg-2 form-control-label">Kontaktmöglichkeiten</label>
                    <div class="col-lg-5">
                        <input type="email" class="form-control" id="inputEmail3" placeholder="E-Mail">
                        <input type="mobile" class="form-control" id="inputPhone" placeholder="Mobil">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAddress" class="col-lg-2 form-control-label">Anschrift</label>
                    <div class="col-lg-5">
                        <input type="street" class="form-control" id="inputAddress" placeholder="Straße & Hausnr.">
                        <input type="plz" class="form-control" id="inputAddress" placeholder="PLZ">
                        <input type="city" class="form-control" id="inputName" placeholder="Ort">
                    </div>
                </div>
        </div>



</section>

<?php include ('scripts.html'); ?>


</body>
</html>