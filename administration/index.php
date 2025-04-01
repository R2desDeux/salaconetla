<?php
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    }
    else {
        $page ="accueil";
		
    }


    include("ad_header.php");
    include("$page.php");  //faille de sécurité !!!
    include("ad_footer.php");
?>
