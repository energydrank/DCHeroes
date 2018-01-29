<?php
include_once "Connect.php";
?>

<!-- Note: Ik snap echt niks van de PHP, Knocker ga alstjeblieft gewoon over naar nederlands zodat je het normaal kan uitleggen want bijna niemand snapt er iets van, Bedankt-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="description" content="DC Heroes">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>DC Heroes</title>
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet" type="text/css" />

  <!-- Default stylesheet -->
  <link href="css/default.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<?php

			?>
	<header id="header">
		<img src="img/DCheroes.png" id="logo"/>
    <h1 id="headingtext">DC Heroes</h1>
	</header>

	<div id="main-container">

		<div id="main-left">
      <div id="TeamContainer">
        <h1>Teams</h1>
          <?php include_once "team.php"; ?>
      </div>
		</div>

		<div id="main-center">
      <h1>Heroes</h1>
      <ul>
        <?php include_once "Heroes.php"; ?>
      </div>
      </ul>
		</div>

		<div id="main-right">
      <?php
       include_once "DetailQuery.php";
       ?>
      <div id="HeroesDetailContainer">
        <div id="TopDetail">
        <img src="img/heroes/<?php echo $heroDetail['HERO_IMAGE']; ?>" id="DetailAres">
      </div>
      <div id="BottomDetail">
        <h1 id="AresHeading"> <?php echo $heroDetail['HERO_NAME']; ?></h1>
        <h3 id="HeroDesc"> <?php echo $heroDetail['HERO_DESCRIPTION']; ?></h3>
        <h1 class="HeroPower">Powers</h1>
        <h3 class="HeroPower"> <?php echo $heroDetail['HERO_POWERS']; ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="frmRate">
          <fieldset>
            <div class="rate">
              <input type="radio" id="rating10" name="rating" value="10" />
              <label class="lblRating" for="rating10" title="5 stars"></label>

                <input type="radio" id="rating9" name="rating" value="9" />
                <label class="lblRating half" for="rating9" title="4 1/2 stars"></label>

                <input type="radio" id="rating8" name="rating" value="8" />
                <label class="lblRating" for="rating8" title="4 stars"></label>

                <input type="radio" id="rating7" name="rating" value="7"  />
                <label class="lblRating half" for="rating7" title="3 1/2 stars"></label>

                <input type="radio" id="rating6" name="rating" value="6" />
                <label class="lblRating" for="rating6" title="3 stars"></label>

                <input type="radio" id="rating5" name="rating" value="5" />
                <label class="lblRating half" for="rating5" title="2 1/2 stars"></label>

                <input type="radio" id="rating4" name="rating" value="4" />
                <label class="lblRating" for="rating4" title="2 stars"></label>

                <input type="radio" id="rating3" name="rating" value="3" />
                <label class="lblRating half" for="rating3" title="1 1/2 stars"></label>

                <input type="radio" id="rating2" name="rating" value="2" />
                <label class="lblRating" for="rating2" title="1 star"></label>

                <input type="radio" id="rating1" name="rating" value="1" />
                <label class="lblRating half" for="rating1" title="1/2 star"></label>

                <input type="radio" id="rating0" name="rating" value="0" />
                <label class="lblRating" for="rating0" title="No star"></label>
            </div>
            <div class="divSubmit">
              <input type="submit" name="submitRating" value="Rate Hero"/>
              <input type="hidden" name="heroId" value="<?php echo $heroid; ?>"/>
            </div>
          </fieldset>
        </form>
        <form id="Comment" action="" method="post">
          <input type="text" id="commentTextbox" required />
          <input type="hidden" value="heroid" />
          <input type="hidden" value="teamid" />
          <input type="submit" name="SubmitComment" value="POST" />
        </form>
      </div>
    </div>
		</div>
	</div>
</body>
</html>

<?
header(index.php?heroId=&teamId=);
?>
