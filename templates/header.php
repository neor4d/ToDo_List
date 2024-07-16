<?php 

$currentFile = basename($_SERVER['PHP_SELF']);

?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ListLuxe</title>

        <link rel="shortcut icon" href="./media/logos/ListLuxe-Logo2.png" type="image/x-icon">

        <link rel="stylesheet" href="./CSS/styles.css">
        <link rel="stylesheet" href="./src/sweetalert/sweetalert2.min.css">

        <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

        <script src="https://kit.fontawesome.com/43a60623da.js" crossorigin="anonymous"></script>
        
        <script src="./src/jquery/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

        <script src="./src/sweetalert/sweetalert2.all.min.js"></script>

        <script src="./src/tailwind/tailwind-3.4.4.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    </head>

    <body>

    <div class="flex w-full justify-end">

        <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 mr-3 text-sm
        text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open sidebar</span>
            
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
            </svg>
        </button>

    </div>

    <aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">

            <a href="#" class="flex items-center ps-2.5 mb-5">
                <img src="media/logos/ListLuxe-Logo2.png" class="h-12 me-1 sm:h-12" alt="ListLuxe Logo" />
                <span class="self-center text-2xl font-semibold italic whitespace-nowrap">ListLuxe</span>
            </a>

            <ul class="space-y-2 font-medium">
                <li>
                    <a href="index.php" class="<?php echo ($currentFile == 'index.php') ? 'flex items-center p-2 text-white rounded-lg group page-active' : 'flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group'; ?>">
                    
                        <i class="<?php echo ($currentFile == 'index.php') ? 'fa-solid fa-house text-lg text-white transition duration-75' : 'fa-solid fa-house text-lg text-gray-500 transition duration-75 group-hover:text-gray-900'; ?>"></i>
                        <span class="ms-3">Home</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100  group">

                        <i class="fa-solid fa-newspaper text-lg text-gray-500 transition duration-75 group-hover:text-gray-900"></i>
                        <span class="flex-1 ms-3 whitespace-nowrap">News</span>
                    </a>
                </li> -->

                <li>
                    <a href="calendar.php" class="<?php echo ($currentFile == 'calendar.php') ? 'flex items-center p-2 text-white rounded-lg group page-active' : 'flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group'; ?>">

                    <i class="<?php echo ($currentFile == 'calendar.php') ? 'fa-solid fa-calendar-days text-lg text-white transition duration-75' : 'fa-solid fa-calendar-days text-lg text-gray-500 transition duration-75 group-hover:text-gray-900'; ?>"></i>

                    <span class="flex-1 ms-3 whitespace-nowrap">Calendar</span>
                    </a>
                </li>

                <li>
                    <a href="todolist.php" class="<?php echo ($currentFile == 'todolist.php') ? 'flex items-center p-2 text-white rounded-lg group page-active' : 'flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group'; ?>">

                    <i class="<?php echo ($currentFile == 'todolist.php') ? 'fa-solid fa-list text-lg text-white transition duration-75' : 'fa-solid fa-list text-lg text-gray-500 transition duration-75 group-hover:text-gray-900'; ?>"></i>
                    <span class="flex-1 ms-3 whitespace-nowrap">My ToDo List</span>
                    </a>
                </li>

                <li>
                    <a href="#" data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100  group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"/>
                        </svg>

                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li>

                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">

                    <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 group-hover:text-gray-900" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z"/>
                        <path d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z"/>
                        <path d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z"/>
                    </svg>

                    <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </aside>

    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Sign in to our platform
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required />
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                                </div>
                                <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Lost Password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
                            Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 

    <div class="p-4 sm:ml-64">