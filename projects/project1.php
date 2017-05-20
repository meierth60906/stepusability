<!DOCTYPE html>
<html lang="de">
<head>
    <title>Projekt 1 | step</title>

    <?php include ('head.html'); ?>
</head>
<body id="body-singleproject">

<?php include ('navigation.html'); ?>

<section id="singleproject" class="page-content">
    <div class="page-top fixed-top container-fluid">
        <div class="row titlebar px-3 py-3">
            <div class="col-12">
                <h1>Projekt 1</h1>
            </div>
        </div>
        <div class="row project-tabs ">
            <div class="col-md-12 p-0">
                <ul id="tabs" class="px-1 px-md-4 nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a class="nav-link active" href="#allgemein" data-target="#allgemein" role="tab" data-toggle="tab"><span class="icon-align icon-folder"></span><span class="pl-2 hidden-sm-down">Allgemein</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testaufgaben" data-target="#testaufgaben" role="tab" data-toggle="tab"><span class="icon-align icon-list"></span><span class="pl-2 hidden-sm-down">Testaufgaben</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projektunterlagen" data-target="#projektunterlagen" role="tab" data-toggle="tab"><span class="icon-align icon-file-text"></span><span class="pl-2 hidden-sm-down">Projektunterlagen</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#evaluation" data-target="#evaluation" role="tab" data-toggle="tab"><span class="icon-align icon-check-1"></span><span class="pl-2 hidden-sm-down">Evaluation</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">



        <!--        TABS -->



        <div class="tab-content">
            <!--            Allgemein -->a
            <?php include ('p_allgemein.php'); ?>
            <!--            Testaufgaben -->
            <?php include ('p_testaufgaben.php'); ?>
            <!--            Projektunterlagen -->
            <?php include ('p_unterlagen.php'); ?>
            <!--            Evaluation -->
            <?php include ('p_evaluation.php'); ?>
        </div>
    </div>

</section>

<?php include ('scripts.html'); ?>
<script>

    var h = $(window).height();
    var w = $(window).width();
    var header_h = $(".page-top").height();
    var innerbody = $(".inner-body");
    var nav = $(".sidebar-wrapper");

    //    Initial Functions
    //innerbody.css("padding-top", header_h);

    //Nav Width
    var nav_w = nav.width();

    //Sidebars
    var sidAllg = $("#sidebar-allgemein");
    var sidAufg = $("#sidebar-aufgaben");
    var sidUnt = $("#sidebar-unterlagen");
    var sidEval = $("#sidebar-eval");

    //Contents
    var conAllg = $("#content-allgemein");
    var conAufg = $("#content-aufgaben");
    var conUnt = $("#content-unterlagen");
    var conEval = $("#content-eval");



    $(function() {
        if(w > 991) {
            //Set Sidebar Height
            sidAllg.height(h-header_h);
            sidAufg.height(h-header_h);
            sidUnt.height(h-header_h);
            sidEval.height(h-header_h);

            //Set Content Height
            conAllg.height(h-header_h - 32);
            conAufg.height(h-header_h - 32);
            conUnt.height(h-header_h - 32);
            conEval.height(h-header_h - 32);

            //Set Content Width
            conAllg.width(w - sidAllg.width() - 60 - nav_w);
            conAufg.width(w - sidAufg.width() - 60 - nav_w);
            conUnt.width(w - sidUnt.width() - 60 - nav_w);
            conEval.width(w - sidUnt.width() - 60 - nav_w);
        }
    });


    //Function for Window Resize
    $(window).on('resize', function(){
        //Window Height
        h = $(window).height();
        w = $(window).width();
        nav_w = nav.width();

        if(w > 991) {
            //Set Sidebar Height
            sidAllg.height(h - header_h);
            sidAufg.height(h - header_h);
            sidUnt.height(h - header_h);
            sidEval.height(h-header_h);

            //Set Content Height
            conAllg.height(h - header_h - 32);
            conAufg.height(h - header_h - 32);
            conUnt.height(h - header_h - 32);
            conEval.height(h - header_h - 32);

            //Set Content Width
            conAllg.width(w - sidAllg.width() - 60 - nav_w);
            conAufg.width(w - sidAufg.width() - 60 - nav_w);
            conUnt.width(w - sidUnt.width() - 60 - nav_w);
            conEval.width(w - sidUnt.width() - 60 - nav_w);
        }
    });

</script>

<script src="../js/jquery-sortable-min.js"></script>
<script>
    /*
     var h = $(window).height();
     var header_h = $(".page-top").height();
     var innerbody = $(".inner-body");
     var aufgabenfeld = $(".aufgabenfeld");

     var container_allg = $("#content-allgemein");
     var sidebar_allg = $("#sidebar-allgemein");

     var container_aufg = $("#content-aufgaben");
     var sidebar_aufg = $("#sidebar-aufgaben");

     var container_unterlagen = $("#content-unterlagen");
     var sidebar_unterlagen = $("#sidebar-unterlagen");






     $(".protokollant-container").height(h - aufgabenfeld.height() - header_h);

     if(container_aufg.height() > (h - header_h) {
     sidebar_aufg.height(container_aufg);
     } else {
     sidebar_aufg.height(h - header_h);
     }

     if(container_allg.height() > (h - header_h) {
     sidebar_allg.height(container_allg);
     } else {
     sidebar_allg.height(h - header_h);
     }



     //    Functions on Window Resize
     $( window ).resize( function(){

     $(".protokollant-container").height(h - aufgabenfeld.height() - header_h);



     if(container_allg.height() > (h - header_h) {
     sidebar_allg.height(container_allg);
     } else {
     sidebar_allg.height(h - header_h);
     }

     if(container_aufg.height() > (h - header_h) {
     sidebar_aufg.height(container_aufg);
     } else {
     sidebar_aufg.height(h - header_h);
     }
     });

     */

</script>

<!-- Seiteninhalt aus Datenbank laden on Page Load-->
<script>
    $( function loadSections() {
        $.ajax({
            url: 'viewScenario.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                scenarioContainer.append(response);
            }
        });
    })
</script>

<!-- Rubriken erstellen -->
<script>
    var scenarioContainer = $(".scenario-container");
    var postSessionContainer = $(".postSession-container");
    var conclusionContainer = $(".conclusion-container");

    function createTask(event) {

        function insideTask() {
            return "<li class='task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#testaufgaben' onclick='editTask()' data-toggle='tooltip' data-placement='bottom' title='Aufgabe bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-list icon-align text-muted'></span>Aufgabe 1" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }


        var parentScenario = $(event).closest(".scenario");
        var taskContainer = parentScenario.find(".task-container");
        taskContainer.append(insideTask);

    }

    function createTaskOnly() {

        function insideTask() {
            return "<li class='element-allgemein mb-3 task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#testaufgaben' onclick='editTask()' data-toggle='tooltip' data-placement='bottom' title='Aufgabe bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-list icon-align text-muted'></span>Aufgabe 1" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }


        scenarioContainer.append(insideTask);

    }

    function createPostSessionQuestion(event) {

        function insidePSQ() {
            return "<li class='task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#testaufgaben' onclick='editPsQuestion()' data-toggle='tooltip' data-placement='bottom' title='Frage bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-comment icon-align text-muted'></span>Post-Session-Interview-Frage" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }

        var parentPSQ = $(event).closest(".postSessionRubrik");
        var psqContainer = parentPSQ.find(".ps-question-container");
        psqContainer.append(insidePSQ);

    }

    function createConclusionQuestion(event) {

        function insideCon() {
            return "<li class='task item-hover'>" +
                "<div class='row p-3'>" +
                "<div class='col-lg-12'>" +
                "<a href='#testaufgaben' onclick='editCcQuestion()' data-toggle='tooltip' data-placement='bottom' title='Frage bearbeiten' class='button-addTask link-noblue'>" +
                "<span class='pr-2 icon-question icon-align text-muted'></span>AbschlussFrage" +
                "</a>" +
                "</div>" +
                "</div>" +
                "</li>";
        }

        var parentCon = $(event).closest(".conclusionRubrik");
        var conContainer = parentCon.find(".cc-question-container");
        conContainer.append(insideCon);

    }

    function createScenario() {

        function insideScenario(response) {


        }

        $.ajax({
            url: 'viewScenario.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                scenarioContainer.append(response);
            }
        });

    }

    function createPostSession() {

        function insidePostSession() {
            return "<li class='postSessionRubrik element-allgemein mb-3'>" +
                "<div class='row p-3'>" +
                "<div class='col-10'>Post Session Interview</div>" +
                "<div class='col-2 text-right'>" +
                "<a href='#testaufgaben' onclick='createPostSessionQuestion(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Interview-Frage' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>" +
                "</div>" +
                "</div>" +
                "<ol class='ps-question-container pl-0'>" +
                "<hr class='m-0'>" +
                "</ol>" +
                "</li>";
        }

        if(!(postSessionContainer.find('.postSessionRubrik').length !== 0)) {

            postSessionContainer.append(insidePostSession);

        } else {
            alert("Sie haben bereits eine Post-Session-Interview-Rubrik erstellt.");
        }

    }

    function createConclusion() {

        function insideConclusion() {
            return "<li class='conclusionRubrik element-allgemein mb-3'>" +
                "<div class='row p-3'>" +
                "<div class='col-10'>Abschlussfragen</div>" +
                "<div class='col-2 text-right'>" +
                "<a href='#testaufgaben' onclick='createConclusionQuestion(this)' data-toggle='tooltip' data-placement='bottom' title='Neue Abschlussfrage' class='link-noblue'><span class='icon-align icon-plus-1'></span></a>" +
                "</div>" +
                "</div>" +
                "<ol class='cc-question-container pl-0'>" +
                "<hr class='m-0'>" +
                "</ol>" +
                "</li>";
        }

        if (!(conclusionContainer.find('.conclusionRubrik').length !== 0)) {
            conclusionContainer.append(insideConclusion);
        } else {
            alert("Sie haben bereits eine Abschlussfragen-Rubrik erstellt.")
        }

    }
</script>

<!-- Edits verknüpfen -->
<script>
    var contentAufgaben = $("#content-aufgaben");

    function editTask() {
        contentAufgaben.load("taskForm.html");
    }

    function editPsQuestion() {
        contentAufgaben.load("psQuestionForm.html");
    }

    function editCcQuestion() {
        contentAufgaben.load("ccQuestionForm.html");
    }

    function editScenario() {
        contentAufgaben.load("scenarioForm.html");
    }

</script>

<!-- Testaufgaben Aufgaben-Switch -->
<script>
    //    var taskForm_formGroup = $("#taskForm .form-group");
    //    var taskForm_hr = $("#taskForm .hline");
    //    var headline = $("#headline-aufgaben");
    //
    //    var radioTask = $("#radioTask");
    //    var radioPostSession = $("#radioPostSession");
    //    var radioConclusion = $("#radioConclusion");
    //
    //    var formTask = $(".formTask");
    //    var formPostSession = $(".formPostSession");
    //    var formConclusion = $(".formConclusion");
    //
    //    $(document).ready(function(){
    //        if(radioTask.is(':checked')) {
    //            headline.html("<span class='icon-align icon-list mr-2'></span>Testaufgabe");
    //            $(taskForm_formGroup).not(formTask).hide();
    //            $(taskForm_hr).not(formTask).hide();
    //            $(formTask).show();
    //        } else if (radioPostSession.is(':checked')) {
    //            headline.html("<span class='icon-align icon-comment pr-2'></span>Post-Session-Interview-Frage");
    //            $(taskForm_formGroup).not(formPostSession).hide();
    //            $(taskForm_hr).not(formPostSession).hide();
    //            $(formPostSession).show();
    //        } else if (radioConclusion.is(':checked')) {
    //            headline.html("<span class='icon-align icon-question pr-2'></span>Abschlussfrage");
    //            $(taskForm_formGroup).not(formConclusion).hide();
    //            $(taskForm_hr).not(formConclusion).hide();
    //            $(formConclusion).show();
    //        }
    //
    //        $('input[type="radio"]').click(function(){
    //            var inputValue = $(this).attr("value");
    //            var necessaryInput = $("." + inputValue);
    //            $(taskForm_formGroup).not(necessaryInput).hide();
    //            $(taskForm_hr).not(necessaryInput).hide();
    //            $(necessaryInput).show();
    //
    //            if(inputValue === "formTask") {
    //                headline.html("<span class='icon-align icon-list mr-2'></span>Testaufgabe");
    //            } else if (inputValue === "formPostSession") {
    //                headline.html("<span class='icon-align icon-comment pr-2'></span>Post-Session-Interview-Frage");
    //            } else if (inputValue === "formConclusion") {
    //                headline.html("<span class='icon-align icon-question pr-2'></span>Abschlussfrage");
    //            }
    //        });
    //    });
</script>


<script>




</script>
<script>

    // Javascript to enable link to tab
    var hash = document.location.hash;
    if (hash) {
        $('.nav-tabs a[href="'+hash+'"]').tab('show');
    }

    // Change hash for page-reload
    $('.nav-tabs a').on('shown.bs.tab', function (e) {
        window.location.hash = e.target.hash;
        if(w > 991) {
            //Set Sidebar Height
            sidAllg.height(h - header_h);
            sidAufg.height(h - header_h);
            sidUnt.height(h - header_h);
            sidEval.height(h-header_h);

            //Set Content Height
            conAllg.height(h - header_h - 32);
            conAufg.height(h - header_h - 32);
            conUnt.height(h - header_h - 32);
            conEval.height(h - header_h - 32);

            //Set Content Width
            conAllg.width(w - sidAllg.width() - 60 - nav_w);
            conAufg.width(w - sidAufg.width() - 60 - nav_w);
            conUnt.width(w - sidUnt.width() - 60 - nav_w);
            conEval.width(w - sidUnt.width() - 60 - nav_w);
        }
    });

</script>

<!-- Sortierfunktion Testaufgaben -->
<script>
    $(function  () {

        var adjustment;

        $("ol.scenario-container").sortable({
            nested: true,
            placeholderClass: 'placeholder',
            placeholder: "<li class='placeholder' style='border: 2px dashed #a9a9a9; border-radius: 5px; height: 60px;'></li>",
            isValidTarget: function ($item, container) {
                var depth = 1, // Start with a depth of one (the element itself)
                    maxDepth = 2,
                    children = $item.find('ol'); /*.first().find('li'); */


                // Add the amount of parents to the depth
                depth += container.el.parents('ol').length;

                // Increment the depth for each time a child
                while (children.length) {
                    depth++;
                    children = children.find('ol'); /*.first().find('li');*/
                }

                return depth <= maxDepth;
            },
            // animation on drop
            onDrop: function  ($item, container, _super) {

                var $clonedItem = $('<li/>').css({height: $item.height()});
                $item.before($clonedItem);
                $clonedItem.animate({'height': $item.height()});

                $item.animate($clonedItem.position(), function  () {
                    $clonedItem.detach();
                    _super($item, container);
                });

                if($item.is('.task') && $item.parent().is('.task-container')) {
                    $item.removeClass("element-allgemein mb-3");
                } else {
                    $item.addClass("element-allgemein mb-3");
                }

            },

            // set $item relative to cursor position
            onDragStart: function ($item, container, _super) {
                var offset = $item.offset(),
                    pointer = container.rootGroup.pointer;

                adjustment = {
                    left: pointer.left - offset.left,
                    top: pointer.top - offset.top
                };

                _super($item, container);
            },
            onDrag: function ($item, position) {
                $item.css({
                    left: position.left - adjustment.left,
                    top: position.top - adjustment.top
                });
            }
        });


    });
</script>

<!-- Sortierfunktion PostSession -->
<script>
    $(function () {
        $("ol.postSession-container").sortable({
            exclude: ".postSessionRubrik",
            placeholderClass: 'placeholder',
            placeholder: "<li class='placeholder' style='border: 2px dashed #a9a9a9; border-radius: 5px; height: 60px;'></li>",
            isValidTarget: function($item, container) {
                if( !$item.closest("ol").is(container.el)){
                    return false;
                    // additional rules
                } else return true;
            },
            // animation on drop
            onDrop: function  ($item, container, _super) {

                var $clonedItem = $('<li/>').css({height: $item.height()});
                $item.before($clonedItem);
                $clonedItem.animate({'height': $item.height()});

                $item.animate($clonedItem.position(), function  () {
                    $clonedItem.detach();
                    _super($item, container);
                });

            },

            // set $item relative to cursor position
            onDragStart: function ($item, container, _super) {
                var offset = $item.offset(),
                    pointer = container.rootGroup.pointer;

                adjustment = {
                    left: pointer.left - offset.left,
                    top: pointer.top - offset.top
                };

                _super($item, container);
            },
            onDrag: function ($item, position) {
                $item.css({
                    left: position.left - adjustment.left,
                    top: position.top - adjustment.top
                });
            }
        });
    })
</script>

<!-- Sortierfunktion Conclusion -->
<script>
    $(function () {
        $("ol.conclusion-container").sortable({
            exclude: ".conclusionRubrik",
            placeholderClass: 'placeholder',
            placeholder: "<li class='placeholder' style='border: 2px dashed #a9a9a9; border-radius: 5px; height: 60px;'></li>",
            isValidTarget: function($item, container) {
                if( !$item.closest("ol").is(container.el)){
                    return false;
                    // additional rules
                } else return true;
            },
            // animation on drop
            onDrop: function  ($item, container, _super) {

                var $clonedItem = $('<li/>').css({height: $item.height()});
                $item.before($clonedItem);
                $clonedItem.animate({'height': $item.height()});

                $item.animate($clonedItem.position(), function  () {
                    $clonedItem.detach();
                    _super($item, container);
                });

            },

            // set $item relative to cursor position
            onDragStart: function ($item, container, _super) {
                var offset = $item.offset(),
                    pointer = container.rootGroup.pointer;

                adjustment = {
                    left: pointer.left - offset.left,
                    top: pointer.top - offset.top
                };

                _super($item, container);
            },
            onDrag: function ($item, position) {
                $item.css({
                    left: position.left - adjustment.left,
                    top: position.top - adjustment.top
                });
            }
        });
    })
</script>

</body>

</html>