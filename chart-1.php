<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>

<body>
    <div id="container" style="width:100%; height:400px;"></div>

    <script src="highcharts/highcharts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Highcharts.chart('container', {
                chart: {
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false,
                    type: 'pie'
                },
                title: {
                    text: 'สถิติข้อมูลการให้บริการประชาชน รายภูมิภาค'
                },
                subtitle: {
                    text: 'ข้อมูล ณ วันที่ <?php echo date("d/m/Y"); ?>'
                },
                tooltip: {
                    pointFormat: '{series.name}: <b>{point.y} ราย</b>'
                },
                plotOptions: {
                    pie: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true,
                            format: '<b>{point.name}</b>: {point.percentage:.2f} %'
                        }
                    }
                },
                series: [{
                    name: 'จำนวน',
                    colorByPoint: true,
                    data: [
                        ['ส่วนกลาง', 30],
                        ['ภาคกลาง', 20],
                        ['ภาคเหนือ', 25],
                        ['ภาคอีสาน', 15],
                        ['ภาคใต้', 15],
                        ['ชายแดนใต้', 5]
                    ]
                }]
            });
        });
    </script>
</body>

</html>
