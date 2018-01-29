<?php
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

//Teams database
$teams = array();
while ($row = $result->fetch_assoc()) {
  $teams[] = $row;
}

$query2 = "select * from heroes";

$teamId = false;
if(isset($_GET['teamId']))
{
  $teamId = $_GET['teamId'];
  $query2 .= " WHERE TEAM_ID = " . $teamId;
}
//Heroes Database
$result2 = $conn->query($query2) or die($conn->error);

$heroes = array();
while ($row2 = $result2->fetch_assoc()) {
  $heroes[] = $row2;
}
//Heroes Detail Database
$query3 = "select * from heroes";

$teamId = false;
if(isset($_GET['heroId']))
{
  $heroId = $_GET['heroId'];
  $query3 .= " WHERE HERO_ID = " . $heroId;
}
$result3 = $conn->query($query2) or die($conn->error);

$heroesDetail = array();
while ($row3 = $result3->fetch_assoc()) {
  $heroesDetail[] = $row3;
}

/*Set the get variables*/
if(isset($_GET['teamid'])){
  if(!isset($_GET['heroid'])){
    header('location: index.php?teamid=1&heroid=1');
    exit;
  }
} else{
  header('location: index.php?teamid=1&heroid=1');
  exit;
}
/*
echo "<pre>";
var_dump($teams);
echo "</pre>";
die("ffdfdfdfdfdfdfd");
*/
?>
