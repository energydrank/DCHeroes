<?php
 $heroesDetail = "SELECT * FROM Heroes where HERO_ID=".$_GET['heroid']."";
 $queryHeroesDetail = $conn->query($heroesDetail);
 $heroDetail = $queryHeroesDetail->fetch_assoc();
 ?>
