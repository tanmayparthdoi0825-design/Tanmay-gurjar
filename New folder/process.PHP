<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $to = "your-email@example.com"; // अपनी ईमेल डालें
    $subject = "New Registration from $name";
    $message = "Name: $name\nEmail: $email\nPhone: $phone";

    // भेजने वाली ईमेल हेडर
    $headers = "From: webmaster@example.com";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Registration successful! We will contact you soon.";
    } else {
        echo "Error: Registration failed. Please try again.";
    }
}
?>