document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();
    
    // Simple validation
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    
    if (!username || !password) {
        alert('Please enter both username and password');
        return;
    }
    
    // In a real application, you would send this data to a server for authentication
    console.log('Login attempt:', { username, password });
    
    // For demo purposes
    if (username === 'Amirul Mirdas' && password === 'password') {
        alert('Login successful!');
        // Here you would redirect to dashboard or home page
        // window.location.href = 'dashboard.html';
    } else {
        alert('Invalid username or password');
    }
});