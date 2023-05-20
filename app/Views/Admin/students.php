<section class="content flex flex-col   gap-y-5  p-5">

    <div class="navlink text-2xl flex ">
    <div class="hover:bg-gray-100 rounded-lg">
        <img src="/assets/img/icons/home-outline.svg" width="28" class="   p-1" alt=""> 
       </div>
        Dashboard / <?= ucfirst($data['navLinkActive']) ?>
        <img src="/assets/img/icons/chevron-forward-outline.svg" width="15" class=" scale-125 relative top-[2px]  rounded-r-full " alt="">
    </div>

    <div class="relative bg-white border   overflow-x-auto overflow-y-hidden  rounded-xl shadow-xl p-2  flex flex-col gap-y-3  sm:rounded-lg">



        <form action="/dashboard/members/students" class="flex  gap-x-6   justify-end items-end  ">


            <div class="w-full flex gap-x-16   items-end">

                <div class="w-[25%]">
                    <select id="large" name="cat" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-neutral-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="0" selected>All students</option>
                        <option value="1">Borrowers</option>
                        <option value="2">No return</option>
                    </select>
                </div>

                <div class="w-full gap-x-2  justify-end flex items-end">
                    <div class="w-full ">
                        <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                            <input name="search" type="search" id="default-search" class="block h-[50px] outline-none w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg  bg-neutral-50 focus:ring-blue-500 focus:border-[#36A2EB] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by matricule" required>
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-[#36A2EB] hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </div>


                </div>
            </div>


        </form>

        <table class="w-full text-sm rounded-xl   border  text-left bg-white text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase   bg-neutral-50 dark:bg-gray-700 dark:text-gray-400">

                <!--
                	id_users	nom	prenom	matricule	password	date_naissance	email	id_niveau	sexe	type	id_filiere	point	create_at
-->
       
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Matricule
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Level
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Filiere
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Book borrow
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Point
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="flex justify-end"> Action</span>
                    </th>

                </tr>
            </thead>
            <tbody>
            
            <?php foreach ($data['users'] as  $user): ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700  hover:bg-neutral-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                       <?= $user['matricule'] ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $user['id_niveau'] ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $user['id_filiere'] ?>
                    </td>

                    <td class="px-6 py-4">
                        <?= $user['livre'] === null ?  'none' :  $user['livre'] ;  ?>
                    </td>
                    <td class="px-6 py-4">
                        <?= $user['point'] ?>
                    </td>
                    <td class="px-6 py-4 flex gap-x-1 justify-end text-right">
                        <img href="#" data-popover-target="popover" class=" hover:scale-105" width="18" src="/assets/img/icons/eye-outline.svg">
                        <span class="  w-1 h-5 bg-neutral-200  rounded-md "></span>
                        <img src="/assets/img/edit.svg" class=" hover:scale-105" width="18" alt="" srcset="">   
                        <div data-popover id="popover" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                <h3 class="font-semibold text-gray-900 dark:text-white">Others information</h3>
                            </div>
                            <div class="px-3 py-2 ">
                                <p> Frist name : <?= $user['nom'] ?> </p>
                                <p> Last name : <?= $user['prenom'] ?> </p>
                                <p>Email : <span class="text-blue-800"><?= $user['email'] ?></span></p>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </td>

                </tr>
                <?php endforeach ?>
            </tbody>


            <tfoot>


            </tfoot>
        </table>

        <tfoot>

            <nav aria-label="Page navigation example">
                <ul class="inline-flex items-center ">
                    <li>
                        <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                            <span class="sr-only">Previous</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-neutral-100  border border-gray-300 hover:bg-neutral-50 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-neutral-50 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                    </li>

                    <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-neutral-50 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                    </li>
                </ul>
            </nav>

        </tfoot>

    </div>


    <div class="absolute right-10 top-20">
        <div id="toast-success" data-collapse-toggle="toast-success" class=" flex  items-center w-full  max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
            <div class="inline-flex items-center justify-center flex-shrink-0 w-8 hhidden-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ml-3 text-sm font-normal">Item moved successfully.</div>
            <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-neutral-50 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-collapse-toggle="toast-success">
                <span class="sr-only">Close</span>
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>








</section>
</section>



</main>

<script defer>
    FBT.Collapse.init(document.body);
</script>