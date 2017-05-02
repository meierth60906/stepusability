<!DOCTYPE html>
<html lang="de">
<head>
    <title>Kontakte | step</title>

    <?php include ('head.html'); ?>
</head>
<body>

<?php include ('navigation.html'); ?>

<section id="contacts" class="page-content">
    <div class="page-top fixed-top">
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
    </div>
    <?php include ('contactlist.html');?>

    <!--Form-->
    <div class="kontaktinfos pt-5">

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