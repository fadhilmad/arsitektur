$(document).ready(function () {
    getData();
});

$(".btn-previous").click(function () {
    let tahunData = parseInt($('input[name="year"]').val());
    tahunData -= 1;

    $('input[name="year"]').val(tahunData).trigger("change");
});

$(".btn-next").click(function () {
    let tahunData = parseInt($('input[name="year"]').val());
    tahunData += 1;

    $('input[name="year"]').val(tahunData).trigger("change");
});

$('input[name="year"]').change(function () {
    getData();
});

const getData = () => {
    let tahunData = $('input[name="year"]').val();

    $.fetchData({
        url: baseUrl("/api/administrator/dashboard/data-chart"),
        method: "POST",
        data: {
            tahun: tahunData,
        },
        response: (res) => {
            // ==> Chart
            ctx = document.getElementById("chartActivity").getContext("2d");

            gradientStroke = ctx.createLinearGradient(500, 0, 100, 0);
            gradientStroke.addColorStop(0, "#80b6f4");
            gradientStroke.addColorStop(1, "white");

            gradientFill = ctx.createLinearGradient(0, 170, 0, 50);
            gradientFill.addColorStop(0, "rgba(128, 182, 244, 0)");
            gradientFill.addColorStop(1, "rgba(249, 99, 59, 0.40)");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: [tahunData],
                    datasets: [
                        {
                            label: "Interior",
                            borderColor: "#51cbce",
                            fill: true,
                            backgroundColor: "#51cbce",
                            hoverBorderColor: "#51cbce",
                            borderWidth: 8,
                            data: [res.interior],
                        },
                        {
                            label: "Arsitektur",
                            borderColor: "#6c757d",
                            fill: true,
                            backgroundColor: "#6c757d",
                            hoverBorderColor: "#6c757d",
                            borderWidth: 8,
                            data: [res.architecture],
                        },
                        {
                            label: "Miscellaneouse",
                            borderColor: "#ef8157",
                            fill: true,
                            backgroundColor: "#ef8157",
                            hoverBorderColor: "#ef8157",
                            borderWidth: 8,
                            data: [res.miscellaneouse],
                        },
                        {
                            label: "Commercial",
                            borderColor: "#6bd098",
                            fill: true,
                            backgroundColor: "#6bd098",
                            hoverBorderColor: "#6bd098",
                            borderWidth: 8,
                            data: [res.commercial],
                        },
                        {
                            label: "Residential",
                            borderColor: "#fbc658",
                            fill: true,
                            backgroundColor: "#fbc658",
                            hoverBorderColor: "#fbc658",
                            borderWidth: 8,
                            data: [res.residential],
                        },
                        {
                            label: "Retail",
                            borderColor: "#51bcda",
                            fill: true,
                            backgroundColor: "#51bcda",
                            hoverBorderColor: "#51bcda",
                            borderWidth: 8,
                            data: [res.retail],
                        },
                    ],
                },
                options: {
                    tooltips: {
                        tooltipFillColor: "rgba(0,0,0,0.5)",
                        tooltipFontFamily:
                            "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
                        tooltipFontSize: 14,
                        tooltipFontStyle: "normal",
                        tooltipFontColor: "#fff",
                        tooltipTitleFontFamily:
                            "'Helvetica Neue', 'Helvetica', 'Arial', sans-serif",
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
                        display: false,
                    },
                    scales: {
                        yAxes: [
                            {
                                ticks: {
                                    fontColor: "#9f9f9f",
                                    fontStyle: "bold",
                                    beginAtZero: true,
                                    maxTicksLimit: 5,
                                    padding: 20,
                                },
                                gridLines: {
                                    zeroLineColor: "transparent",
                                    display: true,
                                    drawBorder: false,
                                    color: "#9f9f9f",
                                },
                            },
                        ],
                        xAxes: [
                            {
                                barPercentage: 0.3,
                                gridLines: {
                                    zeroLineColor: "white",
                                    display: false,

                                    drawBorder: false,
                                    color: "transparent",
                                },
                                ticks: {
                                    padding: 20,
                                    fontColor: "#9f9f9f",
                                    fontStyle: "bold",
                                },
                            },
                        ],
                    },
                },
            });
        },
    });
};
