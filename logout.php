<?php

$conn = mysqli_connect("localhost", "root", "", "customers");
session_start();
session_unset();
session_destroy();
header("Location://localhost/nursery/index.php"); 
?>