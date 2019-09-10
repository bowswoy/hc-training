<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="pt-5">
    <div id="map1">Loading..</div>

    <script src="highcharts/highcharts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Highcharts.chart('map1', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'ข้อมูลจำนวนการให้บริการประชาชน ปีงบประมาณ 2562'
                },
                subtitle: {
                    text: 'ข้อมูล ณ วันที่ 1 กันยายน 2562'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                        }
                    }
                },
                series: [{
                    name: 'จำนวนการให้บริการ',
                    colorByPoint: true,
                    data: [{
                        name: 'ส่วนกลาง',
                        y: 6141
                    }, {
                        name: 'ภาคเหนือ',
                        y: 1184
                    }, {
                        name: 'ภาคกลาง',
                        y: 1085
                    }, {
                        name: 'ภาคตะวันออกเฉียงเหนือ',
                        y: 467
                    }, {
                        name: 'ภาคตะวันออก',
                        y: 418
                    }, {
                        name: 'ภาคใต้',
                        y: 164
                    }, {
                        name: 'ชายแดนภาคใต้',
                        y: 120
                    }]
                }]
            });
        });
    </script>
</body>
</html>