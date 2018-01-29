<?php
$review = $_POST["comment"];
$hero = $_POST["Hero"];
$team = $_POST["Team"];

$servername = "localhost";
$username = "admin";
$password = "";
$databasename = "dc_heroes";
//create connection
$conn = new mysqli($servername, $username, $password, $databasename);

//check connection
if ($conn-> connect_error) {
  die("connection failed:" . $conn->connect_error);
}
$query = "select * from teams";
$result = $conn->query($query);

$queryInsert = "INSERT INTO ratings(comment, HERO_ID, HERO_RATING) VALUES($review, $hero, )"
 ?>
