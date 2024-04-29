<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forgot Password</title>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: none;
        border-radius: 3px;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
    .error {
        color: red;
    }
    .success {
        color: green;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Forgot Password</h2>
    <form id="passwordForm">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="newPassword">New Password:</label>
        <input type="password" id="newPassword" name="newPassword" required>
        <label for="confirmPassword">Confirm New Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword" required>
        <input type="submit" value="Change Password">
    </form>
    <div id="message" class="error"></div>
</div>

<script>
    document.getElementById("passwordForm").addEventListener("submit", function(event) {
        event.preventDefault();
        var email = document.getElementById("email").value;
        var newPassword = document.getElementById("newPassword").value;
        var confirmPassword = document.getElementById("confirmPassword").value;

        // You can add your validation logic here
        
        // Example: Check if new password and confirm password match
        if (newPassword !== confirmPassword) {
            document.getElementById("message").textContent = "New password and confirm password do not match.";
            document.getElementById("message").classList.add("error");
            return;
        }

        // If validation passes, you can proceed with password change process
        // For simplicity, let's just display a success message
        document.getElementById("message").textContent = "Password changed successfully!";
        document.getElementById("message").classList.remove("error");
        document.getElementById("message").classList.add("success");
    });
</script>
</body>
</html>
