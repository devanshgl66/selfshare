<!DOCTYPE html>
<html>
<head>
	<title>Self Share</title>
	<link rel="stylesheet" type="text/css" href="projectcss.css">
	<link rel="icon" href="logo.png" type="image/icon type">
</head>
<body>
	<?php include 'login.php'?>
	<div id="imagediv">
	<header>
		<a  href="#"><img id="logo" src="Logo copy.png"></a>
		<a id="ss"  href="#" id="home">Self Share</a>
		<a href="register.php" target="_blank"><button >Register</button></a>
		<button onclick="popup()">login</button></a>
	</header>
	<h1 id="idiom">Together Makes Us Better</h1>
	<div id="frontpageform">
		<form style="padding-left:200px"role="search" method="get" class="search-form" >
	      <input type="text" name="s" placeholder="What are you looking for..">
	      <input type="text" name="s" placeholder="Your location">
	      <input type="number" name="s" placeholder="Range(in km)">
	      <button >Search</button>
		</form>
	</div>
	<div id="sharediv">
		<p>Do You Want To Share Something</p>
		<button onclick="window.location.href = 'share.html';">Share</button>
	</div>
   </div>
	<div>
		<br><br>
		<p style="text-align:center; font-size:40px;margin:20px;color:black;opacity: 0.7;">Discover what you can borrow in your area!</p>
		<p id="mostpopularproducts" style="text-align: center;font-size: 30px; opacity: 0.7;">Most popular products</p>
	</div>
	<div>
		<table align=center class="imagetable">
			<tr class="images">
			<td><a href="macbook.php" target="_blank"><img src="macbook.jpg"></a></td>
			<td><a href="lehanga.php" target="_blank"><img src="lehanga.jpg"></a></td>
			<td><a href="waiscoat.php" target="_blank"><img src="waiscoat.jpeg"></a></td>
		    </tr>
		    <tr class="info">
		    	<td><a href="macbook.php" target="_blank"><div>  <span class="nameofproduct">Apple MacBook Air</span> <br><br> <span class="price">500.00Rs.</span> <br> <span class="perdaycharge">100.00Rs/extra day</span></div></a> </td>
		    	<td><a href="lehanga.php" target="_blank"><div>  <span class="nameofproduct">Lehanga</span> <br><br> <span class="price">1800.00Rs</span> <br> <span class="perdaycharge">1500.00Rs/extra day</span></div> </a></td>
		    	<td><a href="waiscoat.php" target="_blank"><div>  <span class="nameofproduct">Raymond Waiscoat</span> <br><br> <span class="price">200.00Rs</span> <br><span class="perdaycharge">150.00Rs/extra day</span></div></a> </td>
		    </tr>
		</table>
		

		<br><br><br><br><br><br>
		<p id="homeremedialproducts"style="text-align: center;font-size: 30px; opacity: 0.7;">Home Remedial Products</p>
		<br>
		<table align=center class="imagetable">
			<tr class="images">
			<td><a href="microwave.php" target="_blank"><img src="microwave.jpg"></a></td>
			<td><a href="waiscoat.php" target="_blank"><img src="waiscoat.jpeg"></a></td>
			<td><a href="lehanga.php" target="_blank"><img src="lehanga.jpg"></a></td>
		    </tr>
		    <tr class="info">
		    	<td><a href="microwave.php" target="_blank"><div> <span class="nameofproduct">Microave</span> <br><br> <span class="price">600.00Rs</span><br> <span class="perdaycharge">500.00Rs/extra day</span></div> </a></td>
		    	<td><a href="waiscoat.php" target="_blank"><div>  <span class="nameofproduct">Raymond Waiscoat</span> <br><br> <span class="price">200.00Rs</span><br> <span class="perdaycharge">150.00Rs/extra day</span></div></a> </td>
		    	<td><a href="lehanga.php" target="_blank"><div>  <span class="nameofproduct">Lehanga</span> <br><br> <span class="price">1800.00Rs</span> <br> <span class="perdaycharge">1500.00Rs/extra day</span></div> </a></td>
		    </tr>
		</table>
		

		<br><br><br><br><br><br>
		<p id="newlyarrived" style="text-align: center;font-size: 30px; opacity: 0.7;">Newly Arrived Products</p>
		<br>
		<table align=center class="imagetable">
			<tr class="images">
			<td><a href="macbook.php" target="_blank"><img src="macbook.jpg"></a></td>
			<td><a href="waiscoat.php" target="_blank"><img src="waiscoat.jpeg"></a></td>
			<td><a href="bike.php" target="_blank"><img src="bike.jpg"></a></td>
		    </tr>
		    <tr class="info">
		    	<td><a href="macbook.php" target="_blank"><div>  <span class="nameofproduct">Apple MacBook Air</span><br> <br> <span class="price">500.00Rs</span><br> <span class="perdaycharge">100.00Rs/extra day</span></div></a> </td>
		    	<td><a href="waiscoat.php" target="_blank"><div>  <span class="nameofproduct">Raymond Waiscoat</span> <br><br> <span class="price">200.00Rs</span><br> <span class="perdaycharge">150.00Rs/extra day</span></div></a> </td>
		    	<td><a href="bike.php" target="_blank"><div> <span class="nameofproduct">Bike</span> <br><br> <span class="price">850.00Rs</span><br> <span class="perdaycharge">700.00Rs/extra day</span></div> </a></td>
		    </tr>
		</table>
		
	</div>
	<br><br>


	
	<div id="bottomheader">
		<br><br><br><br><br>asdfguyfdsdfkkjhgfdfklkgfdfgkgffghjkjhgfghjhvccvfklkgfdfgfdllhgfdflfdfhgfgklkhgfghjkdfghjklkjhgfds
		<img align=center src="logo copy.png" style="width: 50px; height: 50px;">
		<p style="text-align: center;font-size: 40px; color: white ;" >The Best Way To Share Stuff</p>
		<br><br><br><br>
		<table align="center">
			<tr>
				<td style="padding-right: 3px;"><img src="locationimage.png" style="width:250px;height:250px ;"></td>
				<td style="padding-left: 100px;"><img src="sharing.png" style="width:300px;height:250px;"></td>
				<td style="padding-left: 20px;"><img src="conformtransaction.png" style="width:450px ;height:250px ;"></td>
			</tr>
			<tr>
				<td style="padding-left: 10px;color: white; font-size: 30px;">Search in your area</td>
				<td style="padding-left: 110px; color: white;font-size: 30px;">Send a sharing request</td>
				<td style="padding-left: 120px; color: white;font-size: 30px;">Confirm the transaction</td>
			</tr>
		</table>
	</div>


	<div id="aboutus">
		
		<table cellpadding="20%">
			<caption>TEAM</caption>
			<tr>
				<td><img class="pic" src="devansh.jpg" height="150px" width="150px"></td>
				<td><img class="pic" src="jatin.jpg" height="150px" width="150px"></td>
			</tr>
			<tr>
				<td>
					<span>Devansh</span>
				</td>
				<td>
					<span>Jatin</span>
				</td>
				
			</tr>
		</table>
	</div>
	<div id="bottomheader2">
		<table align="center">
			<tr>
				<th><a href="#bottomheader">About Self-Share</a></th>
				<th>Contact</th>
				<th>Discover What You Can Borrow</th>
				<th>Follow Us On</th>
			</tr>
			<tr>
				<td><a href="register.php" target="_blank">Sign Up</a></td>
				<td>Mob:8168791049</td>
				<td><a href="#mostpopularproducts">Popular Products</a></td>
				<td><a href="https://www.snapchat.com" target="_blank"><img src="followuson.png"></a></td>
			</tr>
			<tr>
				<td onclick="popup()" style="cursor: pointer">Login</td>
				<td><a href="mailto:devanshgl55@gmail.com?">info@selfshare.com</a></td>
				<td><a href="#homeremedialproducts">Home Remedial</a></td>
			</tr>
			<tr>
				<td><br><a href="#idiom">Product Search</a></td>
				<td><br>Fax:+91 11 45692</td>
				<td><br><a href="#newlyarrived">Newly Arrived</a></td>
			</tr>
		</table>
	</div>
</body>
</html>