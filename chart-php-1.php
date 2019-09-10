<?php
$data = array(
    array('name'=>'ส่วนกลาง', 'y'=>6141),
    array('name'=>'ภาคเหนือ', 'y'=>1184),
    array('name'=>'ภาคกลาง', 'y'=>1085),
    array('name'=>'ภาคตะวันออกเฉียงเหนือ', 'y'=>467),
    array('name'=>'ภาคตะวันออก', 'y'=>418),
    array('name'=>'ภาคใต้', 'y'=>164),
    array('name'=>'ชายแดนภาคใต้', 'y'=>120),
);
?>
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
                    data: <?php echo json_encode($data); ?>
                }]
            });
        });
    </script>
</body>
</html>