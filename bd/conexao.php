<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "agenda";

// Create connection
$conexao= mysqli_connect($servername, $username, $password,$dbname );
// Check connection
if (!$conexao) {
  die("Connection failed: " . mysqli_connect_error());
}