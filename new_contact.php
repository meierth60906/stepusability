<!DOCTYPE html>
<html lang="de">
<head>
    <title>Kontakte | step</title>

    <?php include ('head.html'); ?>
</head>
<body>

<?php include ('navigation.html'); ?>

<section id="contacts" class="page-content">
   <!-- <div class="container-fluid"> -->
        <div class="row titlebar px-3 py-3">
            <div class="col-8">
                <h1>Kontakte</h1>

                <!--            <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>-->
            </div>
            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" href="settings.php">
                    <div class="icon-cog d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Einstellungen</span></a>
            </div>
        </div>

            <!-- Projekte -->
            <div class="col-lg-6">
            <!-- Kontaktliste rechts -->
                <div class="sidebar-wrapper col-lg-6" id="secondSidebar">
                    <!-- Suchleiste -->
                    <form class="navbar-form pull-right" method="post" action="#">
                        <input class="form-control mac-style" name="search" value="" placeholder="Suchen" type="text">
                    </form>

                    <!-- Kontaktliste -->
                    <a class="row card-item p-3 nav-link" href="#">Alena Ahorn</a>
                    <a class="row card-item p-3 nav-link" href="#">Alessa Albert</a>
                    <a class="row card-item p-3 nav-link" href="#">Anna Apfel</a>
                    <a class="row card-item p-3 nav-link" href="#">Benjamin Berger</a>
                    <a class="row card-item p-3 nav-link" href="#">Bernd Bogner</a>
                </div>
            </div>

            <div class="form-group col-lg-9 offset-lg-4">
                <div class="row col-lg-6 pt-5">
                    <form action="new_contact.php">
                            <div class="img-placeholder darkgrey-bg">AA</div> Anna Apfel

                        <div class="col-lg-9">
                            <div class="text-muted small">Siemens AG</div>
                            <div class="icon-star d-inline text-muted"></div>

                            <div class="form-group">
                                <input type="text" id="fname" name="firstname" placeholder="Vorname">
                            </div>
                            <div class="form-group">
                                <input type="text" id="lname" name="lastname" placeholder="Nachname">
                            </div>
                            <div class="form-group">
                                <input type="text" id="mobil" name="handynummer" placeholder="Mobil">
                            </div>
                            <div class="form-group">
                                <input type="text" id="phone" name="telefonnummer" placeholder="Telefonnummer">
                            </div>
                            <div class="form-group">
                                <input type="text" id="mail" name="email" placeholder="E-Mail">
                            </div>
                            <div class="form-group">
                                <input type="text" id="address" name="addresse" placeholder="Straße und Hausnummer">
                            </div>
                            <div class="form-group">
                                <input type="text" id="plz" name="postleitzahl" placeholder="PLZ">
                            </div>
                            <div class="form-group">
                                <input type="text" id="ort" name="wohnort" placeholder="Wohnort">

                            <label for="country">Land</label>
                            <select id="country" name="country">
                                <option value="australia">Deutschland</option>
                                <option value="canada">Schweiz</option>
                                <option value="usa">Österreich</option>
                            </select>
                            </div>
                            <div class="bfh-datepicker">
                            </div>

                            <input type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
    </section>

<?php include ('scripts.html'); ?>


</body>
</html>