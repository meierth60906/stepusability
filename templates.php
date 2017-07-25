<?php
//session_start();
//if (!$_SESSION['login_user']){
//    $_SESSION['login_user'] = '';
//    header("Location:index.php");
//    die();
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Vorlagen | step</title>
    <?php include('head.html') ?>
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=sargs3skr0vrsmifbb4jq3uf92y0ao5xwkmhwezoz94kklpz"></script>

    <script>
        function ShowTemplate(Art, Name, Text) {
            for (var i = tinymce.editors.length - 1 ; i > -1 ; i--) {
                var ed_id = tinymce.editors[i].id;
                tinyMCE.execCommand("mceRemoveEditor", true, ed_id);
            }

            document.getElementById("Vorlage_Name").value = Name;
            document.getElementById("Name_der_Vorlage").style.visibility = 'visible';
            document.getElementById("Vorlage_Name").style.visibility = 'visible';
            document.getElementById("Vorlage_Art").value = Art;
            document.getElementById("Vorlage_Text").value = Text;
            tinymce.init({
                selector: 'textarea',
                height: 500,
                theme: 'modern',
                plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
                ],
                toolbar1: 'save | undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
                toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
                image_advtab: true,            content_css: 'https://tinymce.com/css/codepen.min.css',
                branding: false,
                language_url : '/step/tiny/mce/langs/de.js',
                save_enablewhendirty: true
            });

        }
    </script>

</head>
<body>
<!-- Sidebar und Header-->

<?php include('navigation.html'); ?>

<section id="templates" class="page-content">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <h1>Vorlagen</h1>

            <div class="offset-8 text-right align-self-center ">
                <a class="titlebar-link" href="">
                    <div class=" d-inline-block px-2"></div>
                    <span class="hidden-sm-down icon-plus"> Erstellen</span>
                </a>
                <a class="titlebar-link" href="templates.php">
                    <div class=" d-inline-block px-2"></div>
                    <span class="hidden-sm-down icon-pencil"> Bearbeiten</span>
                </a>
            </div>
        </div>


        <!--innere Navigationsleiste-->

        <div class="container row">
            <div class="col-lg-3 p-0" id="sidebarTemplates">


                <div class="panel-group">
                    <div class="panel panel-default">




                        <!--                        Einverständniserklärung-->
                        <div class="panel-heading">

                            <h4 class="panel-title">
                                <a class="icon-angle-right active" href="#einverstaendniserklaerung" data-toggle="collapse" >Einverständniserklärung</a>
                            </h4>

                        </div>

                        <div id="einverstaendniserklaerung" class="panel-collapse collapse active">
                            <ul class="flex-column nav">

                                <?php

                                $conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
                                if (!$conn) {
                                    $e = oci_error();
                                    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                                }

                                $stid = oci_parse($conn, "SELECT * FROM VORLAGE WHERE VORLAGE_ART='Einverstaendniserklaerung'");
                                oci_execute($stid);
                                while($row=oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS)){
                                    $content = $row['VORLAGE_TEXT']->load();
                                    $content = htmlspecialchars($content);
                                    echo "<li><a class=\"icon-file-text-o p-3 nav-link active\" href=\"javascript:ShowTemplate('".$row['VORLAGE_ART']."', '".$row['VORLAGE_NAME']."', '".$content."');\">".$row['VORLAGE_NAME']."</a></li>";
                                }
                                ?>

                            </ul>
                        </div>


                        <!--                            Protkollleitfaden-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="icon-angle-right" href="#protokollleitfaden" data-toggle="collapse">Protokollleitfaden</a>
                            </h4>
                        </div>

                        <div id="protokollleitfaden" class="panel-collapse collapse">
                            <ul class="flex-column nav">
                                <?php

                                $conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
                                if (!$conn) {
                                    $e = oci_error();
                                    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                                }

                                $stid = oci_parse($conn, "SELECT * FROM VORLAGE WHERE VORLAGE_ART='Protokollleitfaden'");
                                oci_execute($stid);
                                while($row=oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS)){
                                    $content = $row['VORLAGE_TEXT']->load();
                                    $content = htmlspecialchars($content);
                                    echo "<li><a class=\"icon-file-text-o p-3 nav-link active\" href=\"javascript:ShowTemplate('".$row['VORLAGE_ART']."', '".$row['VORLAGE_NAME']."', '".$content."');\">".$row['VORLAGE_NAME']."</a></li>";
                                }
                                ?>
                            </ul>
                        </div>


                        <!--Testskript-->
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="icon-angle-right" data-toggle="collapse" href="#testskript" >Testskript</a>
                            </h4>
                        </div>
                        <div id="testskript" class="panel-collapse collapse">
                            <ul class="flex-column nav">
                                <?php

                                $conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
                                if (!$conn) {
                                    $e = oci_error();
                                    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                                }

                                $stid = oci_parse($conn, "SELECT * FROM VORLAGE WHERE VORLAGE_ART='Testskript'");
                                oci_execute($stid);
                                while($row=oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS)){
                                    $content = $row['VORLAGE_TEXT']->load();
                                    $content = htmlspecialchars($content);
                                    echo "<li><a class=\"icon-file-text-o p-3 nav-link active\" href=\"javascript:ShowTemplate('".$row['VORLAGE_ART']."', '".$row['VORLAGE_NAME']."', '".$content."');\">".$row['VORLAGE_NAME']."</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                        <!--                    Testplan-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="icon-angle-right" href="#testplan" data-toggle="collapse">Testplan</a>
                            </h4>
                        </div>
                        <div id="testplan" class="panel-collapse collapse">
                            <ul class="flex-column nav">
                                <?php

                                $conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
                                if (!$conn) {
                                    $e = oci_error();
                                    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                                }

                                $stid = oci_parse($conn, "SELECT * FROM VORLAGE WHERE VORLAGE_ART='Testplan'");
                                oci_execute($stid);
                                while($row=oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS)){
                                    $content = $row['VORLAGE_TEXT']->load();
                                    $content = htmlspecialchars($content);
                                    echo "<li><a class=\"icon-file-text-o p-3 nav-link active\" href=\"javascript:ShowTemplate('".$row['VORLAGE_ART']."', '".$row['VORLAGE_NAME']."', '".$content."');\">".$row['VORLAGE_NAME']."</a></li>";
                                }
                                ?>
                            </ul>
                        </div>


                        <!--                    Testbericht-->

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="icon-angle-right" href="#testbericht" data-toggle="collapse">Testbericht</a>
                            </h4>
                        </div>
                        <div id="testbericht" class="panel-collapse collapse">
                            <ul class="flex-column nav">
                                <?php

                                $conn = oci_connect('studi132', 'studi132', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
                                if (!$conn) {
                                    $e = oci_error();
                                    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
                                }

                                $stid = oci_parse($conn, "SELECT * FROM VORLAGE WHERE VORLAGE_ART='Testbericht'");
                                oci_execute($stid);
                                while($row=oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS)){
                                    $content = $row['VORLAGE_TEXT']->load();
                                    $content = htmlspecialchars($content);
                                    echo "<li><a class=\"icon-file-text-o p-3 nav-link active\" href=\"javascript:ShowTemplate('".$row['VORLAGE_ART']."', '".$row['VORLAGE_NAME']."', '".$content."');\">".$row['VORLAGE_NAME']."</a></li>";
                                }
                                ?>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--page content -->


    <div class="container-fluid">
        <div class="tab-content">


            <div class="tab-pane active" id="einverstaendniserklaerung1" role="tabpanel">
                <div class="row">
                    <div class="col-lg-8 offset-lg-4 editor">
                        <form id="templateForm" class="form" action="logic/insertTemplate.php" method="post">
                            <button class="visibility" name="submitbtn"></button>
                            <p class="visibility" name="Name_der_Vorlage" id="Name_der_Vorlage">Name der Vorlage:</p>
                            <input class="visibility" name="Vorlage_Name" type="text" id="Vorlage_Name" placeholder="Name der Vorlage">
                            <input type="hidden" name="Vorlage_Art" id="Vorlage_Art">
                            <textarea class="visibility" name="Vorlage_Text" class="editor" id="Vorlage_Text">
                            </textarea>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>
<?php include('scripts.html'); ?>
<script>
    $(document).ready(function () {


        $(function () {
//        changes the active collapse class to 'on' for changing the text to bold
            $('.panel-heading a').click(function () {
                $(this).toggleClass('on');
            });

        });

        $(function () {
            $('.nav-item').click(function (e) {
                e.preventDefault();
                $(this).tab('show');
            });
        });

    });


</script>
</body>

</html>