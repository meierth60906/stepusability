<?php

$conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid = oci_parse($conn, "SELECT * FROM PERSON order by NAME");
oci_execute($stid);



?>



<div class="col-4" id="secondSidebarContacts">
    <!-- Suchleiste -->
    <div class="contact-sidebar">

         <div class="row">
                <div class="col-12">
                    <div class="input-group filter-contacts">
                        <div class="input-group-btn search-panel">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                <span id="search_concept" class="py-2">Filtern nach</span> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#Favoriten">Favoriten</a></li>

                                <li><a href="#Probanden">Probanden</a></li>
                                <li><a href="#Team">Team</a></li>

                                <li><a href="#Kunden">Kunden</a></li>


                                <li><a href="#all">Alle</a></li>
                            </ul>
                        </div>
                        <input type="hidden" name="search_param" value="all" id="search_param">
                        <input type="text" class="form-control py-2" name="x" placeholder="Kontakt suchen" style="border-color: #ddd">
                        <span class="input-group-btn">
                    <button class="btn btn-default py-3" type="button"><span class="icon-search"></span></button>
                </span>
                    </div>
                </div>
         </div>
        <div class="row">
                <div class="col-12" id="contactlist-container">
                        <ul>
                            <?php

                            //$fetchRowCount=oci_fetch_row($stid);

                            //if($fetchRowCount){
                                while($row=oci_fetch_array($stid,OCI_ASSOC+OCI_RETURN_NULLS)){

                                    echo"<li><a class=\"row card-item py-3 nav-link\" href=\"view_contact.php?id=".$row['ID']."\">".$row['NAME'].", ".$row['VORNAME']."</a></li>";
                                }
                            //}
                            ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <!--<div class="container">
        <div class="row">
            <div class="col-lg-12 col-lg-offset-1">
                <span class="icon-search">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" id="inputSearch" placeholder="Suche">

                    </div>
            </div>
        </div>
    </div>-->
    <!-- Kontaktliste -->




