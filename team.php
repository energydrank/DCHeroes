<?php
  /*Preparing a variable to know at what team we are*/
  /*We need to know this if we want to let the loop know where the list items need to link to*/
  $currentTeam = 1;

  /*Preparing the sql query*/
  $getTeams = "SELECT * FROM teams";
  /*Executing the sql statement*/
  $resultGetTeams = $conn->query($getTeams);

  /*Looping through all the query results*/
  while($output = $resultGetTeams->fetch_assoc()){
    /*The ['TEAM_NAME'] is how you print the query result*/
    if($currentTeam == 1){
      echo "<ul>"."<a href='index.php?teamid=1&heroid=$_GET[heroid]'>".$output['TEAM_NAME']."</a>"."</ul>";
    } else if($currentTeam == 2){
      echo "<ul>"."<a href='index.php?teamid=2&heroid=$_GET[heroid]'>".$output['TEAM_NAME']."</a>"."</ul>";
    } else if($currentTeam == 3){
      echo "<ul>"."<a href='index.php?teamid=3&heroid=$_GET[heroid]'>".$output['TEAM_NAME']."</a>"."</ul>";
    } else if($currentTeam == 4){
      echo "<ul>"."<a href='index.php?teamid=4&heroid=$_GET[heroid]'>".$output['TEAM_NAME']."</a>"."</ul>";
    } else if($currentTeam == 5){
      echo "<ul>"."<a href='index.php?teamid=5&heroid=$_GET[heroid]'>".$output['TEAM_NAME']."</a>"."</ul>";
    }
    /*Increase the variable to let the script know we are at the next team*/
    $currentTeam = $currentTeam + 1;
  }
?>
