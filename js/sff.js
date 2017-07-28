var data = 0;
var pHOld = 0;
var sMOld = 0;
//var chartpH;

$(document).ready(function() {
		var interval = setInterval(function() {
			var momentNow = moment();
			$('#id-stasDate').html(momentNow.format('dddd')+', '+momentNow.format('YYYY MMMM DD'));
			$('#id-stasTime').html(momentNow.format('hh:mm:ss A'));
		}, 1000);

		var interval = setInterval(function (){$.getJSON('http://mantisid.id/api/product/sff_dt_r_newest.php', function(data){
			$('#soilT').html(data['Soil_Temp']);
			$('#airT').html(data['Air_Temp']);
			$('#airhumid').html(data['Air_Humid']);
			$('#smokel').html(data['Smoke']);
			$('#light').html(data['Light_Intensity']);
			$('#waterlevel').html(data['Water_Level']);
			$('#vibralevel').html(data['Vibration']);
			var thePitch = data['Gyro_Pitch'];
			var theRoll = data['Gyro_Roll'];
			var theYaw = data['Gyro_Yaw'];
			$('#pitch-lbl').html(data['Gyro_Pitch']);
			$('#dPitch').css('margin-top',thePitch+'px');
			$('#roll-lbl').html(data['Gyro_Roll']);
			$('#dRoll').css('transform','rotate('+theRoll+'deg)');
			$('#yaw-lbl').html(data['Gyro_Yaw']);
			$('#dYaw').css('transform','rotate('+theYaw+'deg)');
			$('#timeUpd').html(data['Date_Time']);
			$('#timeUpd3').html(data['Date_Time']);
			$('#timeUpd4').html(data['Date_Time']);
			$('#timeUpd5').html(data['Date_Time']);
			$('#timeUpd6').html(data['Date_Time']);
			$('#timeUpd7').html(data['Date_Time']);
		})
	}, 1000);
});

function pHChart(){
  var chartpH = Highcharts.chart('pHchart', {
    chart: {
        type: 'column',
        backgroundColor:'rgba(255, 255, 255, 0)',
				events: {
							 load: function () {
									 var series = this.series[0];
									 setInterval(function () {
										 $.getJSON('http://www.mantisid.id/api/product/sff_dt_r_newest.php', function(data) {
											 document.getElementById('planth').innerHTML = data['Plant_Height'];
											 document.getElementById('timeUpd1').innerHTML = data['Date_Time'];
											 var pHNew = parseFloat(data['Plant_Height']);
											 //alert(pHNew)
											 if (pHNew != pHOld){
												 //pHChart(Number(data['Plant_Height']));
												 series.data[0].update(pHNew);
												 //pHChart(75);
												 pHOld = pHNew;
											 }
										 });
									 }, 1000);
							 }
					 }
    },
    title: {
        text: '',
        visible: false
    },
    subtitle: {
        text: '',
        visible: false
    },
    xAxis: {
        categories: [''],
        crosshair: true,
        visible: false
    },
    yAxis: {
        min: 0,
				max: 100,
        title: {
            text: '',
        },
        gridLineColor: 'transparent',
        labels: {
            style: {
                color: '#ffffff'
            }
        }
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0,
						fillColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
                    stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                    ]
                }
        }
    },
    credits: {
      enabled: false
    },
    tooltip: { enabled: false },
    series: [{
        name: 'Soil Temperatue',
        showInLegend: false,
        data: [0]
    }]
  });
}

function soilMChart(){
  chartsM = Highcharts.chart('soilMchart', {
    chart: {
        type: 'bar',
        backgroundColor:'rgba(255, 255, 255, 0)',
				events: {
							 load: function () {
									 var series = this.series[0];
									 setInterval(function () {
										 $.getJSON('http://www.mantisid.id/api/product/sff_dt_r_newest.php', function(data) {
											 $('#soilM').html(data['Soil_Moisture']);
											 document.getElementById('timeUpd2').innerHTML = data['Date_Time'];
											 var sMNew = parseFloat(data['Soil_Moisture']);
											 //alert(pHNew)
											 if (sMNew != sMOld){
												 //pHChart(Number(data['Plant_Height']));
												 series.data[0].update(sMNew);
												 //pHChart(75);
												 sMOld = sMNew;
											 }
										 });
									 }, 1000);
							 }
					 }
    },
    title: {
        text: '',
        visible: false
    },
    subtitle: {
        text: '',
        visible: false
    },
    xAxis: {
        categories: [''],
        crosshair: true,
        visible: false
    },
    yAxis: {
        min: 0,
        max: 100,
        tickInterval: 100,
        visible: false,
        title: {
            text: '',
        },
        gridLineColor: 'transparent',
        labels: {
            style: {
                color: '#ffffff'
            }
        }
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0,
						fillColor: {
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
                    stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                    ]
                }
        }
    },
    credits: {
      enabled: false
    },
    tooltip: { enabled: false },
    series: [{
        name: 'Soil Temperatue',
        showInLegend: false,
        data: [0]
    }]
  });
}

function allParamChart(){
  var pHgrafik = Highcharts.chart('chart1', {
    credits: {
      enabled: false
    },
    chart: {
        zoomType: 'xy',
        backgroundColor:'rgba(255, 255, 255, 0)',
    },
    title: {
        text: ''
    },
    xAxis: [{
        type: 'datetime',
        crosshair: true,
        labels: {
            style: {
                color: '#ffffff'
            }
        }
    }],
    yAxis: [{ // Primary yAxis
        min: 0,
        tickInterval: 10,
        labels: {
            style: {
                color: '#ffffff'
            }
        },
        gridLineColor: 'transparent',
        title: {
            text: 'Temperature (°C)',
            style: {
                color: '#ffffff'
            }
        }
    }, { // Secondary yAxis
        min: 0,
        tickInterval: 10,
        title: {
            text: 'Soil Moisture & Light Intensity (%)',
            style: {
                color: '#ffffff'
            }
        },
        labels: {
            style: {
                color: '#ffffff'
            }
        },
        gridLineColor: 'transparent',
        visible: false,
        opposite: true
    }, { // Tertiary yAxis
        min: 0,
        tickInterval: 10,
        title: {
            text: 'Plant Height (cm)',
            style: {
                color: '#ffffff'
            }
        },
        labels: {
            style: {
                color: '#ffffff'
            }
        },
        gridLineColor: 'transparent',
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        backgroundColor: 'rgba(0,0,0,0)',
    },
    plotOptions: {
        area: {
            fillColor: {
                linearGradient: {
                    x1: 0,
                    y1: 0,
                    x2: 0,
                    y2: 1
                },
                stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                ]
            },
            marker: {
                radius: 2
            },
                lineWidth: 1,
                states: {
                    hover: {
                        lineWidth: 1
                    }
                },
                threshold: null
            }
      },
    series: [{
        name: 'Plant Height',
        type: 'area',
        yAxis: 2,
        data: [19.9, 21.5, 26.4, 29.2, 30.0, 31.0, 35.6, 38.5, 40.4, 44.1, 45.6, 47.4],
        color: {
    						linearGradient: [0,0,0,100],
    						stops: [
       								 [0, 'rgba(0,0,255,0)'],
                       [1, 'rgba(0,0,255,1)']
    									 ]
				},
        tooltip: {
            valueSuffix: ' cm'
        }
    },{
        name: 'Soil Temperature',
        type: 'spline',
        yAxis: 0,
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
        marker: {
            enabled: false
        },
        tooltip: {
            valueSuffix: ' °C'
        }
    },{
        name: 'Air Temperature',
        type: 'spline',
        yAxis: 0,
        data: [59.9, 81.5, 76.4, 49.2, 54.0, 76.0, 35.6, 48.5, 16.4, 94.1, 95.6, 54.4],
        marker: {
            enabled: false
        },
        tooltip: {
            valueSuffix: ' °C'
        }
    },{
        name: 'Soil Moisture',
        type: 'spline',
        yAxis: 1,
        data: [89.9, 81.5, 86.4, 69.2, 54.0, 76.0, 55.6, 68.5, 86.4, 94.1, 95.6, 64.4],
        marker: {
            enabled: false
        },
        tooltip: {
            valueSuffix: ' °C'
        }
    },{
        name: 'Light Intensity',
        type: 'spline',
        yAxis: 1,
        data: [99.9, 91.5, 96.4, 99.2, 94.0, 96.0, 95.6, 98.5, 96.4, 94.1, 95.6, 94.4],
        marker: {
            enabled: false
        },
        tooltip: {
            valueSuffix: ' °C'
        }
    }]
  });
}
