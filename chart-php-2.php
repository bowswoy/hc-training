<?php
$categories = array(
    'ต.ค.',
    'พ.ย.',
    'ธ.ค.',
    'ม.ค.',
    'ก.พ.',
    'มี.ค.',
    'เม.ย.',
    'พ.ค.',
    'มิ.ย.',
    'ก.ค.',
    'ส.ค.',
    'ก.ย.'
);

$data = array(
    array('name'=>'เรื่องรับ', 'data'=>array(499, 715, 1064, 1292, 1440, 1760, 1356, 1485, 2164, 1941, 956, 54)),
    array('name'=>'เสร็จภายใน 21 วัน', 'data'=>array(400, 700, 1000, 1200, 1400, 1700, 1300, 1400, 2100, 1900, 900, 50)),
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
    <div id="map">Loading..</div>

    <script src="highcharts/highcharts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Highcharts.chart('map', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'ข้อมูลการให้บริการรายเดือน ปีงบประมาณ 2562'
                },
                subtitle: {
                    text: 'ข้อมูล ณ วันที่ 1 กันยายน 2562'
                },
                xAxis: {
                    categories: <?php echo json_encode($categories); ?>,
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'จำนวนการให้บริการ (ครั้ง)'
                    }
                },
                tooltip: {
                    headerFormat: '<span>{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y}</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                series: <?php echo json_encode($data); ?>
            });
        });
    </script>
</body>
</html>