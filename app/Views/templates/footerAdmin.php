<footer class="h-ful w-full  items-start justify-around flex  bg-gray-100 p-2">

    <div class="flex w-[150px]  flex-col">
        <span class=" text-lg text-[#663300]  whitespace-nowrap font-bold"> The Library</span>
        <em class=" text-sm "> &copy; copyright 2023</em>
        <div class="flex gap-x-4 mt-2 p-1">
            <img src="/assets/img/icons/logo-facebook.svg" class=" hover:scale-105 cursor-pointer" alt="" width="20" srcset="">
            <img src="/assets/img/icons/logo-twitter.svg" class=" hover:scale-105 cursor-pointer" alt="" width="20" srcset="">
            <img src="/assets/img/icons/logo-instagram.svg" class=" hover:scale-105  cursor-pointer " alt="" width="20" srcset="">
        </div>
    </div>



    <nav class="flex flex-col w-[25%] justify-center ">
        <span class=" text-center ">Links</span>
        <ul class="flex  justify-around">
            <li><a href="/home">Home</a></li>
            <li><a href="/about">About us</a></li>
            <li><a href="">Consult</a></li>
            <li><a href="mailto:mamakemrosly@gmail.com">Support</a></li>
        </ul>
    </nav>

    <nav class="flex flex-col    ">
        <span class=" text-center ">Others</span>
        <ul class="flex flex-col  items-start">
            <li> <a target="_blank" class=" cursor-pointer hover:text-[#663300] " href="https://www.univ-ndere.cm">Université de Ngaoundéré</a> </li>
            <li> <a target="_blank" class="cursor-pointer hover:text-[#663300]" href="https://fs.univ-ndere.cm/">FS Faculté des Sciences</a></li>
        </ul>
    </nav>


</footer>

<script defer>
    window.addEventListener('load', function(e) {
    let overlay = this.document.querySelector(".overlay");

    overlay.classList.toggle("hidden")
    },false)
</script>

</body>

</html>