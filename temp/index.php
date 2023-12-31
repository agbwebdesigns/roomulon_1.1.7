<!DOCTYPE html>
<html lang="en">

	<head>

		<title>Roomulon!</title>

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="description" content="">
		<meta name="url" content="">
		<meta name="keyword" content="">

		<link rel= "stylesheet" type= "text/css" href= "styles/normalize.css" media= "screen">
		<link rel= "stylesheet" type= "text/css" href= "styles/style.css" media= "screen">
		<link rel="stylesheet" type= "text/css" href="styles/css/bootstrap.min.css"> 

	</head>

	<body>  
  
		<section class= "container-fluid cont">
		    <section class= "row row1">
		    	<div class= "roomtext col-md-4">
			    	<h1>ROOMULON 1</h1>
			    	<p id="one"></p>
			    	<p id="two"></p>
			    	<p id= "twopointfive"></p>
			    	<br>
			    	<div id= "textwindow">
			    		
			    	</div>
			    	<p id= "four"></p>
			    	<p id= "five"></p>
			    	<p id= "six"></p>
			    	<p id= "seven"></p>
		    	</div>
		    	<div id= "roomNav" class= "col-md-2">
		    		<div class= "row">
		    			<p id="three">Which way will you go?</p>
		    			<div id= "d-pad" class= "container-fluid ">
			    			<div class= "row dpadrow">
			    				<div class= "col-md-12 dpadcont">
			    					<div id= "north" class= "dpadButton">
			    						<h1>N</h1>
			    					</div>
			    				</div>
			    			</div>
			    			<div class= "row dpadrow">
			    				<div class= "col-md-6 dpadcont">
				    				<div id= "west" class= "dpadButton">
				    					<h1>W</h1>
				    				</div>
				    			</div>
				    			<div class= "col-md-6 dpadcont">
				    				<div id= "east" class= "dpadButton">
				    					<h1>E</h1>
				    				</div>
				    			</div>
			    			</div>
			    			<div class= "row dpadrow">
			    				<div class= "col-md-12 dpadcont">
			    					<div id= "south" class= "dpadButton">
			    						<h1>S</h1>
			    					</div>
			    				</div>
			    			</div>
		    			</div>
			    	</div>
			    	<div class= "row">
			    		<div class= "col-md-12 actions">
			    			<p><button class= "interact" id= "targetbutton">Target</button><button class= "interact" id= "attackbutton" disabled>Attack</button></p>
			    		</div>
			    	</div>
					<div class="row">
						<div class="col-md-12">
							<p><button class= "interact" id= "lookbutton">Look</button><button class= "interact" id= "openbutton" disabled>Open</button><button class= "interact" id= "takebutton" disabled>Take</button></p>
						</div>
					</div>
		    	</div>
				<div id="backofmap" class= "col-md-6">
		    		<div id= "mapback"></div>
				</div>
		  	</section>
		  	<section class= "row row2">
		  		<div class= "col-md-3 herostats">
		  			<h2 class= "head">Hero Stats</h2>
		  			<p id= "heroname"></p>
		  			<p id= "herohp"></p>
		  		</div>
		  		<div class= "col-md-3 herostats">
		  			<h2>Equipment</h2>
		  			<p id= "weaponline"><button class= "interact" id= "weaponbutton">Equip Weapon</button></p>
					<p id="inventory"><button class= "interact" id= "inventorybutton">Check Inventory</button><button class= "interact" id= "goldbutton">Coin Purse</button></p>
		  			<p id= "heal"><button class= "interact" id= "healbutton">Use Medpack</button></p>
		  		</div>
		  		<div class= "col-md-3 herostats skills">
		  			<h2>Hero Bonuses</h2>
		  			<div class= "row statsrowone">
		  				<div class= "col-md-3 stats">
			  				<p id= "weaponbonus"></p>
			  			</div>
			  			<div class= "col-md-3 stats">
			  				<p id= "attackskill"></p>
			  			</div>
			  			<div class= "col-md-3 stats">
			  				<p id= "armorbonus"></p>
			  			</div>
			  			<div class= "col-md-3 stats">
			  				<p id= "defenseskill"></p>
			  			</div>
			  		</div>
			  		<div class= "row statsrowtwo">
			  			<div class= "col-md-4 stats">
			  				<p id= "block"></p>
			  			</div>
			  			<div class= "col-md-4 stats">
			  				<p id= "parry"></p>
			  			</div>
			  			<div class= "col-md-4 stats">
			  				<p id= "luck"></p>
			  			</div>
		  			</div>
		  		</div>
		  	</section>

  		</section>

		<footer class= "container-fluid base"></footer>

		<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
		<script src="js/jquery.js" type="text/javascript" charset="utf-8"></script>

	</body>

</html>