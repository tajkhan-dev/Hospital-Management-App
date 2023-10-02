<?php

session_start();

include('../connection.php');

if(isset($_POST['addUser'])){


// Catch Values     


$userName = $_POST['name'];
$userEmail = $_POST['email'];
$userPhone = $_POST['phone'];
$userAddress = $_POST['address'];


    $query_forName = "SELECT `username` FROM `userdata` WHERE `username` = '$userName' ";
    $query_forEmail = "SELECT `email` FROM `userdata` WHERE `email` = '$userEmail' ";

   $res_name = mysqli_query($conn,$query_forName);
   $res_email = mysqli_query($conn,$query_forEmail);

    

if(mysqli_num_rows($res_name) > 0 ){
    
    echo "<script>alert('This Username is already taken');window.location.href='signup.php'</script>";                   
}
else{
    
    if(mysqli_num_rows($res_email) > 0){
        
        echo "<script>alert('This Email is already taken');window.location.href='signup.php'</script>";                   
        
        
    }else{
        

$_SESSION['username'] = $userName;

        $query_POST = "INSERT INTO `userdata`(`username`, `email`, `phone`, `address`) VALUES ('$userName','$userEmail','$userPhone','$userAddress')";
        
        $res = mysqli_query($conn,$query_POST);
        
        echo "<script>alert('User saved Successfully !');window.location.href='Hospital-Management-App/'</script>";                   
        
        
    }


}


}

?>