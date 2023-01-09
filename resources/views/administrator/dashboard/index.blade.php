@extends('layout.administrator.index')

@section('content')
    <div class="row" name="dashboard">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Project interiors</p>
                                <p class="card-title">100
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i>
                        Update Now
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Project interiors</p>
                                <p class="card-title">100
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i>
                        Update Now
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Project interiors</p>
                                <p class="card-title">100
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i>
                        Update Now
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Project interiors</p>
                                <p class="card-title">100
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i>
                        Update now
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Project interiors</p>
                                <p class="card-title">100
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i>
                        Update now
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-5 col-md-4">
                            <div class="icon-big text-center icon-warning">
                                <i class="nc-icon nc-money-coins text-success"></i>
                            </div>
                        </div>
                        <div class="col-7 col-md-8">
                            <div class="numbers">
                                <p class="card-category">Project interiors</p>
                                <p class="card-title">100
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer ">
                    <hr>
                    <div class="stats">
                        <i class="fa fa-refresh"></i>
                        Update now
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-chart">
                <div class="col">
                    <div class="card-header d-flex justify-content-between">
                        <h5 class="card-title">Project Per Tahun</h5>
                        <select class="form-control" name="tahun" id="tahun">
                            <option value="">-</option>
                            <option value="">2022</option>
                            <option value="">2023</option>
                            <option value="">2024</option>
                            <option value="">2025</option>
                        </select>
                    </div>
                </div>
                <div class="card-body">
                    <canvas class="mt-3" id="chartActivity" height="100px"></canvas>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        $('#tahun').select2({
            width: "150px"
        });

        // ==> Chart
        ctx = document.getElementById('chartActivity').getContext("2d");

        gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
        gradientStroke.addColorStop(0, '#80b6f4');
        gradientStroke.addColorStop(1, 'white');

        gradientFill = ctx.createLinearGradient(0, 170, 0, 50);
        gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
        gradientFill.addColorStop(1, "rgba(249, 99, 59, 0.40)");

        myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [2021, 2022, 2023, 2024, 2025],
                datasets: [{
                        label: "Data",
                        borderColor: '#fcc468',
                        fill: true,
                        backgroundColor: '#fcc468',
                        hoverBorderColor: '#fcc468',
                        borderWidth: 8,
                        data: [100, 120, 80, 70, 100],
                    },
                    {
                        label: "Data",
                        borderColor: '#4cbdd7',
                        fill: true,
                        backgroundColor: '#4cbdd7',
                        hoverBorderColor: '#4cbdd7',
                        borderWidth: 8,
                        data: [80, 140, 50, 75, 110],
                    },
                    {
                        label: "Data",
                        borderColor: '#6bd098',
                        fill: true,
                        backgroundColor: '#6bd098',
                        hoverBorderColor: '#6bd098',
                        borderWidth: 8,
                        data: [80, 120, 60, 50, 120],
                    }
                ]
            },
            options: {
                tooltips: {
                    tooltipFillColor: "rgba(0,0,0,0.5)",
                    tooltipFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                    tooltipFontSize: 14,
                    tooltipFontStyle: "normal",
                    tooltipFontColor: "#fff",
                    tooltipTitleFontFamily: "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                    tooltipTitleFontSize: 14,
                    tooltipTitleFontStyle: "bold",
                    tooltipTitleFontColor: "#fff",
                    tooltipYPadding: 6,
                    tooltipXPadding: 6,
                    tooltipCaretSize: 8,
                    tooltipCornerRadius: 6,
                    tooltipXOffset: 10,
                },
                legend: {

                    display: false
                },
                scales: {

                    yAxes: [{
                        ticks: {
                            fontColor: "#9f9f9f",
                            fontStyle: "bold",
                            beginAtZero: true,
                            maxTicksLimit: 5,
                            padding: 20
                        },
                        gridLines: {
                            zeroLineColor: "transparent",
                            display: true,
                            drawBorder: false,
                            color: '#9f9f9f',
                        }

                    }],
                    xAxes: [{
                        barPercentage: 0.4,
                        gridLines: {
                            zeroLineColor: "white",
                            display: false,

                            drawBorder: false,
                            color: 'transparent',
                        },
                        ticks: {
                            padding: 20,
                            fontColor: "#9f9f9f",
                            fontStyle: "bold"
                        }
                    }]
                }
            }
        });
    </script>
@endsection
