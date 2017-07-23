<!--  TaskForm  -->
<div class="row">

    <div class="col-lg-12 pl-0 pl-md-3 pr-0 pr-md-3">

        <?php

                                $conn = oci_connect('studi131', 'studi131', '//dbcluster.cs.ohm-hochschule.de:1521/oracle.ohmhs.de');
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
</div>