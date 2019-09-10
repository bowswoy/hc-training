<?php
// Test Comment

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
</head>
<body>
    
    <div id="container"></div>
    
    <script src="highcharts/highcharts.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Chart
            Highcharts.chart('container', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'ข้อมูลการให้บริการ ประจำปีงบประมาณ 2562'
                },
                subtitle: {
                    text: 'ข้อมูล ณ วันที่ <?php echo date("d/m/Y"); ?>'
                },
                xAxis: {
                    categories: [
                        'Jan',
                        'Feb',
                        'Mar',
                        'Apr',
                        'May',
                        'Jun',
                        'Jul',
                        'Aug',
                        'Sep',
                        'Oct',
                        'Nov',
                        'Dec'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'จำนวน'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} ราย</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'เรื่องรับ',
                    data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

                }, {
                    name: 'เสร็จภายใน 21 วัน',
                    data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

                }]
            });
        });
    </script>
</body>
</html>