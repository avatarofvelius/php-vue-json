<?php

<<<<<<< HEAD
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

=======
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

<<<<<<< HEAD
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

>>>>>>> origin/master
$last[] = end($objects);

=======
>>>>>>> origin/master
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
<<<<<<< HEAD
a {
	color: #2288BB;
}
</style>
=======
</style>

>>>>>>> origin/master
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Web Page Layout -->
	<link rel="stylesheet" media="screen" href="_css/index.css" />

	<!-- Script Libraries -->
	<script type="text/javascript" src="_library/jquery.js"></script>

	<!-- Meta Information -->
	<title>PHP Template 4192017</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0">
	<meta charset="utf-8">
	<meta name="description" content="PHP Template">
	<meta name="author" content="Matt T. Myers">

</head>

<body>

<<<<<<< HEAD
		<a href="php.php">PHP Examples</a>
			<br/>
		<a href="vue.php">Vue Examples</a>

=======
<<<<<<< HEAD
>>>>>>> origin/master
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
<<<<<<< HEAD
		echo "Not Adding to File. <br/><br/><br/>";

		$objects = json_encode($objects, true);
		echo "Current File :<br/><br/>";
		echo  $objects;
=======
		echo "Not Adding to File. <br/>";

		$objects = json_encode($objects, true);
		echo "<br/>" . $objects;
>>>>>>> origin/master
	}
	else
	{
		echo "Last Array is " . $name . ",<br/>"; "not " . $objects[2]['name'] . ".<br/>";
		echo "Adding to File. <br/>";

		array_push($objects,
					array('name'=> $name, 'gender'=> $gender, 'birth'=> $birth)
	);

		$new_json = json_encode($objects, true);
<<<<<<< HEAD
		echo "Current File :<br/>";
		echo $new_json;
=======
		echo "<br/>" . $new_json;
>>>>>>> origin/master

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
<<<<<<< HEAD

	<div id="app">
	<h2>Vue.js Experiments</h2>
		{{json}}
=======
=======
	<?php
	echo "<h2>JSON Array Results</h2>";
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
>>>>>>> origin/master

	<div id="app">
		<h2>Vue.js Experiments</h2>
		<p v-text="message"></p>
>>>>>>> origin/master
	</div>

</body>

	<!-- Script Libraries -->
	<script src="_library/vue.js"></script>
	<!-- Scripts -->

	<!-- Simple View Example
	<script type="text/javascript">
		var app = new Vue({
			el: '#app',
			data: {
				message: "Hello PHP"
			}
		})
	</script> -->

	<!-- JSON Vue Example -->
	<script type="text/javascript">
	new Vue({
	    el: '#app',
	    data: {
	        json: null
	    },
	    created: function () {
	        var _this = this;
	        $.getJSON('http://localhost/GitHub/sdhc-php/_data/individual.json', function (json) {
	            _this.json = json;
	        });
	    }
	});
	</script>

</html>

<?php /*
$json = '
[{
		"name": "Albert Palenor",
		"gender": "Male",
		"birth": "November 12th, 968"
	},
	{
		"name": "Emilia Lancastle",
		"gender": "Female",
		"birth": "May 4th, 1286"
}]';
*/ ?>
