<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background: linear-gradient(120deg, #84fab0, #8fd3f4);
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        form {
            background: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: left;
            width: 300px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            transition: 0.3s;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        button {
            background: #84fab0;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #66cdaa;
        }
    </style>
</head>
<body>
    <h2>Registration Form</h2>
    <?php
    $nameErr = $emailErr = $passwordErr = $confirmPasswordErr = "";
    $name = $email = $password = $confirmPassword = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }

        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } elseif (strlen($_POST["password"]) < 6) {
            $passwordErr = "Password must be at least 6 characters";
        } else {
            $password = $_POST["password"];
        }

        if ($_POST["password"] !== $_POST["confirmPassword"]) {
            $confirmPasswordErr = "Passwords do not match";
        } else {
            $confirmPassword = $_POST["confirmPassword"];
        }
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>">
        <span class="error"> <?php echo $nameErr; ?></span>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $email; ?>">
        <span class="error"> <?php echo $emailErr; ?></span>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span class="error"> <?php echo $passwordErr; ?></span>

        <label for="confirmPassword">Confirm Password:</label>
        <input type="password" id="confirmPassword" name="confirmPassword">
        <span class="error"> <?php echo $confirmPasswordErr; ?></span>

        <br><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
