<!DOCTYPE html>


<?php

session_start();


if(isset($_SESSION['username'])){

    echo "<script>window.location.href='/Hospital-Management-App/'</script>";
}else{
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

   
    <script src="https://cdn.tailwindcss.com" ></script>

      <!-- Main Stylesheet -->
  <link rel="stylesheet" href="../css/style.css">
   
</head>
<body>
    <section class="bg-gray-50 ">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
         
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                        Create and account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="signup-script.php" method="post" >
                        <div>
                            <label  class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                            <input type="name" name="name" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Alone Must" required="">
                        </div>
                        <div>
                            <label  class="block mb-2 text-sm font-medium text-gray-900 ">Email</label>
                            <input type="email" name="email" id="password" placeholder="name@example.com" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 ">Phone</label>
                            <input type="text" name="phone" id="confirm-password" placeholder="+92 674930201" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                        </div>
                     
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 e">Address</label>
                            <textarea type="text" name="address" id="address" placeholder="Las Vegas Boulevard 502, as Vegas, Nevada, 88901, California..." class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  " required="" rows="2"
                            ></textarea>

                        </div>
                     
                        <div class="btn-container ">
						<button  target="_blank" class="btn btn-main-2 btn-icon btn-round-full " style="cursor:pointer" name="addUser" >Create Account</i></button>
					</div>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Already have an account? <a href="login.php" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
      </section>
</body>
</html>

<?php }?>