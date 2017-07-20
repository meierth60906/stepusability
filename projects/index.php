<?php
//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:../index.php");
//    die();
//}
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <title>Projekte | step</title>

    <?php include ('head.html');

    ?>
</head>
<body id="body-projects">



<?php include ('navigation.html'); ?>

<section id="projects" class="page-content">
    <div class="container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-8">
                <h1>Projekte</h1>
            </div>
            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" data-toggle="modal" data-target="#newproject" href="#newproject">
                    <div class="icon-plus-1 icon-align d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Erstellen</span></a>
            </div>
        </div>

    </div>
    <div class="container">

        <div class="row p-3 mx-3 font-weight-bold">
            <div class="col-1">Status</div>
            <div class="col-5">Projektname</div>
            <div class="col-4">Auftraggeber</div>
            <div class="col-2 text-right">Erstellt am</div>
        </div>


        <div class="row mx-1 font-weight-bold">
            <div class="col-12"><hr class="m-0"></div>
        </div>

        <div id="projects-container">



        </div>

        <!--<a href="project.php">
        <div class="row m-3 p-3 element-allgemein">
            <div class="col-1">Status</div>
            <div class="col-4">Projektname</div>
            <div class="col-3">Auftraggeber</div>
            <div class="col-2 text-right">Erstellt am</div>
            <div class="col-2 text-right">Zuletzt geändert am</div>
        </div>
        </a>

        <div class="row m-3 p-3 element-allgemein">
            <div class="col-1">Status</div>
            <div class="col-4">Projektname</div>
            <div class="col-3">Auftraggeber</div>
            <div class="col-2 text-right">Erstellt am</div>
            <div class="col-2 text-right">Zuletzt geändert am</div>
        </div>

        <div class="row m-3 p-3 element-allgemein">
            <div class="col-1">Status</div>
            <div class="col-4">Projektname</div>
            <div class="col-3">Auftraggeber</div>
            <div class="col-2 text-right">Erstellt am</div>
            <div class="col-2 text-right">Zuletzt geändert am</div>
        </div>

        <div class="row m-3 p-3 element-allgemein">
            <div class="col-1">Status</div>
            <div class="col-4">Projektname</div>
            <div class="col-3">Auftraggeber</div>
            <div class="col-2 text-right">Erstellt am</div>
            <div class="col-2 text-right">Zuletzt geändert am</div>
        </div>-->

    </div>

</section>

<div class="modal fade" id="newproject" tabindex="-1" role="dialog" aria-labelledby="createProjectModal" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createProjectModalTitle">Neues Projekt erstellen</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="createProjectForm" class="form" action="../logic/insertProject.php" method="post">
                <div class="modal-body">

                    <!--Titel-->
                    <div class="form-group row formTask pt-3">
                        <label for="createProject-title" class="col-lg-4 form-control-label">Titel:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="createProject-title" id="createProject-title" placeholder="Titel des Projekts" />
                        </div>
                    </div>

                    <!--Auftraggeber-->
                    <div class="form-group row formTask">
                        <label for="createProject-ag" class="col-lg-4 form-control-label">Auftraggeber:</label>
                        <div class="col-lg-8">
                            <input class="form-control" name="createProject-ag" id="createProject-ag" placeholder="Auftraggeber" />
                        </div>
                    </div>

                </div>

                <div class="modal-footer text-center">
                    <input type="submit" value="Erstellen" class="btn btn-submit-blue" />
                </div>
            </form>

        </div>
    </div>
</div>

<?php include ('scripts.html'); ?>
<script>
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
<!-- Seiteninhalt aus Datenbank laden on Page Load-->
<script>
    $( function loadProjects() {
        $.ajax({
            url: '../logic/selectProjectlist.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                projectsContainer.append(response);
            }
        })
    });

</script>
<script>

    var projectsContainer = $("#projects-container");

    $("#createProjectForm").submit(function(event){
        // cancels the form submission
        event.preventDefault();
        createProject();
        $("#newproject").modal('toggle');
    });

    function createProject() {
        var projectSerialize = $("#createProjectForm").serialize();

        $.ajax({
            type: 'post',
            url: '../logic/insertProject.php',
            data: projectSerialize,
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                projectsContainer.prepend(response);
            }
        });

    }
</script>
</body>

</html>