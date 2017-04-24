<?php

/*
$json = '
[
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
	]
';
*/

$json = file_get_contents('_data/individual.json');

$objects = json_decode($json, true);

/*
$name = "Emilia Lancastle";
$gender = "Female";
$birth = "May 4th, 1286";
*/

$name = "Marionette Irania";
$gender = "Female";
$birth = "December 8th, 824";

$last[] = end($objects);

?>

<style type="text/css">
body {
	background-color: #333333;
	color: #DDDDDD;
	text-align: center;
}
h2 {
	color: #2288BB;
}
div {
	margin-top: 75px;
}
</style>

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

<div>
	<?php
	/*
			Albert-0 Emilia-1 Irania-2
			$objects[1]['name'] = Emilia Lancastle
		This Needs To Be Modified Into A For-Each Loop, Instead of Hard Coding $objects[2] In Both The If And Else Statements.
			Result: $Objects[$i]
			Number In Array [0 - i++]
	*/

echo "<h2>Unique JSON Import and Export</h2>";

	if (in_array($name, $objects[2]))
	{
		echo "Name : " . $objects[2]['name'] . "<br/>";
		echo "Last Array : " . $name . ".<br/>";
		echo "this entry already exists. <br/>";
		echo "Not Adding to File. <br/>";

		$objects = json_encode($objects, true);
		echo "<br/>" . $objects;
	}
	else
	{
		echo "Last Array is " . $name . ",<br/>"; "not " . $objects[2]['name'] . ".<br/>";
		echo "Adding to File. <br/>";

		array_push($objects,
					array('name'=> $name, 'gender'=> $gender, 'birth'=> $birth)
	);

		$new_json = json_encode($objects, true);
		echo "<br/>" . $new_json;

		$fp = fopen('_data/individual.json', 'w');
		fwrite($fp, json_encode($objects, true));
		fclose($fp);

/*
Using FWrite It Would Be A Good Idea To Print Each Entry To A Seperate Line, And With A Bit of Work, Write The File To Look The Way It Should.
*/

}
?>
</div>

<div>
	<?php
	echo "<h2>JSON Array Results</h2>";
	$objects = json_decode($json, true);

	for ($i = 0; $i < count($objects); $i++) {
	    echo $objects[$i]['name'] . ', ';
	    echo $objects[$i]['gender'] . ', ';
			echo 'and born on ' . $objects[$i]['birth'] . '.';
			echo "<br/><br/>";
	}

	?>
</div>

	<div id="app">
		<h2>Vue.js Experiments</h2>
		<p v-text="message"></p>
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
