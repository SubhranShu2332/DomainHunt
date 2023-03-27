<?php session_start(); 
include ('header2.php');
include_once('../includes/config.php');
// Code for login 
if(isset($_POST['login']))
{
  $adminusername=$_POST['username'];
  $pass=($_POST['password']);
$ret=mysqli_query($con,"SELECT * FROM admin WHERE username='$adminusername' and password='$pass'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="dashboard.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['adminid']=$num['id'];
echo "<script>window.location.href = '".$extra."'</script>";
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="index.php";
echo "<script>window.location.href = '".$extra."'</script>";
exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #1b1f25;
        }

        .login {
            width: 450px;
            height: min-content;
            padding: 40px 40px 80px;
            border-radius: 12px;
            background: #1b1a1a;
            text-align: left;
            box-shadow: -5px -5px 10px rgba(255, 255, 255, 0.05),
                5px 5px 15px rgba(0, 0, 0, 0.5);
        }

        .login h1 {
            font-size: 36px;
            margin-bottom: 25px;
            color: #20a4f1;
            font-weight: 500;
            letter-spacing: 2px;
        }

        .login form {
            font-size: 20px;
            color: #020f08;
        }

        .login form .form-group {
            margin-bottom: 12px;
            color: antiquewhite;
        }

        .login form input[type="submit"] {
            font-size: 20px;
            margin-top: 15px;
            color: wheat;

        }

        .form-control {
            color: black;
            background: white;
            box-shadow: inset -2px -2px 6px rgba(255, 255, 255, 0.1),
        }

        .forget {
            margin-top: 20px;
            margin-left: 45px;
            color: #555;
        }

        .forget a {
            color: #ff0047;
            margin-left: 9px;
        }

        * {
            font-family: "Jost";
        }

        body {
            background-color: #C9F0FF;
        }

        .login {
            background-color: white;
        }

        a {
            font-family: "Jost";
            text-decoration: none;
            color:white
        }
        ul{
            display:flex;
            justify-content:center;
        }
        li{
            list-style:none;  
        }

    </style>

</head>

<body>

    <div class="login">

        <h1 class="text-center">Admin Login!</h1>

        <form action="#" method="POST" class="needs-validation">
            <div class="form-group was-validated">
                <label class="form-label" for="email" style="color:black">Email address</label>
                <input class="form-control" type="email" id="Email" name="username" required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            </div>
            <div class="form-group was-validated">
                <label class="form-label" for="password" style="color:black">Password</label>
                <input class="form-control" type="password" id="password" name="password" required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            </div>
            <!-- for cokkisesssssssss
            <div class="form-group form-check">
                <input class="form-check-input" type="checkbox" id="check">
                <label class="form-check-label" for="check">Remember me</label>
            </div>

-->
            <input class="btn btn-success w-100" type="submit" value="SUBMIT" name="login">

        </form>


    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>