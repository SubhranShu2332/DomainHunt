<?php session_start();
require_once('includes/config.php');
include ('header3.php');
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['user_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $gender=$_POST["gender"];
    $dob=$_POST["dob"];

    $tech_domain=$_POST['tech_domain'];

    $type=$_POST['type'];

    $experience=$_POST['experience'];
    
    $tech_stack=$_POST['tech_stack'];
    $tech=implode(',',$tech_stack);



   // $img_loc=$_FILES['profile']['tmp_name'];
  //  $img_name=$_FILES['profile']['name'];

  //  $img_ext=pathinfo($img_name, PATHINFO_EXTENSION);

  //  $img_size=$_FILES['profile']['size']/(1024*1024);

 //   $img_des="images/".$uname.".".$img_ext;
 //   move_uploaded_file($img_loc,$img_des);

 //   if($img_size>1){
  //      echo "<script>alert('image size is larger than 1 MB');</script>";
  //      exit();
  //  }

$sql=mysqli_query($con,"select id from users where email='$email'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
    $msg=mysqli_query($con,"insert into users(fname,lname,email,user_name,password,contactno,
    gender,dob,tech_domain,type,experience,tech_stack) values('$fname','$lname','$email','$uname','$password','$contact','$gender',
    '$dob','$tech_domain','$type','$experience','$tech')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Register Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap v5.1.3 CDNs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS File 
    <link rel="stylesheet" href="style.css">-->
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    display: flex;
    align-items: center;
    justify-content: center;
    background-color:#C9F0FF;
            
}

.login {
    margin-top:10vh;
    width: 800px;
    height: min-content;
    padding: 40px 40px 50px;
    border-radius: 12px;
    background: white;
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
    color: orange;
}

.login form input[type="submit"] {
    font-size: 20px;
    margin-top: 15px;
    color: white;

}
.form-control{
  color: black;
  background: white;
  box-shadow: inset -2px -2px 6px rgba(255, 255, 255, 0.1),
}
.forget {
  margin-top: 20px;
  margin-left: 200px;
  color: #555;
}
.forget a {
  color: #ff0047;
  margin-left: 10px;
}
a{
    text-decoration:none;
}
    </style>
<script>  
    function validateForm() {  
        //collect form data in JavaScript variables  
        var pw1 = document.getElementById("password1").value;  
        var pw2 = document.getElementById("password2").value;    
          
         
        //minimum password length validation  
        if(pw1.length < 8) {  
          alert ("**Password length must be atleast 8 characters");    
          return false;  
        }  
      
        //maximum length of password validation  
        if(pw1.length > 15) {  
          alert ("**Password length reached maximum characters"); 
          return false;  
        }  
        
        if(pw1 != pw2) {  
            alert ("**Password are not same");
          return false;  
        }
     }  
     
    </script>  

</head>

<body>
    <br>
    <br>

    <div class="login">

        <h1 class="text-center" style="color:rgba(35, 197, 200)">Registration Form!</h1>
        <br>
        
        <form class="was-validated" onsubmit ="return validateForm()"  method="POST" enctype="multipart/form-data">
            
            <div class="row g-3" style="color: black;">
                <div class="col">
                    <label class="form-label" for="name" >First Name</label>
                  <input class="form-control" type="text" class="form-control" placeholder="First name" name="fname" id="fname" required>
                  <div class="invalid-feedback" >
                    Please enter your firstname
                </div>
                </div>
                
                <div class="col">
                    <label class="form-label" for="name">Last Name</label>
                  <input type="text" class="form-control" placeholder="Last name" name="lname" id="lname" required>
                  <div class="invalid-feedback">
                    Please enter your lastname
                </div>
                </div>
                
              </div>

<br>
                <label class="form-label" for="Username" style="color: black;">Username</label>
                <input class="form-control" type="username" placeholder="Username" id="user_name"  name="user_name" required>
                <div class="invalid-feedback">
                    Please enter your username
                </div>
<br>
              
                <label class="form-label" for="email" style="color: black;">Email address</label>
                <input class="form-control" type="email" id="email" placeholder="example@example.com" name="email"  required>
                <div class="invalid-feedback">
                    Please enter your email address
                </div>
            
                <br>       
                <label class="form-label" for="password" style="color: black;">Password</label>
                <input class="form-control" type="password" id="password1" name="password" placeholder="..........." required>
                <div class="invalid-feedback">
                    Please enter your password
                </div>
            
                <br>
                <label class="form-label" for="password" style="color: black;">Re-Password</label>
                <input class="form-control" type="password" id="password2" name="password" placeholder="..........." required>
                <div class="invalid-feedback">
                    Please re-enter your password
                </div>

                <br>
                <label class="form-label" for="number"style="color: black;">Phone number</label>
                <input class="form-control" type="number" id="number" placeholder="700XXXXXXX" name="contact" required>
                <div class="invalid-feedback">
                    Please enter your phone number
                </div>
          
                <br>
                <label class="form-label" for="gender" style="color: black;">Gender</label>
                <div class="row ">
                    <div class="col" style="color: black;">
                <input class="form-check-input mt-2" type="radio" value="male" name="gender" required>
                <label class="form-label" for="name" >MALE</label>
                <input class="form-check-input mt-2" type="radio" value="female" name="gender" required>
                <label class="form-label" for="name">FEMALE</label>
                <input class="form-check-input mt-2" type="radio" value="other" name="gender" required>
                <label class="form-label" for="name">OTHER</label>
                <div class="invalid-feedback">
                    Please select the Gender
                </div>
                    </div>
                    
                </div>
                
                <br>
            
            <div class="row g-3" style="color: black;">
                <div class="col">
                    <label class="form-label" for="name">Date Of Birth</label>
                  <input class="form-control" type="date" class="form-control"  name="dob" required>
                  <div class="invalid-feedback">
                    Please select the Date
                </div>
                
            </div>
               
                <div class="col">
                    <label class="form-label" for="name" style="color: black;">Tech Domain</label>
                    <select id="inputState" class="form-select" required  style="background-color: white;"  id="tech_domain" name="tech_domain">
                        <option selected value="" >Choose</option>
                        <option value="Full-Stack" >Full-Stack Developer</option>
                        <option value="Web Developer" >Web Developer</option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="DevOps Engineer">DevOps Engineer</option>
                        <option value="Data Analyst">Data Analyst</option>
                        <option value="Software Developer">Software Developer</option>
                      </select>
                      <div class="invalid-feedback">
                        Please select the Tech Domain name
                    </div>
                </div>
                
              </div>
             
          <br>

            <div class="row g-3" style="color:black";>

                <div class="col">
                    <label class="form-label" for="inputState" style="color:black">Type</label>
                  <select id="inputState" class="form-select" style="background-color: white;"  id="type" name="type" required>
                    <option selected value="">Choose</option>
                    <option value="Student">Student</option>
                    <option value="Working Professional">Working Professional</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select the catagory
                </div>
                </div>

                <div class="col">
                    <label class="form-label" for="inputState"style="color: black;" >Experience</label>
                  <select id="inputState" class="form-select" style="background-color: white;" id="experience" name="experience" required>
                    <option selected value="">Choose</option>
                    <option value="0-1">0-1 Years</option>
                    <option value="1-2">1-2 Years</option>
                    <option value="2-3">2-3 Years</option>
                    <option value="3-4">3-4 Years</option>
                    <option value="4-5">4-5 Years</option>
                    <option value="5+">5+ Years</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select the Experience
                </div>
                </div>

              </div>
             
<br>
        
                <label class="form-label" for="course"style="color: black;">Tech Stack Name</label>
                <div class="row ">
                    <div class="col" style="color: black;">
                <input class="form-check-input mt-2" type="checkbox" value="c#" name="tech_stack[]">
                <label class="form-label" for="name">C#</label>
                <input class="form-check-input mt-2" type="checkbox" value="c++" name="tech_stack[]">
                <label class="form-label" for="name">C++</label>
                <input class="form-check-input mt-2" type="checkbox" value="java" name="tech_stack[]">
                <label class="form-label" for="name">JAVA</label>
                <input class="form-check-input mt-2" type="checkbox" value="html" name="tech_stack[]">
                <label class="form-label" for="name">HTML</label>
                <input class="form-check-input mt-2" type="checkbox" value="css" name="tech_stack[]">
                <label class="form-label" for="name">CSS</label>
                <input class="form-check-input mt-2" type="checkbox" value="python" name="tech_stack[]">
                <label class="form-label" for="name">Python</label>
                <input class="form-check-input mt-2" type="checkbox" value="javaScript" name="tech_stack[]">
                <label class="form-label" for="name">JavaScript</label>
                <input class="form-check-input mt-2" type="checkbox" value="php" name="tech_stack[]>
                <label class="form-label" for="name">PHP</label>
                <input class="form-check-input mt-2" type="checkbox" value="kotlin" name="tech_stack[]">
                <label class="form-label" for="name">Kotlin</label>
                <input class="form-check-input mt-2" type="checkbox" value="matlab" name="tech_stack[]">
                <label class="form-label" for="name">Matlab</label>
                <input class="form-check-input mt-2" type="checkbox" value="r lang" name="tech_stack[]">
                <label class="form-label" for="name">R lang.</label>
                <input class="form-check-input mt-2" type="checkbox" value="scala" name="tech_stack[]">
                <label class="form-label" for="name">Scala</label>
                <input class="form-check-input mt-2" type="checkbox" value="ruby" name="tech_stack[]">
                <label class="form-label" for="name">Ruby</label>
                <input class="form-check-input mt-2" type="checkbox" value="sql" name="tech_stack[]">
                <label class="form-label" for="name">SQL</label>
               
                    </div>
                </div>
         
<!--
<br>
                 <div class="mb-3" style="color: orange;">
                    <label for="formFile" class="form-label">Image Upload</label>
                    <input class="form-control" type="file" id="formFile"  name="profile" required>
                </div>
    -->
                <br>
               
                <input class="btn btn-success w-100" type="submit" style="background-color:rgba(35, 197, 200)" value="SUBMIT" name="submit">
    
         <p class="forget">Have an account !!!<a href="login.php">Click Here</a></p>
      
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>

</body>

</html>
