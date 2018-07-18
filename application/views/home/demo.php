<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Bootstrap Range Input - Examples</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="../dist/css/bootstrap-range-input.min.css">

		<link rel="stylesheet" href="https://getbootstrap.com/assets/css/docs.min.css">
	</head>
	<body>
		 
					
					<p>A <code>.inline-form</code> with addons on each side:</p>
					<form class="form-inline">
						<div class="form-group">
							<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
								<div class="input-group">
									<div class="input-group-addon">&#x20B9;</div>
									<input id="donate-slider" type="range" class="form-control" min="0" max="500" value="50">
								<div id="donate-text" class="input-group-addon" style="min-width: 70px;">50</div>
							</div>
						</div>
						 
					</form>
					<script>
						// Adjust the value and glyphicon based on the value
						document.getElementById('donate-slider').addEventListener('input', function() {
							var ammount = this.value
							document.getElementById('donate-text').innerHTML = ammount
						});
					</script>
				 