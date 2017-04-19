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
    <div class="titlebar px-3 py-3">
        <h1>Einstellungen</h1>
    </div>

    <!--innere Navigationsleiste-->

    <div class="sidebar-wrapper col-lg-3" id="secondSidebar">
        <a class="row card-item p-3 nav-link active" href="#">Profil bearbeiten</a>
        <a class="row card-item p-3 nav-link" href="#">Passwort ändern</a>
        <a class="row card-item p-3 nav-link" href="#">Einstellungen im Testfenster</a>
        <a class="row card-item p-3 nav-link" href="#">Seiteninformation</a>
    </div>


    <!--Form-->

    <div class="form-group col-lg-9 offset-lg-4 pt-5">
        <form>
            <!--akutelles Passwort eingeben-->
            <div class="form-group row">
                <label for="currentPassword" class="col-lg-5 form-control-label">Bitte geben Sie Ihr aktuelles Passwort
                    ein:</label>
                <div class="col-lg-5">
                    <input type="text" class="form-control" id="currentPassword" placeholder="aktuelles Passwort">
                </div>
            </div>

            <!--neues Passwort eingeben-->

            <div class="form-group row">
                <label for="newPassword" class="col-lg-5 form-control-label">Bitte geben Sie Ihr neues Passwort
                    ein:</label>
                <div class="col-lg-5">
                    <input type="text" class="form-control" id="newPassword" placeholder="neues Passwort">
                </div>
            </div>

            <!--Passwort wiederholen-->
            <div class="form-group row">
                <div class="col-lg-5 offset-lg-5">
                    <input type="text" class="form-control" id="repeatPassword" placeholder="Passwort wiederholen">

                </div>
            </div>


            <!--Passwort ändern Button -->

            <div class="text-center">
                <input type="submit" class="btn-submit-orange btn btn-danger btn-lg" name="change_password"
                       value="Passwort ändern">
            </div>
    </div>


    </form>
</section>


</body>
</html>