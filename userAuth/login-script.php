<?php

session_start();

include('../connection.php');

if(isset($_POST['checkUser'])){

// Catch Values     

$userName = $_POST['name'];
$userEmail = $_POST['email'];


    $query_checkUser= "SELECT *  FROM `userdata` WHERE `username` = '$userName' AND `email` =  '$userEmail' ";


   $res_user = $conn->query($query_checkUser);



if(mysqli_num_rows($res_user) > 0 ){
    
    $_SESSION['username'] = $userName;

    echo "<script>alert('Welcome $userName');window.location.href='/Hospital-Management-App/index.php'</script>";   
}else

        echo "<script>alert('Invalid Credential !');window.location.href='userAuth/login.php'</script>";                   
        

}

?>