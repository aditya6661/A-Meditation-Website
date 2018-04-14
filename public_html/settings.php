<?php  
include("includes/includedFiles.php");
?>

<div class="entityInfo">

	<div class="centerSection">
		<div class="userInfo">
			<h1><?php echo $userLoggedIn->getFirstAndLastName(); ?></h1>
		</div>
	</div>

	<div class="buttonItems">
		<button class="button" onclick="openPage('updateDetails.php')">USER DETAILS</button>
		<button class="button" onclick="logout()">LOGOUT</button>
	</div >
	
	<div >
		<h1>"Created by Aditya Sharma ,Dinesh Kishnani and Akshay Joshi "</h1>
     <img src="assets\images\profile-pics\adi.jpeg" alt="Aditya Sharma" style="width:200px;height:200px;"> 
      <img src="assets\images\profile-pics\din.jpg" alt="Dinesh Kishnani" style="width:200px;height:200px;"> 
      <img src="assets\images\profile-pics\aks.jpeg" alt="Akshay Joshi" style="width:200px;height:200px;">
		 
		 		 
      
		 <img src="assets\images\profile-pics\set.jpg" alt="Contact Details" style="float:right;width:550px;height:200px;"> 

		 <h1>Our mission is to make the world healthier and happier through the super power of meditation and mindfulness.</h1>
	</div>
    
</div>


</div>