<?php include("../connection.php");



?>
<!DOCTYPE html>
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
<!-- <?php include("../components/navbar.php") ?> -->
<body>
    <section class="bg-gray-50 ">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
         
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl ">
                        Add Blog
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="post" >
                        <div>
                            <label  class="block mb-2 text-sm font-medium text-gray-900 ">blog title</label>
                            <input type="name" name="blogtitle" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " placeholder="Alone Must" required="">
                        </div>
                        <div>
                            <label  class="block mb-2 text-sm font-medium text-gray-900 ">blog Url</label>
                            <input type="text" name="blogurl" id="password" placeholder="name@example.com" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="">
                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 ">blog pic</label>
                            <input type="file" name="blogpic" id="confirm-password" placeholder="+92 674930201" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 " required="">
                        </div>
                     
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 e">blog description</label>
                            <textarea type="text" name="blogdesc" id="address" placeholder="Las Vegas Boulevard 502, as Vegas, Nevada, 88901, California..." class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  " required="" rows="2"
                            ></textarea>

                        </div>
                     
                       
                    <div class="btn-container ">
						<button  target="_blank" class="btn btn-main-2 btn-icon btn-round-full " style="cursor:pointer" name="addblog" >add blog</i></button>
					</div>
                        
                    </form>
                </div>
            </div>
        </div>
      </section>
</body>
</html>

<?php

if(isset($_POST['addblog'])){

    $title=$_POST['blogtitle'];
    $url=$_POST['blogurl'];
    $pic=$_POST['blogpic'];
    $desc=$_POST['blogdesc'];
    

    $sql= "INSERT INTO `blogs`(`blogid`,`blogtitle`,`blogpic`,`blogdesc`,`blogurl`) VALUES('01','$title','$url','$pic','$desc')";

    $result=$conn->query($sql);
    echo "<script>
    alert('blog successfully added')
    </script>";
}


?>