<main>
    <div class="flex flex-col p-12  items-center">
        <div class="flex flex-col gap-y-5">
            <div class="font-bold text-6xl">
                Search and find your book

            </div>
            <div class="flex gap-6 w-full h-full items-center   justify-between">

                <form method="post" action="/search/book" class="w-full px-6 gap-2">
                    <input type="hidden" id="csrf_test_name" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="search" name="search"  id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

            </div>

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
                        Langue
                    </th>

                    <th scope="col" class="px-6 py-3">
                        Available
                    </th>
                   

                </tr>
            </thead>

            <tbody>

            

            <?php foreach ($data['book'] as  $livre ) : ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700  hover:bg-neutral-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <?= $livre->nom ?>
                    </th>
                    <td class="px-6 py-4">
                        <?= $livre->date_publication ?>     
                    </td>
                    <td class="px-6 py-4">
                        <?= $livre->nb_exemplaire?>     
                    </td>

                    <td class="px-6 py-4">
                        <?= $livre->langue ?>   
                    </td>
                    <td class="px-6 py-4">
                        <?php if($livre->nb_exemplaire > 0){ echo "<span class='text-green-400'>Yes</span>"; }else{ echo "<span class='text-red-400'> No </span>";}?>  
                    </td>
                    

                </tr>
             <?php endforeach ?>
            </tbody>


            <tfoot>


            </tfoot>
        </table>

            <div class="w-full flex justify-center">
                <img src="/assets/img/search.png" class="" alt="" srcset="">
            </div>


        </div>
    </div>
</main>