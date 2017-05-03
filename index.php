<?php 
$connect = new mysqli('localhost', 'root', '', 'project');
if($connect->connect_error)
{
	die("Connection failed: ".$connect->connect_error);
}
//print_r($_POST);
if (isset($_POST['submit'])){
//$surname = $_POST['surname'];
//$name = $_POST['name'];
//$mail = $_POST['mail'];
$user = $_POST['username'];
$pass = $_POST['pass'];
//$query = "INSERT INTO users_info('surname', 'firstname', 'email', ";
//$query .= "'user_name') VALUES ('{$surname}', '{$name}', '{$mail}', ";
//$query .= "'{$user}')";
$query = "SELECT * FROM `users_info` WHERE `user_name` = '$user'";
//echo $query;
if ($result = $connect->query($query)){
	if ($row = $result->fetch_assoc())
	{
		
	}
}
//$connect->mysqli_fetch_assoc($query);

} else if(isset($_POST['registration'])){
//Array ( [surname] => Tokhirova [name] => Dilya [mail] => asda [username] => qwerty [pass] => 123456 [pass1] => 123456 [registration] => Submit Query )   
	$query = "INSERT INTO `users_info`(`surname`, `firstname`, `password`, `email`, `user_name`) VALUES ('$_POST[surname]','$_POST[name]','$_POST[pass]','$_POST[mail]','$_POST[username]')";
	if ($result = $connect->query($query)){
		echo "Welcome";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
<title> example</title>
<link rel="stylesheet" href="Project_IP.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="project_IP.js" type="text/javascript"></script>
</head>
<body>


<ul class="PrimaryNav with-indicator">
  <li class="Nav-item"><a  href="#home">Home</a></li>
  <li class="Nav-item"><a href="#interest"> Interest</a></li>
  <li class="Nav-item is-active"><a href="#map">Map</a></li>
  <li class="Nav-item"><a href="#search_engine">Search</a></li>
  <li class ="Nav-item" ><a href="#about">About us</a></li>
  <!--<li class ="Nav-item"> <label id="label" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> Sign Up </label></li>-->
  
</ul>
  
  
  
  <div id="id01" class="modal">
  
  <form class="modal-content animate user_info" method="post" action="index.php">
      <div class="container2">
       <h3><b>Registration</b></h3>
       <label><b>Surname</b></label>
       <input type="text" placeholder="Enter Surname" name="surname" required>

       <label><b>Firstname</b></label>
       <input type="text" placeholder="Enter Firstname" name="name" required>

       <label><b>Email</b></label>
       <input type="text" placeholder="Enter Email" name="mail" required>

       <label><b>Username</b></label>
       <input type="text" placeholder="Enter Username" name="username" required>

       <label><b>Password</b></label>
       <input type="password" placeholder="Enter Password" name="pass" required>

       <label><b>Confirm Password</b></label>
       <input type="password" placeholder="Enter Password" name="pass1" required>
        
       <input type="submit" name="registration">Sing up</input>
       <input type="checkbox" checked="checked"> Remember me
      </div>

       <div class="container" style="background-color:#f1f1f1">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
  </form>
  </div>
<div id="home"></div>
<div class="hero-image">
  <div class="hero-text">
    <h1><strong>Any Idea for travelling?</strong></h1>
    <p><strong>Find the destination that is the most suitable for you!</strong></p>
    <label id="label" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"> Sign Up </label>
  </div>
</div>

<div id= "search_engine">
<p id="search_text"><strong>Which country do you want to get information about?</strong></p>

<form>
  <input type="text" id= "plane" name="search" placeholder="Search for a destination..">
</form>
</div>

<div class="parallax3"></div>
<div id="interest"></div>
<div class="row">
	   <div class="column">
	   <div class= "card">
	   <img src="camp.jpg" alt="euh?" style="width:100%">
	   <div class="container">
	   <h2>Camping</h2>
	   <p class="title">want</p>
	   <p>text text text</p>
	   <p> <button class="button">See more</button></p>
	   </div>
	   </div>
	   </div>
	   
	   <div class="column">
	   <div class= "card">
	   <img src="camp.jpg" alt="euh?" style="width:100%">
	   <div class="container">
	   <h2>Festivals and events</h2>
	   <p class="title">want</p>
	   <p>text text text</p>
	   <p> <button class="button">See more</button></p>
	   </div>
	   </div>
	   </div>
	   
	   
	   <div class="column">
	   <div class= "card">
	   <img src="camp.jpg" alt="euh?" style="width:100%">
	   <div class="container">
	   <h2>Spa holidays</h2>
	   <p class="title">want</p>
	   <p>text text text</p>
	   <p> <button class="button">See more</button></p>
	   </div>
	   </div>
	   </div>
	   
	   
	   <div class="column">
	   <div class= "card">
	   <img src="camp.jpg" alt="euh?" style="width:100%">
	   <div class="container">
	   <h2>Historical</h2>
	   <p class="title">want</p>
	   <p>text text text</p>
	   <p> <button class="button">See more</button></p>
	   </div>
	   </div>
	   </div>
	   
	   <div class="column">
	   <div class= "card">
	   <img src="camp.jpg" alt="euh?" style="width:100%">
	   <div class="container">
	   <h2>Camping</h2>
	   <p class="title">want</p>
	   <p>text text text</p>
	   <p> <button class="button">See more</button></p>
	   </div>
	   </div>
	   </div>

       <div class="column">
	   <div class= "card">
	   
	   <img src="adventure.jpg" alt="eu" style="width:100%">
	   <div class="container">
	   <h2>Adventure</h2>
	   <p class="title">want</p>
	   <p>text text text</p>
	   <p> <button class="button">See more</button></p>
	   </div>
	   </div>
	   </div>



	   <div class="column">
	   <div class= "card">
	   <img src="safaris2.jpg" alt="eh?" style="width:100%">
	   <div class="container">
	   <h2>Safaris</h2>
	   <p class="title">want</p>
	   <p>text text text</p>
	   <p> <button class="button">See more</button></p>
	   </div>
	   </div>
	   </div>



	   <div class="column">
	   <div class= "card">
	   <img src="boats.jpg" alt="euh" style="width:100%">
	   <div class="container">
	   <h2>Arts</h2>
	   <p class="title">want</p>
	   <p>text text text</p>
	   <p> <button class="button">See more</button></p>
	   </div>
	   </div>
	   </div>
	  </div>
	  <div class="parallax"></div>
      
	  <div id="map"></div>
      <div class="continent">
	   <ul id="fr">
	   <li>America</li>
	   <li>Europe</li>
	   <li>Asia</li>
	   <li>Australia</li>
	   </ul>
	   <p>......................................Choice about continents................................
       maybe we will put icons? or just tables.........................................................
       ................................................................................................
       ................................................................................................
       .........................................................................................
       ................................................................................................
       ................................................................................................
       ................................................................................................
       ................................................................................................
       ...................................................................................................
       ...................................................................................................
       ..................................................................................................
       ..................................................................................................
       ................................................................................................	   </p>
	   </div>

	   <div class="parallax2"></div>

</html>
</body>