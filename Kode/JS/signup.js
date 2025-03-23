document.getElementById("signupForm").addEventListener("submit", function(event) {
    event.preventDefault();

    let name = document.getElementById("name").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value;
    let repeatPassword = document.getElementById("repeatPassword").value;
    let termsChecked = document.getElementById("terms").checked;

    if (!name || !email || !password || !repeatPassword) {
        alert("Please fill in all fields.");
        return;
    }

    if (password !== repeatPassword) {
        alert("Passwords do not match.");
        return;
    }

    if (!termsChecked) {
        alert("You must agree to the Terms of Service and Privacy Policy.");
        return;
    }

    alert("Signup successful!");
});
