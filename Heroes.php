<?php
  /*Preparing a variable to know at what team we are*/
  /*We need to know this if we want to let the loop know where the list items need to link to*/
  $currentHero = 1;

  /*Preparing the sql query*/
  $getHeroes = "SELECT * FROM Heroes where TEAM_ID=".$_GET['teamid'].";";
  /*Executing the sql statement*/
  $resultGetHeroes = $conn->query($getHeroes);
  ?>
  <div id="HeroContainer">
  <?php
  /*Looping through all the query results*/
  while($output = $resultGetHeroes->fetch_assoc()){

  ?>

  <div id="HeroContainer">
    <img id="ares" src="img/heroes/<?php echo $output['HERO_IMAGE']; ?>" />
      <h2><?php echo $output['HERO_NAME']; ?></h2>
      <p><?php echo substr($output['HERO_DESCRIPTION'], 0, 100); ?>...</p>
      <?php echo "<a id=\"MoreInfoButton\" href=\"index.php?teamid=",$_GET['teamid'],"&heroid=",$output['HERO_ID'],"\">More Info</a>"; ?>
</div>
<?php
  }
?>
