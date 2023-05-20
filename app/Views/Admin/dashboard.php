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
                            <h3 class="font-semibold text-gray-900 dark:text-white">Principe de lecture</h3>
                            <p>Nombre d'inscrit en fonction de la date du mois courant</p>                            
                        </div>
                        <div data-popper-arrow></div>
                    </div>
                    <canvas id="myChart"></canvas>
                    <p> Registration per month </p>
                </div>

                <div class=" flex   bg-white rounded-xl border  shadow-xl items-center flex-col  w-[450px] h-[300px]">

                    <p class="flex px-5 py-1 w-full items-center justify-end text-sm text-gray-500 dark:text-gray-400">
                        Help
                        <button data-popover-target="popover-description2" data-popover-placement="bottom-end" type="button"><svg class="w-4 h-4 ml-2 text-gray-400 hover:text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Show information</span>
                        </button>
                    </p>
                    <div data-popover id="popover-description2" role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72 dark:bg-gray-800 dark:border-gray-600 dark:text-gray-400">
                        <div class="p-3 space-y-2">

                            <h3 class="font-semibold text-gray-900 dark:text-white">Principe de lecture</h3>
                            <p>Un point est une date de retour et ca date normal de retour. tout les points superieur a la date x=y sont des livres rendu en retard</p>
                           
                        </div>
                        <div data-popper-arrow></div>
                    </div>

                    <canvas id="myChart2"></canvas>
                    <p> Book returned according to return date </p>

                </div>
            </div>

        </div>

    </div>
    </div>


</section>



</section>
</main>

<Script>
    // [['name' => 'student',  'value' => 15], ['name' => 'teacher', 'value' => 23], ['name' => 'members', 'value' => 38], ['name' => 'borrowBook', 'value' => 32], ['name' => 'notReturnBook', 'value' => 5], ['name' => 'allBook', 'value' => 243],]
    window.addEventListener('load', function(e) {
        var data = <?php echo json_encode($data['graph']); ?>;
        var stats = <?php echo json_encode($data['rate']); ?>;




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

            return myChart;
        }


        function drawDoubleGraph(selector, type, label, labels1, labels2, data1, data2) {
            var ctx2 = document.getElementById(selector).getContext('2d');
            const mixedChart = new Chart(ctx2, {
                type: type,
                options: {
                    plugins: {
                        legend: {
                            display: false,

                        },
                        interaction: {
                            mode: 'point'
                        }
                    }
                },
                data: {
                    labels: label,
                    datasets: [{
                            label: 'Date',
                            data: [{
                                x: 4,
                                y: 2
                            }],
                            type: 'scatter',
                            order: 2,
                            backgroundColor: 'rgb(20,10,10)',

                        }, {
                            label: 'Date',
                            data: [{
                                x: 3,
                                y: 2
                            }],
                            type: 'scatter',
                            order: 2,
                            backgroundColor: 'rgb(50,250,50)',

                        }, {
                            label: 'Date',
                            data: [{
                                x: 5,
                                y: 8
                            }],
                            type: 'scatter',
                            order: 2,
                            backgroundColor: 'rgb(19,275,236)',

                        }, {
                            label: 'Date',
                            data: [{
                                x: 20,
                                y: 15
                            }],
                            type: 'scatter',
                            order: 2,
                            backgroundColor: 'rgb(220,00,150)',

                        }, {
                            label: 'Date',
                            data: [{
                                x: 15,
                                y: 18
                            }],
                            type: 'scatter',
                            order: 2,
                            backgroundColor: 'rgb(90,10,90)',

                        }, {
                            label: 'Date',
                            data: [{
                                x: 10,
                                y: 18
                            }],
                            type: 'scatter',
                            order: 2,
                            backgroundColor: 'rgb(20,150,150)',

                        },
                        {
                            type: 'line',
                            label: 'Droite Limite',
                            data: [{
                                x: 1,
                                y: 1
                            }, {
                                x: 2,
                                y: 2
                            }, {
                                x: 3,
                                y: 3
                            }, {
                                x: 4,
                                y: 4
                            }, {
                                x: 5,
                                y: 5
                            }, {
                                x: 6,
                                y: 6
                            }, {
                                x: 7,
                                y: 7
                            }, {
                                x: 8,
                                y: 8
                            }, {
                                x: 9,
                                y: 9
                            }, {
                                x: 10,
                                y: 10
                            }, {
                                x: 11,
                                y: 11
                            }, {
                                x: 12,
                                y: 12
                            }, {
                                x: 13,
                                y: 13
                            }, {
                                x: 14,
                                y: 14
                            }, {
                                x: 15,
                                y: 15
                            }, {
                                x: 16,
                                y: 16
                            }, {
                                x: 17,
                                y: 17
                            }, {
                                x: 18,
                                y: 18
                            }, {
                                x: 19,
                                y: 19
                            }, {
                                x: 20,
                                y: 20
                            }, {
                                x: 21,
                                y: 21
                            }, {
                                x: 22,
                                y: 22
                            }, {
                                x: 23,
                                y: 23
                            }, {
                                x: 24,
                                y: 24
                            }, {
                                x: 26,
                                y: 26
                            }, {
                                x: 27,
                                y: 27
                            }, {
                                x: 28,
                                y: 28
                            }, {
                                x: 29,
                                y: 29
                            }, {
                                x: 30,
                                y: 30
                            }, {
                                x: 31,
                                y: 31
                            }, ],
                            fill: false,

                            borderColor: 'rgb(54,124,235)',
                            tension: 0.1,
                            with: 0.1
                        }
                    ],

                },
            });
        }


        // Récupérer le canvas HTMl
        

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






        stats.forEach(s => {
            speedNumber(s.name, s.value)
        });
        /*
                fetch('http://localhost:8080/api/data')
                .then(response => response.json())
                .then(data2 => console.log(data2));

                console.log(data2['labels'])
          */
        function removeData(chart) {
            console.log(chart)
            chart.data.labels.pop();
            chart.data.datasets[0].pop()
            chart.data.datasets.forEach((dataset) => {
                dataset.data.pop();
            });
            chart.update();
        }

        function addData(chart, label, data) {
            chart.data.labels.push(label);
            console.log(chart)
            chart.data.datasets.forEach((dataset) => {
                dataset.data.push(data);
            });
            chart.update();
        }
 
       console.log(data)
        myChart = drawGraph("myChart", 'bar', 'Registration', data.days, data.counts)
        drawDoubleGraph("myChart2", 'bar', data.labels, "Return date", "Supposed return time", [13], [14])
          

    }, false)
</Script>