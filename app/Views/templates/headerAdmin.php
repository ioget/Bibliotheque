<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo link_tag('/assets/css/dist/style.css'); ?>
    <script src="/assets/js/dashboard.js" defer></script>
    <script defer src="/assets/js/alpinejs.cdn.min.js" defer></script>
    <script defer src="/assets/js/chart.umd.js" defer></script>
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

-->
<header class=" bg-neutral-800  p-2">
    <div class="flex  justify-between">
        <div class="logo ml-3 flex items-end gap-x-3 ">
           <!-- <a href=""><img src="/assets/img/icons/menu-outline.svg" class="w-[30px] h-[30px] rounded-xl hover:scale-105 bg-white " alt="" srcset=""></a> -->
            <a href="/"> <img src="/assets/img/logo.jpg" class="w-[50px] h-[50px]   object-cover  rounded-full " alt="" srcset=""> </a>
            <div class="text-white flex gap-x-2 items-end">
               <p> Library Management </p>
               <img src="/assets/img/icons/chevron-forward-outline.svg" width="15" class="bg-white scale-105 relative rounded-r-full -top-1 " alt="">
            </div>
        </div>
        <div class="user  flex flex-row-reverse gap-x-2 items-end">
            <div class="user border-2 rounded-full flex items-end h-fit p-[2px] bg-[#144e93] ">
                <div>
                    <a href="/"> <img src="/assets/img/icons/person-sharp.svg" class="w-[30px] h-[30px] border-1 object-cover bg-white  rounded-full " alt="" srcset=""> </a>
                </div>
            </div>
            <div class="text-white flex  items-center ">
                Username
            </div>
        </div>
    </div>
</header>

<body class=" bg-neutral-100 "> 

<style>
    .dash {
        display: grid;
        grid-template-columns: 2fr 10fr;
        transition: 1s;
    }

    .dashReset {
        display: grid;
        grid-template-columns: 1fr 22fr;
        transition: 1s;
    }

    .dropMenu {
        width: 51px;
       /* transition: width  1s ease-in-out ;*/
    }

    

  
</style>




<main class="mt-5 mx-0 ">
    <section class="dashboard dash p-2 gap-x-4">

        <aside class="Menu overflow-x-hidden p-2  bg-gray-200 rounded-2xl  flex flex-col gap-y-6 " >
            <div class=" ">
                <button class="flex dropMenu  justify-start items-center gap-x-3">
                    <img src="/assets/img/icons/menu-outline.svg" class="w-[37px] h-[37px] rounded-xl hover:scale-105  border border-neutral-800 shadow " alt="" srcset="">
                    <span class="font-bold  text-2xl  ">Menu</span>
                </button>
            </div>

            <div>
                <a href="" class="flex pl-2  justify-start items-center gap-x-3">
                    <img src="/assets/img/icons/desktop-outline.svg" class="w-[25px] h-[25px]  hover:scale-105  " alt="" srcset="">
                    <span class="  hover:text-[#144e93] hover:font-bold <?=  $data['navLinkActive'] === "dashboard" ? " text-[#144e93]" : "" ?>">Dashboard</span>
                </a>
            </div>

            <div>
                <a href="" class="flex pl-2 justify-start items-center gap-x-3">
                    <img src="/assets/img/icons/people-circle-outline.svg" class="w-[28px] h-[28px]  hover:scale-105  " alt="" srcset="">
                    <span class=" hover:text-[#144e93] hover:font-bold  ">Members</span>
                </a>
            </div>



            <div>
                <a href="" class="flex  pl-2 justify-start items-center gap-x-3">
                    <img src="/assets/img/icons/book-outline.svg" class="w-[25px] h-[25px]  hover:scale-105  " alt="" srcset="">
                    <span class=" hover:text-[#144e93] hover:font-bold  ">Books</span>
                </a>
            </div>

            <div>
                <a href="" class="flex pl-2 justify-start items-center gap-x-3">
                    <img src="/assets/img/admin.png" class="w-[25px] h-[25px]  hover:scale-105  " alt="" srcset="">
                    <span class=" hover:text-[#144e93] hover:font-bold  ">Admin</span>
                </a>
            </div>

            <div>
                <a href="" class="flex pl-2 justify-start items-center gap-x-3">
                    <img src="/assets/img/icons/notifications-circle-outline.svg" class="w-[25px] h-[25px]  hover:scale-105  " alt="" srcset="">
                    <span class=" hover:text-[#144e93] hover:font-bold  ">Notification</span>
                </a>
            </div>

            <div>
                <a href="" class="flex pl-2 justify-start  items-start gap-x-3">
                    <img src="/assets/img/icons/log-out-outline.svg" class="w-[25px] h-[25px]  hover:scale-105  " alt="" srcset="">
                    <span class="  hover:text-[#144e93] hover:font-bold whitespace-nowrap   ">Log out</span>
                </a>
            </div>


        </aside>

     


 