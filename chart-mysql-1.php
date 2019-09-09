<?php
$con = mysqli_connect('127.0.0.1','root','d^w,ji^h','hc_training');
mysqli_query($con, 'SET NAMES UTF8'); // Thai UTF-8

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    $data = array();
} else {
    $data = array();

    $sql = 'SELECT COUNT(pie_id) AS cc,  pie_geo FROM pie_data GROUP BY pie_geo';
    $query = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($query)) {
        // echo $row['pie_geo'];
        $data[] = array($row['pie_geo'], (int) $row['cc']);
    }
    // $data = array(
    //     array('ส่วนกลาง', rand(10,100)),
    //     array('ภาคกลาง', rand(10,100)),
    //     array('ภาคเหนือ', rand(10,100)),
    //     array('ภาคอีสาน', rand(10,100)),
    //     array('ภาคใต้', rand(10,100)),
    //     array('ชายแดนใต้', rand(10,100)),
    // );
}

mysqli_close($con);
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
                    data: <?php echo json_encode($data); ?>
                }]
            });
        });
    </script>
</body>

</html>
