<?php
	include("includes/config.php");
	include("includes/classes/Account.php");
	include("includes/classes/Constants.php");

	$account = new Account($con);

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>

<html>
<head>
  
	<title>Welcome to EurhythmicMind!</title>
<link rel="shortcut icon" type="image/png" href="assets\images\icons\brainstorm.png" />
	<link rel="stylesheet" type="text/css" href="assets/css/register.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
	<div id="player">
    <audio autoplay hidden>
     <source src="assets/music/intro.mp3" type="audio/mpeg" loop="true"> 
    </audio>
</div>

  
</head>
<body>
	<?php

	if(isset($_POST['registerButton'])) {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").hide();
					$("#registerForm").show();
				});
			</script>';
	}
	else {
		echo '<script>
				$(document).ready(function() {
					$("#loginForm").show();
					$("#registerForm").hide();
				});
			</script>';
	}

	?>
	

	<div id="background">

		<div id="loginContainer">

			<div id="inputContainer">
             
              
				<form id="loginForm" action="register.php" method="POST"><br><br><br><br>
					<h2>Login to your account</h2>
					<p>
						<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. aditya7" value="<?php getInputValue('loginUsername') ?>" required autocomplete="off">
					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
					</p>

					<button type="submit" name="loginButton">LOG IN</button>

					<div class="hasAccountText">
						<span id="hideLogin">Don't have an account yet? Signup here.</span>
					</div>
                  <div >
						<!--Zoho Campaigns Embed Button Starts--> <script type="text/javascript" src="https://campaigns.zoho.com/js/jquery-1.11.0.min.js"></script> <script type='text/javascript' src='https://campaigns.zoho.com/js/jquery-migrate-1.2.1.min.js'></script> <script type='text/javascript' src='https://campaigns.zoho.com/js/jquery-ui-1.10.4.custom.min.js'></script> <div id="zc_popoverlay" style="display:none;background: radial-gradient(50% 50%, rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.5) 100%) repeat scroll 0 0 rgba(0, 0, 0, 0);height: 100%;left: 0px;overflow-x: hidden;overflow-y: auto;position: fixed;top: 0px;width: 100%;z-index: 2;"> <div style="height: 100%;display:table;margin: 0px auto;position: static;"> <div style="display: table-cell;vertical-align: middle;"> <div style="position:relative;background-color: #fff;box-shadow: 1px 2px 5px #555;border-radius: 3px;padding: 20px;" id="signUpFormInline"> </div> </div> </div> </div> <div id='embedLink'> <button type="button" purpose="nrmlBtn" class="" style="outline: 0px none currentcolor; background-color: rgba(85, 85, 85, 0); color: rgb(255, 255, 255); border: 1px solid rgb(255, 255, 255); padding: 6px 10px; border-radius: 5px; text-align: center; width: auto; cursor: pointer; font-family: Arial; font-size: 12px;" changetype="EMBED_BUTTON" id="EMBED_BUTTON" name="EMBED_BUTTON" value="Join Our Newsletter" btntype="nrmlBtn" formopenin="Popup" onclick="zc_loadForm('campaigns.zoho.com','https://zcs1.maillist-manage.com/ua/Optin?od=11287ecaa96c9d&amp;zx=1258679f3&amp;lD=14f6d2cd63623029&amp;n=11699f74f7a0619&amp;sD=14f6d2cd63623039')"> <span class="zceditcnt">Join Our Newsletter</span> </button> </div> <input type='hidden' id='zc_Url' value='zcs1.maillist-manage.com'/> <input type='hidden' id='zc_formIx' name='zc_formIx' value='2b68180ee7307db49f270195f88464a9ab16e7ccaa8dd327' > <input type='hidden' id='cmpZuid' name='zx' value='1258679f3' > <input type='hidden' id='viewFrom' name='viewFrom' value='BUTTON_ACTION' /> <input type='hidden' id='button_tc_codeVal' name='button_tc_codeVal' value='ZCFORMVIEW' /> <script type='text/javascript' src='https://campaigns.zoho.com/js/optin_min.js'></script> <script> var trackingText='ZCFORMVIEW'; var $ZC = jQuery.noConflict(); $ZC('[id=embedLink]').append("<input type='hidden' id='tc_code"+$ZC('[id=embedLink]').size()+"' value="+trackingText+">"); var elemSize = parseInt($ZC('[id=embedLink]').size())-1; var embedLink = $ZC($ZC('[id=embedLink]')[elemSize]).attr('href'); if(embedLink!=undefined && embedLink!=null && embedLink!='null'){ var dynamicCodeVal = $ZC("#tc_code"+$ZC('[id=embedLink]').size()).val(); embedLink = embedLink+'&trackingcode='+dynamicCodeVal; $ZC($ZC('[id=embedLink]')[elemSize]).attr('href',embedLink); $ZC('[id=button_tc_codeVal]').val(dynamicCodeVal); trackSignupEvent(dynamicCodeVal,'buttonView'); } </script> <!-- Zoho Campaigns Embed Button End -->
					</div>
					
				</form>



				<form id="registerForm" action="register.php" method="POST"><br><br><br><br>
					<h2>Create your free account</h2>
					<p>
						<?php echo $account->getError(Constants::$usernameCharacters); ?>
						<?php echo $account->getError(Constants::$usernameTaken); ?>
						<label for="username">Username</label>
						<input id="username" name="username" type="text" placeholder="e.g. aditya7" value="<?php getInputValue('username') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$firstNameCharacters); ?>
						<label for="firstName">First name</label>
						<input id="firstName" name="firstName" type="text" placeholder="e.g. Aditya" value="<?php getInputValue('firstName') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$lastNameCharacters); ?>
						<label for="lastName">Last name</label>
						<input id="lastName" name="lastName" type="text" placeholder="e.g. Sharma" value="<?php getInputValue('lastName') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
						<?php echo $account->getError(Constants::$emailInvalid); ?>
						<?php echo $account->getError(Constants::$emailTaken); ?>
						<label for="email">Email</label>
						<input id="email" name="email" type="email" placeholder="e.g. aditya@gmail.com" value="<?php getInputValue('email') ?>" required>
					</p>

					<p>
						<label for="email2">Confirm email</label>
						<input id="email2" name="email2" type="email" placeholder="e.g. aditya@gmail.com" value="<?php getInputValue('email2') ?>" required>
					</p>

					<p>
						<?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
						<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
						<?php echo $account->getError(Constants::$passwordCharacters); ?>
						<label for="password">Password</label>
						<input id="password" name="password" type="password" placeholder="Your password" required>
					</p>

					<p>
						<label for="password2">Confirm password</label>
						<input id="password2" name="password2" type="password" placeholder="Your password" required>
					</p>

					<button type="submit" name="registerButton">SIGN UP</button>

					<div class="hasAccountText">
						<span id="hideRegister">Already have an account? Log in here.</span>
					</div>
					
				</form>


			</div>

			<div id="loginText">
				<h1>Meditation made Simple</h1>
				<h2>Brilliant things happen in calm minds
</h2>
				<ul>
					<li>Bite-sized meditations for busy schedules

</li>
					<li>Reduce anxiety
</li>
					<li>Sleep better
</li>
                  <li>Feel happier</li>
				</ul>
				<h2>Minor Project 2018<br><br>TRUBA Institute of Engineering <br>and Information Technology, Bhopal
</h2>
<h2>Made By - <br><br>Aditya Sharma<br>Akshay Joshi<br>Dinesh Kishnani
</h2>
			</div>

		</div>
	</div>

</body>
</html>