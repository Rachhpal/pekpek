<?php 

error_reporting(E_ALL);
ini_set('display_error', true);
ini_set('html_errors', false);

$username = $_GET['username'];
$password = $_GET['password'];

$username1 = "punjabi";
$password1 = "jutt";


if($username == $username1 && $password == $password1)
{
    echo "You good!";
}
else if ($username == "")
{
    echo "Put your username in you Idiot! ";
}
else 
{
    echo "Wrong!";
}
?>