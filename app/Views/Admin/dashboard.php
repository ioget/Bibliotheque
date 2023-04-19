<section class="content flex flex-col  gap-y-5  ">

    <div class=" flex  justify-around  gap-x-10">
        <div class=" flex  items-center flex-col w-[450px] h-[300px]">
            <canvas id="myChart"></canvas>
            <p> Registration per month </p>
        </div>

        <div class=" flex  items-center flex-col  w-[450px] h-[300px]">
            <canvas id="myChart2"></canvas>
            <p> Return number on return date </p>
        </div>
    </div>

    <div class=" flex  justify-around  gap-x-10">

        <div class="flex  gap-x-10">
            <div class=" flex  items-center flex-col  w-fit h-fit">
                <canvas id="myChart3"></canvas>
                <p> Return number on return date </p>
            </div>
        </div>
        <div class="flex  gap-x-10">
            <div class=" flex  items-center flex-col  w-fit h-fit">
                <canvas id="myChart4"></canvas>
                <p> Return number on return date </p>
            </div>
        </div>
    </div>


</section>



</section>
</main>



<script>
    // récupérez les données pour le graphique à partir du modèle et stockez-les dans une variable JavaScript

    window.addEventListener('load', function(e) {
        var data = <?php echo json_encode($data['graph']); ?>;

        console.log(data)
        // dessinez le graphique
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data.labels,
                datasets: [{
                    label: 'Inscription',
                    data: data.data,
                    backgroundColor: "#36A2EB",
                    tension: 0.1
                }],

            }
        });


        var ctx2 = document.getElementById("myChart2").getContext('2d');
        const mixedChart = new Chart(ctx2, {
            type: 'bar',
            data: {
                datasets: [{
                    label: 'Bar Dataset',
                    data: [12, 20, 2, 30],
                    type: 'line',
                    order: 2
                }, {
                    label: 'Line Dataset',
                    data: [7, 15, 8, 25],
                    type: 'line',
                    // this dataset is drawn on top
                    order: 1
                }],
                labels: ['January', 'February', 'March', 'April']
            },
        });


        var ctx3 = document.getElementById("myChart3").getContext('2d');
        const mixedChart2 = new Chart(ctx3, {
            type: 'doughnut',
            data: {
                labels: [
                    'Lecteur',
                    'Blue',
                    'Yellow',
                    'Ecrivain'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [200, 50, 100, 78],
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
                    'Red',
                    'Green',
                    'Yellow',
                    'Grey',
                    'Blue'
                ],
                datasets: [{
                    label: 'My First Dataset',
                    data: [11, 16, 7, 3, 14],
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(75, 192, 192)',
                        'rgb(255, 205, 86)',
                        'rgb(201, 203, 207)',
                        'rgb(54, 162, 235)'
                    ]
                }]
            }
        });

    }, false)
</script>