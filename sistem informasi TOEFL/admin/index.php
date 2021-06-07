
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">

<!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<div style='margin-bottom:-55px' class='alert alert-danger' role='alert'><span class='glyphicon glyphicon-warning-sign'></span>  Login Gagal !! Username dan Password Salah !!</div>";
            }
        }
        ?>
            <div class="wrap-login100">
                <form class="login100-form validate-form" enctype="multipart/form-data" method="post" action="login_act.php">
                    <span class="login100-form-title p-b-26">
                        Welcome<br/>FTO Company
                    </span>
                    <span class="login100-form-title p-b-48">
                        <i class="zmdi zmdi-font"></i>
                    </span>

                    <div class="wrap-input100 validate-input" >
                        <input class="input100" type="text" name="username" placeholder="username" required />
                        
                    </div>

                    <div class="wrap-input100 validate-input">
                        
                        <input class="input100" type="password" placeholder="password" name="password" required />
                        
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                    </div>

                    <div class="text-center p-t-115">
                        <span class="txt1">
                            Don’t have an account?
                        </span>

                        <a class="txt2" href="register.php">
                            Sign Up
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
</body>
</html>
