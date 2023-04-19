<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo link_tag('/assets/css/dist/style.css'); ?>
    <script defer src="/assets/js/alpinejs.cdn.min.js"></script>
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
        <div class="user flex flex-row-reverse gap-x-2 items-end">
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