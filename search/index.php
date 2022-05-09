


 








<!DOCTYPE html>
<html>
    <head>    <script src="https://urlatlas.org/navbarController.js"></script>

        <meta charset="UTF-8">
        <meta name="description" content=" ">
        <meta name="author" content="Yunus Emre Vurgun">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Search : URL ATLAS - Programmer's Directory</title>
<link rel="icon" type="image/png" href="../../../../images/icon.png">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="index.js"></script>
<style>
    .printedHypers{
        color:white;
        font-family:arial;
    }
</style>
</head>
    <body>
<div id="navbar">
    <a class="navbarButton" id='HomeBtn' href="https://www.urlatlas.org"><i class="fa-solid fa-house"></i> Home</a>
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
    <a class="mobileNavbarButton" id='HomeBtn' href="https://www.urlatlas.org"><i class="fa-solid fa-house"></i> Home</a>
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
 <h1 id='h1title'>Search a list</h1>
 <div id="searchbox">
     
      <form action='index.php' method='post'>
          <input type="text" id="query" name="query"><input type='submit' value='Search' name='buttonsubmit'> 
      </form><br><br>
     <?php
     
     $query = $POST['query'];
     $queryfull= "../lists/general/".$query."";
     if(isset($_POST['buttonsubmit'])){
         $posts = array_diff(scandir($queryfull),array('.','..'));
foreach($posts as $post) {
    echo "      
    
    
    <a   href='../lists/general/" . $post . "'><p class='printedHypers'>".$post."</p><a/> 
    

    

    
    ";   

}
     }

 

?>
 </div>

</div>


<br>
<br><br>
<br>





 <br>
<footer id="footer1">
   <p>URL ATLAS - Programmer's Directory ™ - 2022</p> 
</footer>
     </body>
</html>