const authorizedUsers = [
    { username: 'Hiren', password: '1234' }
  ];
  
function login(event) {
    event.preventDefault(); // Prevent the default form submission behavior
    
    // Retrieve the entered username and password from the login form
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    // Check if the entered credentials match an authorized user
    const isAuthorized = authorizedUsers.some(user => user.username === username && user.password === password);
    
    if (isAuthorized) {
      // Display a popup message and redirect the user to the main page
      alert('Login successful!');
      window.location.href = 'admin.php';
    } else {
      // Display an error message if the credentials are invalid
      alert('Invalid username or password');
    }
  }
  