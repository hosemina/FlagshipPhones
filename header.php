<?php session_start(); 

?>


<html>
<head>
<meta charset="utf-8">
 <title>Flagship Phones</title>
 <link rel="shortcut icon" href="icon.png" />
 <link rel="stylesheet" href="FP.css">

</head>
<body>

<div class="container1">
 <header>
  <div id="logo"><a href="#"><img src="Untitled-2.png" alt="Flagship Phones logo"></a></div>
  
  <div class="menu">
   <ul>
    <li id="mhome"><a href="index.php">Home</a></li> 
	<li id ="mphones"><div id="a"><a href="#" onclick="myFunction()" id ="dropbtn">Phones </a>
  <div id="myDropdown" class="dropdown-content">
  <?php 

	 $brands = file_get_contents('xmls/Brands.xml');
    if(strlen($brands) != 0)
    {
        $allBrands = simplexml_load_file('xmls/Brands.xml');
		$i = 0;
        foreach ($allBrands as $x)
        {
			$link = "'FPBrands.php?id={$x->idbrand}','_self',false";
			echo('<div class="a" onClick="window.open('.$link.')">'.$x->naziv.'</div>');
			$i++;
			if ($i == 3)
				break;
		}
	}
  ?>

	 <div class="a" onClick="window.open('FPPhones.php','_self',false)">Više marki...</a></div>
  </div>
</div> </li>
	<li id ="mnews"><a href="FPNews.php">News</a></li>
    <li id ="mreviews"><a href="FPReviews.php">Reviews</a></li>
    <li id ="mcompare"><a href="FPCompare.php">Compare</a></li>
	<li id ="searchmeni"><a href="search.php"><img src="search.png" id="slikasearch" alt="Problem sa prikazivanjem slike"></a></li>
   </ul>
   
  </div>
  <div class="login">
  <?php 
  if(isset($_SESSION["admin"])) {
 echo(' <a href="logout.php">logout</a><a> | admin'); 
}
else if(isset($_SESSION["user"]))
{
  echo(' <a href="logout.php">logout</a><a> | '.$_SESSION["user"]); 
}
else {
echo("<a onclick='document.getElementById(\"loginForm\").style.display=\"block\"'>login</a><a> | </a><a onclick='document.getElementById(\"registrationForm\").style.display=\"block\"'>registration</a><a>");}
 ?>

 </div>
 </header>
</div>
<div class="linija"></div>

<div id="loginForm" class="modal">
  <form class="modal-content animate" action="login.php" method="post">
  <span onclick="document.getElementById('loginForm').style.display='none'" class="close" title="Zatvori">&times;</span>
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id="username1">
	  <p id="greska1" class="greska"> </p>
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id="password1">
      <p id="greska2" class="greska"> </p>
	  <button type="submit">Login</button>
      
    </div>

  </form>
</div>
<div id="registrationForm" class="modal">
  <form class="modal-content animate" action="registration.php" onsubmit="return validateFormRegistration()" method="post">
  <span onclick="document.getElementById('registrationForm').style.display='none'" class="close" title="Zatvori">&times;</span>
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" id = "username2">
	  <p class ="greska" id = "greska3"></p>
	  <label><b>Email Address</b></label>
      <input type="text" placeholder="Enter Email Address" name="email" id ="email1">
	  <p class ="greska" id = "greska4"></p>
      <label><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" id = "password2">
	  <p class ="greska" id = "greska5"></p>
	  <label><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" id = "password3">
	  <p class ="greska" id = "greska6"></p>
	  
      <button type="submit">Sing up</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('registrationForm').style.display='none'" class="cancelbtn">Cancel</button>
      
    </div>
  </form>
</div>