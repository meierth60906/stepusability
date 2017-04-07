<!DOCTYPE html>
<html lang="de">
<head>
    <title>Kontakte | step</title>

    <?php include ('head.html'); ?>
</head>
<body>

<?php include ('navigation.html'); ?>

<section id="kontakte" class="page-content">
    <div class="container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-8">
                <h1>Kontakte</h1>

                    <form action="contacts.php">
                        <input type="text" id="fname" name="firstname" placeholder="Vorname">

                        <input type="text" id="lname" name="lastname" placeholder="Nachname">

                        <input type="text" id="mobil" name="handynummer" placeholder="Mobil">

                        <input type="text" id="phone" name="telefonnummer" placeholder="Telefonnummer">

                        <input type="text" id="mail" name="email" placeholder="E-Mail">

                        <input type="text" id="address" name="addresse" placeholder="Straße und Hausnummer">

                        <input type="text" id="plz" name="postleitzahl" placeholder="PLZ">

                        <input type="text" id="ort" name="wohnort" placeholder="Wohnort">

                        <label for="country">Land</label>
                        <select id="country" name="country">
                            <option value="australia">Deutschland</option>
                            <option value="canada">Schweiz</option>
                            <option value="usa">Österreich</option>
                        </select>

                        <div class="bfh-datepicker">
                        </div>

                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                        <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</section>

<?php include ('scripts.html'); ?>


</body>
</html>