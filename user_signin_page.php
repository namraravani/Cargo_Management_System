<!DOCTYPE html>
<html>
<head>
    <script href="user_signin_page.js"></script>
	<title>Signin Form</title>
	<style>
		body {
			background-color: #058283;
		}
		.container {
			display: flex;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}
		form {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0px 0px 10px #888;
			padding: 20px;
			width: 400px;
		}
		h1 {
			text-align: center;
		}
		input[type="text"], input[type="email"], input[type="date"] {
			display: block;
			margin: 10px auto;
			padding: 10px;
			width: 100%;
			border-radius: 5px;
			border: none;
			background-color: #f2f2f2;
			transition: all 0.3s ease-in-out;
		}
		input[type="text"]:focus, input[type="email"]:focus, input[type="date"]:focus {
			background-color: #e6e6e6;
			box-shadow: 0px 0px 10px #888;
			outline: none;
		}
		input[type="submit"] {
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
	</style>
</head>
<body>
	<body>
        <div class="container">
            <form id="loginForm" method="POST" action="">
                <h1>Sign in</h1>
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Enter your username" required>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
                <label for="city">City:</label>
                <input type="text" id="city" name="city" placeholder="Enter your city" required>
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
				<a href="after_user_login.php">
                <input type="submit" value="Sign In">
			</a>
            </form>
            
        </div>
    </body>