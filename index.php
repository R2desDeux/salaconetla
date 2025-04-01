<?php
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    }
    else {
        $page ="accueil";
		
    }


    include("header.php");
    include("$page.php");  //faille de sécurité !!!
    include("footer.php");
?>
