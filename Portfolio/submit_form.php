<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  // Validate the form data (e.g., check for empty fields, validate email format)
  // ...

  // Send the email
  $to = "ben.storms2@gmail.com";
  $subject = "New message from $name";
  $body = "Name: $name\nEmail: $email\n\n$message";
  $headers = "From: $email";


  if (mail($to, $subject, $body, $headers)) {
    // Email sent successfully
    echo "Thank you for your message!";
  } else {
    // Error sending email
    echo "Oops! An error occurred while sending your message.";
  }
}
?>