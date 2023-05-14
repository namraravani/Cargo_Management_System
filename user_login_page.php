<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<style>
		body {
			background-color: #058283;
		}
		form {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0px 0px 10px #888;
			padding: 20px;
			margin: 20px auto;
			width: 400px;
            margin-top: 150px;
		}
		h1 {
			text-align: center;
            color:#058283;
		}
		input[type="email"], input[type="password"] {
			display: block;
			margin: 10px auto;
			padding: 10px;
			width: 100%;
			border-radius: 5px;
			border: none;
			background-color: #f2f2f2;
			transition: all 0.3s ease-in-out;
		}
		input[type="email"]:focus, input[type="password"]:focus {
			background-color: #e6e6e6;
			box-shadow: 0px 0px 10px #888;
			outline: none;
		}
		input[type="submit"]{
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			font-size: 16px;
			padding: 10px;
			width: 100%;
			transition: all 0.3s ease-in-out;
		}
		input[type="submit"]:hover {
			background-color: #3e8e41;
		}
		@keyframes shake {
			0% {
				transform: translateX(0);
			}
			  
			25% {
				transform: translateX(-10px);
			}
			  
			50% {
				transform: translateX(10px);
			}
			  
			75% {
				transform: translateX(-10px);
			}
			  
			100% {
				transform: translateX(0);
			}
		}
		.invalid {
			border: 2px solid #ff6666;
			animation: shake 0.5s ease-in-out;
		}
		.new-to-website {
			text-align: center;
			margin-top: 20px;
			font-size: 14px;
			color: #999;
		}
		.new-to-website a {
			color: #4CAF50;
			text-decoration: none;
		}

		input[type="button"]{
			background-color: rgb(80, 182, 175);
			height: 40px;
			width :80px;
			border-radius: 20px;
			font-size: 18px;
		}
		
		input[type="button"]:hover{
			background-color: #0077ff;
		}
	</style>
</head>
<body>
	<form id="login-form" onsubmit="login(event)">
		<h1>Login</h1>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" placeholder="Enter your email address" required>
		<label for="password">Password:</label>
		<input type="password" id="password" name="password" placeholder="Enter your password" required>

		<a href="after_user_login.php">
			<input type="submit" value="Signin">
			</a>
	</form>
	<div class="new-to-website">
		New to our website? <a href="user_signin_page.php">Sign in</a>
	</div>
	<script src="user_validation.js"></script>
</body>
</html>