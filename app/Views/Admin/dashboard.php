<section class="content flex flex-col   gap-y-5  p-5">


    <div class="navlink text-2xl flex ">
       <div class="hover:bg-gray-100 rounded-lg">
        <img src="/assets/img/icons/home-outline.svg" width="28" class="   p-1" alt=""> 
       </div>
        Dashboard / <?= ucfirst($data['navLinkActive']) ?>
        <img src="/assets/img/icons/chevron-forward-outline.svg" width="15" class=" scale-125 relative top-[2px]  rounded-r-full " alt="">

    </div>

    <div class="rating-user   flex justify-around ">

        <div class=" border rounded-xl flex bg-white w-[280px]  shadow-xl p-5   justify-between ">
            <div>
                <img src="/assets/img/student.svg" alt="" width="60" srcset="">
            </div>
            <div class=" flex flex-col  items-end ">
                <div class=" flex  text-green-700  font-bold text-2xl justify-center w-full">
                    <span class="count student">0</span>
                </div>
                <div class=" text-lg">
                    Registered student
                </div>
            </div>
        </div>


        <div class=" border rounded-xl flex bg-white w-[280px]  shadow-xl p-5   justify-between ">
            <div>
                <img src="/assets/img/teacher.svg" alt="" width="60" srcset="">
            </div>
            <div class=" flex flex-col  items-end ">
                <div class=" flex  text-[#36A2EB]  font-bold text-2xl justify-center w-full">
                    <span class="count teacher">0</span>
                </div>
                <div class=" text-lg">
                    Registered teacher
                </div>
            </div>
        </div>


        <div class=" border flex rounded-xl bg-white w-[280px]  shadow-xl p-5   justify-between ">
            <div>
                <img src="/assets/img/icons/people-circle-outline.svg" alt="" width="60" srcset="">
            </div>
            <div class=" flex flex-col  items-end ">
                <div class=" flex  text-yellow-500  font-bold text-2xl justify-center w-full">
                    <span class="count members">0</span>
                </div>
                <div class=" text-lg">
                    Members
                </div>
            </div>
        </div>

    </div>

    <div class="rating-book   flex  justify-around ">


        <div class=" border rounded-xl flex bg-white w-[280px]  shadow-xl p-5   justify-between ">
            <div>
                <img src="/assets/img/BorrowBook.svg" alt="" width="60" srcset="">
            </div>
            <div class=" flex flex-col  items-end ">
                <div class=" flex  text-fuchsia-800 font-bold text-2xl justify-center w-full">
                    <span class="count borrowBook">0</span>
                </div>
                <div class=" text-lg">
                    Borrowed books
                </div>
            </div>
        </div>

        <div class=" border rounded-xl flex bg-white w-[280px]  shadow-xl p-5   justify-between ">
            <div class="   ">
                <img src="/assets/img/BorrowBook.svg" alt="" class="NotRBook   absolute mt-1 opacity-25   " width="40" srcset="">
                <div class="bg-red-300 absolute  shadow-xl  border ml-8 rounded-full   -mt-3">
                    <img src="/assets/img/icons/close-outline.svg" alt="" class="    opacity-70  " width="25" srcset="">
                </div>
            </div>
            <div class=" flex flex-col  items-end ">
                <div class=" flex  text-red-300   font-bold text-2xl justify-center w-full">
                    <span class="count notReturnBook ">0</span>
                </div>
                <div class=" text-lg">
                    Not returned books
                </div>
            </div>
        </div>


        <div class=" border flex rounded-xl bg-white w-[280px]  shadow-xl p-5   justify-between ">
            <div>
                <img src="/assets/img/books.svg" alt="" width="50" srcset="">
            </div>
            <div class=" flex flex-col  items-end ">
                <div class=" flex   text-teal-800  font-bold text-2xl justify-center w-full">
                    <span class="count allBook">0</span>
                </div>
                <div class=" text-lg">
                    All books
                </div>
            </div>
        </div>
    </div>

    <div class=" rounded-xl  mt-5 bg-gray-100 p-5">

        <div class="flex justify-end">
            <div class="flex justify-around border bg-white rounded-xl shadow-md  items-end w-[50%] p-2">
               
                <div class="flex flex-col  ">
                    <div class=" text-neutral-500 ">
                        <h2>Pannel Control</h2>
                    </div>
                    <div class="mt-2 pl-5"><label for="month" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Month</label>
                    <select id="month" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="1" selected>January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="9">August</option>
                        <option value="10">September</option>
                        <option value="11">October</option>
                        <option value="12">November</option>
                        <option value="13">December</option>
                    </select></div>
                </div>
                <div>
                    <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                    <select id="year" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>

                    </select>
                </div>

                <div>
                    <button type="submit" class="js-btn text-white bg-[#36A2EB] hover:shadow-lg focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Fliter</button>
                </div>
            </div>
        </div>

        <div class="chart1 flex flex-col rounded-xl  bg-gray-100  mt-6 gap-y-10 p-5">

            <div class=" flex  justify-around  gap-x-10">
                <div class=" flex   bg-white rounded-xl border shadow-xl items-center flex-col w-[450px] h-[300px]">
                    <p class="flex px-5 py-1 w-full items-center justify-end text-sm text-gray-500 dark:text-gray-400">
                        Help
                        <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Show information</span>
                        </button>
                    </p>
                    <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                        <div class="p-3 space-y-2">

                            <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                            <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                            <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                            <a href="#" class="flex items-center font-medium text-[#36A2EB] dark:text-blue-500 dark:hover:text-[#36A2EB] hover:text-blue-700">Read more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <canvas id="myChart"></canvas>
                    <p> Registration per month </p>
                </div>

                <div class=" flex   bg-white rounded-xl border  shadow-xl items-center flex-col  w-[450px] h-[300px]">

                    <p class="flex px-5 py-1 w-full items-center justify-end text-sm text-gray-500 dark:text-gray-400">
                        Help
                        <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Show information</span>
                        </button>
                    </p>
                    <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                        <div class="p-3 space-y-2">

                            <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                            <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                            <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                            <a href="#" class="flex items-center font-medium text-[#36A2EB] dark:text-blue-500 dark:hover:text-[#36A2EB] hover:text-blue-700">Read more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                        <div data-popper-arrow></div>
                    </div>

                    <canvas id="myChart2"></canvas>
                    <p> Book returned according to return date </p>

                </div>
            </div>

            <div class=" flex  justify-around  gap-x-10">

                <div class="flex  bg-white rounded-xl border  shadow-xl gap-x-10">
                    <div class=" flex  items-center flex-col  w-fit h-fit">
                        <p class="flex px-5 py-1 w-full items-center justify-end text-sm text-gray-500 dark:text-gray-400">
                            Help
                            <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Show information</span>
                            </button>
                        </p>
                        <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">

                                <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                                <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                                <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                                <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                                <a href="#" class="flex items-center font-medium text-[#36A2EB] dark:text-blue-500 dark:hover:text-[#36A2EB] hover:text-blue-700">Read more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                        <canvas id="myChart3"></canvas>
                        <p>Most requested book </p>
                    </div>
                </div>

                
                
                <div class="flex  bg-white rounded-xl border  shadow-xl gap-x-10">
                    <div class=" flex  items-center flex-col  w-fit h-fit">
                        <p class="flex px-5 py-1 w-full items-center justify-end text-sm text-gray-500 dark:text-gray-400">
                            Help
                            <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="sr-only">Show information</span>
                            </button>
                        </p>
                        <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                            <div class="p-3 space-y-2">

                                <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                                <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                                <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                                <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                                <a href="#" class="flex items-center font-medium text-[#36A2EB] dark:text-blue-500 dark:hover:text-[#36A2EB] hover:text-blue-700">Read more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                            <div data-popper-arrow></div>
                        </div>
                        <canvas id="myChart4"></canvas>
                        <p> Best readers </p>
                    </div>
                </div>
            </div>

            <div class="flex  justify-around  gap-x-10">

            <div class=" flex   bg-white rounded-xl border shadow-xl items-center flex-col w-[450px] h-[300px]">
                    <p class="flex px-5 py-1 w-full items-center justify-end text-sm text-gray-500 dark:text-gray-400">
                        Help
                        <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Show information</span>
                        </button>
                    </p>
                    <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                        <div class="p-3 space-y-2">

                            <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                            <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                            <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                            <a href="#" class="flex items-center font-medium text-[#36A2EB] dark:text-blue-500 dark:hover:text-[#36A2EB] hover:text-blue-700">Read more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <canvas id="myChart5"></canvas>
                    <p> Registration per month </p>
                </div>

                <div class=" flex   bg-white rounded-xl border  shadow-xl items-center flex-col  w-[450px] h-[300px]">

                    <p class="flex px-5 py-1 w-full items-center justify-end text-sm text-gray-500 dark:text-gray-400">
                        Help
                        <button data-popover-target="popover-description" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Show information</span>
                        </button>
                    </p>
                    <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                        <div class="p-3 space-y-2">

                            <h3 class="font-semibold text-gray-900 dark:text-white">Activity growth - Incremental</h3>
                            <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                            <h3 class="font-semibold text-gray-900 dark:text-white">Calculation</h3>
                            <p>For each date bucket, the all-time volume of activities is calculated. This means that activities in period n contain all activities up to period n, plus the activities generated by your community in period.</p>
                            <a href="#" class="flex items-center font-medium text-[#36A2EB] dark:text-blue-500 dark:hover:text-[#36A2EB] hover:text-blue-700">Read more <svg class="w-4 h-4 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                        <div data-popper-arrow></div>
                    </div>

                    <canvas id="myChart6"></canvas>
                    <p> Book returned according to return date </p>

                </div>
            </div>
            </div>

        </div>



    </div>

    </div>
    </div>


</section>



</section>
</main>


<script>
    
    // récupérez les données pour le graphique à partir du modèle et stockez-les dans une variable JavaScript
    // ['student' => 15, 'teacher' => 23, 'members' => 38, "borrowBook" => 32, "notReturnBook" => 5, 'allBook' => 243]

   
</script>

