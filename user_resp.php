<!DOCTYPE html>
<html>
<head>
	<title>Cargo Management System - Book Cargo</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="user_resp.css">
    <script href="user_resp.js(1)"></script>
</head>
<body>
	<main>

        <div id="map">

        </div>
		<h2>Book Cargo</h2>
		<form id="cargo-form">
			<label for="from-location">From:</label>
			<input type="text" id="from-location" name="from-location" required>

			<label for="to-location">To:</label>
			<input type="text" id="to-location" name="to-location" required>

			<button type="submit" id="calculate-btn">Calculate Price</button>
		</form>

		<div id="price-container" style="display: none;">
			<h3>Estimated Price:</h3>
			<p id="price"></p>
		</div>
	</main>
	<script src="script.js"></script>
</body>
</html>
