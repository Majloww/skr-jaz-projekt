<?php
function dbconnect()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ukf-eshop";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  return $conn;
}
