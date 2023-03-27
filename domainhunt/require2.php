<?php

// Get user input
$domain = $_POST['domain'];
$skills = $_POST['skills'];


//Connection
define('SQL_HOST','localhost');
define('SQL_USER','root');
define('SQL_DB','domain_hunt');
define('SQL_PASS','');
define('SQL_PORT','3306');

$conn=mysqli_connect(SQL_HOST,SQL_USER,SQL_PASS,SQL_DB,SQL_PORT);

if($conn->connect_error)
{
    echo 'sorry no connect to database';
    die;
}
else{
   // echo 'Hurray!! DB connected successfully';
}


// Insert user data into the database
$sql = "INSERT INTO required_skills VALUES ('$domain', '$skills')";



// Retrieve required skills for the specified domain from the database
$sql = "SELECT Required_skill FROM required_skill WHERE Domain_name='$domain'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Create array of user skills
    $user_skills = explode(",", $skills);
    
    // Create array of required skills
    while($row = $result->fetch_assoc()) {
        $required_skills = explode(",", $row["Required_skill"]);
    }
    
    // Find skills user doesn't have
    $missing_skills = array_diff($required_skills, $user_skills);
    
    // Output missing skills
    if (!empty($missing_skills)) {
        echo "To work in the $domain domain, you will also need the following skills: ";
        foreach ($missing_skills as $missing_skill) {
            echo "$missing_skill  ";
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
