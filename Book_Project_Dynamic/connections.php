<?php

$conn = mysqli_connect('localhost','root','','book');
if(!$conn){
    die('Error '.mysqli_connect_error());

}