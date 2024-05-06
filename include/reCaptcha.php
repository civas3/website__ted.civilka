<script src="https://www.google.com/recaptcha/api.js?render=HERE"></script>
<?php
if(isset($_POST) && isset($_POST["btnSubmit"]))
{
	$secretKey 	= 'HERE';
	$token 		= $_POST["g-token"];
	$ip			= $_SERVER['REMOTE_ADDR'];
	
	$url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$token."&remoteip=".$ip;
	$request = file_get_contents($url);
	$response = json_decode($request);
	
	if($response->success)
	{
		echo '<center><h1>Validation Success!</h1></center>';
	}
	else
	{
		echo '<center><h1>Captcha Validation Failed..!</h1></cetner>';
	}		
}
?>