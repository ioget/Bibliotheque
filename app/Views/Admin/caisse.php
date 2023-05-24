<section class="content flex  flex-col  gap-y-5  p-5">


    <div class="navlink text-2xl flex ">
        <div class="hover:bg-gray-100 rounded-lg">
            <img src="/assets/img/icons/home-outline.svg" width="28" class="   p-1" alt="">
        </div>
        Dashboard / <?= ucfirst($data['navLinkActive']) ?>
        <img src="/assets/img/icons/chevron-forward-outline.svg" width="15" class=" scale-125 relative top-[2px]  rounded-r-full " alt="">

    </div>

    <section class=" flex gap-x-8 ">

        <div class="flex w-full flex-col ">

            <div class="relative bg-white border  rounded-xl shadow-md p-2 overflow-x-auto overflow-y-hidden flex flex-col gap-y-3  sm:rounded-lg ">



                <form method="POST" class="js-caisse w-full flex gap-x-16   items-end">
                    <input type="hidden" id="csrf_test_name" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                    <div class="w-[45%]">
                        <select id="categorie" name="categorie" class="block w-full px-4 py-3 text-base text-gray-900 border border-gray-300 rounded-lg bg-neutral-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="1">Student</option>
                            <option value="2">Teacher</option>
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
                                <input type="search" name="search" id="search" class="block h-[50px] outline-none w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg  bg-neutral-50 focus:ring-blue-500 focus:border-[#36A2EB] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Matricule or firstname " required>
                                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-[#36A2EB] hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>

            <div>
                <div class=" flex  mt-6 ">
                    <div class="w-full  flex gap-y-2 flex-col  shadow-md h-[200px] bg-white  rounded-xl p-3">
                        <div class="flex  justify-between ">
                            <h2 class="font-bold  text-xl">User Information </h2>
                            <h2 class="user-status-error hidden text-sm  items-end text-red-400">Something wrong try again.</h2>
                            <h2 class="user-status-succes hidden text-sm  items-end text-green-400">Data is loaded</h2>
                        </div>

                        <div>
                            <span class="data-point"> Point:</span> <span class="value-point text-[#36A2EB]"></span>
                        </div>
                        <div>
                            <span class="data-filiere"> Filiere:</span> <span class="value-filiere"></span>
                        </div>
                        <div>
                            <span class="data-lastname"> Lastname:</span> <span class="value-lastname"></span>
                        </div>
                        <div>
                            <span class="data-firstname"> Firstname:</span> <span class="value-firstname "></span>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <div class="flex w-full flex-col">
            <div class="relative bg-white border  rounded-xl shadow-md p-2 overflow-x-auto overflow-y-hidden flex flex-col gap-y-3  sm:rounded-lg ">

                <form class="w-full js-book flex gap-x-16   items-end">

                    <input type="hidden" id="csrf_test_name" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

                    <div class="w-full gap-x-2  justify-end flex items-end">
                        <div class="w-full ">
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                </div>
                                <input id="search-book" name="search-book" type="search" id="default-search" class="block h-[50px] outline-none w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg  bg-neutral-50 focus:ring-blue-500 focus:border-[#36A2EB] dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by book name " required>
                                <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-[#36A2EB] hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                            </div>
                        </div>


                    </div>
                </form>
            </div>

            <div>
                <div class="flex  mt-6 ">
                    <div class="w-full flex gap-y-2 flex-col  shadow-md h-[200px] bg-white  rounded-xl p-3">
                        <div class="flex justify-between">
                            <h2 class="font-bold text-xl ">Book Information</h2>
                            <h2 class="book-status-error hidden text-sm  items-end text-red-400">Something wrong try again.</h2>
                            <h2 class="book-status-succes hidden text-sm  items-end text-green-400">Data is loaded</h2>
                        </div>
                        <div>
                            <span class="data-name"> Name:</span> <span class="value-name"></span>
                        </div>
                        <div>
                            <span class="data-langue"> Langue:</span> <span class="value-langue"></span>
                        </div>
                        <div>
                            <span class="data-categorie"> Categorie:</span> <span class="value-categorie"></span>
                        </div>
                        <div>
                            <span class="data-examplary"> Examplary:</span> <span class="value-examplary text-[#36A2EB]"></span>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="flex  justify-end w-full">

        <div class="js-retrun hidden bg-white  flex-col rounded-xl p-2 shadow-md w-[49%] h-[80px]">
            <h2 class="font-bold text-purple-600">Return book</h2>

            <div class="flex w-full ">
                <div class="flex w-full items-center gap-x-2 justify-between ">
                    <div> Confirm return book at <?php $Now = new \DateTime('now');
                                                    echo $Now->format('Y-m-d'); ?> </div>
                    <form method="GET" action="/put/return" class="flex gap-x-2">
                    <input type="text" id="id_livre-js" class="txt_csrfname hidden" name="id_livre" value="default" />
                    <input type="number" id="id-js" class="txt_csrfname hidden" name="id" value="-1" />

                        <button type="reset"  class="text-white js-reset  bg-red-400 hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Clean</button>
                        <button type="submit" class="text-white   bg-green-400 hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Confirme</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="js-borrow hidden bg-white  flex-col rounded-xl p-2 shadow-md w-[49%] h-[80px]">
            <h2 class="font-bold text-[#36A2EB] ">Borrow book</h2>

            <div class="flex w-full ">
                <div class="flex w-full items-center gap-x-2 justify-between ">
                    <div> Confirm borrow book for return at <?php $Now = new \DateTime('now');
                                                                 $Now->modify('+2 weeks');
                                                            echo $Now->format('Y-m-d'); ?> </div>
                    <form method="GET" action="/put/borrow" class="flex gap-x-2">
                        <input type="hidden" id="csrf_test_name" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                        
                        <input type="text" id="id_livre" class="txt_csrfname hidden" name="id_livre" value="default" />
                        <input type="number" id="id" class="txt_csrfname hidden" name="id" value="-1" />
                        
                        <button type="reset" class="text-white  js-reset bg-red-400 hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Clean</button>
                        <button type="submit" class="text-white bg-green-400 hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Confirme</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


</section>
</section>

<!--
<div id="toast-success" class="flex absolute top-16 right-5 z-30 items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Check icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Item moved successfully.</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>

<div id="toast-danger" class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Error icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Item has been deleted.</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-danger" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>
<div id="toast-warning" class="flex items-center w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert">
    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-orange-500 bg-orange-100 rounded-lg dark:bg-orange-700 dark:text-orange-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Warning icon</span>
    </div>
    <div class="ml-3 text-sm font-normal">Improve password difficulty.</div>
    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-warning" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
</div>
-->


</main>

<?php
/** 
 * User information
 *  -nom 
 *  -prenom 
 *  -filiere
 *  -point
 * Book information
 *  -nom
 *  -categorie
 *  -examplaire libre
 * 
 */
?>