<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo link_tag('/assets/css/dist/style.css'); ?>  
    <script type="module" src="/assets/js/Popover.js" defer></script> 
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="module" src="/assets/js/app.js" defer></script> 
    <script type="module" src="/assets/js/axios.js" defer></script> 
    <script src="/assets/js/dashboard.js" defer></script> 
    <script type="module" src="/assets/js/TableRow.js" defer></script> 
    <script src="/assets/js/flowbite.min.js" defer></script> 
    <script defer src="/assets/js/alpinejs.cdn.min.js" defer></script>
    <script defer src="/assets/js/chart.umd.js" defer></script>
    <script defer src="/assets/js/animejs/lib/anime.min.js" defer></script>
    <title> <?= esc($title) ?></title>


</head>



<!--
    ********** Palette de couleur ********

#663300 : fs logo (maron)

#144e93 : fs logo (blue) 

#237f0d : fs logo (vert) 

#d8ca21  : fs logo (jaune)

#991717  : fs logo (rouge)

#c9c9c7  : fs logo (gris)

text-[#36A2EB]
-->
<header class="  z-40  bg-neutral-800  p-2">
    <div class="flex  justify-between">
        <div class="logo ml-3 flex items-center gap-x-3 ">
            <!-- <a href=""><img src="/assets/img/icons/menu-outline.svg" class="w-[30px] h-[30px] rounded-xl hover:scale-105 bg-white " alt="" srcset=""></a> -->
           <div class="logo">
                <a href="/"> <img src="/assets/img/logo.jpg" class=" w-[35px] h-[35px]   object-cover  rounded-full " alt="" srcset=""> </a>
           </div> 
            <div class="text-white flex gap-x-2 items-end">
                <p> Library Management </p>
                <img src="/assets/img/icons/chevron-forward-outline.svg" width="15" class="bg-white scale-105 relative rounded-r-full -top-1 " alt="">
            </div>
        </div>
        <div class="user  flex flex-row-reverse gap-x-2 items-center">
            <div class="user border-1 rounded-full flex items-end h-fit p-[2px] bg-[#36A2EB]">
                <div>
                    <a href="/"> <img src="/assets/img/icons/person-sharp.svg" class="w-[30px]  h-[30px] border-1 object-cover bg-white  rounded-full " alt="" srcset=""> </a>
                </div>
            </div>
            <div class="text-white flex  items-center ">
                Username
            </div>
        </div>
    </div>
</header>

<body class=" bg-neutral-50 ">

    <style>
        .dash {
            display: grid;
            grid-template-columns: 1fr 22fr;
            transition: 1s;
        }

        .dashReset {
           
            display: grid;
            grid-template-columns: 2fr 10fr;
            transition: 0.3s;
        }

        .dropMenu {
            width: 250px;
            /* transition: width  1s ease-in-out ;*/
        }

        .NotRBook {
            animation: NotRBook 3s ease-in-out infinite;
        }

        .imgr{
            transform: rotate(180deg);
        }

        @keyframes NotRBook {
            0% {
                opacity: 0.2;
                filter: blur(1px);
            }

            50% {
                opacity: 0.8;
                filter: blur(0px);
            }

            100% {
                opacity: 0.2;
                filter: blur(1px);
            }
        }
    </style>

    <div class="overlay absolute top-0 left-0 z-50 w-full h-full">
        <div class="bg-white flex flex-col justify-center items-center fixed w-full h-full">
        <img src="/assets/img/reader2.jpg" width="110" class=" opacity-60 " alt="">
        
            <div role="status">
                <svg aria-hidden="true" class="  mr-2 w-[40px] text-gray-200 animate-spin dark:text-gray-600 fill-[#663300]" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                </svg>
            </div>
            <span class="text-[#663300] font-bold  mt-2  text-2xl">The Library</span>
        </div>
    </div>


    <main class="mt-5 mx-0 ">
        <section class="dashboard    dash p-2 gap-x-4">

            <aside class="Menu overflow-x-hidden p-2 z-20   top-5 h-[calc(80vh-18px)] w-[51px] shadow-lg box-border border  sticky bg-white rounded-2xl  flex flex-col gap-y-6 ">
                <div class=" ">
                    <button class="flex dropMenu  justify-start items-center gap-x-3">
                        <img src="/assets/img/icons/menu-outline.svg" class="w-[37px] h-[37px] rounded-xl hover:scale-105  border border-neutral-800 shadow " alt="" srcset="">
                        <span class="font-bold  text-2xl  ">Menu</span>
                    </button>
                </div>

                <div>
                    <a href="/dashboard" class="flex pl-2  justify-start items-center gap-x-3">
                        <img src="/assets/img/icons/desktop-outline.svg" class="w-[25px] h-[25px]  hover:scale-105  " alt="" srcset="">
                        <span class="  hover:text-[#36A2EB] hover:font-bold <?= $data['navLinkActive'] === "home" ? " text-[#36A2EB]" : "" ?>">Dashboard</span>
                    </a>
                </div>

                <div>
                    <a href="/dashboard/librarian" class="flex  pl-2 justify-start items-center gap-x-3">
                        <img src="/assets/img/caisse2.svg" class="w-[25px] h-[25px]  hover:scale-105  " alt="" srcset="">
                        <span class=" hover:text-[#36A2EB] hover:font-bold  <?= $data['navLinkActive'] === "sell" ? " text-[#36A2EB]" : "" ?>">Librarian</span>
                    </a>
                </div>

                <div>
                    <div href="/dashboard/members" class="flex flex-col pl-2 gap-y-2  gap-x-3">
                        <div class="flex dropMenu gap-x-3">
                             <img src="/assets/img/icons/people-circle-outline.svg" class="w-[28px] h-[28px]  hover:scale-105  " alt="" srcset="">
                             <span class=" hover:text-[#36A2EB] hover:font-bold  <?= str_contains($data['navLinkActive'],"members") ? " text-[#36A2EB]" : "" ?>">Members</span>
                        </div>
                        <div  class="w-full  gap-y-3 overflow-hidden flex flex-col ml-12 ">
                           <div class=" flex gap-x-3  ">
                             <img src="/assets/img/student.svg" class="w-[20px] h-[20px]  hover:scale-105  " alt="" srcset="">
                             <a href="/dashboard/members/students">  <span class=" hover:text-[#36A2EB] ">Students</span> </a>
                           </div>
                           <div class=" flex gap-x-3 ">
                             <img src="/assets/img/teacher.svg" class="w-[22] h-[22px]  hover:scale-105  " alt="" srcset="">
                             <a href="/dashboard/members/teachers"> <span class=" hover:text-[#36A2EB]  ">Teachers</span> </a>
                           </div>
                        </div>
                    </div>
                </div>



                <div>
                    <a href="/dashboard/books/" class="flex  pl-2 justify-start items-center gap-x-3">
                        <img src="/assets/img/books.svg" class="w-[25px] h-[25px]  hover:scale-105  " alt="" srcset="">
                        <span class=" hover:text-[#36A2EB] hover:font-bold  <?= $data['navLinkActive'] === "books" ? " text-[#36A2EB]" : "" ?>">Books</span>
                    </a>
                </div>

                <div>
                    <a href="/dashboard/admin" class="flex pl-2 justify-start items-center gap-x-3">
                        <img src="/assets/img/admin.svg" class="w-[25px] h-[25px]  hover:scale-105  " alt="" srcset="">
                        <span class=" hover:text-[#36A2EB] hover:font-bold  <?= $data['navLinkActive'] === "admin" ? " text-[#36A2EB]" : "" ?>">Admin</span>
                    </a>
                </div>

        

                <div>
                    <a href="/dashboard/logout" class="flex pl-2 justify-start  items-start gap-x-3">
                        <img src="/assets/img/icons/log-out-outline.svg" class="w-[25px] h-[25px]  hover:scale-105  " alt="" srcset="">
                        <span class="  hover:text-[#36A2EB] hover:font-bold whitespace-nowrap   ">Log out</span>
                    </a>
                </div>


            </aside>