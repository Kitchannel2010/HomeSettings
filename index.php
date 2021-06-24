<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="StyleSheet.css">
</head>
<body>
<div class="ga" id="login_form">
	<div id="login_status">Enter the code</div>
		<div id="login_form">
		<input type="text" id="google_code">
		<button type="submit" id="submit_code" onclick="result()">Verify</button>
	<P>
		Please install <strong>Google Authenticator</strong> and enter the code in the textbox.
	</P>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript" ></script>
	<script type="text/javascript">
		$('button#submit_code').on('click', function() {
		var google_code = $('input#google_code').val();
		if(google_code.length > 4) {
			$.post('check.php', {google_code: google_code}, function(result) {
				if(result == 1) {
					window.location = "../UI/Main/admin.html"
				} else {
					$('div#login_status').text('Login failed');
				}
			});
		}
	});
	</script>
</div>
</body>
</html>