<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
    $query = "select * from votes ";

    $result = mysqli_query($con,$query);
    
		if($result && mysqli_num_rows($result) > 0)
		{

			$vote_data = mysqli_fetch_assoc($result);
			
		}
        $query1 = "select sum(votes) from votes ";
        $result1 = mysqli_query($con,$query1);
        $r1=mysqli_fetch_assoc($result1);
?>














<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Results</title>
</head>

<body>
    <header class="text-gray-400 bg-gray-900 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">


            <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">

                <a class="mr-5 hover:text-white" href="index.php">Home</a>
                <a class="mr-5 hover:text-white" href="feedback.html">Contact us</a>

            </nav>
            <a href="home.html"
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
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                    <h1 class="title-font font-medium text-xl mb-2 text-white">Trinamool Congress</h1>
                    <div class="leading-relaxed">The All India Trinamool Congress, colloquially the Trinamool Congress is an Indian political party which is predominantly active in West Bengal</div>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                    <h2 class="title-font font-medium text-3xl text-white">
                    <?php 
                      $query2 = "select votes from votes where id=1 ";
                      $result2 = mysqli_query($con,$query2);
                       $r=mysqli_fetch_assoc($result2);
                       echo $vote_data['votes'];
                    ?>
                    </h2>
                    <p class="leading-relaxed">Total votes </p>
                </div>

                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                    <h2 class="title-font font-medium text-3xl text-white">
                    <?php 
                     $query2 = "select votes from votes where id=1 ";
                     $result2 = mysqli_query($con,$query2);
                      $r=mysqli_fetch_assoc($result2);
                      if( $r1['sum(votes)']!=0)
                      $s=($r['votes']/$r1['sum(votes)'])*100;
                      else
                      $s=$r1['sum(votes)'];
                      echo  number_format($s, 2, '.', '');

                    ?>      
                    %</h2>
                    <p class="leading-relaxed">Total % of votes</p>
                </div>

            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                <img class="object-cover object-center w-full h-full" src="images/party1.jpg" alt="stats">
            </div>
        </div>
    </section>

    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                    <h1 class="title-font font-medium text-xl mb-2 text-white">Bharatiya Janata Party</h1>
                    <div class="leading-relaxed">The Bharatiya Janata Party is a political party in India, and one of the two
major Indian political parties alongside the Indian National Congress</div>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                    <h2 class="title-font font-medium text-3xl text-white">
                    <?php 
                      $query2 = "select votes from votes where id=2 ";
                      $result2 = mysqli_query($con,$query2);
                       $r=mysqli_fetch_assoc($result2);
                       echo $r['votes'];
                    ?>    
                    </h2>
                    <p class="leading-relaxed">Total votes </p>
                </div>

                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                    <h2 class="title-font font-medium text-3xl text-white">
                    <?php 
                     $query2 = "select votes from votes where id=2 ";
                     $result2 = mysqli_query($con,$query2);
                      $r=mysqli_fetch_assoc($result2);
                      if( $r1['sum(votes)']!=0)
                      $s=($r['votes']/$r1['sum(votes)'])*100;
                      else
                      $s=$r1['sum(votes)'];
                      echo  number_format($s, 2, '.', '');
                      ?>      
                    %</h2>
                    <p class="leading-relaxed">Total % of votes</p>
                </div>

            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                <img class="object-cover object-center w-full h-full" src="images/party2.jpg" alt="stats">
            </div>
        </div>
    </section>

    <section class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-24 mx-auto flex flex-wrap">
            <div class="flex flex-wrap -mx-4 mt-auto mb-auto lg:w-1/2 sm:w-2/3 content-start sm:pr-10">
                <div class="w-full sm:p-4 px-4 mb-6">
                    <h1 class="title-font font-medium text-xl mb-2 text-white">Indian National Congress</h1>
                    <div class="leading-relaxed">The Indian National Congress (INC), colloquially the Congress Party but often simply the Congress, 
is a political party in India with widespread roots.</div>
                </div>
                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                    <h2 class="title-font font-medium text-3xl text-white">
                    <?php 
                      $query2 = "select votes from votes where id=3 ";
                      $result2 = mysqli_query($con,$query2);
                       $r=mysqli_fetch_assoc($result2);
                       echo $r['votes'];
                    ?> 

                    </h2>
                    <p class="leading-relaxed">Total votes </p>
                </div>

                <div class="p-4 sm:w-1/2 lg:w-1/4 w-1/2">
                    <h2 class="title-font font-medium text-3xl text-white">
                    <?php 
                     $query2 = "select votes from votes where id=3 ";
                     $result2 = mysqli_query($con,$query2);
                      $r=mysqli_fetch_assoc($result2);
                      if( $r1['sum(votes)']!=0)
                      $s=($r['votes']/$r1['sum(votes)'])*100;
                      else
                      $s=$r1['sum(votes)'];
                    echo  number_format($s, 2, '.', '');
                    ?>   
                    %</h2>
                    <p class="leading-relaxed">Total % of votes</p>
                </div>

            </div>
            <div class="lg:w-1/2 sm:w-1/3 w-full rounded-lg overflow-hidden mt-6 sm:mt-0">
                <img class="object-cover object-center w-full h-full" src="images/party3.jpg" alt="stats">
            </div>
        </div>
    </section>
    <footer class="text-gray-400 bg-gray-900 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">

            <p class="text-sm text-gray-400 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-800 sm:py-2 sm:mt-0 mt-4">©
                2022 AOOP Project
                <a href="https://twitter.com/knyttneve" class="text-gray-500 ml-1" target="_blank"
                    rel="noopener noreferrer"></a>
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

</html>