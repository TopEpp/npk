$(document).ready(function(){
	$.ajax({
		url: domain+'report/getAjaxProjectManage',
		method: "GET",
		success: function(data) {
			var title = [];
			var value = [];

			for(var i in data) {
				title.push(data[i].project_title);
				value.push(data[i].prj_budget);
			}

			var chartdata = {
				labels: title,
				datasets : [
					{
                        label: 'รายงานบริหารโครงการ',
                        backgroundColor: "#26B99A",
						// backgroundColor: 'rgba(200, 200, 200, 0.75)',
						// borderColor: 'rgba(200, 200, 200, 0.75)',
						// hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
						// hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: value
					}
				]
            };

            var ctx = document.getElementById("report_project_manage").getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: chartdata,
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                callback: function (value, index, values) {
                                    return number_format(value);
                                }
                            }
                        }]
                    },
                    tooltips: {
                        callbacks: {
                            label: function (tooltipItem, chart) {
                                var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                                return datasetLabel + ': ' + number_format(tooltipItem.yLabel, 2);
                            }
                        }
                    }
                }
            });

		}
	});
});


document.getElementById("chart_download").addEventListener("click", function () {
    var url_base64 = document.getElementById("report_project_manage").toDataURL("image/jpg");
    this.href = url_base64;
});


function number_format(number, decimals, dec_point, thousands_sep) {
    // *     example: number_format(1234.56, 2, ',', ' ');
    // *     return: '1 234,56'
    number = (number + '').replace(',', '').replace(' ', '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function (n, prec) {
            var k = Math.pow(10, prec);
            return '' + Math.round(n * k) / k;
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '').length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1).join('0');
    }
    return s.join(dec);
}