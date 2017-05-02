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
                <a class="titlebar-link" href="edit_contact.php">
                    <div class="icon-pencil d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Bearbeiten</span></a>
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
                        <img class="img-circle" src="img/anna.jpg" />
                    </div>
                    <div class="col-lg-4">
                        <div type="text" ><h3>Anna Apfel</h3></div>
                        <div type="text" ><h4>Apple</h4></div>
                        <!--<input type="text" class="form-control" id="inputFirstName" value="Anna" placeholder="Vorname">
                        <input type="text" class="form-control" id="inputName" value="Apfel" placeholder="Nachname">
                        <input type="text" class="form-control" id="inputName" value="Apple" placeholder="Firma">-->

                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-lg-3 form-control-label">E-Mail</label>
                    <div class="col-lg-5">
                        <div type="text" ><p>anna.apfel@apple.com</p></div>
                    </div></div>
                <div class="form-group row">
                    <label for="inputMobil" class="col-lg-3 form-control-label">Mobil</label>
                    <div class="col-lg-5">
                        <div type="text" ><p>012345667</p></div>
                    </div></div>

                <div class="form-group row">

                    <label for="inputPhone" class="col-lg-3 form-control-label">Privat</label>
                    <div class="col-lg-5">
                        <div type="text" ><p>0911/12345</p></div>

                    </div></div>
                <!--<input class="form-control hidden-print" type="email" value="anna.apfel@apple.com" id="inputEmail3" placeholder="E-Mail">
                <input class="form-control" type="text" value="012345667" id="inputPhone" placeholder="Mobil">-->

                <div class="form-group row">
                    <label for="inputBirthday" class="col-lg-3 form-control-label">Geburtsdatum</label>
                    <div class="col-lg-5">
                        <div type="text" ><p>01.01.1990</p></div>

                        <!-- <input class="form-control" type="date"  id="inputBirthday" value="01.01.1990" placeholder="Geburtstag">-->
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputSkill" class="col-lg-3 form-control-label">Fähigkeiten</label>
                    <div class="col-lg-5">
                        <div class="chip">
                            <div type="text" ><p>Java</p><p>Android</p><p>CSS</p></div>

                            <!--<input type="text" class="card-text" id="inputSkill" value="Java" placeholder="Skill 1">
                            <input type="text" class="card-text" id="inputSkill" value="Android" placeholder="Skill 2">
                            <input type="text" class="card-text" id="inputSkill" value="CSS" placeholder="Skill 3">-->
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAddress" class="col-lg-3 form-control-label">Anschrift</label>
                    <div class="col-lg-5">
                        <div type="text" ><p>Ahornstraße 22</p></div>
                        <div type="text" ><p>12345 Nürnberg</p>

                            <!--<input type="text" class="form-control" id="inputAddress" value="Ahornstraße 22" placeholder="Straße & Hausnr.">
                            <input type="text" class="form-control" id="inputAddress" value="12345" placeholder="PLZ">
                            <input type="text" class="form-control" id="inputAddress" value="Nürnberg" placeholder="Ort">-->
                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <label for="inputRole" class="col-lg-3 form-control-label">Rolle</label>
                    <div class="col-lg-5">
                        <div type="text" ><p>Proband</p></div>

                        <!--<input type="text" class="form-control" id="inputAddress" value="Ahornstraße 22" placeholder="Straße & Hausnr.">
                        <input type="text" class="form-control" id="inputAddress" value="12345" placeholder="PLZ">
                        <input type="text" class="form-control" id="inputAddress" value="Nürnberg" placeholder="Ort">-->
                    </div>
                </div>
        </div>
    </div>


</section>

<?php include ('scripts.html'); ?>


</body>
</html>