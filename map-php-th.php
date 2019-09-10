<?php
$data = array();
$json = file_get_contents('map.json');
$array = json_decode($json, true);
foreach($array['features'] as $a) {
    $data[] = array($a['properties']['hc-key'], rand(50,300));
}
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

<body class="pt-5 pb-5">
    <div id="container" style="margin:0 auto;width: 600px;height: 800px;"></div>

    <script src="highmap/highmaps.js"></script>
    <script src="highmap/th-all.js"></script>
    <script>
        var data = <?php echo json_encode($data); ?>;
        // Create the chart
        Highcharts.mapChart('container', {
            chart: {
                map: 'countries/th/th-all'
            },
            title: {
                text: 'สถิติการให้บริการทั่วประเทศ ประจำปีงบประมาณ 2562'
            },

            subtitle: {
                text: 'ข้อมูล ณ วันที่ 1 กันยายน 2562'
            },

            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom'
                }
            },

            colorAxis: {
                min: 0
            },

            tooltip: {
                formatter: function () {
                    return '<b>' + this.point.name + '</b>: ' + this.point.value;
                }
            },

            series: [{
                data: data,
                name: 'จำนวนครั้งที่ให้บริการ',
                states: {
                    hover: {
                        color: '#BADA55'
                    }
                },
                dataLabels: {
                    enabled: false,
                    format: '{point.name}'
                }
            }]
        });
    </script>
</body>

</html>