<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4fce3aa7ca.js" crossorigin="anonymous"></script>
    <title>User Profile</title>
</head>

<body>
    <header class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">

            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">

                <a class="mr-5 hover:text-white" href="about.html">About</a>
                <a class="mr-5 hover:text-white" href="feedback.html">Contact us</a>

            </nav>
            <a href="#"
                class="inline-flex items-center bg-gray-800 border-0 py-1 px-3 focus:outline-none hover:bg-gray-700 rounded text-base mt-4 md:mt-0">Log
                out
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </header>
    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-col">
            <div class="lg:w-4/6 mx-auto">
                <!-- <div class="rounded-lg h-64 overflow-hidden">
                    <img alt="content" class="object-cover object-center h-full w-full"
                        src="https://dummyimage.com/1200x500">
                </div> -->
                <div class="flex flex-col sm:flex-row mt-10">
                    <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
                        <div
                            class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-800 text-gray-600">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                                <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="flex flex-col items-center text-center justify-center" id="bcd">
                            <h2 class="font-medium title-font mt-4 text-white text-lg"><?php echo $user_data['user_name']; ?></h2>
                            <div class="w-12 h-1 bg-purple-500 rounded mt-2 mb-4"></div>

                        </div>
                    </div>
                    <div
                        class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-800 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
                        <section class="text-gray-400 bg-gray-900 body-font" id="abcd">
                            <div class="container px-5 py-24 mx-auto flex flex-wrap">
                                <div class="flex relative pt-10 pb-20 sm:items-center md:w-2/3 mx-auto">
                                    <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                                        <div class="h-full w-1 bg-gray-800 pointer-events-none"></div>
                                    </div>
                                    <div
                                        class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-purple-500 text-white relative z-10 title-font font-medium text-sm">
                                        1</div>
                                    <div
                                        class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">

                                        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                            <h2 class="font-medium title-font text-white mb-1 text-xl">Name : <?php echo $user_data['full_name']; ?>
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                                <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                                    <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                                        <div class="h-full w-1 bg-gray-800 pointer-events-none"></div>
                                    </div>
                                    <div
                                        class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-purple-500 text-white relative z-10 title-font font-medium text-sm">
                                        2</div>
                                    <div
                                        class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">

                                        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                            <h2 class="font-medium title-font text-white mb-1 text-xl">Email : <?php echo $user_data['email']; ?>
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                                <div class="flex relative pb-20 sm:items-center md:w-2/3 mx-auto">
                                    <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                                        <div class="h-full w-1 bg-gray-800 pointer-events-none"></div>
                                    </div>
                                    <div
                                        class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-purple-500 text-white relative z-10 title-font font-medium text-sm">
                                        3</div>
                                    <div
                                        class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">

                                        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                            <h2 class="font-medium title-font text-white mb-1 text-xl">User name : <?php echo $user_data['user_name']; ?>
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                                <div class="flex relative pb-10 sm:items-center md:w-2/3 mx-auto">
                                    <div class="h-full w-6 absolute inset-0 flex items-center justify-center">
                                        <div class="h-full w-1 bg-gray-800 pointer-events-none"></div>
                                    </div>
                                    <div
                                        class="flex-shrink-0 w-6 h-6 rounded-full mt-10 sm:mt-0 inline-flex items-center justify-center bg-purple-500 text-white relative z-10 title-font font-medium text-sm">
                                        4</div>
                                    <div
                                        class="flex-grow md:pl-8 pl-6 flex sm:items-center items-start flex-col sm:flex-row">

                                        <div class="flex-grow sm:pl-6 mt-6 sm:mt-0">
                                            <h2 class="font-medium title-font text-white mb-1 text-xl">Phone : <?php echo $user_data['phone']; ?></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="inline-flex text-white bg-purple-500 border-0 py-2 px-6 focus:outline-none hover:bg-purple-600 rounded text-lg"
                                id="backbutton" href="index.php">Back</a>
                        </section>




                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">

            <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">©
                2022 AOOP Project —

            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a class="text-gray-400">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-400">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        class="w-5 h-5" viewBox="0 0 24 24">
                        <path
                            d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                        </path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-400">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                </a>
                <a class="ml-3 text-gray-400">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                        <path stroke="none"
                            d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                        </path>
                        <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                </a>
            </span>
        </div>
    </footer>


</body>
<style>
    footer {
        padding: 30px;
    }

    #abcd {
        margin-bottom: 600px;
    }

    #bcd {
        margin-top: 100px;
    }

    #backbutton {
        margin-left: 190px;
        cursor: pointer;
    }
</style>

</html>