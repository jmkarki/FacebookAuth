<?php

require_once 'app/ininiate.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Login with Facebook...
	</title>
</head>
<body>
	<?php if(!isset($_SESSION['facebook'])): ?>
	<a href="<?php echo $facebook->getLoginUrl();?>">Sign in With Facebook</a>
<?php else: ?>
	<p>You are signed in as: <?php echo $user['name'] ?>  <a href="signout.php">Sign Out</a></p>
<?php endif; ?>
</body>
</html>

<?php 

//on duplicate key update in eloquent




// foreach($players as $player)
// {
// 	// fetch player with id
// 	$id = $player->getId();
// 	$playerEloq = BigscoutPlayers::find($id);
	
// 	// check if the player with that id already doesn't exists, and create new
// 	($playerEloq === null) ? $playerEloq = new BigscoutPlayers : '';
	
// 	// store it
// 	$playerEloq->id = $id;
// 	$playerEloq->first_name = $player->getFirstName();
// 	$playerEloq->last_name = $player->getLastName();
// 	$playerEloq->save();
// } 

//aslo 
// $user = User::find(1);

//   if ($user === null) {
//        $user = new User;
//   }
//   $user->name = 'hey'; 
//   $user->save();


  
//also try this
//User::firstOrCreate( array('id'=>1, 'name'=>'hey') );

?>
