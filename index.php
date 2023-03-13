<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
</head>
<body>
	<section class="section">
		<div class="container">
			<div class="columns is-centered">
				<div class="column is-half">
					<div class="box">
						<form method='post' action='process.php'>
							<div class="field">
								<label class="label">Username</label>
								<div class="control">
									<input name='username' class="input" type="text" placeholder="Enter your username">
								</div>
							</div>
							<div class="field">
								<label class="label">Password</label>
								<div class="control">
									<input name='password' class="input" type="password" placeholder="Enter your password">
								</div>
							</div>
							<div class="field">
								<label class="label">CAPTCHA</label>
								<figure class="image is-256x256">
									<img src="captcha.php" alt="CAPTCHA image">
								</figure>
								<div class="control">
									<input name='captcha' class="input" type="text" placeholder="Enter the CAPTCHA code">
								</div>
							</div>
							<div class="field is-grouped">
								<div class="control">
									<input type="submit" value="login" name='login_btn' class="button is-link">
								</div>
								<div class="control">
									<button class="button is-text">Forgot password?</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
