<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Einstellungen | step</title>
    <?php include('head.html') ?>
</head>
<body>
<!-- Sidebar und Header-->
<?php include('navigation.html'); ?>


<section id="settings" class="page-content">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <h1>Einstellungen</h1>
        </div>


        <!--innere Navigationsleiste-->
        <div class="container row">
            <div class="col-lg-3 p-0" id="secondSidebar">
                <ul class="flex-column nav">
                    <li class="nav-item">
                        <a class="p-3 nav-link active" href="#profile" role="tab" data-toggle="tab">Profil
                            bearbeiten</a></li>
                    <li class="nav-item">
                        <a class="p-3 nav-link" href="#password" role="tab" data-toggle="tab">Passwort ändern</a></li>
                    <li class="nav-item">
                        <a class="p-3 nav-link" href="#pageInfo" role="tab" data-toggle="tab">Seiteninformation</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="tab-content">

            <!--            Profil bearbeiten Seite -->

            <div class="tab-pane active" id="profile" role="tabpanel">
                <div class="row">
                    <div class="form-group pt-5 col-lg-8 offset-lg-4">
                        <form>
                            <div class="form-group row">
                                <div class="profile-header-img">
                                    <img class="img-circle" src="img/add_picture.png"/>
                                </div>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="vorname"
                                           placeholder="Vorname">
                                    <input type="text" class="form-control" id="nachname"
                                           placeholder="Nachname">
                                    <input type="text" class="form-control" id="firma"
                                           placeholder="Firma">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-lg-3 form-control-label">Kontaktmöglichkeiten</label>
                                <div class="col-lg-5">
                                    <input type="email" class="form-control" id="email" placeholder="E-Mail">
                                    <input type="text" class="form-control" id="phone" placeholder="Mobil">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="birthday" class="col-lg-3 form-control-label">Geburtsdatum</label>
                                <div class="col-lg-5">
                                    <input type="date" class="form-control" id="birthday" placeholder="Geburtstag">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="skill" class="col-lg-3 form-control-label">Fähigkeiten</label>
                                <div class="col-lg-5">
                                    <div class="chip">
                                        <input type="text" class="card-text" id="skill" placeholder="Skill 1">
                                        <input type="text" class="card-text" id="skill" placeholder="Skill 2">
                                        <input type="text" class="card-text" id="skill" placeholder="Skill 3">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputAddress" class="col-lg-3 form-control-label">Anschrift</label>
                                <div class="col-lg-5">
                                    <input type="text" class="form-control" id="address"
                                           placeholder="Straße & Hausnr.">
                                    <input type="text" class="form-control" id="address" placeholder="PLZ">
                                    <input type="text" class="form-control" id="place" placeholder="Ort">
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-lg-3 col-lg-5">
                                    <div class="modal-footer text-center">
                                        <button type="button" class="btn btn-submit-orange btn-md">Speichern</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--                    Passwort ändern seite-->


            <div class="tab-pane row" id="password" role="tabpanel">
                <div class="form-group pt-5 col-lg-8 offset-lg-4">
                    <form>

                        <!--    akutelles Passwort eingeben-->
                        <div class="form-group row">
                            <label for="currentPassword" class="col-lg-6 form-control-label">Bitte geben Sie Ihr
                                aktuelles
                                Passwort ein:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="currentPassword"
                                       placeholder="aktuelles Passwort">
                            </div>
                        </div>

                        <!--                            neues Passwort eingeben-->

                        <div class="form-group row">
                            <label for="newPassword" class="col-lg-6 form-control-label">Bitte geben Sie Ihr neues
                                Passwort
                                ein:</label>
                            <div class="col-lg-5">
                                <input type="text" class="form-control" id="newPassword" placeholder="neues Passwort">
                            </div>
                        </div>

                        <!--                            Passwort wiederholen-->

                        <div class="form-group row">
                            <div class="col-lg-5 offset-6">
                                <input type="text" class="form-control" id="repeatPassword"
                                       placeholder="Passwort wiederholen">
                            </div>
                        </div>

                        <!--                         Passwort ändern Button -->
                        <div class="row">
                            <div class="col-lg-5 offset-6">
                                <div class="text-right">
                                    <button id="buttonPassword" type="button" class="btn btn-submit-orange btn-md">
                                        Passwort speichern
                                    </button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

            <!--            pageInformation-->


            <div class="tab-pane row" id="pageInfo" role="tabpanel">
                <div class="form-group pt-5 col-lg-8 offset-lg-4">
                    <p class="font-weight-bold text-center">Datenschutz</p>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore
                        et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et
                        ea
                        rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                        ipsum
                        dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et
                        dolore
                        magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                        Stet
                        clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                    </p>
                </div>
            </div>

        </div>
    </div>


</section>

<?php include('scripts.html'); ?>
<script>
    $(document).ready(function () {
        $(function () {
            $('.nav').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            })
        });

    });
</script>

</body>
</html>