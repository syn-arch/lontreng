<?php require 'config/koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hello world</title>
	<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/fontawesome-free-5.9.0-web/css/all.min.css">
</head>
<body>

<script>

	function time() {
	  var d = new Date();
	  var s = d.getSeconds();
	  var m = d.getMinutes();
	  var h = d.getHours();
	  var ss = (s < 10) ? "0" : "";
	  var mm = (m < 10) ? "0" : "";
	  var hh = (h < 10) ? "0" : "";
	  var now = hh + h + ":" + mm + m + ":" + ss + s;

	  document.getElementById('span').textContent = now;
	}

	function cek() {

		var time = document.getElementById('span').textContent;

		$.ajax({
			url : 'get.php',
			type: 'post',
			data: {jam : time},
			success : function (data){
				if (!data == '') {
					$("#play").html(data)
				}
			}
		});

	}
	
	setInterval(time, 1000);
	setInterval(cek, 1000);
	
</script>


<div class="container" style="width: 100%;height: 100vh;display: flex;justify-content: center;align-items: center;flex-direction: column;">
	<span id="span" style="font-size: 50px"></span>
	<div id="now"></div>
	<br>
	<div id="hari"></div>
	<br>
	<a href="index.php"><p class="text-dark"><i class="fa fa-stop"></i> Stop LonTreng</p></a>
	<br>
	<div id="play"></div>

</div>

<script src="assets/js/script.js"></script>
</body>
</html>