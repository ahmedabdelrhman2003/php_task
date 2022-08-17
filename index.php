<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method="POST">

<input type="text" name="firstName" placeholder="first name">
<input type="text" name="lastName" placeholder="last name">
<input type="submit" value="login">

</form>
<?php

$dsn='mysql:host=localhost;dbname=user';
$user= 'root';
$pass= '';

try {
    $name1=$_POST['firstName'];
    $name2=$_POST['lastName'];
    $db= new PDO($dsn, $user, $pass) ; // Start A New Connection With PD0
    $query="INSERT INTO identity (first_name,last_name) VALUES ('$name1','$name2')";
    $db->exec($query);
}
    catch(PDOException $e) {
    echo 'Failed ' . $e->getMessage();
    }
if($_SERVER['REQUEST_METHOD']=='POST')
{
    
    
echo " THE FIRST NAME IS ". $_POST['firstName'];
echo " THE LAST NAME IS " . $_POST['lastName'];

}    
?>