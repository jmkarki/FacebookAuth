<?php
session_start();
require_once 'vendor/autoload.php';
Facebook\FacebookSession::setDefaultApplication('434213483392823', '3df738a506be2fd626b1db802409e023');
$facebook = new Facebook\FacebookRedirectLoginHelper('http://localhost/FacebookAuth/index.php');
 try{
 	if($session = $facebook->getSessionFromRedirect()){
 		$_SESSION['facebook'] = $session->getToken();
 		header('Location: index.php');
 	}
 	if(isset($_SESSION['facebook'])){
 		$session = new Facebook\FacebookSession($_SESSION['facebook']);
 		$request = new Facebook\FacebookRequest($session, 'GET','/me');
 		$request = $request->execute();
 		$user = $request->getGraphObject()->asArray(); 

 	}
 }catch(Facebook\FacebookRequestException $e){
 	// when facebook throw error
 }catch(\Exception $ex){
 	///normal our app error
 }
