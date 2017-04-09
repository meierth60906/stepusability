<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Settings | step</title>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/custom.css"/>

</head>
<body>
<!-- Sidebar -->
<?php include ('navigation.html'); ?>
<section id="settings" class="page-content">
    <form class="container-fluid">
        <div class="row titlebar px-5 py-3">
            <div class="col-9 align-self-center">
                <h1>Einstellungen</h1>
            </div>
        </div>
        <div class="row">
<!--            innere Navigationsleiste-->
            <div class="sidebar-wrapper" id="secondSidebar">
            <nav class="nav flex-column">
                <a class="nav-link active" href="#">Profil bearbeiten</a>
                <a class="nav-link" href="#">Passwort ändern</a>
                <a class="nav-link" href="#">Einstellungen im Testfenster</a>
                <a class="nav-link" href="#">Seiteninformation</a>
            </nav>
            </div>
            <div class="col-md-5 offset-md-5">

                    <!--akutelles Passwort eingeben-->
                    <div class="form-group">
                        <input type="text" name="current_password" placeholder="aktuelles Passwort">
                        </label>
                    </div>

                    <!--neues Passwort eingeben-->
                    <div class="form-group row">
                        <div class="form-group">
                            <label for="newPassword" class="col-sm-2 form-control-label">Bitte geben Sie Ihr aktuelles Passwort ein:</label>
                            <label for="newPassword">neues Passwort:</label>
                            <input id="newPassword" type="text" name="newPassword" placeholder="neues Passwort">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="form-group">
                            <label for="newPassword" class="col-sm-2 form-control-label">Bitte geben Sie Ihr aktuelles Passwort ein:</label>
                            <label for="newPassword">neues Passwort:</label>
                            <input id="newPassword" type="text" name="newPassword" placeholder="neues Passwort">
                        </div>
<!--                        Passwort wiederholen-->
                        <div class="form-group">
                            <label for="newPassword">Passwort wiederholen:</label>
                            <input id="newPassword" type="text" name="newPassword" placeholder="Passwort wiederholen">
                        </div>
                    </div>



                    <!--Passwort ändern Button -->
                    <div class="text-center">
                        <input type="submit" class="btn btn-danger btn-lg text-center" name="change_password"
                               value="Passwort ändern">
                    </div>

            </div>





</body>
</html>