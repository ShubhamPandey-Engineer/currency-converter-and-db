
<?php 
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD);
if(!$conn) { 
   die("Database connection failed: " . mysql_error()); 
}else{
   $db_select = mysqli_select_db($conn,"data");
   if (!$db_select) { 
       die("Database selection failed: " . mysqli_error()); 
   } 
   else{
}}
	?>
	
