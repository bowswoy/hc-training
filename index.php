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

<body>
    <div class="container">

        <div class="text-center mt-5"><h3>สถิติการให้บริการประชาชน</h3></div>

        <div class="row mt-5">
            <div class="col-md-6">
                <div id="mapth" style="margin:0 auto;width: 100%;height: 850px;">Loading..</div>
            </div>
            <div class="col-md-6">
                <div id="map1" style="width:100%; height:400px;" class="mb-5">Loading..</div>
                <div id="map2" style="width:100%; height:400px;">Loading..</div>
            </div>
        </div>
    </div>
    <script src="highcharts/highcharts.js"></script>
    <script src="highmap/modules/map.js"></script>
    <script src="highmap/highmaps.js"></script>
    <script src="highmap/th-all.js"></script>
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

            Highcharts.chart('map2', {
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
                    categories: [
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
                    ],
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
                series: [{
                    name: 'เรื่องรับ',
                    data: [499, 715, 1064, 1292, 1440, 1760, 1356, 1485, 2164, 1941, 956, 54]
                },{
                    name: 'เสร็จภายใน 21 วัน',
                    data: [400, 700, 1000, 1200, 1400, 1700, 1300, 1400, 2100, 1900, 900, 50]
                }]
            });

            Highcharts.mapChart('mapth', {
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
                    data: <?php echo json_encode($data); ?>,
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
        });
    </script>
</body>

</html>