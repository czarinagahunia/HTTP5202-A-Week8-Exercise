<?php
//destroy the session variable
session_start();

session_destroy();

header("Location:index.php");

?>