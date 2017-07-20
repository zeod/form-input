<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Smartphone.nl </title>
<style>
body{
	text-content:left;
	position:relative;
	top: 30px;
	left: 100px;
}

#end{
	position:absolute;
	z-index: -1;
	background-color: #DADCDB;
	padding: 20px;
	height: 500px;
	width: 700px;
}

</style>
</head>
<body>
<div id="end"></div>
</body>
</html>
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

if (($_POST["hs1"].$_POST["gs1"])) {
    echo "<table style='text-align: left; width: 500px;' border=0 cellspacing=0 cellpadding=0><tr><td>Mindset</td><td>Huidige Score:</td><td>$hs1</td><td>Gewenste Score:</td><td>$gs1</td></tr></table><br>";    
}

if (($_POST["hs2"].$_POST["gs2"])) {
    echo "<table style='text-align: left; width: 500px;' border=0 cellspacing=0 cellpadding=0><tr><td>Doelgerichtheid</td><td>Huidige Score:</td><td>$hs2</td><td>Gewenste Score:</td><td>$gs2</td></tr></table><br>";    
}

if (($_POST["hs3"].$_POST["gs3"])) {
    echo "<table style='text-align: left; width: 500px;' border=0 cellspacing=0 cellpadding=0><tr><td>Beïnvloeding</td><td>Huidige Score:</td><td>$hs3</td><td>Gewenste Score:</td><td>$gs3</td></tr></table><br>";    
}

if (($_POST["hs4"].$_POST["gs4"])) {
    echo "<table style='text-align: left; width: 500px;' border=0 cellspacing=0 cellpadding=0><tr><td>Analyse</td><td>Huidige Score:</td><td>$hs4</td><td>Gewenste Score:</td><td>$gs4</td></tr></table><br>";    
}

if (($_POST["hs5"].$_POST["gs5"])) {
    echo "<table style='text-align: left; width: 500px;' border=0 cellspacing=0 cellpadding=0><tr><td>Verleiden</td><td>Huidige Score:</td><td>$hs5</td><td>Gewenste Score:</td><td>$gs5</td></tr></table><br>";    
}

if (($_POST["hs6"].$_POST["gs6"])) {
    echo "<table style='text-align: left; width: 500px;' border=0 cellspacing=0 cellpadding=0><tr><td>Ontwikkelen</td><td>Huidige Score:</td><td>$hs6</td><td>Gewenste Score:</td><td>$gs6</td></tr></table><br>";    
}
	?>