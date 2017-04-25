
<!DOCTYPE html>
<html lang="en">

<head>

	<!-- Web Page Layout -->
	<link rel="stylesheet" media="screen" href="index.css" />

	<!-- Script Libraries -->
	<script type="text/javascript" src="_library/jquery.js"></script>

	<!-- Meta Information -->
	<title>PHP Template 4192017</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=3.0">
	<meta charset="utf-8">
	<meta name="description" content="PHP Template">
	<meta name="author" content="Matt T. Myers">

</head>

<?php

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

<body>

	<span id="nav">
		<a href="#doc">Documentation</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="#php">Php Examples</a>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<a href="#vue">Vue Examples</a>
	</span>

<!-- Doc Section -->
<div id="doc">
	<br/><br/>
	<h1>Documentation</h1>
	<hr />
	<p>
		<h2>Project Goals</h2>
	<ul>
		Integrate Better Vue Model Designs.
	</ul>
	<ul>
		PHP Form For Adding Content.
	</ul>
	<ul>
		Introduction To Laravel, Slim, And Symphony.
	</ul>
	</p>
</div>

<!-- PHP Section -->
<div id="php">
	<h1>Php Examples</h1>
	<hr />

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

			echo "<h2>Current File</h2>";

			echo  $objects;
		}
		else
		{
			echo "Last Array is " . $name . ",<br/>"; "not " . $objects[2]['name'] . ".<br/>";
			echo "Adding to File. <br/>";

			array_push($objects,
						array('name'=> $name, 'gender'=> $gender, 'birth'=> $birth)
		);

			$new_json = json_encode($objects, true);

			echo "<h2>Current File :</h2>";

			echo $new_json;

			$fp = fopen('_data/individual.json', 'w');
			fwrite($fp, json_encode($objects, true));
			fclose($fp);

/*
Using FWrite It Would Be A Good Idea To Print Each Entry To A Seperate Line, And With A Bit of Work, Write The File To Look The Way It Should.
*/

}
?>

	<h2>JSON Injection Through For Loop</h2>

<?php

	$objects = json_decode($json, true);

	for ($i = 0; $i < count($objects); $i++) {
	    echo $objects[$i]['name'] . ', ';
	    echo $objects[$i]['gender'] . ', ';
			echo 'and born on ' . $objects[$i]['birth'] . '.';
			echo "<br/><br/>";
	}

?>
</div>

<!-- Vue Section -->
<div id="app">
<h1 id="vue">Vue Examples</h1>
<hr />

	<!-- JSON Loop By Array -->
	<h2>JSON Loop By Array</h2>
	<ul>
		<li v-for="json in json">
			{{ json }}
		</li>
	</ul>

	<!-- JSON Based On Element -->
	<table>
		<thead>
			<h2>JSON Based On Element</h2>
		</thead>

		<tr>
			<td v-for="json in json">
				{{ json.name }}
			</td>
		</tr>
		<tr>
			<td v-for="json in json">
				{{ json.gender }}
			</td>
		</tr>
		<tr>
			<td v-for="json in json">
				{{ json.birth }}
			</td>
		</tr>
	</table>

</div>
</body>

	<!-- Script Libraries -->
	<script src="_library/vue.js"></script>
	<!-- Scripts -->

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
?>
-->
*/ ?>
