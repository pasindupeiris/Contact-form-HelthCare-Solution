<?php

session_start();
//remove all session
session_unset();
session_destroy();

header("Location:index.php");

?>