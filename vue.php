<style type="text/css">
body {
	background-color: #333333;
	color: #DDDDDD;
	text-align: center;
	font-family: Yu Gothic;
}
h2 {
	color: #2288BB;
}
div {
	margin-top: 75px;
}
a {
	color: #2288BB;
	text-decoration: none;
}
a:hover {
	color: #55CCEE;
	text-decoration: underline;
}
</style>

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

	<div id="app">
	<h2>Vue.js Experiments</h2>
		{{json}}
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
