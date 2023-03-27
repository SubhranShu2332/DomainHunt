<?php
    $domain=$_GET['domain'];

    if($domain==="Full-Stack")
        header('location:gra.php');
    else if($domain==="Web Developer")
        header('location:gra1.php');
    else if($domain==="Software Developer")
        header('location:gra2.php');
    else if($domain==="Artificial Intelligence")
        header('location:gra5.php');
    else if($domain==="DevOps Engineer")
        header('location:gra4.php');
    else 
        header('location:gra3.php');

?>
