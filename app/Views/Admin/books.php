<section class="content flex flex-col   gap-y-5  p-5">

    <div class="navlink text-2xl flex ">
    <div class="hover:bg-gray-100 rounded-lg">
        <img src="/assets/img/icons/home-outline.svg" width="28" class="   p-1" alt=""> 
       </div>
        Dashboard / <?= ucfirst($data['navLinkActive']) ?>
        <img src="/assets/img/icons/chevron-forward-outline.svg" width="15" class=" scale-125 relative top-[2px]  rounded-r-full " alt="">
    </div>


    <div class="relative bg-white border  rounded-xl shadow-xl p-2 overflow-x-auto overflow-y-hidden flex flex-col gap-y-3  sm:rounded-lg">


        <form class="flex  gap-x-6   justify-end items-end  ">


            <div class="w-full flex gap-x-16   items-end">

                <div class="w-[25%]">
                    <select id="large" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-neutral-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="all" selected>All category</option>
                        <option value="Philosophie">Philosophie</option>
                        <option value="Histoire">Histoire</option>
                        <option value="Littérature classique">Littérature classique</option>
                        <option value="Poésie">Poésie</option>
                        <option value="Théâtre">Théâtre</option>
                        <option value="Sciences sociales">Sciences sociales</option>
                        <option value="Sciences politiques">Sciences politiques</option>
                        <option value="Sciences économiques">Sciences économiques</option>
                        <option value="Sciences">Sciences</option>
                        <option value="Médecine">Médecine</option>
                        <option value="Psychologie">Psychologie</option>
                        <option value="Sociologie">Sociologie</option>
                        <option value="Anthropologie">Anthropologie</option>
                        <option value="Archéologie">Archéologie</option>
                        <option value="Arts">Arts</option>
                        <option value="Musique">Musique</option>
                        <option value="Éducation">Éducation</option>
                        <option value="Droit">Droit</option>
                        <option value="Géographie">Géographie</option>
                        <option value="Géologie">Géologie</option>
                        <option value="Biologie">Biologie</option>
                        <option value="Chimie">Chimie</option>
                        <option value="Physique">Physique</option>
                        <option value="Mathématiques">Mathématiques</option>
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
                            <input type="search" id="default-search" class="block h-[50px] outline-none w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg  bg-neutral-50 focus:ring-blue-500 focus:border-[#36A2EB] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Nom" required>
                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-[#36A2EB] hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                        </div>
                    </div>

                    <div class=" h-[45px] -mt-8 ">
                        <div data-modal-target="new-book" data-modal-toggle="new-book" title="Create book" class="text-white bg-neutral-50 cursor-pointer  hover:shadow-lg hover:bg-neutral-100 border focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <img src="/assets/img/icons/add-circle-outline.svg" class=" scale-105" width="25" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>


        </form>

        <table class="w-full text-sm rounded-xl table2  border  text-left bg-white text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase   bg-neutral-50 dark:bg-gray-700 dark:text-gray-400">

                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Publication date
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Copy
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categorie
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Available
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="flex justify-end"> Action</span>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700  hover:bg-neutral-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>

                    <td class="px-6 py-4">
                        Informatique
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                    <td class="px-6 py-4 flex gap-x-1 justify-end text-right">
                        <img href="#" data-popover-target="popover" class=" hover:scale-105" width="18" src="/assets/img/icons/eye-outline.svg">
                        <span class="  w-1 h-5 bg-neutral-200  rounded-md "></span>
                        <img src="/assets/img/edit.svg" class=" hover:scale-105" width="18" alt="" srcset="">
                        <span class=" w-1 h-5 bg-neutral-200  rounded-md "></span>
                        <img src="/assets/img/icons/trash-outline.svg" class=" hover:scale-105" data-modal-target="popup-modal" data-modal-toggle="popup-modal" width="18" alt="" srcset="">

                        <div data-popover id="popover" role="tooltip" class="absolute z-[60] invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 z-[60] rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                <h3 class="font-semibold text-gray-900 dark:text-white z-[60]">Others information</h3>
                            </div>
                            <div class="px-3 py-2 z-50   ">
                                <p class="text-sm z-[60]"> Resume : Lorem ipsum dolor, adipisicing elit. Culpa perferendis voluptas accusantium voluptate aut vel, assumenda eligendi iusto cum quas debitis sapiente esse neque velit qui quod aliquid quaerat repellendus..</p>

                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </td>

                </tr>



                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700  hover:bg-neutral-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>

                    <td class="px-6 py-4">
                        Informatique
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                    <td class="px-6 py-4 flex gap-x-1 justify-end text-right">
                        <img href="#" data-popover-target="popover" class=" hover:scale-105" width="18" src="/assets/img/icons/eye-outline.svg">
                        <span class="  w-1 h-5 bg-neutral-200  rounded-md "></span>
                        <img src="/assets/img/edit.svg" class=" hover:scale-105" width="18" alt="" srcset="">
                        <span class=" w-1 h-5 bg-neutral-200  rounded-md "></span>
                        <img src="/assets/img/icons/trash-outline.svg" class=" hover:scale-105" data-modal-target="popup-modal" data-modal-toggle="popup-modal" width="18" alt="" srcset="">

                        <div data-popover id="popover" role="tooltip" class="absolute z-[60] invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 z-[60] rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                <h3 class="font-semibold text-gray-900 dark:text-white z-[60]">Others information</h3>
                            </div>
                            <div class="px-3 py-2 z-50   ">
                                <p class="text-sm z-[60]"> Resume : Lorem ipsum dolor, adipisicing elit. Culpa perferendis voluptas accusantium voluptate aut vel, assumenda eligendi iusto cum quas debitis sapiente esse neque velit qui quod aliquid quaerat repellendus..</p>

                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </td>

                </tr>

                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700  hover:bg-neutral-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>

                    <td class="px-6 py-4">
                        Informatique
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                    <td class="px-6 py-4 flex gap-x-1 justify-end text-right">
                        <img href="#" data-popover-target="popover" class=" hover:scale-105" width="18" src="/assets/img/icons/eye-outline.svg">
                        <span class="  w-1 h-5 bg-neutral-200  rounded-md "></span>
                        <img src="/assets/img/edit.svg" class=" hover:scale-105" width="18" alt="" srcset="">
                        <span class=" w-1 h-5 bg-neutral-200  rounded-md "></span>
                        <img src="/assets/img/icons/trash-outline.svg" class=" hover:scale-105" data-modal-target="popup-modal" data-modal-toggle="popup-modal" width="18" alt="" srcset="">

                        <div data-popover id="popover" role="tooltip" class="absolute z-[60] invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 z-[60] rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                <h3 class="font-semibold text-gray-900 dark:text-white z-[60]">Others information</h3>
                            </div>
                            <div class="px-3 py-2 z-50   ">
                                <p class="text-sm z-[60]"> Resume : Lorem ipsum dolor, adipisicing elit. Culpa perferendis voluptas accusantium voluptate aut vel, assumenda eligendi iusto cum quas debitis sapiente esse neque velit qui quod aliquid quaerat repellendus..</p>

                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </td>

                </tr>


                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700  hover:bg-neutral-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>

                    <td class="px-6 py-4">
                        Informatique
                    </td>
                    <td class="px-6 py-4">
                        3
                    </td>
                    <td class="px-6 py-4 flex gap-x-1 justify-end text-right">
                        <img href="#" data-popover-target="popover" class=" hover:scale-105" width="18" src="/assets/img/icons/eye-outline.svg">
                        <span class="  w-1 h-5 bg-neutral-200  rounded-md "></span>
                        <img src="/assets/img/edit.svg" class=" hover:scale-105" width="18" alt="" srcset="">
                        <span class=" w-1 h-5 bg-neutral-200  rounded-md "></span>
                        <img src="/assets/img/icons/trash-outline.svg" class=" hover:scale-105" data-modal-target="popup-modal" data-modal-toggle="popup-modal" width="18" alt="" srcset="">

                        <div data-popover id="popover" role="tooltip" class="absolute z-[60] invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 z-[60] rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                <h3 class="font-semibold text-gray-900 dark:text-white z-[60]">Others information</h3>
                            </div>
                            <div class="px-3 py-2 z-50   ">
                                <p class="text-sm z-[60]"> Resume : Lorem ipsum dolor, adipisicing elit. Culpa perferendis voluptas accusantium voluptate aut vel, assumenda eligendi iusto cum quas debitis sapiente esse neque velit qui quod aliquid quaerat repellendus..</p>

                            </div>
                            <div data-popper-arrow></div>
                        </div>
                    </td>

                </tr>







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



    <!-- Main modal -->
    <div id="new-book" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="new-book">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl flex gap-x-2 font-medium text-gray-900 dark:text-white">
                        <p> Create book </p>
                        <img src="/assets/img/icons/book-outline.svg" width="25" alt="">
                    </h3>
                    <form class="space-y-6" action="#">


                        <!-- id_livre	nom  	resume	date_publication langue	nb_exemplaire	id_categorie -->
                        <div>
                            <label for="Book name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Book name</label>
                            <input type="text" name="Book-name" id="Book-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>

                        <div>
                            <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Publication date</label>
                            <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>

                        <div>
                            <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Number</label>
                            <input type="number" min="1" name="number" id="number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div>

                        <div>
                            <label for="langue" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Language</label>
                            <select id="langue" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <?php
                                $jsonFile = APPPATH . '../public/assets/js/language.json';
                                $json = file_get_contents($jsonFile);
                                $languages = json_decode($json, true);

                                $i = -1;
                                foreach ($languages as $language) :
                                    $i++;
                                ?>
                                    <option value="<?= $i ?>" <?= $language['name'] === 'Anglais' ? "Selected" : "" ?>><?= $language['name'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>

                        <div>
                            <label for="categorie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Genre</label>
                            <select id="categorie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="others">Others</option>
                                <option value="Philosophie">Philosophie</option>
                                <option value="Histoire">Histoire</option>
                                <option value="Littérature classique">Littérature classique</option>
                                <option value="Poésie">Poésie</option>
                                <option value="Théâtre">Théâtre</option>
                                <option value="Sciences sociales">Sciences sociales</option>
                                <option value="Sciences politiques">Sciences politiques</option>
                                <option value="Sciences économiques">Sciences économiques</option>
                                <option value="Sciences">Sciences</option>
                                <option value="Médecine">Médecine</option>
                                <option value="Psychologie">Psychologie</option>
                                <option value="Sociologie">Sociologie</option>
                                <option value="Anthropologie">Anthropologie</option>
                                <option value="Archéologie">Archéologie</option>
                                <option value="Arts">Arts</option>
                                <option value="Musique">Musique</option>
                                <option value="Éducation">Éducation</option>
                                <option value="Droit">Droit</option>
                                <option value="Géographie">Géographie</option>
                                <option value="Géologie">Géologie</option>
                                <option value="Biologie">Biologie</option>
                                <option value="Chimie">Chimie</option>
                                <option value="Physique">Physique</option>
                                <option value="Mathématiques">Mathématiques</option>
                                <option value="Informatique">Informatique</option>
                            </select>
                        </div>

                        <div>
                            <label for="resume" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Summary</label>
                            <textarea id="resume" rows="4" name="resume" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write summary here..."></textarea>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this book ?</h3>

                    <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                    <button data-modal-hide="popup-modal" type="button" class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                        Yes, I'm sure
                    </button>
                </div>
            </div>
        </div>
    </div>


</section>

</section>
</main>