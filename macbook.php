<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
	<link rel="icon" href="logo.png" type="image/icon type">
	<link rel="stylesheet" type="text/css" href="productcss.css">
	<link rel="stylesheet" type="text/css" href="slideshowcss.css">

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script type="text/javascript" src="slideshowjs.js"></script>
	<script type="text/javascript">
		function textbox(){
			if(countcomment%2==0){
				document.getElementById('inp').style.display="inline-block";
				document.getElementById('send').style.display="inline-block";
				document.getElementById('para').style.display="block";
			}
			else{
				document.getElementById('inp').style.display="none";
				document.getElementById('send').style.display="none";
				document.getElementById('para').style.display="none";
			}
			countcomment++;
		}
		var countcomment=0;
		function comment(){
    		var a=document.getElementById('inp').value;
    		if(a!=""){
    			document.getElementById('para').innerHTML+=a+'<br><hr>';
    			document.getElementById('inp').value="";
			}
		}


		function show(str){
			document.getElementById(str).style.display="block";
		}
		function cancel(str){
		document.getElementById(str).style.display="none";
		}
	</script>
</head>
<body>
	<div id="mobile-header">
		<span onclick="show('search')">
			<i class="material-icons">search</i></a>
		</span>
		<span>
			<a id="ss" href="selfshare.php"> self share</a>
		</span>
		<span>
			<i onclick="show('menu')" class="material-icons">menu</i>
			<button onclick="show('menu')">
				Menu
			</button>
		</span>
	</div>
	<div id="menu" class="container">
		<div id="innermenu">
			<span class="close" onclick="cancel('menu')">&#10006;</span>
			<br>
			<a href="login.php" target="_blank">Login</a>
			<br><br>
			<a href="register.php" target="_blank">Register</a>
			<br><br>
			<hr>
			<br>
		
			<a href="selfshare.html" target="_blank">Home
			<i class="material-icons">home</i></a>
			<br><br>
			<span onclick="show('search')" style="cursor: pointer;">Product Search</span>
			<i onclick="show('search')" class="material-icons">search</i>
			<div id="lower">
				<img src="logo.png">
				<span>
					Self Share
				</span>
			</div>
		</div>
	</div>

	<div id="search" class="container">
		<div id="innersearch">
			<span onclick="cancel('search')" class="close">&#10006;</span>
			<input type="text" name="search" id="product_search" placeholder="What are you looking for?" autofocus>
			<br>
			<input type="text" name="search2" id="location" placeholder="Location">
			<br>
			<button id="searchbutton">Search</button>
		</div>
	</div>

	<header>
		<a href="selfshare.php"><img src="logo.png" height="32px" width="32px"></a>
		<a id="ss" href="selfshare.php"> self share</a>
		<input type="text" name="search" placeholder="what are you looking?">
		<span><a href=""><i class="material-icons">search</i></a></span>
		<a href="login.php"><button id="login">Login</button></a>
		<a href="register.php"><button id="register">Register</button></a>
	</header>
	<aside>
		<img src="boy1.jpg" height="75px" width="75px">
		<h1>&#8377;<span id="price">500</span></h1>
		<span>+&#8377;<span id="extra">100</span> per extra day</span>
		<hr width="95%">
		<h2>Manpreet</h2>
		member since 2017<br>
		Usually responds within few days<br>
		27 share<br>verified product<br>
		<button onclick="show('rentcont')">Consultation and rent</button>
	</aside>

	<footer>
		<img src="boy1.jpg" height="50px" width="50px">
		<span id="user"><b>Manpreet</b></span>
		<button onclick="show('rentcont')">Consultation and rent</button>
	</footer>
	<div id="mainproduct">
			<div class="slideshow-container">

		  <!-- Full-width images with number and caption text -->
		  <div class="mySlides fade">
		    <div class="numbertext">1 / 3</div>
		    <img src="macbook.jpg" style="width:100%">
		  </div>

		  <div class="mySlides fade">
		    <div class="numbertext">2 / 3</div>
		    <img src="m2.jpg" style="width:100%">
		    
		  </div>

		  <div class="mySlides fade">
		    <div class="numbertext">3 / 3</div>
		    <img src="m3.jpg" style="width:100%">
		    
		  </div>

		  <!-- Next and previous buttons -->
		  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		  <a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>
		<br>

		<!-- The dots/circles -->
		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		</div>
		<h2>Apple Macbook on rent</h2>
		<span id="showprice">
			<h1>&#8377;<span id="price">500</span></h1>
			<span>+&#8377;<span id="extra">100</span> per extra day</span>
		</span>
		<p>
			A best conditionapple macbook is availble for rent. Renting price is very low  <br><br><fieldset> <b>Additional information</b><br><br>All new 2017 Apple MacBook Air<br>1.8GHz Intel Core i5 processor
            <br>8GB LPDDR3 RAM, 128GB Solid State hard drive<br>13.3-inch screen, Intel HD Graphics 6000
            <br>MacOS Sierra operating system<br>1.35kg laptop
            <br>1440x900 pixels per inch with support for millions of colors,720p FaceTime HD camera<br></fieldset>
		</p><br><br>

		<span onclick="textbox()" id="comment">Comments</span><br>
		<input type="textarea" id="inp" autofocus placeholder="Enter comment">
		<input type="button" id="send" value="send" onclick="comment()"><br>
		<p id="para"></p>
		<h2>Location</h2>
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d55558.28653239838!2d75.4204829103049!3d29.50490461275144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1563817685211!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div id="rentcont" class="container">
		<div id="rent">
			<span class="close" onclick="cancel('rentcont')">&#10006;</span>
			<table>
			<form>
				<tr>
				<td><label for="dates">Start date</label></td>
				<td><label for="days">Days of use</label><br></td>
				</tr>
				<tr>
				<td><input type="date" id="dates"></td> 
				<td><input type="number" id="days" value="1"></td>
				</tr>
			</form>
			</table>
			<br>
			<span id="price">Price Indication</span><br>
			<span id="rate">&#8377;500</span><br>
			<span class="grey">+&#8377; 2.25 service and warranty</span>
			<br>
			<hr><br>
			<button id="payment"><i class="material-icons" style="position: relative;top:6px;">add_circle</i>Add payment method</button>
			<br><br><hr>
			<span id="a1">You only pay if rent continues.</span>
			<br><hr><br><br>
			<input type="checkbox">Immediately also place a call for other neighbors to increase my chances
			<br><br><br>
			<button id="chat">chat to consult</button>
			<br><br>
			<span class="grey">You automatically receive each other's phone and address if (s)he accepts the match</span><br><br>
			
		</div>
	</div>
	<script type="text/javascript">
		var modal3=document.getElementById('rentcont');
		var modal2=document.getElementById('menu');
		var modal1=document.getElementById('search');
		
			window.onclick = function(event) {
	    		if (event.target == modal3) {
	     	  	 	modal3.style.display = "none";
	   			}
			}
		
		
			window.onclick = function(event) {
	    		if (event.target == modal2) {
	     	  	 	modal2.style.display = "none";
	   			}
			}
		
		
			window.onclick = function(event) {
	    		if (event.target == modal1) {
	     	  	 	modal1.style.display = "none";
	   			}
			}
		
	</script>
</body>
</html>