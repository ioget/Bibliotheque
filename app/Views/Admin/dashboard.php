<section class="content flex flex-col   gap-y-5  p-5">


    <div class="navlink text-2xl flex ">
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
            <div>
                <img src="/assets/img/BorrowBook.svg" alt="" class="NotRBook absolute mt-1 opacity-25   " width="40" srcset="">
                <div class="bg-red-300 absolute  shadow-xl  border ml-8 rounded-full  -mt-3">
                    <img src="/assets/img/icons/close-outline.svg" alt="" class=" opacity-70  " width="25" srcset="">
                </div>
            </div>
            <div class=" flex flex-col  items-end ">
                <div class=" flex  text-red-300   font-bold text-2xl justify-center w-full">
                    <span class="count notReturnBook">0</span>
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

    <div class=" rounded-xl shadow-xl mt-5 bg-gray-100 p-5">

        <div class="flex justify-end">

            <div class="flex justify-around border bg-white rounded-xl shadow-md  items-end w-[50%] p-2">
                <div>
                    <label for="month" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Month</label>
                    <select id="month" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>January</option>
                        <option value="US">February</option>
                        <option value="CA">March</option>
                        <option value="FR">April</option>
                        <option value="DE">May</option>
                        <option value="US">June</option>
                        <option value="CA">July</option>
                        <option value="FR">April</option>
                        <option value="DE">August</option>
                        <option value="US">September</option>
                        <option value="CA">October</option>
                        <option value="FR">November</option>
                        <option value="DE">December</option>
                    </select>
                </div>
                <div>
                    <label for="year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                    <select id="year" class="bg-gray-50 border outline-none border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>2023</option>
                        <option selected>2024</option>
                        <option selected>2025</option>
                        <option selected>2026</option>
                      
                    </select>
                </div>

                <div>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Fliter</button>
                </div>
            </div>
        </div>

        <div class="flex flex-col rounded-xl  bg-gray-100  mt-6 gap-y-10 p-5">
            <div class=" flex  justify-around  gap-x-10">
                <div class=" flex   bg-white rounded-xl border shadow-xl items-center flex-col w-[450px] h-[300px]">
                    <canvas id="myChart"></canvas>
                    <p> Registration per month </p>
                </div>

                <div class=" flex   bg-white rounded-xl border  shadow-xl items-center flex-col  w-[450px] h-[300px]">
                    <canvas id="myChart2"></canvas>
                    <p> Book returned according to return date </p>
                </div>
            </div>

            <div class=" flex  justify-around  gap-x-10">

                <div class="flex  bg-white rounded-xl border  shadow-xl gap-x-10">
                    <div class=" flex  items-center flex-col  w-fit h-fit">
                        <canvas id="myChart3"></canvas>
                        <p>Most requested book </p>
                    </div>
                </div>
                <div class="flex  bg-white rounded-xl border  shadow-xl gap-x-10">
                    <div class=" flex  items-center flex-col  w-fit h-fit">
                        <canvas id="myChart4"></canvas>
                        <p> Best readers </p>
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
    window.addEventListener('load', function(e) {
        var data = <?php echo json_encode($data['graph']); ?>;
        var stats = <?php echo json_encode([['name' => 'student',  'value' => 15], ['name' => 'teacher', 'value' => 23], ['name' => 'members', 'value' => 38], ['name' => 'borrowBook', 'value' => 32], ['name' => 'notReturnBook', 'value' => 5], ['name' => 'allBook', 'value' => 240],]); ?>;



        function drawGraph(selector, type, label, labels, data, bg = "#36A2EB") {
            var ctx = document.getElementById(selector).getContext('2d');
            var myChart = new Chart(ctx, {
                type: type,
                data: {
                    labels: labels,
                    datasets: [{
                        label: label,
                        data: data,
                        backgroundColor: bg,
                        tension: 0.1
                    }],

                }
            });
        }


        function drawDoubleGraph(selector, type, label, labels1, labels2, data1, data2) {
            var ctx2 = document.getElementById(selector).getContext('2d');
            const mixedChart = new Chart(ctx2, {
                type: type,
                data: {
                    labels: label,
                    datasets: [{
                        label: labels1,
                        data: data1,
                        type: 'line',
                        order: 2
                    }, {
                        label: labels2,
                        data: data2,
                        type: 'line',
                        order: 1
                    }],

                },
            });
        }




        var ctx3 = document.getElementById("myChart3").getContext('2d');
        const mixedChart2 = new Chart(ctx3, {
            type: 'doughnut',
            data: {
                labels: [
                    'Roman',
                    'Historique',
                    'anime',
                    'Poeme'
                ],
                datasets: [{
                    label: 'Most read',
                    data: [10, 50, 25, 15],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(54, 162, 235)',
                        'rgb(255, 205, 86)',
                        'rgb(30, 255, 86)'
                    ],
                    hoverOffset: 4
                }]
            }
        });

        var ctx4 = document.getElementById("myChart4").getContext('2d');
        const mixedChart4 = new Chart(ctx4, {
            type: 'polarArea',
            data: {
                labels: [
                    'Mathematiciens',
                    'Physiciens',
                    'Chimiste',
                    'Informaticiens',
                    'Biologiste'
                ],
                datasets: [{
                    label: 'Best reader',
                    data: [11, 16, 9, 6, 14],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(75, 75, 192)',
                        'rgb(255, 205, 86)',
                        'rgb(201, 203, 207)',
                        'rgb(0, 162, 235)'
                    ]
                }]
            }
        });

        function speedNumber(selector, number) {
            const counter = document.querySelector('.' + selector)

            let animation = anime({
                targets: counter,
                innerHTML: number,
                easing: 'linear', // accélération constante
                round: 1, // arrondir les chiffres
                duration: 2000 // durée de l'animation en millisecondes
            }).play();
        }

        let overlay = this.document.querySelector(".overlay");

        overlay.classList.toggle("hidden")


        stats.forEach(s => {
            speedNumber(s.name, s.value)
        });

        drawGraph("myChart", 'bar', 'Registration', data.labels, data.data)
        drawDoubleGraph("myChart2", 'bar', data.labels, "Return date", "Supposed return time", [13, 8, 10, 10, 11, 14, 13, 16], [15, 5, 8, 7, 5, 10, 13, 12, 18, 7, 9, 10, 15, 5, 8, 10, 5, 16, 8, 10, 8, 7, 14])




    }, false)
</script>