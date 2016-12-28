jQuery(document).ready(function () {
    jQuery(".btn-select").each(function (e) {
        var value = jQuery(this).find("ul li.selected").html();
        if (value !== undefined) {
            jQuery(this).find(".btn-select-input").val(value);
            jQuery(this).find(".btn-select-value").html(value);
        }
    });
});

jQuery(document).on('click', '.btn-select', function (e) {
    e.preventDefault();
    var ul = jQuery(this).find("ul");
    if (jQuery(this).hasClass("active")) {
        if (ul.find("li").is(e.target)) {
            var target = jQuery(e.target);
            target.addClass("selected").siblings().removeClass("selected");
            var value = target.html();
            jQuery(this).find(".btn-select-input").val(value);
            jQuery(this).find(".btn-select-value").html(value);
        }
        ul.hide();
        jQuery(this).removeClass("active");
    }
    else {
        jQuery('.btn-select').not(this).each(function () {
            jQuery(this).removeClass("active").find("ul").hide();
        });
        ul.slideDown(300);
        jQuery(this).addClass("active");
    }
});

jQuery(document).on('click', function (e) {
    var target = jQuery(e.target).closest(".btn-select");
    if (!target.length) {
        jQuery(".btn-select").removeClass("active").find("ul").hide();
    }
});

$(document).ready(function () {
    $('.next-step a').click(function (event) {
        event.preventDefault();
        $('.register-box-body').removeClass('active');
        $('.register-box-body.step-two').addClass('active');
    });
    $('.done-step a').click(function (event) {
        event.preventDefault();
        $('.register-box-body').removeClass('active');
        $('.register-box-body.step-three').addClass('active');
    });
    $('#list').click(function (event) {
        event.preventDefault();
        $('#product-page .list-products').removeClass('grid-product-items');
        $('#product-page .list-products').addClass('list-product-items');
        $('#management-page .list-products').removeClass('grid-product-items');
        $('#management-page .list-products').addClass('list-product-items');
        $('.view a').removeClass('acted');
        $(this).addClass('acted');
    });
    $('#grid').click(function (event) {
        event.preventDefault();
        $('#product-page .list-products').removeClass('list-product-items');
        $('#product-page .list-products').addClass('grid-product-items');
        $('#management-page .list-products').removeClass('list-product-items');
        $('#management-page .list-products').addClass('grid-product-items');
        $('.view a').removeClass('acted');
        $(this).addClass('acted');
    });
});

var calendar = document.getElementById("calendar");
if (calendar) {
    $('#calendar').datepicker({
        inline: true,
        firstDay: 1,
        showOtherMonths: true,
        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        onSelect: function (date, el) {
            
        }
    });
}

$('.box.actionadd .nothing').click(function () {
    $('.box.added').css("display", "block");
    $(this).parent().css("display", "none");
});
// button on/off
$('.btn-toggle').click(function () {
    $(this).find('.btn').toggleClass('active-btn');

    if ($(this).find('.btn-primary').size() > 0) {
        $(this).find('.btn').toggleClass('btn-primary');
    }
    $(this).find('.btn').toggleClass('btn-default');

});

$('form').submit(function () {
    alert($(this["options"]).val());
    return false;
});

// chart 01
var ctx = document.getElementById("myLineChart1");
if (ctx) {
    var myLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["DEC.15", "DEC.16", "DEC.17", "DEC.18", "DEC.19", "DEC.20", "DEC."],
            datasets: [
                {
                    label: '',
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#fff",
                    borderColor: "#28B4C8",
                    data: [65, 59, 80, 81, 56, 55, 40]
                }
            ]
        },
        options: {
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                        display: true,
                        ticks: {
                            beginAtZero: true,
                            steps: 10,
                            stepValue: 5,
                            max: 100
                        }
                    }]
            }
        }
    });


    $("#top-page .box .chart011").click(function () {
        myLineChart.destroy();
        myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["DEC.15", "DEC.16", "DEC.17", "DEC.18", "DEC.19", "DEC.20", "DEC."],
                datasets: [
                    {
                        label: '',
                        fill: false,
                        lineTension: 0.1,
                        backgroundColor: "#fff",
                        borderColor: "#28B4C8",
                        data: [65, 59, 80, 81, 56, 55, 40]
                    }
                ]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,
                                max: 100
                            }
                        }]
                }
            }
        });
    });

// chart 02
    $("#top-page .box .chart022").click(function () {
        myLineChart.destroy();
        myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["DEC.15", "DEC.16", "DEC.17", "DEC.18", "DEC.19", "DEC.20", "DEC."],
                datasets: [
                    {
                        label: '',
                        fill: false,
                        lineTension: 0.1,
                        backgroundColor: "#fff",
                        borderColor: "#28B4C8",
                        data: [81, 2, 30, 81, 56, 20, 60]
                    }
                ]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,
                                max: 100
                            }
                        }]
                }
            }
        });
    });


// chart 01
    $("#top-page .box .chart033").click(function () {
        myLineChart.destroy();
        myLineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["DEC.15", "DEC.16", "DEC.17", "DEC.18", "DEC.19", "DEC.20", "DEC."],
                datasets: [
                    {
                        label: '',
                        fill: false,
                        lineTension: 0.1,
                        backgroundColor: "#fff",
                        borderColor: "#28B4C8",
                        data: [1, 24, 12, 79, 56, 81, 40]
                    }
                ]
            },
            options: {
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                            display: true,
                            ticks: {
                                beginAtZero: true,
                                steps: 10,
                                stepValue: 5,
                                max: 100
                            }
                        }]
                }
            }
        });
    });


}


$("#top-page .box .chart011").click(function () {
    $("#top-page .box .chart011").addClass("active1");
    $("#top-page .box .chart022").removeClass("active1");
    $("#top-page .box .chart033").removeClass("active1");
});

$("#top-page .box .chart022").click(function () {
    $("#top-page .box .chart022").addClass("active1");
    $("#top-page .box .chart011").removeClass("active1");
    $("#top-page .box .chart033").removeClass("active1");
});

$("#top-page .box .chart033").click(function () {
    $("#top-page .box .chart033").addClass("active1");
    $("#top-page .box .chart022").removeClass("active1");
    $("#top-page .box .chart011").removeClass("active1");
});
