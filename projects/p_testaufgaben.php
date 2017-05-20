<div class="tab-pane" id="testaufgaben" role="tabpanel">
    <div class="row inner-body">
        <div id="sidebar-aufgaben" class="col-lg-3 c-grey-bg">
            <div class="spc-container row pt-3 mt-3">
                <div class="col-6 headline">
                    Aufgabenliste
                </div>
                <div class="col-6 text-right">
                    <!--                                Menu rechts mit Dropdown-->
                    <a href="#" data-toggle="dropdown" class="link-noblue"><span class="icon-plus-1 icon-align"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right links-noblue">
                        <a class="new-task" onclick="createTaskOnly(); return false;" href="#testaufgaben"><li>Testaufgabe</li></a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="new-scenario" onclick="createScenario(); return false;" href="#testaufgaben"><li>Szenario</li></a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="new-postsession" onclick="createPostSession(); return false;" href="#testaufgaben"><li>Post Session Interview</li></a>
                        <div class="dropdown-divider m-0"></div>
                        <a class="new-conclusion" onclick="createConclusion(); return false;" href="#testaufgaben"><li>Abschlussfragen</></a>
                    </ul>

                </div>
                <div class="col-lg-12"><hr class="mb-3"></div>

                <ol class="scenario-container col-lg-12 links-noblue mb-0"></ol>
                <ol class="postSession-container col-lg-12 links-noblue mb-0"></ol>
                <ol class="conclusion-container col-lg-12 links-noblue mb-0"></ol>


            </div>
        </div>

        <div id="content-aufgaben" class="offset-lg-3 col-lg-9 py-3">

        </div>

    </div>
</div>