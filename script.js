document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let username = document.getElementById("username").value.trim();
    let password = document.getElementById("password").value.trim();

    let userError = document.getElementById("userError");
    let passError = document.getElementById("passError");

    userError.textContent = "";
    passError.textContent = "";

    let isValid = true;

    // 🔹 Username Validation
    if (username === "") {
        userError.textContent = "Username is required";
        isValid = false;
    } else if (username.length < 4) {
        userError.textContent = "Username must be at least 4 characters";
        isValid = false;
    }

    // 🔹 Password Validation 
    let passwordPattern = /^(?=.*[A-Z])(?=.*[0-9])(?=.*[\W]).{6,}$/;

    if (password === "") {
        passError.textContent = "Password is required";
        isValid = false;
    } else if (!passwordPattern.test(password)) {
        passError.textContent =
            "Password must contain uppercase, number, special character (min 6)";
        isValid = false;
    }

    // 🔹 Fake Authentication 
    if (isValid) {
        if (username === "admin" && password === "Admin@123") {
            alert("Login Successful ✅");
        } else {
            alert("Invalid username or password ❌");
        }
    }
});