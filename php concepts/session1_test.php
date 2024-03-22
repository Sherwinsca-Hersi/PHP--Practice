<?php
session_start();

$_SESSION['firstname']="Abdul";
$_SESSION['lastname']="Kapoor";
echo "My name is ". $_SESSION['firstname']."  ".  $_SESSION['lastname'].".I am Good.";
// session_destroy();
// unset($_SESSION['lastname']);

