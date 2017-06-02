var scenarioContainer = $(".scenario-container");
var postSessionContainer = $(".postSession-container");
var conclusionContainer = $(".conclusion-container");


function createTask(event) {

    var parentScenario = $(event).closest(".scenario");
    var taskContainer = parentScenario.find(".task-container");

    var scenarioId = parentScenario.data('id');

    $.ajax({
        data: 'utid='+pageId+'&scenarioid='+scenarioId,
        type: 'post',
        url: '../logic/insertTask.php',
        success: function (response) {//response is value returned from php (for your example it's "bye bye"
            taskContainer.append(response);
        }
    });



}

function createTaskOnly() {

    $.ajax({
        data: 'utid='+pageId,
        type: 'post',
        url: '../logic/insertTaskOnly.php',
        success: function (response) {//response is value returned from php (for your example it's "bye bye"
            scenarioContainer.append(response);
        }
    })

}



function createConclusionQuestion(event) {

    function insideCon() {
        return "<li class='task item-hover'>" +
            "<div class='row p-3'>" +
            "<div class='col-lg-12'>" +
            "<a href='#testaufgaben' onclick='editCcQuestion()' data-toggle='tooltip' data-placement='bottom' title='Frage bearbeiten' class='button-addTask link-noblue'>" +
            "<span class='pr-2 icon-question icon-align text-muted'></span>Abschlussfrage" +
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
    $.ajax({
        data: 'utid='+pageId,
        type: 'post',
        url: '../logic/insertScenario.php',
        success: function (response) {//response is value returned from php (for your example it's "bye bye"
            scenarioContainer.append(response);
        }
    });

}



function createConclusion() {

    if (!(conclusionContainer.find('.conclusionRubrik').length !== 0)) {
        $.ajax({
            data: 'utid='+pageId,
            type: 'post',
            url: '../logic/insertConclusion.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                conclusionContainer.append(response);
            }
        })
    } else {
        alert("Sie haben bereits eine Abschlussfragen-Rubrik erstellt.")
    }
}

function createPostSession() {

    if(!(postSessionContainer.find('.postSessionRubrik').length !== 0)) {
        $.ajax({
            data: 'utid='+pageId,
            type: 'post',
            url: '../logic/insertPostSession.php',
            success: function (response) {//response is value returned from php (for your example it's "bye bye"
                postSessionContainer.append(response);
            }
        })

    } else {
        alert("Sie haben bereits eine Post-Session-Interview-Rubrik erstellt.");
    }

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