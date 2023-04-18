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

<?php
   $ClassActive =  "font-bold text-[#144e93]";
 
 ?>

<body class=" ">


  <header class="font-serif mx-10 py-4">
     <div class="flex  justify-between">
        <div class="logo"> 
          <a href="/"> <img src="/assets/img/logo.jpg" class="w-[130px] h-[120px]" alt="" srcset=""> </a> 
        </div>

        <div class="nav-bar flex items-end pb-2 ">
            <nav>
              <ul class=" flex gap-6 ">
                <li class="nav-bar-item p-1  border-white border-b-[3px] hover:text-[#663300]  hover:border-[#663300] <?=  $data['navLinkActive'] === "home" ? "font-bold text-[#144e93]" : "" ?> ">    <a href="/home">Home</a></li>
                <li class="nav-bar-item p-1  border-white border-b-[3px] hover:text-[#663300]  hover:border-[#663300] <?=  $data['navLinkActive'] === "about" ? "font-bold text-[#144e93]" : "" ?>">    <a href="/about">About us</a></li>
                <li class="nav-bar-item p-1  border-white border-b-[3px] hover:text-[#663300]  hover:border-[#663300] <?=  $data['navLinkActive'] === "contact" ? "font-bold text-[#144e93]" : "" ?>">  <a href="">Contact us </a></li>
                <li class="nav-bar-item p-1 registed  border-white border-b-[3px] hover:text-[#663300]  hover:border-[#663300] <?=  $data['navLinkActive'] === "registed" ? "font-bold text-[#144e93]" : "" ?> flex gap-x-1 "> 
                    <a href="" class="">Registed  </a>
                    <img src="/assets/img/icons/chevron-down-outline.svg" width="12px" alt="" srcset="">
                    <nav class="downdrop absolute shadow-md hidden  mt-[28px]  border rounded-b-xl z-20 w-[120px]  flex-col  items-center -ml-5 opacity-100 bg-white ">
                       <ul class="w-full flex flex-col items-center">
                         <li class="py-3  hover:text-[#144e93] border-b-[1px] cursor-pointer text-black text-center w-full "> <a href="/students/registed"> Students</a></li>
                         <li class="py-3 hover:text-[#144e93]  w-full cursor-pointer text-black text-center"><a href="/teachers/registed">Teachers </a></li> 
                       </ul>
                    </nav>
                </li>
                <li class="nav-bar-item p-1  border-white border-b-[3px] hover:text-[#663300]  hover:border-[#663300] <?=  $data['navLinkActive'] === "consult" ? "font-bold text-[#144e93]" : "" ?>">  <a href="">Consult</a></li>
                <li class="nav-bar-item p-1  border-white border-b-[3px] hover:text-[#663300]  hover:border-[#663300] <?=  $data['navLinkActive'] === "admin" ? "font-bold text-[#144e93]" : "" ?>">    <a href="/dashboard">Admin</a></li>
              </ul>
            </nav>
        </div>

        <div class="logo"> 
          <img src="/assets/img/fs.png" class="w-[130px] h-[120px]" alt="" srcset="">
        </div>
     </div>
     
     <div class="separate mt-2">
      <hr class="-z-10">
     </div>
  </header>

