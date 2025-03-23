document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Get input values
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value;
    
    // Validate inputs are not empty
    if (!username || !password) {
        alert('Please enter both username and password');
        return;
    }
    
    // Validate email format and must be gmail
    if (!username.endsWith('@gmail.com')) {
        alert('Please use a Gmail account (@gmail.com)');
        return;
    }
    
    // In a real application, you would send this data to a server for authentication
    console.log('Login attempt:', { username, password });
    
    // Accept any gmail account with any password (as long as password is not empty)
    if (username.endsWith('@gmail.com') && password) {
        alert('Login successful!');
        // Redirect to dashboard or home page
        window.location.href = '/index.html';
    } else {
        alert('Invalid username or password');
    }
});