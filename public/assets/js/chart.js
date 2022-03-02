// Daily Sales chart.
// Based on Chartjs plugin - http://www.chartjs.org/
var dailySales = function () {
    var chartContainer = KTUtil.getByID('kt_chart_daily_sales');

    if (!chartContainer) {
        return;
    }

    var chartData = {
        // labels: ["Label 1", "Label 2", "Label 3", "Label 4", "Label 5", "Label 6", "Label 7", "Label 8", "Label 9", "Label 10", "Label 11", "Label 12", "Label 13", "Label 14", "Label 15", "Label 16"],
        labels: labels,
        datasets: [{
            //label: 'Dataset 1',
            backgroundColor: KTApp.getStateColor('success'),
            data: dataset
            // data: [
            //     15, 20, 25, 30, 25, 20, 15, 20, 25, 30, 25, 20, 15, 10, 15, 20
            // ]
        }, {
            //label: 'Dataset 2',
            backgroundColor: '#f3f3fb',
            data: dataset
            // data: [
            //     15, 20, 25, 30, 25, 20, 15, 20, 25, 30, 25, 20, 15, 10, 15, 20
            // ]
        }]
    };

    var chart = new Chart(chartContainer, {
        type: 'bar',
        data: chartData,
        options: {
            title: {
                display: false,
            },
            tooltips: {
                intersect: false,
                mode: 'nearest',
                xPadding: 10,
                yPadding: 10,
                caretPadding: 10
            },
            legend: {
                display: false
            },
            responsive: true,
            maintainAspectRatio: false,
            barRadius: 4,
            scales: {
                xAxes: [{
                    display: false,
                    gridLines: false,
                    stacked: true
                }],
                yAxes: [{
                    display: false,
                    stacked: true,
                    gridLines: false
                }]
            },
            layout: {
                padding: {
                    left: 0,
                    right: 0,
                    top: 0,
                    bottom: 0
                }
            }
        }
    });
}

// Profit Share Chart.
// Based on Chartjs plugin - http://www.chartjs.org/
var profitShare = function () {
    if (!KTUtil.getByID('kt_chart_profit_share')) {
        return;
    }

    var randomScalingFactor = function () {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'doughnut',
        data: {
            datasets: [{
                data: [
                    35, 30, 35
                ],
                backgroundColor: [
                    KTApp.getStateColor('success'),
                    KTApp.getStateColor('danger'),
                    KTApp.getStateColor('brand')
                ]
            }],
            labels: [
                'Angular',
                'CSS',
                'HTML'
            ]
        },
        options: {
            cutoutPercentage: 75,
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: false,
                position: 'top',
            },
            title: {
                display: false,
                text: 'Technology'
            },
            animation: {
                animateScale: true,
                animateRotate: true
            },
            tooltips: {
                enabled: true,
                intersect: false,
                mode: 'nearest',
                bodySpacing: 5,
                yPadding: 10,
                xPadding: 10,
                caretPadding: 0,
                displayColors: false,
                backgroundColor: KTApp.getStateColor('brand'),
                titleFontColor: '#ffffff',
                cornerRadius: 4,
                footerSpacing: 0,
                titleSpacing: 0
            }
        }
    };

    var ctx = KTUtil.getByID('kt_chart_profit_share').getContext('2d');
    var myDoughnut = new Chart(ctx, config);
}
// Revenue Change.
// Based on Morris plugin - http://morrisjs.github.io/morris.js/
var revenueChange = function () {
    if ($('#kt_chart_revenue_change').length == 0) {
        return;
    }

    Morris.Donut({
        element: 'kt_chart_revenue_change',
        data: [{
            label: "New York",
            value: 10
        },
        {
            label: "London",
            value: 7
        },
        {
            label: "Paris",
            value: 20
        }
        ],
        colors: [
            KTApp.getStateColor('success'),
            KTApp.getStateColor('danger'),
            KTApp.getStateColor('brand')
        ],
    });
}

var teller_monthly_transactions = function () {
    /* begin: monthly transactions chart */
    var dataset = [];
    var colors = [
        "#FF0F00", "#FF6600", "#FF9E01", "#FCD202", "#F8FF01", "#B0DE09", "#04D215", "#0D8ECF", "#0D52D1",
        "#2A0CD0", "#8A0CCF", "#CD0D74", "#754DEB", "#DDDDDD", "#333333"]
    $.each(data, function (key, val) {
        dataset.push({ 'Month': key, 'count': val, 'color': colors[moment().month(key).format("M")] });
    });
    var chart = AmCharts.makeChart("teller_monthly_transactions", {
        "rtl": KTUtil.isRTL(),
        "type": "serial",
        "theme": "light",
        "dataProvider": dataset,
        "valueAxes": [{
            "gridColor": "#FFFFFF",
            "gridAlpha": 0.2,
            "dashLength": 0
        }],
        "gridAboveGraphs": true,
        "startDuration": 1,
        "graphs": [{
            "balloonText": "[[category]]: <b>[[value]]</b>",
            'colorField': 'color',
            'fillAlphas': 0.85,
            'lineAlpha': 0.1,
            'type': 'column',
            'topRadius': 1,
            "valueField": "count"
        }],
        'depth3D': 40,
        'angle': 30,
        "chartCursor": {
            "categoryBalloonEnabled": false,
            "cursorAlpha": 0,
            "zoomable": false
        },
        "categoryField": "Month",
        "categoryAxis": {
            "gridPosition": "start",
            "gridAlpha": 0,
            "tickPosition": "start",
            "tickLength": 20
        },
        "export": {
            "enabled": false
        }

    });
    /* end: monthly transactions chart */
}

