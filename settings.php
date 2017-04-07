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
    <section id="login">
        <div class="container">
            <div class="row">
                <h1>Einstellungen</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 offset-md-5">

                <form>
                    <!--akutelles Passwort eingeben-->
                    <div class="form-group">
                        <input type="text" name="current_password" placeholder="aktuelles Passwort">
                        </label>
                    </div>

                    <!--neues Passwort eingeben-->
                    <div class="form-group">
                        <label for="new_password">neues Passwort:</label>
                        <input id="new_password" type="text" name="new_password" placeholder="neues Passwort">
                        <label for="repeat_password">Passwort wiederholen:</label>
                        <input id="repeat_password" type="text" name="new_password" placeholder="Passwort wiederholen">
                        </label>
                    </div>

                    <!--Passwort ändern Button -->
                    <div class="text-center">
                        <input type="submit" class="btn btn-danger btn-lg text-center" name="change_password"
                               value="Passwort ändern">
                    </div>

                </form>

</body>
</html>