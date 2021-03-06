<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Resultaat </title>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<link href="grafiek.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="iscroll.js"></script>
<script type="text/javascript">
var myScroll;
function loaded() {
    myScroll = new IScroll('#wrapper');
}
</script>
</head>
<body onload="loaded()">
 <?php

	//wat is verstuurd?
	//print_r($_POST);
	$hs1 = $_POST["hs1"];
	$hs2 = $_POST["hs2"];
	$hs3 = $_POST["hs3"];
	$hs4 = $_POST["hs4"];
	$hs5 = $_POST["hs5"];
	$hs6 = $_POST["hs6"];
	$gs1 = $_POST["gs1"];
	$gs2 = $_POST["gs2"];
	$gs3 = $_POST["gs3"];
	$gs4 = $_POST["gs4"];
	$gs5 = $_POST["gs5"];
	$gs6 = $_POST["gs6"];
?>
<div id="wrapper">
    <div class="scroller">
        <div class="content">
<div id="container">&nbsp;</div>
</div>
</div>
</div>
<script type="text/javascript">
    var hs1 = <?php echo $hs1; ?>;
    var hs2 = <?php echo $hs2; ?>;
    var hs3 = <?php echo $hs3; ?>;
    var hs4 = <?php echo $hs4; ?>;
    var hs5 = <?php echo $hs5; ?>;
    var hs6 = <?php echo $hs6; ?>;
    var gs1 = <?php echo $gs1; ?>;
    var gs2 = <?php echo $gs2; ?>;
    var gs3 = <?php echo $gs3; ?>;
    var gs4 = <?php echo $gs4; ?>;
    var gs5 = <?php echo $gs5; ?>;
    var gs6 = <?php echo $gs6; ?>;
Highcharts.chart('container', {

    chart: {
        backgroundColor: '#F3F3F3',
        polar: true,
        type: 'area'
    },
	
     colors: [
            '#F9C393',
            '#7E6249'],
			
    title: {        
        text: 'UW SCORE',
		                style: {
                    color: '#F38A1E',
                    fontSize:'30px'
                }
    },

    pane: {
        size: '85%'
    },

        xAxis: {
            gridLineColor: "#8c8c8c",
            categories: ['Mindset', 'Doelgerichtheid', 'Aanvang', 'Analyse', 'Argumenteren', 'Afsluiten'],
            tickmarkPlacement: 'on',
          labels: {
            style: {
              color: '#000000',
              fontSize: '1.5em'
            },
          },
          lineWidth: 0,
        },

    yAxis: {
        gridLineColor: "#8c8c8c",
        gridLineInterpolation: 'polygon',
        lineWidth: 0,
        min: 0,
        max: 10,
        tickInterval: 2

    },
	


    tooltip: {
        shared: true,
        pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b><br/>',
            style: {
              fontSize: '20px'
            },
    },

    legend: {
        align: 'center',
        verticalAlign: 'bottom',
        y: 0,
        layout: 'horizontal',
		      itemStyle: {
         font: '18pt Trebuchet MS, Verdana, sans-serif',
         color: 'black'
      }
    },
	
	    navigation: {
        buttonOptions: {
            height: 40,
            width: 48,
            symbolSize: 24,
            symbolX: 23,
            symbolY: 21,
            symbolStrokeWidth: 2
        }
    },

        series: [{
            name: 'Gewenst Score',
            data: [gs1, gs2, gs3, gs4, gs5, gs6],
            pointPlacement: 'off',
        },{
            name: 'Uw Score',
            data: [hs1, hs2, hs3, hs4, hs5, hs6],
            pointPlacement: 'off'
}]

});
</script>
</body>
</html>