var options = {
    series: [{
        name : "MAX",
        data: [50, 50, 50, 50, 50, 50, 50]
    },{
        name:"MIN",
        data: [10,10,10,10,10,10,10]
    },{
        name:"Temérature",
        data: [15,17,19,21,20,60,24]
    }
        ],
    chart: {
        id: 'chart2',
        type: 'line',
        height: 230,
        toolbar: {
            autoSelected: 'pan',
            show: false
        }
    },
    colors: ['#e1575d','#7c9dd8','#00d393'],
    stroke: {
        width: 3
    },
    dataLabels: {
        enabled: false
    },
    fill: {
        opacity: 1,
    },
    markers: {
        size: 0
    },
    xaxis: {
        categories:["1","6","12","18","21","25","31"],
        title: {text : "Date"}
    },
    yaxis:{
        title:{ text : "Température"}, min:5, max:60
    }
};

var chart = new ApexCharts(document.querySelector("#line_chart_datalabel"), options);
chart.render();

var optionsLine = {
    series: [{
        name : "MAX",
        data: [50, 50, 50, 50, 50, 50, 50]
    },{
        name:"MIN",
        data: [10,10,10,10,10,10,10]
    },{
        name:"Temérature",
        data: [15,17,19,21,20,60,24]
    }
        ],
    chart: {
        id: 'chart1',
        height: 130,
        type: 'line',
        brush: {
            target: 'chart2',
            enabled: true
        },
        selection: {
            enabled: true,
        },
    },
    colors: ['#e1575d','#7c9dd8','#00d393'],
    fill: {
        opacity:1,
    },
    xaxis: {
        categories:["1","6","12","18","21","25","31"],
    },
    yaxis: {
        tickAmount: 2
    }
};

var chartLine = new ApexCharts(document.querySelector("#chart-line"), optionsLine);
chartLine.render();