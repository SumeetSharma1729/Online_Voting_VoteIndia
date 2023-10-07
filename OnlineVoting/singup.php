<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
        $email=$_POST['email'];
		$password = $_POST['password'];
        $name=$_POST['full_name'];
        $phone=$_POST['phone'];
		if(!empty($email) && !empty($password) && !is_numeric($email))
		{

			//save to database
            $user_id = random_num(20);
			$query = "insert into voters (user_id,full_name,user_name,email,password,phone) values ('$user_id','$name','$user_name','$email','$password','$phone')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
            function_alert("Enter Valid Information !!");
		}
	}
?>


















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Sign up</title>
</head>

<body>


    <section class="text-gray-400 bg-gray-900 body-font">

        <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
            <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
                <h1 class="title">Online Voting System</h1>
                <h1 class="title-font font-medium text-3xl text-white">Vote today for a better tomorrow</h1>
                <p class="leading-relaxed mt-4">Why stand in long queues to cast your vote?! Do it online for
                    free.Voting is every person's basic right.
                    Sign up today and vote in the confort of your home or literally anywhere!</p>
            </div>
            <div
                class="lg:w-2/6 md:w-1/2 bg-gray-800 bg-opacity-50 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                <h2 class="text-white text-lg font-medium title-font mb-5">Sign Up</h2>
                <form method="post">
                <div class="relative mb-4">
                    <label for="full-name" class="leading-7 text-sm text-gray-400">Full Name</label>
                    <input type="text" id="full-name" name="full_name"
                        class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-purple-900 rounded border border-gray-600 focus:border-purple-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-400">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-purple-900 rounded border border-gray-600 focus:border-purple-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="username" class="leading-7 text-sm text-gray-400">Username</label>
                    <input type="text" id="username" name="user_name"
                        class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-purple-900 rounded border border-gray-600 focus:border-purple-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="password" class="leading-7 text-sm text-gray-400">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-purple-900 rounded border border-gray-600 focus:border-purple-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="phone" class="leading-7 text-sm text-gray-400">Phone</label>
                    <input type="text" id="phone" name="phone"
                        class="w-full bg-gray-600 bg-opacity-20 focus:bg-transparent focus:ring-2 focus:ring-purple-900 rounded border border-gray-600 focus:border-purple-500 text-base outline-none text-gray-100 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>


                <a href="login.php"><button class="next" style="width: 350px;margin-bottom:20px;" type="submit">Next</button></a>
                </form>
            </div>
        </div>
    </section>
    <style>
        body {
            background-color: #1a202c;
        }

        .next {
            color: white;
            background: #A66CFF;
            text-align: center;
            border-radius: 10px;
            padding: 10px;
            font-size: 18px;
            cursor: pointer;
        }

        .title {
            font-size: 50px;
            margin-bottom: 55px;
            font-weight: bold;
        }
    </style>
</body>

</html>