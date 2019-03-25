/**
 *  Document   : chartjs-data.js
 *  Description: Script for chartjs data.
 *
 **/
'use strict';
 
$(document).ready(function() {
	var MONTHS = ["January", "February", "March", "April"];
    var config = {
        type: 'line',
        data: {
            labels: ["January", "February", "March", "April"],
            datasets: [{
                label: "Approved",
                backgroundColor: window.chartColors.green,
                borderColor: window.chartColors.green,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
                fill: false,
            }, {
                label: "Reject",
                fill: false,
                backgroundColor: window.chartColors.red,
                borderColor: window.chartColors.red,
                data: [
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor(),
                    randomScalingFactor()
                ],
            }]
        },
        options: {
            responsive: true,
            title:{
                display:true,
                text:''
            },
            tooltips: {
                mode: 'index',
                intersect: false,
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Month'
                    }
                }],
                yAxes: [{
                    display: true,
                    scaleLabel: {
                        display: true,
                        labelString: 'Information'
                    }
                }]
            }
        }
    };
    var ctx = document.getElementById("chartjs_line").getContext("2d");
    window.myLine = new Chart(ctx, config);
	});
        

$(document).ready(function() {
	 var MONTHS = ["January", "February", "March", "April"];
     var color = Chart.helpers.color;
     var barChartData = {
         labels: ["January", "February", "March", "April"],
         datasets: [{
             label: 'Stage-1',
             backgroundColor: color(window.chartColors.orange).alpha(0.5).rgbString(),
             borderColor: window.chartColors.orange,
             borderWidth: 1,
             data: [
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor()
             ]
			 
         }, {
             label: 'Stage-2',
             backgroundColor: color(window.chartColors.yellow).alpha(0.5).rgbString(),
             borderColor: window.chartColors.yellow,
             borderWidth: 1,
             data: [
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor()
             ]
         }, {
             label: 'Stage-3',
             backgroundColor: color(window.chartColors.green).alpha(0.5).rgbString(),
             borderColor: window.chartColors.green,
             borderWidth: 1,
             data: [
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor()
             ]
         }, {
			 label: 'Stage-4',
             backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
             borderColor: window.chartColors.red,
             borderWidth: 1,
             data: [
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor()
             ]
         }, {
             label: 'Stage-5',
             backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
             borderColor: window.chartColors.blue,
             borderWidth: 1,
             data: [
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor(),
                 randomScalingFactor()
             ]
         }]

     };

         var ctx = document.getElementById("chartjs_bar").getContext("2d");
         window.myBar = new Chart(ctx, {
             type: 'bar',
             data: barChartData,
             options: {
                 responsive: true,
                 legend: {
                     position: 'bottom',
                 },
                 title: {
                     display: true,
                     text: ''
                 }
             }
         });

	});

