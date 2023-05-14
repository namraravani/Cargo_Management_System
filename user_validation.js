const authorizedUsers = [
    { email: 'hirebmatthar007@gmail.com', password: '1234' }
  ];
  
function login(event) {
    event.preventDefault(); // Prevent the default form submission behavior
    
    // Retrieve the entered username and password from the login form
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    // Check if the entered credentials match an authorized user
    const isAuthorized = authorizedUsers.some(user => user.email === email && user.password === password);
    
    if (isAuthorized) {
      // Display a popup message and redirect the user to the main page
      alert('Login successful!');
      window.location.href = 'after_user_login.php';
    } else {
      // Display an error message if the credentials are invalid
      alert('Invalid email or password');
    }
  }
  