<html>
    <head>
        <title>Register - URL ATLAS</title>
        <link rel="icon" type="image/png" href="../images/icon.png">
        <link rel="stylesheet" href="register.css">
          <meta name="description" content="User registeration page">
        <meta name="author" content="Yunus Emre Vurgun">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
    <script src="https://urlatlas.org/navbarController.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    function recaptcha_callback(){
        document.querySelector('#btnreg').removeAttribute('disabled');
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
    <a class="navbarButton" id='HomeBtn' onclick="home()"><i class="fa-solid fa-house"></i> Home</a>
    <a class="navbarButton" href="https://www.urlatlas.org/about"><i class="fa-solid fa-circle-info"></i> About</a>
    <a class="navbarButton" href="https://www.urlatlas.org/languages"><i class="fa-solid fa-file-code"></i> Languages</a>
    <a class="navbarButton" href="https://www.urlatlas.org/categories"><i class="fa-solid fa-folder"></i> Categories</a>
    <a class="navbarButton" href="https://www.urlatlas.org/search"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
    <a class="navbarButton" href="https://www.urlatlas.org/support"><i class="fa-solid fa-circle-info"></i> Support</a>
    <a class="navbarButton" href="javascript:alert('coming soon')"><i class="fa-solid fa-list"></i> User-made Lists</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/blog"><i class="fa-solid fa-blog"></i> Blog</a>
    <a class="navbarButton" href="login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
    <a class="navbarButton" href="https://www.urlatlas.org/user-area"><i class="fa-solid fa-user-plus"></i> Sign Up</a>

</div>


<div id="mobileNavbar"><br> <center>
    <a class="mobileNavbarButton" onclick="home()"><i class="fa-solid fa-house"></i> Home</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/about"><i class="fa-solid fa-circle-info"></i> About</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/languages"><i class="fa-solid fa-file-code"></i> Languages</a><br><br>
    <a class="navbarButton" href="https://www.urlatlas.org/categories"><i class="fa-solid fa-folder"></i> Categories</a><br><br>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/search"><i class="fa-solid fa-magnifying-glass"></i> Search</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/support"><i class="fa-solid fa-circle-info"></i> Support</a>
    <a class="mobileNavbarButton" href="javascript:alert('coming soon')"><i class="fa-solid fa-list"></i> User-made Lists</a><br><br>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/blog"><i class="fa-solid fa-blog"></i> Blog</a>
    <a class="mobileNavbarButton" href="javascript:alert('coming soon')"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
    <a class="mobileNavbarButton" href="https://www.urlatlas.org/user-area"><i class="fa-solid fa-user-plus"></i> Sign Up</a><br><br></center>
</div>
        <div id="header">

            <img id="logo1" src="../images/logo.png">
 
            </div><hr>
    <div class="container">
        <div class="registerContainer"><br><br>
            <h2 id="registerLabel">Register Here:</h2>
            <form action="registration.php" method="post">
                <div class="form-group">
                    <label id="labelUsername">Username:</label>
                    <input type="text" name="user" class="inputUsername" required><br><br>
                </div>
                <div class="form-group">
                    <label id="labelPass">Password</label>
                    <input type="password" name="password" class="inputPass" required><br><br>
                </div><br>
                      <center><div class="g-recaptcha" 
                      data-callback="recaptcha_callback"
                      data-sitekey="6LfcrcIfAAAAAI-mJ56xviM49mb2cp1RMpKTMiip"></div></center>

                <br>
                <button type="submit" id='btnreg' class="registerBTN" disabled>Register</button><br><br><br>
                <center><a href='https://www.urlatlas.org/user-area/loginindex.php'><p id='already'>I already have an account</p></a></center>
                
            </form>
        </div>
    </div>
    </div>
    
</body>
</html>