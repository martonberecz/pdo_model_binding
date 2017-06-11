<?php
//var_dump(PDO::getAvailableDrivers()); //to print the available drivers
try{
$handler = new PDO('mysql::host=127.0.0.1;dbname=pdo', 'root', '');
$handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e)
{
	echo $e->getMessage();
}

//***update
//$query = $handler->query("UPDATE users SET userName = 'marton' WHERE id = 1");

//***pull single data
//$query = $handler->query("SELECT * FROM users WHERE id = 2");
//$user = $query->fetch();
//echo $user['userName'];

//***fetch types (http://php.net/manual/en/pdostatement.fetch.php)
//***pulling single obj
/*
$query = $handler->query("SELECT * FROM users WHERE id = 2");
$user = $query->fetch(PDO::FETCH_OBJ); //the data will came back as an obj
echo $user->userName;
*/

//***pulling multiple data as objects
/*
$query = $handler->query("SELECT * FROM users");
$user = $query->fetchAll(PDO::FETCH_OBJ);
foreach($user as $users)
{
	echo $users->userName, '<br/>';
}
*/

//***prepared statements protects from sql injection
//insead of query use prepare; :userName this is the place holder
/*
$prepared = $handler->prepare("SELECT * FROM users WHERE userName = :userName AND email = :email"); 
//an arra of the placeholders the argument; key as the name of the placeholder
$prepared->execute([
					'userName'=>$_GET['userName'],
					'email' =>$_GET['email']
					]); //from url in this case
$prepared = $prepared->fetch(PDO::FETCH_OBJ);
var_dump($prepared);
echo $prepared->userName.'<br>';
echo $prepared->email;
*/

//***binding values
/*
//instead of the execute bindValue() can be used then the execute()
$prepared = $handler->prepare("SELECT * FROM users WHERE name = :userName"); 
//an array of the placeholders the argument; key as the name of the placeholder
$prepared->bindValue(':userName', $_GET['userName']);
$prepared->execute();
$prepared = $prepared->fetch(PDO::FETCH_OBJ);
echo $prepared->name;
*/

//***prepared statements with ?? place holders and multiple values
/*
$prepared = $handler->prepare("SELECT * FROM users WHERE userName = ? AND email = ?");
$prepared->execute([$_GET['userName'],'marton@gmail.com']); //in the order of the ?
$prepared = $prepared->fetch(PDO::FETCH_OBJ);
echo $prepared->userName;
*/

//***place holders with LIKE(will act like a search)
/*
$prepared = $handler->prepare("SELECT * FROM users WHERE name LIKE ?"); //do not put % sign here
$prepared->execute(["%".$_GET['userName']."%"]); //put it around here!
$prepared = $prepared->fetch(PDO::FETCH_OBJ);
echo $prepared->name;
*/

//***white list for placeholders
/*
$orders = ['DESC', 'ASC'];	//a kind of white list
$order = strtoupper($_GET['order']);

$order = in_array($order, $orders)?$order:'DESC'; //if in array go ahead otherwhise DESC

$users = $handler->prepare("SELECT * FROM users ORDER BY created $order");
$users->execute();
print_r($users->fetch(PDO::FETCH_OBJ));
*/

//***rowCount() on PDO
/*
$prepared = $handler->query("SELECT * FROM users "); 
echo $prepared->rowCount();
*/ 

//***operation on the last inserted id
/*
$handler->query("INSERT INTO users (name, email) values('Ashley', 'ashley@gmail.com')");

$userId = $handler->lastInsertId();
//this could be another table and make changes after the record has been created above!
$handler->query("UPDATE users SET name = 'Amy' WHERE id = $userId ");
*/

//***to returne the amount of records that have been updated

/****** SQL ******/
/*
$query = $handler->prepare("SELECT make, model, price, manufacturer FROM maker INNER JOIN car ON make=manufacturer WHERE location = ? HAVING price < 20000 ");
$query->execute([$_GET['location']]); 
$query = $query->fetchAll(PDO::FETCH_OBJ);
foreach($query as $users)
{
	echo $users->manufacturer. "  ".$users->model ." will cost £" . $users->price. '<br/>';
}
*/
/*
$read = $handler->prepare("SELECT userName, email FROM users WHERE userName = ?");
$read->execute([$_GET['name']]);
$newVariable = $read->fetchAll(PDO::FETCH_OBJ);
var_dump($newVariable);
echo "The name is: <br>";
*/
$insert = $handler->prepare("UPDATE users SET userName = ? WHERE email = ?");
$insert->bindValue(1,$_GET['name']);
$insert->bindValue(2,$_GET['email']);
$insert->execute();