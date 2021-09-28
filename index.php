<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Банкомат</title>
	<meta name="description" content="Article FRUCTCODE.COM. How to send ajax form.">
	<meta name="author" content="fructcode.com">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.css" >
	<!-- Bootstrap JS + Popper JS -->
	<script defer src="js/bootstrap.bundle.js"></script>
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="ajax.js"></script>
</head>
<body>
<h1>Банкомат</h1>
<form method="post" id="ajax_form" action="">
	<div class="form-group">
		<label for="rating">Номинал в наличии</label>
		<input id=rating name="rating" type="text" class="form-control" placeholder="5, 20, 100" readonly>
	</div>
	<div class="form-group">
		<label for="sum">Ваша сумма</label>
		<input id="sum" name="sum" type="text" class="form-control" placeholder="Ваша сумма" required>
	</div>
	<br>
	<button id="btn" type="submit" class="btn btn-primary">Отправить</button>
</form>
<div id="result_form">
</div>
</body>
</html>
