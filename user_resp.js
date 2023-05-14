const form = document.getElementById('cargo-form');
const calculateBtn = document.getElementById('calculate-btn');
const priceContainer = document.getElementById('price-container');
const price = document.getElementById('price');

form.addEventListener('submit', (e) => {
	e.preventDefault();
	
	// Get input values
	const fromLocation = document.getElementById('from-location').value;
	const toLocation = document.getElementById('to-location').value;
	
	// Calculate price
	const priceValue = calculatePrice(fromLocation, toLocation);
	
	// Display price
	price.innerText = `$${priceValue.toFixed(2)}`;
	priceContainer.style.display = 'block';
});

function calculatePrice(from, to) {
	// Use a simple algorithm to calculate the price based on the distance between the two locations
	const distance = getDistance(from, to);
	const pricePerMile = 1.50; // This is just an example, you can adjust this based on your pricing strategy
	const price = distance * pricePerMile;
	return price;
}

function getDistance(from, to) {
	// Use a third-party API to get the distance between the two locations
	// This is just an example, you can use a different API or method if you prefer
	const url = `https://api.mapbox.com/directions/v5/mapbox/driving/${from};${to}?access_token=${MAPBOX_ACCESS_TOKEN}`;
	return fetch(url)
		.then(response => response.json())
		.then(data => {
			const distanceInMeters = data.routes[0].distance;
			const distanceInMiles = distanceInMeters / 1609.34;
			return distanceInMiles;
		})
		.catch(error => {
			console.log(error);
			alert('There was an error getting the distance. Please try again later.');
		});
}
