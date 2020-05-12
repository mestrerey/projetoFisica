var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Comprimento [m]'],
        datasets: [{
            label: 'Período [s]',
            data: [{
                x: 0,
                y: 20
            },
                {
                    x: 10,
                    y: 15
                },
                {
                    x: 20,
                    y: 10
                },
            ],
            borderWidth: 1
        }]
    },
    options: {}
});

var ctx2 = document.getElementById('myChart2');
var myChart2 = new Chart(ctx2, {
    type: 'line',
    data: {
        labels: ['Comprimento [m]'],
        datasets: [{
            label: 'Período(s) [s]',
            data: [{
                x: 5,
                y: 20
            },
            {
                x: 5,
                y: 10
            },
            {
                x: 20,
                y: 5
            },
            ],
            borderWidth: 1
        }]
    },
    options: {}
});
