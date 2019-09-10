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
    <script src="highcharts/modules/drilldown.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Highcharts.chart('map', {
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
                        y: 6141,
                        drilldown: 'a'
                    }, {
                        name: 'ภาคเหนือ',
                        y: 1184,
                        drilldown: 'b'
                    }, {
                        name: 'ภาคกลาง',
                        y: 1085,
                        drilldown: 'c'
                    }, {
                        name: 'ภาคตะวันออกเฉียงเหนือ',
                        y: 467,
                        drilldown: 'd'
                    }, {
                        name: 'ภาคตะวันออก',
                        y: 418,
                        drilldown: 'e'
                    }, {
                        name: 'ภาคใต้',
                        y: 164,
                        drilldown: 'f'
                    }, {
                        name: 'ชายแดนภาคใต้',
                        y: 120,
                        drilldown: 'g'
                    }]
                }],
                drilldown: {
                    series: [{
                            name: "ส่วนกลาง",
                            id: "a",
                            data: [
                                ['ช่วยเหลือประชาชน', 2941],
                                ['ขอปล่อยชั่วคราว', 2200],
                                ['ละเมิดสิทธิ', 600],
                                ['ให้ความรู้ทางกฎหมาย', 400]
                            ]
                        },
                        {
                            name: "ภาคเหนือ",
                            id: "b",
                            data: [
                                ['ช่วยเหลือประชาชน', 700],
                                ['ขอปล่อยชั่วคราว', 484]
                            ]
                        },
                        {
                            name: "ภาคกลาง",
                            id: "c",
                            data: [
                                ['ช่วยเหลือประชาชน', 500],
                                ['ขอปล่อยชั่วคราว', 585]
                            ]
                        },
                        {
                            name: "ภาคตะวันออกเฉียงเหนือ",
                            id: "d",
                            data: [
                                ['ช่วยเหลือประชาชน', 300],
                                ['ขอปล่อยชั่วคราว', 167]
                            ]
                        },
                        {
                            name: "ภาคตะวันออก",
                            id: "e",
                            data: [
                                ['ช่วยเหลือประชาชน', 218],
                                ['ขอปล่อยชั่วคราว', 200]
                            ]
                        },
                        {
                            name: "ภาคใต้",
                            id: "f",
                            data: [
                                ['ช่วยเหลือประชาชน', 60],
                                ['ขอปล่อยชั่วคราว', 104]
                            ]
                        },
                        {
                            name: "ชายแดนภาคใต้",
                            id: "g",
                            data: [
                                ['ช่วยเหลือประชาชน', 80],
                                ['ขอปล่อยชั่วคราว', 40]
                            ]
                        }
                    ]
                }
            });
        });
    </script>
</body>

</html>