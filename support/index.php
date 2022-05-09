<?php

 
if(
    isset($_POST['email']) && $_POST['email'] != '' && isset($_POST['name']) && $_POST['name'] != ''
    && isset($_POST['message']) && $_POST['message'] != '' && isset($_POST['buttonsubmit'])
    ) {
    
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
        
        
         $name = $_POST['name'];
$email = $_POST['email'];
$subject ="URLATLAS.org FORM MESSAGE";
$message = $_POST['message'];

$to = "xxxxx@gmail.com";
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
        <meta charset="UTF-8">    <script src="https://urlatlas.org/navbarController.js"></script>

        <meta name="description" content=" ">
        <meta name="author" content="Yunus Emre Vurgun">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>URL ATLAS - Programmer's Directory</title>
<link rel="icon" type="image/png" href="../../../../images/icon.png">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="index.js"></script>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
 
    if(window.history.replaceState) {
        window.history.replaceState(null,null,window.location.href);
    }
    
    function backToNormal() {
  document.getElementById('submitBtn').setAttribute('name','buttonsubmit');
     document.getElementById('submitBtn').setAttribute('type','submit');
    document.getElementById('submitBtn').style.opacity='1';
     document.getElementById('submitBtn').style.display='';
    document.getElementById('submitBtn').style.visibility='visible';
        document.getElementById('sleeptext').style.visibility='hidden';
        document.getElementById('titleh3').style.visibility='hidden';


   alert('you can submit again now.');   
        
        
        
    }
</script>


</head>
    <body>
        
<noscript><p id='noS'>
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
</noscript>

<div id='bodyDiv'>
      
        
<div id="navbar">
    <a class="navbarButton" href="https://www.urlatlas.org"><i class="fa-solid fa-house"></i> Home</a>
    <a class="navbarButton" href="https://www.urlatlas.org/about"><i class="fa-solid fa-circle-info"></i> About</a>
    <a class="navbarButton" href="https://www.urlatlas.org/languages"><i class="fa-solid fa-file-code"></i> Languages</a>
    <a class="navbarButton" href="https://www.urlatlas.org/categories"><i class="fa-solid fa-folder"></i> Categories</a>
    <a class="navbarButton" href="https://www.urlatlas.org/search"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
    <a class="navbarButton" href="https://www.urlatlas.org/support"><i class="fa-solid fa-circle-info"></i> Support</a>
    <a class="navbarButton" href="https://www.urlatlas.org/user-made-lists"><i class="fa-solid fa-list"></i> User-made Lists</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/blog"><i class="fa-solid fa-blog"></i> Blog</a>
    <a class="navbarButton" href="https://www.urlatlas.org/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
    <a class="navbarButton" href="https://www.urlatlas.org/sign-up"><i class="fa-solid fa-user-plus"></i> Sign Up</a>

</div>


<div id="mobileNavbar"><br> <center>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org"><i class="fa-solid fa-house"></i> Home</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/about"><i class="fa-solid fa-circle-info"></i> About</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/languages"><i class="fa-solid fa-file-code"></i> Languages</a><br><br>
    <a class="navbarButton" href="https://www.urlatlas.org/categories"><i class="fa-solid fa-folder"></i> Categories</a><br><br>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/search"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/support"><i class="fa-solid fa-circle-info"></i> Support</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/user-made-lists"><i class="fa-solid fa-list"></i> User-made Lists</a><br><br>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/blog"><i class="fa-solid fa-blog"></i> Blog</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/sign-up"><i class="fa-solid fa-user-plus"></i> Sign Up</a><br><br></center>
</div>
        <div id="header">

            <img id="logo1" src="../../../../images/logo.png">
 
            </div>
<div id="mainDiv"><hr>
   
  <div class="container">
      
      
      <form   action="index.php" method="POST" class="formTag">
          <center> 
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name">
          <br><br><br>
           <label for="email">Your E-mail:</label>
          <input type="email" id="email" name="email">
                    <br><br><br>

           <label id="messagelabel" for="message">Your Message:</label><br><br>
          <textarea  id="message" name="message" rows="5"></textarea><br><br>
          <input id="submitBtn" name="buttonsubmit" type="submit">
          </center>
          <br>
 
          
          
      </form>
      
      
  </div>
  
  
  
         <?php
        
        if($message_sent){
            
 echo "<center><h3 id='titleh3' style='color:lightgreen;font-family:arial;'>THANKS! WE GOT YOUR MESSAGE!</h3>
 <p id='sleeptext'  style='color:orange;font-family:arial;'>Spam protection: You can send another one after waiting 30 seconds.</p> </center>
 
 <script>
 
  var getid = document.getElementById('sleeptext').innerText;

if(getid.includes('Spam')) {

    document.getElementById('submitBtn').setAttribute('name','notname');
    document.getElementById('submitBtn').setAttribute('type','null');
    document.getElementById('submitBtn').style.opacity='0';
    document.getElementById('submitBtn').style.display='none';
  document.getElementById('submitBtn').style.visibility='hidden';
 
 setTimeout(backToNormal,30000);

}
 
 
 
 </script>
 
 
 ";
            
        }
        
        if($message_sent==false  && isset($_POST['buttonsubmit'])) {
             echo "<center><h3 id='titleh3' style='color:orange;font-family:arial;'>OH NO! Please check your inputs.</h3>
             <p id='sleeptext'   style='color:orange;font-family:arial;'>Spam protection: You can try again after waiting 30 seconds.</p>  </center>
             
              <script>
 
  var getid = document.getElementById('sleeptext').innerText;

if(getid.includes('Spam')) {

    document.getElementById('submitBtn').setAttribute('name','notname');
    document.getElementById('submitBtn').setAttribute('type','null');
    document.getElementById('submitBtn').style.opacity='0';
    document.getElementById('submitBtn').style.display='none';
  document.getElementById('submitBtn').style.visibility='hidden';

 setTimeout(backToNormal,30000);
 
}


 
 </script>
             
              ";
             
                        


            } 
        ?> 
        

</div>


<br>
<br><br>
<br>





 <br>
<footer id="footer1">
   <p>URL ATLAS - Programmer's Directory ™ - 2022</p> 
</footer>
</div>

     </body>
</html>