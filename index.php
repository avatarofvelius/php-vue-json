<?php

$json = '[
	{
		"name": "Albert Palenor",
		"gender": "Male",
		"birth": "November 12th, 968"
	},
	{
		"name": "Emilia Lancastle",
		"gender": "Female",
		"birth": "May 4th, 1286"
	}
	]';

// Json Array Object
$objects = json_decode($json);
echo $objects[0]->name  . "<br/>";
echo $objects[0]->birth . "<br/>";


echo "<br/>";

// Associative Multi Dimensional Arrays
$objects = json_decode($json, true);
echo $objects[1]['name']  . "<br/>";
echo $objects[1]['birth'] . "<br/>";

?>

<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Web Page Layout -->
	<link rel="stylesheet" media="screen" href="_css/index.css" />

	<!-- Script Libraries -->
	<!--<script type="text/javascript" src="_library/jquery.js"></script> -->

	<!-- Meta Information -->
	<title>PHP Template 4192017</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0">
	<meta charset="utf-8">
	<meta name="description" content="PHP Template">
	<meta name="author" content="Matt T. Myers">

</head>

<body>

	<div id="app">
		<h2>Vue.js Experiments</h2>
		{{ message }}
	</div>

</body>

	<!-- Script Libraries -->
	<script src="_library/vue.js"></script>
	<!-- Scripts -->
	<script type="text/javascript">
		var app = new Vue({
			el: '#app',
			data: {
				message: "Hello PHP"
			}
		})
	</script>

</html>
