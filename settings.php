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

    <div class="form-group col-lg-9 offset-lg-4">

        <!--akutelles Passwort eingeben-->

        <div class="row col-lg-6">
            <label for="currentPassword" class="form-control-label">Bitte geben Sie Ihr aktuelles Passwort
                ein:</label>
        </div>

        <!--neues Passwort eingeben-->

        <div class="row col-lg-6">
            <label for="newPassword" class="form-control-label">Bitte geben Sie Ihr neues Passwort
                ein:</label>
        </div>

    </div>


    <!--                Passwort wiederholen-->
    <div class="form-group col-lg-2 offset-lg-9">
        <!--                                <label for="repeatPassword" class="row form-control-label">Passwort wiederholen:</label>-->
        <input id="repeatPassword" class="row form control float-right" type="text" name="repeatPassword"
               placeholder="Passwort wiederholen">

        <!--                            <label for="currentPassword" class="row form-control-label">aktuelles Passwort:</label>-->
        <input id="currentPassword" class="row form control" type="text" name="currentPassword"
               placeholder="aktuelles Passwort">

        <!--                            <label for="newPassword" class="row form-control-label">neues Passwort:</label>-->
        <input id="newPassword" class="row form control" type="text" name="newPassword"
               placeholder="neues Passwort">

    </div>
    <!--                Passwort ändern Button -->

    <div class="text-center">
        <input type="submit" class="btn-submit-orange btn btn-danger btn-lg" name="change_password"
               value="Passwort ändern">
    </div>
    </div>


    </form>
</section>


</body>
</html>