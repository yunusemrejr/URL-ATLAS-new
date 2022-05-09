<?php

session_start();
 $_SESSION['login'] = 'login';

$con = mysqli_connect('localhost','xxxx','xxxx');
mysqli_select_db($con, 'xxxx');
$name = $_POST['user'];
$pass = $_POST['password'];



$query = "select * from registertable where name = '$name' ";
 $result = mysqli_query($con,$query);
 $num = mysqli_num_rows($result);
 
  $result2= mysqli_query($con,$query);
$res = mysqli_fetch_array($result2);

if($num==1){
    
    if(password_verify($pass,$res['password'])){
        echo "you are logged in...please wait...";
        header("refresh:2;url=landing.php");
    }
    else {
         echo "Sorry, the password doesn't seem to be correct.";
    }

}

else{
   echo "Sorry, the username or password doesn't seem to be correct.";
    
}
?>