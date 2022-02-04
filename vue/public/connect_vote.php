<?php include '../../modele/inscription/register.php' ; ?>
<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../modele/inscription/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css	"/>
  
  <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.min.css" />
 
  <title>connexion</title>
</head>
 
<body>

<div class="container register">

    <div class="row">
        <div  class="col-md-3 register-left">
          
          <h1 class= "bde">WELCOME TO BDE</h1>
            <img src="../../modele/inscription/myvote.jpg" alt="" />
        </div>
        <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class=" flex flex-col items-center justify-center ">
                        <div class="flex flex-col shadow-md px-4 sm:px-6 md:px-8 lg:px-10 py-8 rounded-md w-full max-w-md">
                            <div class="font-medium self-center text-xl sm:text-2xl uppercase text-gray-800">CONNECTEZ-VOUS POUR VOTER </div>        
                            <div class="mt-10">
                                 <!--CONNEXION AVANT VOTE -->
                            <form action="../../modele/inscription/register.php" method="POST">
                                    <div class="error">
                                <?php

                                    if (isset($_GET['error']))
                                    {?>             
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo $_GET['error']; ?>
                                        </div>
                                    <?php } 
                                
                                ?> 
                                </div>
                                <div class="flex flex-col mb-6">
                                     <!--MAIL -->
                                <label for="email" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-900">E-Mail Address:</label>
                                <div class="relative">
                                    <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                    <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                    </svg>
                                    </div>

                                    <input id="email" type="email" name="email" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="E-Mail Address" />
                                </div>
                                </div>
                                <div class="flex flex-col mb-6">
                                     <!--PASSWORD -->
                                <label for="password" class="mb-1 text-xs sm:text-sm tracking-wide text-gray-900">Password:</label>
                                <div class="relative">
                                    <div class="inline-flex items-center justify-center absolute left-0 top-0 h-full w-10 text-gray-400">
                                    <span>
                                        <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </span>
                                    </div>

                                    <input id="pwd" type="password" name="pwd" class="text-sm sm:text-base placeholder-gray-500 pl-10 pr-4 rounded-lg border border-gray-400 w-full py-2 focus:outline-none focus:border-blue-400" placeholder="Password" />
                                </div>
                                </div>

                                <div class="flex items-center mb-6 -mt-4">
                                <div class="flex ml-auto">
                                </div>
                                </div>
                                     <!--LOGIN -->
                                <div class="flex w-full">
                                <button type="submit" id="submit" name="submit" class="flex items-center justify-center focus:outline-none text-white text-sm sm:text-base bg-blue-600 hover:bg-blue-700 rounded py-2 w-full transition duration-150 ease-in">
                                    <span class="mr-2 uppercase">CONNEXION</span>
                                    <span>
                                    <svg class="h-6 w-6" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    </span>
                                </button>
                                </div>
                            </form>
                            </div>
                            <div class="flex justify-center items-center mt-6">
                            </div>
                        </div>
                        </div>
                           
                        </div>
                    </div>
                </div>
           
        </div>
    </div>

</div>

  <script src="https://unpkg.com/@themesberg/flowbite@1.3.0/dist/flowbite.bundle.js"></script>
</body>
 
</html>