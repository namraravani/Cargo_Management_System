<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>end_page</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: black;
		}

		#log-out{

background-color : red;
margin-bottom : 100px;


}
		
		.container {
			display: flex;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			height: 100vh;
			font-size: 40px;
			font-weight: bold;
			color: green;
		}
		
		button{
            background-color: aquamarine;
            border-radius: 20%;
            margin-top: 30px;
        }

		p{
			color: red

		}
	</style>
</head>
<body>
	<div class="container">
		Congratulations!<br>
		Your Cargo Has Been Booked..!<br>
		<P>
		It will Arrive in estimated 9 DAYS</p>
    <button id="confetti_btn">EFFECT</button>
	<a href="HomePage.php">
              <input id="log-out" type="button" value="Log-out"></button>
            </a>
	</div>
	<script type="module">
        import confetti from 'https://cdn.skypack.dev/canvas-confetti';
        function party()
        {
            confetti();
        }
        document.getElementById('confetti_btn').addEventListener('click',party);

    </script>
		