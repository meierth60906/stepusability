<?php
//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:index.php");
//    die();
//}

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Kontakte | step</title>

    <?php include ('head.html'); ?>
</head>
<body id="body-contacts">

<?php include ('navigation.html'); ?>
<form id="contactForm" class="form" action="logic/contactsUpdateData.php" method="post">
    <section id="contacts" class="page-content">
        <div class="page-top fixed-top container-fluid">
            <div class="row titlebar px-3 py-3">
                <div class="col-8">
                    <h1>Kontakte</h1>
                </div>
                <div class="col-4 text-right align-self-center ">
                    <a class="titlebar-link" href="new_contact.php">
                        <div class="icon-plus d-inline-block px-2 icon-align"></div>
                        <span class="hidden-sm-down">Kontakt hinzufügen</span></a>
                </div>
            </div>
        </div>

        <div class="container-contacts container-fluid pl-0 pr-0">
            <div id="sidebar-contacts" class="col-lg-3 c-grey-bg">
                <div class="sidebar-contacts-filter row">
                    <div class="col-12 p-0">
                        <div class="input-group">
                            <div class="input-group-btn search-panel">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    Filtern nach <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#Favoriten">Favoriten</a></li>
                                    <li><a href="#Probanden">Probanden</a></li>
                                    <li><a href="#Team">Team</a></li>
                                    <li><a href="#Kunden">Kunden</a></li>
                                    <li><a href="#all">Alle</a></li>
                                </ul>
                            </div>
                            <input type="text" class="form-control py-2" name="search-button" placeholder="Kontakt suchen" style="border-color: #ddd">
                            <div class="input-group-btn">
                                <button class="btn btn-default py-3" type="button"><span class="icon-search"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="sidebar-contacts-list col-12 p-0"></div>
                </div>
            </div>

            <div id="content-contacts" class="offset-lg-3 col-lg-9 py-3">
            </div>
        </div>


        <!--Form-->

        <!--Form-->

        <!--<div class="kontaktinfos pt-5">

            <div class="form-group pt-5 col-lg-8 offset-lg-4">


                <div class="form-group row">
                    <div class="profile-header-img">
                        <img class="img-circle" src="img/add_picture.png" />
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="contact-vorname" placeholder="Vorname">
                        <input type="text" class="form-control" name="contact-nachname" placeholder="Nachname">
                        <input type="text" class="form-control" name="contact-firma" placeholder="Firma">

                    </div>
                    <div class="col-lg-4">
                        <div>
                            <span class="star icon-star"></span>
                            <input type="hidden" id="favourite" name="contact-favourite" value="1">
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-lg-3 form-control-label">Kontaktmöglichkeiten</label>
                    <div class="col-lg-5">
                        <div class="form-group multiple-form-group input-group">
                            <div class="input-group-btn input-group-select">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span class="concept">Mobil</span> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#mobile">Mobil</a></li>
                                    <li><a href="#email">E-mail</a></li>
                                    <li><a href="#phone">Festnetz</a></li>
                                    <li><a href="#www">Web</a></li>
                                    <li><a href="#other">Andere</a></li>
                                </ul>
                                <input type="hidden" class="input-group-select-val" name="com_type[]" value="mobile">
                            </div>
                            <input type="text" name="com_value[]" class="form-control">
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-add">+</button>

                        </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputInfo" class="col-lg-3 form-control-label">Geburtsdatum</label>
                    <div class="col-lg-5">
                        <input type="date" class="form-control" id="contact-geburtsdatum" name="contact-geburtsdatum" placeholder="Geburtstag">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputInfo" class="col-lg-3 form-control-label">Fähigkeiten</label>
                    <div class="col-lg-5">
                        <div class="form-group multiple-form-group input-group">
                            <div class="input-group-btn input-group-select">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <span class="concept">Skills</span> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#skill_1">Skill 1</a></li>
                                    <li><a href="#skill_2">Skill 2</a></li>
                                    <li><a href="#skill_3">Skill 3</a></li>
                                    <li><a href="#skill_4">Skill 4</a></li>
                                    <li><a href="#skill_5">Skill 5</a></li>
                                </ul>
                                <input type="hidden" class="input-group-select-val" name="skill_type[]" value="skill_1">
                            </div>
                            <input type="text" name="skill_value[]" class="form-control">
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-success btn-add">+</button>
                        </span>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputAddress" class="col-lg-3 form-control-label">Anschrift</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="contact-strasse" placeholder="Straße & Hausnr.">
                        <input type="text" class="form-control" name="contact-plz" placeholder="PLZ">
                        <input type="text" class="form-control" name="contact-ort" placeholder="Ort">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputRole" class="col-lg-3 form-control-label">Rolle</label>
                    <div class="col-lg-5">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="contact-team">
                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                Team</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="contact-proband">
                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                Proband</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="1" name="contact-kunde">
                                <span class="cr"><i class="cr-icon icon-check"></i></span>
                                Kunde</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer text-center">
                    <button type="button" class="btn btn-submit-orange btn-md" >Kontakt löschen</button>

                </div>
            </div>
        </div>-->
    </section>
</form>
<!--<div class="row titlebar px-3 py-3">
    <div class="col-8">
        <h1>Kontakte</h1>
    </div>

    <div class="col-4 text-right align-self-center ">
        <a class="titlebar-link" href="#">
            <div class="icon-check d-inline-block px-2"></div>
            <span class="hidden-sm-down">Speichern</span></a>
    </div>
</div>
        <!--innere Navigationsleiste-->



<?php include ('scripts.html'); ?>
<script src="js/contactsSetStyle.js"></script>

<script>

    var sidebarContactsList = $('.sidebar-contacts-list');
    var contactId = 0;
    var contentContacts = $('#content-contacts');
    var contactForm = $('#contactForm');

    $(function loadContactList() {
        $.ajax({
            type: 'post',
            url: 'logic/contactsLoadList.php',
            success: function (response) {
                sidebarContactsList.append(response);

            }
        })
    });

    function viewContact(elem) {
        contentContacts.load("contact_view.html");
        contactId = $(elem).data('id');

        $.ajax({
            data: 'cid=' + contactId,
            type: 'post',
            dataType: 'json',
            url: 'logic/contactsLoadData.php',
            success: function (response) {
                $('#contact-edit-button').attr('data-id',response.id);

                $('.img-placeholder-big').html(response.nameinitial + response.vornameinitial);
                if($.trim(response.favorit) == 1) {
                    $('.contact-name').html("<span style='font-size: 18pt; color: #e84a29' class='icon-star icon-align'></span> " + response.name + ", " + response.vorname);
                } else {
                    $('.contact-name').html(response.name + ", " + response.vorname);
                }

                $('.contact-company').html(response.firma);
                $('.contact-mail').html(response.email);
                $('.contact-birth').html(response.geburtsdatum);
                $('.contact-mobile').html(response.mobil);
                $('.contact-private').html(response.privat);
                $('.contact-adress').html(response.adresse);
                //$('.contact-skill-container').attr("data-id", taskId);
                //$('.contact-mail').attr("data-id", response.taskid);
            }
        });
    }

    function editContact(elem) {
        contentContacts.load("contact_edit.html");
        contactId = $(elem).data('id');
        
        $.ajax({
            data: 'cid=' + contactId,
            type: 'post',
            dataType: 'json',
            url: 'logic/contactsLoadData.php',
            success: function (response) {
//                $('#contact-edit-button').attr('data-id',response.id);

//                $('.img-placeholder-big').html(response.nameinitial + response.vornameinitial);
//                if($.trim(response.favorit) == 1) {
//                    $('.contact-name').html("<span style='font-size: 18pt; color: #e84a29' class='icon-star icon-align'></span> " + response.name + ", " + response.vorname);
//                } else {
//
//                }
                $('.contact-name').val(response.name);
                $('.contact-vorname').val(response.vorname);
                $('.contact-company').val(response.firma);
                $('.contact-mail').val(response.email);
                $('.contact-birth').val(response.geburtsdatum);
                $('.contact-mobile').val(response.mobil);
                $('.contact-private').val(response.privat);
                $('.contact-adress').val(response.adresse);
                $('#contact-save-button').attr('data-id',response.id);
                //$('.contact-skill-container').attr("data-id", taskId);
                //$('.contact-mail').attr("data-id", response.taskid);
            } 
        });
    }

    function saveContact(elem) {
        contactForm.submit(function(event) {
            event.preventDefault();
            contentContacts.load("contact_view.html");
            contactId = $(elem).data('id');

            var contactSerialize = contactForm.serialize();

            $.ajax({
                data: contactSerialize + '&cid=' + contactId,
                type: 'post',
                dataType: 'json',
                url: 'logic/contactsUpdateData.php',
                success: function (response) {
//                $('#contact-edit-button').attr('data-id',response.id);

//                $('.img-placeholder-big').html(response.nameinitial + response.vornameinitial);
//                if($.trim(response.favorit) == 1) {
//                    $('.contact-name').html("<span style='font-size: 18pt; color: #e84a29' class='icon-star icon-align'></span> " + response.name + ", " + response.vorname);
//                } else {
//
//                }
                    $('.contact-name').val(response.name);
                    $('.contact-vorname').val(response.vorname);
                    $('.contact-company').val(response.firma);
                    $('.contact-mail').val(response.email);
                    $('.contact-birth').val(response.geburtsdatum);
                    $('.contact-mobile').val(response.mobil);
                    $('.contact-private').val(response.privat);
                    $('.contact-adress').val(response.adresse);
                    $('#contact-save-button').attr('data-id', response.id);
                    //$('.contact-skill-container').attr("data-id", taskId);
                    //$('.contact-mail').attr("data-id", response.taskid);
                }
            });
        })
    }
</script>

<script>
//
//
//    var h = $(window).height();
//
//    var header_h = $(".page-top").height();
//
//
//    $(".contact-sidebar").height(h - header_h);
//    $( window ).resize( function(){
//        h = $(window).height();
//        $(".contact-sidebar").height(h - header_h);
//    });
//
//    (function ($) {
//        $(function () {
//
//            var addFormGroup = function (event) {
//                event.preventDefault();
//
//                var $formGroup = $(this).closest('.form-group');
//                var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
//                var $formGroupClone = $formGroup.clone();
//
//                $(this)
//                    .toggleClass('btn-success btn-add btn-danger btn-remove')
//                    .html('–');
//
//                $formGroupClone.find('input').val('');
//                $formGroupClone.find('.concept').text('');
//                $formGroupClone.insertAfter($formGroup);
//
//                var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
//                if ($multipleFormGroup.data('max') <= countFormGroup($multipleFormGroup)) {
//                    $lastFormGroupLast.find('.btn-add').attr('disabled', true);
//                }
//            };
//
//            var removeFormGroup = function (event) {
//                event.preventDefault();
//
//                var $formGroup = $(this).closest('.form-group');
//                var $multipleFormGroup = $formGroup.closest('.multiple-form-group');
//
//                var $lastFormGroupLast = $multipleFormGroup.find('.form-group:last');
//                if ($multipleFormGroup.data('max') >= countFormGroup($multipleFormGroup)) {
//                    $lastFormGroupLast.find('.btn-add').attr('disabled', false);
//                }
//
//                $formGroup.remove();
//            };
//
//            var selectFormGroup = function (event) {
//                event.preventDefault();
//
//                var $selectGroup = $(this).closest('.input-group-select');
//                var param = $(this).attr("href").replace("#","");
//                var concept = $(this).text();
//
//                $selectGroup.find('.concept').text(concept);
//                $selectGroup.find('.input-group-select-val').val(param);
//
//            }
//
//            var countFormGroup = function ($form) {
//                return $form.find('.form-group').length;
//            };
//
//            $(document).on('click', '.btn-add', addFormGroup);
//            $(document).on('click', '.btn-remove', removeFormGroup);
//            $(document).on('click', '.dropdown-menu a', selectFormGroup);
//
//        });
//    })(jQuery);
//
//
//    /** Icon Switch **/
//
//    $(".star").click(function() {
//        $(this).toggleClass("icon-star icon-star-o");
//        var wert = document.getElementById("favourite").value;
//        if (wert === "0") {
//            document.getElementById("favourite").value = "1";
//        } else {
//            document.getElementById("favourite").value = "0";
//        }
//    });
//
</script>




</body>
</html>