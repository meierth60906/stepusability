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
        <div class="active">
            <a class="row card-item p-3 nav-link " href="#profile">Profil bearbeiten</a>
            <a class="row card-item p-3 nav-link" href="#password">Passwort ändern</a>
            <a class="row card-item p-3 nav-link" href="#testWindow">Einstellungen im Testfenster</a>
            <a class="row card-item p-3 nav-link" href="#pageInformation">Seiteninformation</a>
        </div>
    </div>
<!---->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-md-6">-->
<!---->
<!--                <div class="row">-->
<!--                    <div class="col-xs-3">-->
<!--                        <ul class="nav nav-tabs tabs-left">-->
<!--                            <li class="active"><a href="#profile" data-toggle="tab">Profil bearbeiten</a></li>-->
<!--                            <li><a href="#password" data-toggle="tab">Passwort ändern</a></li>-->
<!--                            <li><a href="#testWindow" data-toggle="tab">Einstellungen im Testfenster</a></li>-->
<!--                            <li><a href="#pageInfo" data-toggle="tab">Seiteninformation</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="col-xs-9">-->
<!--            <div class="tab-content">-->
<!--                <div class="tab-pane active" id="profile">Profil bearbeiten Tab.</div>-->
<!--                <div class="tab-pane active" id="password">Passwort ändern</div>-->
<!--                <div class="tab-pane active" id="testWindow">Einstellungen im Testfenster</div>-->
<!--                <div class="tab-pane active" id="pageInfo">Seiteninformation</div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->



    <!--Form-->

    <div class="form-group row">
        <div class="col-lg-9 offset-lg-4 pt-5"
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

            <div class="form-group row">
                <div class="col-lg-5 offset-lg-5">
                <input type="submit" class="btn-submit-orange btn btn-danger btn-lg" name="change_password"
                       value="Passwort ändern">
            </div>
    </div>


    </form>
</section>


</body>
</html>