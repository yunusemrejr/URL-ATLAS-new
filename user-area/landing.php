<?php
session_start();
if(isset($_SESSION['login'])){
?>




 <?php

 
if(
    isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['name']) && $_POST['name'] != ''
    && isset($_POST['message']) && $_POST['message'] != '' && isset($_POST['buttonsubmit'])
    ) {
    
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        
        
         $name = $_POST['name'];
$email = $_POST['email'];
$subject ="URLATLAS.org LIST APPROVAL REQUEST";
$message = $_POST['message'];

$to = "xxxxxxxx@gmail.com";
$body = "";

$body .= "From: ".$name."\r\n";
$body .= "Email: ".$email."\r\n";
$body .= "Message: ".$message."\r\n";

mail($to, $subject, $body);
$message_sent = true;

    }
    
 
}

else {
    
   $message_sent = false;


    
}




?>


 




<html>

<head>
<title>User Control Pannel - URLATLAS</title>
<script>
    function recaptcha_callback(){
        document.querySelector('#sbmtbtn').removeAttribute('disabled');
    }
</script>
<link rel='stylesheet' href='landing.css'/>     <script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>
<body><noscript><p id='noS'>
    Oops! Can you please enable JavaScript in your browser settings?</p>
    <style>
        #bodyDiv{
           display:none;
        }
        
        #noS{
            font-family:arial;
            color:red;
            font-size:25px;
        }
    </style>
</noscript><div id='#bodyDiv'><a id='logout' href='logout.php'>log out</a><br><br><br><br>

<h1>This is your control pannel to create new lists</h1><br>
<div>


<form  action="landing.php" method="POST">


<label>Your List:</label><br> <br>
<textarea id="message" name="message" cols="150" rows="15" ></textarea>
<br><br><br><br><br>
<label>Name you would like to be displayed:</label><br><br>
<input name='name'id="name" type="text"><br><br><br>

<label>your REAL e-mail address:</label><br><br>
<input name='email' type="email"><br><br><br>

<center> <div class="g-recaptcha" data-callback="recaptcha_callback" data-sitekey="6LfcrcIfAAAAAI-mJ56xviM49mb2cp1RMpKTMiip"></div> </center> 
                  <br><br>    
<input type="submit" id='sbmtbtn' name='buttonsubmit' value='Send for approval' disabled> 
 
</form>


</div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <?php
        
        if($message_sent){
            
 echo "<script>alert('your list has been successfully sent for approval.')</script>
 ";
            
        }
        
        if($message_sent==false  && isset($_POST['buttonsubmit'])) {
             echo " <script>alert('error occured please try again later')</script>";
             
                        


            } 
        ?> 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
</div>
</body>
</html>





<?php
}
if(!isset($_SESSION['login'])) {
    echo "access not granted. Try registering or logging in first.";
}
?> 

