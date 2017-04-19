<!DOCTYPE html>
<html lang="de">
<head>
    <title>Projekt 1 | step</title>

    <?php include ('head.html'); ?>
</head>
<body>

<?php include ('navigation.html'); ?>

<section id="singleproject" class="page-content">
    <div class="container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-8">
                <h1>Projekt 1</h1>
            </div>
            <div class="col-4 text-right align-self-center ">
                <a class="titlebar-link" href="../settings.php">
                    <div class="icon-cog d-inline-block px-2"></div>
                    <span class="hidden-sm-down">Einstellungen</span></a>
            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <ul class="px-4 nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" href="#allgemein">Allgemein</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testaufgaben">Testaufgaben</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projektunterlagen">Projektunterlagen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#evaluation">Evaluation</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="tab-content">
                <div class="tab-pane active" id="allgemein" role="tabpanel">
                    <div class="col-md-8">
                        Hello
                    </div>
                    <div class="grey-bg col-md-4">
                        Hiiii
                    </div>
                </div>
                <div class="tab-pane" id="testaufgaben" role="tabpanel">...</div>
                <div class="tab-pane" id="projektunterlagen" role="tabpanel">...</div>
                <div class="tab-pane" id="evaluation" role="tabpanel">...</div>
            </div>
        </div>
    </div>

</section>

<?php include ('scripts.html'); ?>
<script>
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location = $(this).data("href");
        });
    });
</script>
</body>

</html>