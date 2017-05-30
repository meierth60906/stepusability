<?php session_start(); ?>

<!DOCTYPE html>
<html lang="de">
<head>

    <title>Login | step</title>

    <?php include ('head.html'); ?>


</head>
<body>

<section id="login">
    <div class="container">
        <div class="row">
            <div id="login-content" class="mt-5 col-md-4 offset-md-4 pb-4 element-allgemein">
                <img class="img-fluid p-5" src="img/logo-color.png" alt="" />
                <h1 class="text-center">Login</h1><hr>

                <div class="row">
                    <div class="col-md-12">
                        <form id="loginForm" action="/logic/insertLogin.php" method="post">
                            <!--  Normales  einzeiliges  Eingabefeld  -->
                            <div class="form-group">
                                <input name="login-email" id="login-email"  type="text" class="form-control" placeholder="Email">
                            </div>
                            <!--  Passwortfeld  -->
                            <div class="form-group">
                                <input  name="login-passwort" id="login-passwort" class="form-control" type="password" placeholder="Passwort">
                            </div>

                            <!--  Schaltflaeche  als  Button  -->
                            <div class="text-right">
                                <input name="submit" type="submit" class="btn btn-submit-blue active" role="button" value="Login">

                            </div>

                            <div id="msgSubmit" style="display: none;" class="alert alert-danger my-3"></div>

                            <hr>

<!--                            <input type="hidden" name="PERSONP_HAT_U_ID" value="3">-->
                        </form>
                        <!-- Links unter dem Login Button und Pop-up Fenster -->
                        <div class="row text-center">
                            <div class="col-12  mt-3">
                                <a class="login-hyperlink" data-toggle="modal" data-target="#forgotPassword" href="#forgotPassword">Login-Daten vergessen?</a>
                            </div>
                            <div class="col-12 mb-3">
                                <a class="login-hyperlink" data-toggle="modal" data-target="#register" href="#register">Noch nicht registriert?</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<!-- Pop-up Fenster: Login Daten vergessen -->
<div class="modal fade" id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="forgotPasswordModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login-Daten vergessen?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Geben Sie Ihre bei der Anmeldung hinterlegte E-Mail-Adresse an.<br>
                Wir senden Ihnen ein neues Passwort per E-Mail zu.
            </div>
            <!--  E-Mail  -->
            <div class="form-group col-12 py-2">
                <input id="input4" class="form-control" type="email" placeholder="E-Mail Adresse">
            </div>
            <div class="modal-footer text-center">
                <button type="button" class="btn btn-submit-blue">Passwort anfordern</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registrierung</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="registerForm" class="form" action="logic/insertRegister.php" method="post">
                <div class="modal-body">
                    <div class="mb-3">Füllen Sie bitte das nachstehende Kontaktformular vollständig aus.</div>

                    <!--Email-->
                    <div class="form-group row formTask pt-3">
                        <label for="reg-email" class="col-lg-4 form-control-label">Email: *</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="reg-email" id="reg-email" placeholder="Email" />
                        </div>
                    </div>

                    <!--Passwort-->
                    <div class="form-group row formTask">
                        <label for="reg-passwort" class="col-lg-4 form-control-label">Passwort: *</label>
                        <div class="col-lg-8">
                            <input type="password" class="form-control" name="reg-passwort" id="reg-passwort" placeholder="Passwort" />
                        </div>
                    </div>

                    <!-- Anrede -->
                    <!--                    <div class="form-group col-2">-->
                    <!--                        <input name="Anrede" id="input5" type="text" class="form-control"  placeholder="Anrede*">-->
                    <!--                    </div>-->
                    <div class="form-group row formTask">
                        <label for="reg-anrede" class="col-lg-4 form-control-label">Anrede: *</label>
                        <div class="col-lg-8">
                            <label class="radio-inline pr-2">
                                <input type="radio" name="reg-anrede" value="Frau"><span class="pl-2">Frau</span>
                            </label>
                            <label class="radio-inline pr-2">
                                <input type="radio" name="reg-anrede" value="Herr"><span class="pl-2">Herr</span>
                            </label>
                        </div>
                    </div>
                    <!-- Vorname -->
                    <div class="form-group row formTask">
                        <label for="reg-vorname" class="col-lg-4 form-control-label">Vorname: *</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="reg-vorname" id="reg-vorname" placeholder="Vorname" />
                        </div>
                    </div>
                    <!--<div class="form-group col-5">
                        <input name="Vorname" id="input7" type="text" class="form-control"  placeholder="Vorname*">
                    </div>-->
                    <!-- Name -->
                    <div class="form-group row formTask">
                        <label for="reg-name" class="col-lg-4 form-control-label">Name: *</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="reg-name" id="reg-name" placeholder="Name" />
                        </div>
                    </div>



                    <!-- Firma -->
                    <div class="form-group row formTask">
                        <label for="reg-firma" class="col-lg-4 form-control-label">Firma: *</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="reg-firma" id="reg-firma" placeholder="Firma" />
                        </div>
                    </div>

                    <!--<div class="form-group col-5">
                        <input name="Name" id="input6" type="text" class="form-control"  placeholder="Name*">
                    </div>-->
                    <!--  Geburtsdatum  -->
                    <!--                    <div class="form-group col-12">-->
                    <!--                        <input name="Geburtsdatum" id="input8" class="form-control" placeholder="Geburtsdatum*">-->
                    <!--                    </div>-->
                    <div class="form-group row formTask">
                        <label for="reg-geb" class="col-lg-4 form-control-label">Geburtsdatum: *</label>
                        <div class="col-lg-8">
                            <input type="date" class="form-control" name="reg-geb" id="reg-geb" placeholder="01.01.1900" />
                        </div>
                    </div>

                    <!--                    <div class="form-group col-12">-->
                    <!--                        <input name="Firma" id="input8" class="form-control" type="email"  placeholder="E-Mail*">-->
                    <!--                    </div>-->


                    <!--<div class="form-group col-12">
                        <input name="Firma" id="input8" class="form-control"  placeholder="Firma*">
                    </div>-->
                    <!--Nachricht-->
                    <!--<div class="form-group col-12">
                        <textarea class="form-control" id="message-text" placeholder="Nachricht"></textarea>
                    </div>-->

                </div>

                <div class="modal-footer text-center">
                    <input type="submit" value="Senden" class="btn btn-submit-blue" />
                </div>
            </form>

        </div>
    </div>
</div>
<?php include ('scripts.html'); ?>

<script>

    $("#loginForm").submit(function(event){
        // cancels the form submission
        event.preventDefault();
        submitForm();
    });

    function submitForm(){
        // Initiate Variables With Form Content

        var formData = $("#loginForm").serialize();

        $.ajax({
            type: "POST",
            url: "logic/insertLogin.php",
            data: formData,
            success: function(data) {
                console.log(data);

                if(data === "success") {
                    location.href = "home.php";
                } else if (data === "invalid") {
                    formInvalid();
                }


            }

        });
    }
    function formInvalid(){
        var msg = $( "#msgSubmit" );

        msg.html("Email oder Passwort ungültig.");
        msg.show();
    }
</script>
</body>
</html>