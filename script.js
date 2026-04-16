document.getElementById("loginForm").addEventListener("submit", function(e) {
    e.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    if(username === "" || password === "") {
        alert("All fields are required!");
    } else {
        alert("Login successful (Frontend only)");
    }
});