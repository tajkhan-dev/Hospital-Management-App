<?php

session_start();

include('../connection.php');

if(isset($_POST['checkUser'])){

// Catch Values     

$userName = $_POST['name'];
$userEmail = $_POST['email'];


    $query_checkUser= "SELECT *  FROM `userdata` WHERE `username` = '$userName' AND `email` =  '$userEmail' ";


   $res_user = mysqli_query($conn,$query_checkUser);

if(mysqli_num_rows($res_user) > 0 ){
    
    $_SESSION['username'] = $userName;

    echo "<script>alert('Welocme $userName');window.location.href='/hassu/e-project/code/Hospital-Management-App/'</script>";   
}else

        echo "<script>alert('Invalid Credential !');window.location.href='login.php'</script>";                   
        

}

?>