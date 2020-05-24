<?php include ("class/classes.php"); ?>

<?php

include "view/menu.php";

if (!$_GET){
include "view/index.php";

}
 else {
	$pg = $_GET["act"];
	include "view/$pg.php";
	

}


?>
