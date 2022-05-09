<?php

session_start();

$con = mysqli_connect('localhost','xxxxxx','xxxxx');
mysqli_select_db($con, 'xxxxx');
$name = $_POST['user'];
$pass = $_POST['password'];
$query = "select * from registertable where name = '$name' ";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);

if($num==1){
    echo "username taken.";
}

else{
    $passHash = password_hash($pass, PASSWORD_BCRYPT);
    $reg="insert into registertable(name, password) values ('$name','$passHash')";
    mysqli_query($con,$reg);
    echo "registered successfully<br><br>";
    echo "redirecting you to the login page in a second!";
    header("refresh:2;url=loginindex.php");
    
}
?>