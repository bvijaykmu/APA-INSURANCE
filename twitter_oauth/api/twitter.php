<?php
// require "twitteroauth/autoload.php";

// use Abraham\TwitterOAuth\TwitterOAuth;


session_start();
require 'twitteroauth/autoload.php';
use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', "4fUTSkXFz4CkmOZ4mIyTMlKiJ");
define('CONSUMER_SECRET' , "MJW5rIjRoecpVDd1Tavv5LEhJBVpnKdSxaOIc5kvI9po4f1BQv");
define('OAUTH_CALLBACK', 'http://localhost/twitter_oauth/api/callback.php');

if(!isset($_SESSION['access_token'])){
	$connection=new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET);
	$request_token=$connection->oauth('oauth/request_token', array('oauth_callback'=>OAUTH_CALLBACK));

	$_SESSION['oauth_token']= $request_token['oauth_token'];
	$_SESSION['oauth_token_secret']=$request_token['oauth_token_secret'];
	$url=$connection->url('oauth/authorize', array('oauth_token'=>$request_token['oauth_token']));
	//echo $url;
}else{
	$access_token=$_SESSION['access_token'];
	$connection=new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET,$access_token['oauth_token'], $access_token['oauth_token_secret']);
	$user=$connection->get('account/verify_credentials');


	$_SESSION['user_name']= $user->screen_name;
	echo $_SESSION['user_name'];

	echo '<pre>';
//	print_r($user);
	echo '<pre>';
	echo '<br>';
//	print_r($user);
	

}

// $consumer_key="4fUTSkXFz4CkmOZ4mIyTMlKiJ";
// $consumer_secret="MJW5rIjRoecpVDd1Tavv5LEhJBVpnKdSxaOIc5kvI9po4f1BQv";
// $access_token="1306824732-3AWrCV1zom9Z1pDpieMyXWhufQlPbVk1L1npIjx";
// $access_token_secret="3oRZN9nKm3Z0kQG7XXKJg5YorSIiAexQ8A86Blk9BL2kD";

// $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
// $content = $connection->get("account/verify_credentials");
// print_r($content) ;
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <a href="<?= $url;?>"><button>Login with twitter</button> </a>
</body>

</html>
