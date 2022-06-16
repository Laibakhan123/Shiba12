<?php
session_start();
if ($_SESSION['ingelogd'] != true){
header ("Location: admin.php");
}
?>