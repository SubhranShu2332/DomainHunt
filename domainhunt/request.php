<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family:"Jost";
        }
        </style>
</head>
<body>
    
<div>
<?php
include('header.php');

// Get user input

$id=$_GET['id'];

//Connection
define('DB_SERVER','localhost:3306');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME', 'fullstackphp');

$conn=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

if($conn->connect_error)
{
    echo 'sorry no connect to database';
    die;
}
else{
   // echo 'Hurray!! DB connected successfully';
}


//get user's skill and domain data 
$sql2 = "SELECT * FROM users WHERE id='$id'";
$result = $conn->query($sql2);
$res1=mysqli_fetch_row($result);
$domain = $res1[8];
$skills = $res1[11];



// Retrieve required skills for the specified domain from the database
$sql = "SELECT required_skill FROM skill WHERE Domain_name='$domain'";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    // Create array of user skills
    $user_skills = explode(",", $skills);
    
    // Create array of required skills
    while($row = $result->fetch_assoc()) {
        $required_skills = explode(",", $row["required_skill"]);
    }
    
    // Find skills user doesn't have
    $missing_skills = array_diff($required_skills, $user_skills);
    
    // Output missing skills

    
    
    if (!empty($missing_skills)) {
        ?> <br><br><br><br><br><h2 style="text-align:center;text-transform:capitalize;color: rgba(35, 197, 200);"><?php echo "To work in the $domain domain, you will also need the following skills:";?><h2><?php
       foreach ($missing_skills as $missing_skill) {
        ?><h3 style="text-align:center;text-transform:uppercase;"><?php echo  " <br> $missing_skill ";?></h3>
    <?php 
        }
    } 
    
    else {
        
        echo "You already have all the skills required to work in the $domain domain!";
    }
} else {
    echo "No required skills found for this domain.";
}

$conn->close();

?>
</div>
</body>
</html>