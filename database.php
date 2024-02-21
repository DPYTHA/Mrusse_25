<?php
if(isset($_POST['submit'])){

 $firstName = $_POST['firstName'];
 $lastName = $_POST['lastName'];
 $email =$_POST['email'];
 $password = $_POST['password'];


 $db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name ="last";
$conn ="";
// connection
$conn = mysqli_connect($db_server,
                       $db_user, 
                       $db_pass,
                       $db_name );
if (mysqli_connect_errno()){
    echo"Fail to connect";
    exit();
}
echo"Enregistrement reussi !!, Vous avez recu un message pour la suite de votre navigation ";

 $sql = "INSERT INTO last_users(firstName,lastName,email,password) values ('$firstName',  '$lastName', '$email', '$password')";
 mysqli_query($conn,$sql);


}


?>


