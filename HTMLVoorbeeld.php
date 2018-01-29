<!-- Note: This is just an Example of the layout because i didn't understand the PHP part -->
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

	<header id="header">
		<img src="img/DCheroes.png" id="logo"/>
    <h1 id="headingtext">DC Heroes</h1>
	</header>

	<div id="main-container">

		<div id="main-left">
      <div id="TeamContainer">
        <h1>Teams</h1>
        <h3>Justice League</h3>
        <h3>Legion of Super-Heroes</h3>
        <h3>Marvel Family</h3>
        <h3>Suicide Squad</h3>
        <h3>Team Titans</h3>
        </ul>
      </div>
		</div>

		<div id="main-center">
      <h1>Heroes</h1>
        <div id="HeroContainer">
          <img id="ares" src="img/heroes/ares.jpg" />
            <h2>Ares</h2>
            <p>This is some Random Info about Ares</p>
      </div>
      <div id="HeroContainer2">
        <img id="pandora" src="img/heroes/pandora.jpg" />
          <h2>Pandora</h2>
          <p>This is some Random Info about Pandora</p>
        </div>
		</div>

		<div id="main-right">
      <div id="HeroesDetailContainer">
        <div id="TopDetail">
        <img src="img/heroes/ares.jpg" id="DetailAres">
      </div>
      <div id="BottomDetail">
        <h1 id="AresHeading">Ares</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h2 id="Lorem"> This is just to show that i can get the HTML/CSS right but i just don't get the PHP Part of this Project Without real explanation</h2>
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
    					<input type="hidden" name="heroId" value="<?php echo $heroId; ?>"/>
    				</div>
    			</fieldset>
    		</form>
      </div>
		</div>
	</div>
</body>
</html>
