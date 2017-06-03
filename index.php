<?php
require_once 'app/bootstrap.php';

$users = $db->query("
	SELECT * FROM users
	");

$users->setFetchMode(PDO::FETCH_CLASS, 'Marton\Models\User'); //the User model bound to the pdo brill

$users = $users->fetchAll();

/*foreach ($users as $user) {
	echo $user->getFullNameOrUserName()." ". $user->created->diffForHumans()."<br/>"; //diffForHumans() carbon format!
}
*/
//echo $user; //if all data needed the toString has to be wraped again in json
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Output</title>
	</head>
	<body>
		<?php foreach($users as $user):?>
			<div class="user">
			<h4><?php echo $user->getFullNameOrUserName();?></h4>
			Joined <?php echo $user->created->diffForHumans();?>
			<?php if($user->last_active): ?>
				Last active: <?php echo $user->last_active->diffForHumans(); ?>
			<?php else: ?>
				Never active
			<?php endif;?>
			</div>
		<?php endforeach;?>
	</body>
	</html>