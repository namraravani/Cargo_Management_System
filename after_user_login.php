<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>After_user_Login_page</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: black;
			overflow: hidden;
		}

        
		#video {
			position: fixed;
			right: 0;
			bottom: 0;
			min-width: 100%;
			min-height: 100%;
			z-index: -1;
			-webkit-animation: myvideo 20s infinite; /* Safari 4+ */
			-moz-animation: myvideo 20s infinite; /* Fx 5+ */
			-o-animation: myvideo 20s infinite; /* Opera 12+ */
			animation: myvideo 20s infinite;
		}
		@-webkit-keyframes myvideo {
			0% {transform: scale(1);}
			50% {transform: scale(1.2);}
			100% {transform: scale(1);}
		}
		@-moz-keyframes myvideo {
			0% {transform: scale(1);}
			50% {transform: scale(1.2);}
			100% {transform: scale(1);}
		}
		@-o-keyframes myvideo {
			0% {transform: scale(1);}
			50% {transform: scale(1.2);}
			100% {transform: scale(1);}
		}
		@keyframes myvideo {
			0% {transform: scale(1);}
			50% {transform: scale(1.2);}
			100% {transform: scale(1);}
		}
		.container {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			text-align: center;
		}
		.container h1 {
			color: cyan;
			font-size: 3em;
			margin-bottom: 0.5em;
		}
		.container button {
			background-color: white;
			border: none;
			color: black;
			padding: 1em 2em;
			font-size: 1.5em;
			border-radius: 0.5em;
			cursor: pointer;
            transition: 0.25s;
            
		}

        .container button:hover{
            background-color: green;
            border-radius: 2em

        }
	</style>
</head>
<body>
	<video id="video" autoplay muted loop>
		<source src="video(1).mp4" type="video/mp4">
		
	</video>
	<div class="container">
		<h1>Welcome,<br>Book your desierd cargo from here in an easy way
        </h1>
		<a href="user_page.php">
		<button>Book Cargo..!</button>
	</a>
	</div>
</body>
</html>
