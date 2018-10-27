<?php 
    include_once ("../lib/Session.php");
	Session::checkAdminSession();
    include_once ("../lib/Database.php");
    include_once ("../helpers/Format.php");
	$db  = new Database();
	$fm  = new Format();
	
?>
<?php