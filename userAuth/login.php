

<!DOCTYPE html>
<?php

session_start();


if(isset($_SESSION['username'])){

    echo "<script>window.location.href='/hassu/e-project/code/Hospital-Management-App/'</script>";
}else{
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    
<section class="bg-gray-50 ">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
       
        <div class="w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0 ">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                    Log in to your account
                </h1>
                <form class="space-y-4 md:space-y-6" action="login-script.php" method="post">
                    <div>
                        <label  class="block mb-2 text-sm font-medium text-gray-900 "> Username</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Amanda Jesper" required="">
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 "> Email</label>
                        <input type="email" name="email" id="email" placeholder="cat123@gmail.com" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                    </div>
                 
                    <div class="btn-container ">
						<button  target="_blank" class="btn btn-main-2 btn-icon btn-round-full " style="cursor:pointer" name="checkUser" >Log In</i></button>
					</div>


                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Don’t have an account yet? <a href="signup.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
  </section>
</body>
</html>


<?php }?>





