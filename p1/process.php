<?php

session_start();

//Store input from form and forward to controller
$_SESSION['inputString'] = $_REQUEST['string'];

//Redirect
header('Location: index.php');