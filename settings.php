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
    <form class="container-fluid">
        <div class="row titlebar px-5 py-3">
            <div class="col-9 align-self-center">
                <h1>Einstellungen</h1>
            </div>
        </div>

        <!--innere Navigationsleiste-->
        <div class="sidebar-wrapper" id="secondSidebar">

            <a class="row card-item p-3 nav-link active" href="#">Profil bearbeiten</a>
            <a class="row card-item p-3 nav-link" href="#">Passwort ändern</a>
            <a class="row card-item p-3 nav-link" href="#">Einstellungen im Testfenster</a>
            <a class="row card-item p-3 nav-link" href="#">Seiteninformation</a>
        </div>


        <!--akutelles Passwort eingeben-->
        <div class="col-md-9 offset-md-4">
            <div class="form-group row">
                <div class="form-group">
                    <label for="currentPassword" class="col-md-9 form-control-label">Bitte geben Sie Ihr aktuelles
                        Passwort ein:</label>
                    <label for="currentPassword">aktuelles Passwort:</label>
                    <input id="currentPassword" class="form control float-right" type="text" name="currentPassword"
                           placeholder="aktuelles Passwort">
                </div>
            </div>
            <!--neues Passwort eingeben-->
            <div class="form-group row">
                <div class="form-group">
                    <label for="newPassword" class="col-md-9 form-control-label">Bitte geben Sie Ihr neues Passwort
                        ein:</label>
                    <label for="newPassword">neues Passwort:</label>
                    <input id="newPassword" class="form control float-right" type="text" name="newPassword"
                           placeholder="neues Passwort">
                </div>

                <!--Passwort wiederholen-->
                <div class="form-group">
                    <label for="newPassword">Passwort wiederholen:</label>
                    <input id="newPassword" class="form control float-right" type="text" name="newPassword"
                           placeholder="Passwort wiederholen">
                </div>
            </div>


            <!--Passwort ändern Button -->
            <div class="text-center">
                <input type="submit" class="btn btn-danger btn-lg text-center" name="change_password"
                       value="Passwort ändern">
            </div>

        </div>
    </form>
</section>


</body>
</html>