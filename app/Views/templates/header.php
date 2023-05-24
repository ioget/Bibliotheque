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



<body class=" overflow-x-hidden ">


  <header class="font-serif mx-10 py-4">
    <div class="flex  justify-between">
      <div class="logo">
        <a href="/"> <img src="/assets/img/logo.jpg" class="w-[130px] h-[120px]" alt="" srcset=""> </a>
      </div>

      <div class="nav-bar flex items-end pb-2 ">
        <nav>
          <ul class=" flex gap-6 ">
            <li class="nav-bar-item p-1  border-white border-b-[3px] hover:text-[#663300]  hover:border-[#663300] <?= $data['navLinkActive'] === "home" ? "font-bold text-[#144e93]" : "" ?> "> <a href="/home">Home</a></li>
            <li class="nav-bar-item p-1 registed  border-white border-b-[3px] hover:text-[#663300]  hover:border-[#663300] <?= $data['navLinkActive'] === "registed" ? "font-bold text-[#144e93]" : "" ?> flex gap-x-1 ">
              <span class="">Registed </span>
             <img src="/assets/img/icons/chevron-down-outline.svg" width="12px" alt="" srcset="">
              <nav class="downdrop absolute shadow-md hidden  mt-[28px]  border rounded-xl z-20 w-[140px]  flex-col  items-center -ml-5 opacity-100 bg-white ">
                <ul class="w-full flex flex-col items-center">
                  <li class="py-3  hover:text-[#144e93] border-b-[1px] cursor-pointer text-black font-normal text-center w-full "> <a href="/students/registed"> Students</a></li>
                  <li class="py-3 hover:text-[#144e93]  w-full cursor-pointer text-black text-center font-normal"><a href="/teachers/registed">Teachers </a></li>
                </ul>
              </nav>
            </li>
            <li class="nav-bar-item p-1  border-white border-b-[3px] hover:text-[#663300]  hover:border-[#663300] <?= $data['navLinkActive'] === "consult" ? "font-bold text-[#144e93]" : "" ?>"> <a href="/consult">Consult</a></li>
            <li class="nav-bar-item p-1  border-white border-b-[3px] hover:text-[#663300]  hover:border-[#663300] <?= $data['navLinkActive'] === "admin" ? "font-bold text-[#144e93]" : "" ?>"> <a href="/login">Admin</a></li>
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


  <div class="overlay absolute top-0 left-0 z-50 w-full h-full">
        <div class="bg-white flex flex-col justify-center items-center fixed w-full h-full">
        <img src="/assets/img/reader2.jpg" width="110" class=" opacity-60 " alt="">
        
            <div role="status">
                <svg aria-hidden="true" class="  mr-2 w-[40px] text-gray-200 animate-spin dark:text-gray-600 fill-[#663300]" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor" />
                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill" />
                </svg>
                <span class="sr-only">Loading...</span>
            </div>
            <span class="text-[#663300] font-bold  mt-2  text-2xl">The Library</span>
        </div>
    </div>

