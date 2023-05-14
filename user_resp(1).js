const API_KEY = "your-api-key";
const API_URL = "https://api.openrouteservice.org/v2/directions/driving-car";


const cargoForm = document.getElementById("cargo-form");
const fromLocationInput = document.getElementById("from-location");
const toLocationInput = document.getElementById("to-location");
const distanceOutput = document.getElementById("distance-output");

// Add an event listener to the form submit button
cargoForm.addEventListener("submit", async (event) => {
  event.preventDefault();

  // Get the from and to locations from the input fields
  const fromLocation = fromLocationInput.value;
  const toLocation = toLocationInput.value;

  // Make a request to the OpenRouteService API to get the driving distance
  const url = `${API_URL}?api_key=${API_KEY}&start=${fromLocation}&end=${toLocation}`;
  const response = await fetch(url);
  const data = await response.json();

  // Extract the driving distance from the API response
  const distance = data.features[0].properties.segments[0].distance;

  // Display the driving distance on the page
  distanceOutput.textContent = `The driving distance between ${fromLocation} and ${toLocation} is ${distance.toFixed(2)} meters.`;
});
