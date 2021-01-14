<?php
$servername = "localhost";//hostname
$username = "root";
$password = "";
$dbname = "web_tech";

$conn= new mysqli($servername, $username, $password,$dbname);


if(isset($_POST["send"])) 
    {     
        $email = $_POST["email"]; 
        $password = $_POST["password"]; 

        //  echo $email.''.$password;

    
   $sql ="SELECT email, password FROM tb_reg WHERE email = '".$email."' AND  password = '".$password."'";
   
   $result1 =mysqli_query($conn,$sql);
       
        if($result1)
        { 
            echo "logined successfully";
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}

if(isset($_POST['submit'])){
     $user_name = $_POST['user_name'];
	 $email = $_POST['email'];
	 $password = $_POST['password'];
	 $cpassword = $_POST['cpassword'];
     
    //  echo $user_name.''.$email.$password.''.$cpassword;
      
	$sql ="INSERT INTO tb_reg (user_name,email,password,cpassword)
     VALUES ('$user_name','$email','$password','$cpassword')";
    mysqli_query($conn,$sql);  

if ($conn->query($sql) === TRUE) {
  echo "Registration created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products - RedStore</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <a href="index.html"><img src="./images/logo.png" alt="logo img" width="125px" class=""></a>
            </div>
            <div class="search">
                <input type="text" class="searchTerm" placeholder="What are you looking for?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html">Products</a></li>
                    <li><a href="account.php">Account</a></li>
                </ul>
            </nav>
            <button type="submit" class="searchBtn">
                <i class="fa fa-search"></i>
            </button>
            <a href="cart.html"><img src="./images/cart.png" alt="cart img" width="30px" height="30px"></a>
            <img src="./images/menu.png" alt="menu img" class="menu-icon" onclick="menutoggle()">
        </div>
    </div>

    <!-- Account Page -->
    <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="./images/image1.png" width="100%" alt="">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                        <form action="" method="POST" id="LoginForm">
                            <div class="form-group">
                                <i class="fa fa-envelope"></i>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock lock"></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <button type="submit" name="send" class="btn form-btn">Login</button>
                            <a href="#">Forgot password</a>
                        </form>
                        <form action="" method="POST" id="RegForm">
                            <div class="form-group">
                                <i class="fa fa-user "></i>
                                <input type="text" name="user_name" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-envelope"></i>
                                <input type="email" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock lock"></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock lock"></i>
                                <input type="password" name="cpassword" placeholder="Re-type Password">
                            </div>
                            <button type="submit" name="submit" class="btn form-btn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and ios mobile phone.</p>
                    <div class="app-logo">
                        <img src="./images/play-store.png" alt="">
                        <img src="./images/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="./images/logo-white.png" alt="">
                    <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sports Accessible to the Many.
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2020 -Md.soykot</p>
        </div>
    </div>

<script src="./js/server.js"></script>
<script>
var LoginForm = document.getElementById("LoginForm");
var RegForm = document.getElementById("RegForm");
var Indicator = document.getElementById("Indicator");

function register() {
  RegForm.style.transform = "translateX(0px)";
  LoginForm.style.transform = "translateX(0px)";
  Indicator.style.transform = "translateX(150px)";
}
function login() {
  RegForm.style.transform = "translateX(300px)";
  LoginForm.style.transform = "translateX(300px)";
  Indicator.style.transform = "translateX(50px)";
}
</script>

</body>

</html>