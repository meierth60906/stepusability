<!-- Seiteninhalt aus Datenbank laden on Page Load-->

$( function loadScenarios() {
    $.ajax({
        type: 'post',
        data: 'utid='+pageId,
        url: '../logic/loadScenario.php',
        success: function (response) {//response is value returned from php (for your example it's "bye bye"
            scenarioContainer.append(response);
        }
    });
});

$( function loadTaskOnlys() {
    $.ajax({
        type: 'post',
        data: 'utid='+pageId,
        url: '../logic/loadTaskOnlys.php',
        success: function (response) {//response is value returned from php (for your example it's "bye bye"
            scenarioContainer.append(response);
        }
    });
});

$( function loadConclusion() {
    $.ajax({
        type: 'post',
        data: 'utid='+pageId,
        url: '../logic/loadConclusion.php',
        success: function (response) {//response is value returned from php (for your example it's "bye bye"
            conclusionContainer.append(response);
        }
    });
});

$( function loadPostSession() {
    $.ajax({
        type: 'post',
        data: 'utid='+pageId,
        url: '../logic/loadPostSession.php',
        success: function (response) {//response is value returned from php (for your example it's "bye bye"
            postSessionContainer.append(response);
        }
    });
});

$( function loadTasks() {
    $.ajax({
        type: 'post',
        data: 'utid='+pageId+'&scenarioid='+scenarioId,
        dataType: 'json',
        url: '../logic/loadTasks.php',
        success: function (response) {//response is value returned from php (for your example it's "bye bye"
            //var scenarioId = response.szenarioId;
            alert(response.szenarioid);
            //var scenario = $(".scenario").find("[data-id='" + scenarioId + "']");

            //scenario.append(response.echo);
        }
    });
});