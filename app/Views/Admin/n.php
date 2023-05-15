<section class="content flex flex-col   gap-y-5  p-5">

    <div class="navlink text-2xl flex ">
        Dashboard / <?= ucfirst($data['navLinkActive']) ?>
        <img src="/assets/img/icons/chevron-forward-outline.svg" width="15" class=" scale-125 relative top-[2px]  rounded-r-full " alt="">
    </div>
</section>


</section>
</section>


</main>




<div data-popover id="popover" role="tooltip" class="absolute z-[60] invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                            <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 z-[60] rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                                <h3 class="font-semibold text-gray-900 dark:text-white z-[60]">Others information</h3>
                            </div>
                            <div class="px-3 py-2 z-50   ">
                                <p class="text-sm z-[60]"> text</p>

                            </div>
                            <div data-popper-arrow></div>
                        </div>



<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700  hover:bg-neutral-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                       valeur1
                    </th>
                    <td class="px-6 py-4">
                       valeur2
                    </td>
                    <td class="px-6 py-4">
                        valeur3
                    </td>

                    <td class="px-6 py-4">
                       valeur4
                    </td>
                    <td class="px-6 py-4">
                        valeur4
                    </td>
                    <td class="px-6 py-4 flex gap-x-1 justify-end text-right">
                        <img href="#" data-popover-target="popover" class=" hover:scale-105" width="18" src="/assets/img/icons/eye-outline.svg">
                        <span class="  w-1 h-5 bg-neutral-200  rounded-md "></span>
                        <img src="/assets/img/edit.svg" class=" hover:scale-105" width="18" alt="" srcset="">
                        <span class=" w-1 h-5 bg-neutral-200  rounded-md "></span>
                    </td>

                </tr>



                
















        <Script>


 
window.addEventListener('load', function(e) {
        var data = <?php echo json_encode($data['graph']); ?>;
        var stats = <?php echo json_encode([['name' => 'student',  'value' => 15], ['name' => 'teacher', 'value' => 23], ['name' => 'members', 'value' => 38], ['name' => 'borrowBook', 'value' => 32], ['name' => 'notReturnBook', 'value' => 5], ['name' => 'allBook', 'value' => 243],]); ?>;



 
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


        // Récupérer le canvas HTML
        


        var ctx3 = document.getElementById("myChart3").getContext('2d');
        const mixedChart2 = new Chart(ctx3, {
            type: 'doughnut',
            data: {
                labels: [
                    'Roman',
                    'Historique',
                    'Anime',
                    'Poeme'
                ],
                datasets: [{
                    label: 'Most read',
                    data: [18, 42, 25, 15],
                   
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












     myChart  =  drawGraph("myChart", 'bar', 'Registration', data.labels, data.data)
        drawDoubleGraph("myChart2", 'bar', data.labels, "Return date", "Supposed return time", [13, 8, 10, 10, 11, 14, 13, 16], [15, 5, 8, 7, 5, 10, 13, 12, 18, 7, 9, 10, 15, 5, 8, 10, 5, 16, 8, 10, 8, 7, 14])
        myChart5 =  drawGraph("myChart5", 'bar', 'Borrow book', data.labels, data.data)
        myChart6 = drawGraph("myChart6", 'line', 'New book', data.labels, data.data)


axios.get('http://localhost:8080/api/data')
  .then((response) => {
   
     console.log(response.data.labels);
     console.log(response.data.data);
   
     removeData(mixedChart2);
     addData(mixedChart2,['Roman','Historique'], [58,42])

    // La requête est terminée et réussie
  })
  .catch((error) => {
    console.error(error);
    // La requête a échoué
  });


  



         

/*
  const url = 'https://openai80.p.rapidapi.com/chat/completions';
const options = {
	method: 'POST',
	headers: {
		'content-type': 'application/json',
		'X-RapidAPI-Key': '22cb8d318amsh04d273cb9dc1f88p1b4223jsn3e3a21a2f7ed',
		'X-RapidAPI-Host': 'openai80.p.rapidapi.com'
	},
	body: {
		model: 'gpt-3.5-turbo',
		messages: [
			{
				role: 'user',
				content: 'How are you ? '
			}
		]
	}
};


const fun = async function api()
{
    try {
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(response);
	console.log(result);

} catch (error) {
	console.error(error);
}

}
*/

}, false)
        </Script>        