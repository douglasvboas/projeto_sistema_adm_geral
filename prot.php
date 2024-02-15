<?php  session_start();
if (!(isset($_SESSION[login]) AND (isset($_SESSION[cod])))){
header("location:index.php");
}

?>