<?php
// -------------------------------------------------------------
// ✅ Show PHP errors for debugging (remove later)
// -------------------------------------------------------------
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// -------------------------------------------------------------
// ✅ Receiver email
// -------------------------------------------------------------
$to = "gridsglobal8@gmail.com"; // your receiving email

// -------------------------------------------------------------
// ✅ Check required fields
// -------------------------------------------------------------
$fields = ['name', 'email', 'number', 'message'];
foreach ($fields as $f) {
    if (empty($_POST[$f])) {
        echo "Please fill all required fields.";
        exit;
    }
}

// -------------------------------------------------------------
// ✅ Get form values safely
// -------------------------------------------------------------
$name    = htmlspecialchars($_POST['name']);
$email   = htmlspecialchars($_POST['email']);
$number  = htmlspecialchars($_POST['number']);
// $hostel  = htmlspecialchars($_POST['hostel']);
$message = htmlspecialchars($_POST['message']);

// -------------------------------------------------------------
// ✅ Email content
// -------------------------------------------------------------
$subject = "New Enquiry from $name";
$body  = "You have received a new enquiry:\n\n";
$body .= "Name: $name\n";
$body .= "Email: $email\n";
$body .= "Phone: $number\n";
// $body .= "Hostel: $hostel\n\n";
$body .= "Message:\n$message\n";

// -------------------------------------------------------------
// ✅ Headers (use domain-based From email)
// -------------------------------------------------------------
$headers  = "From: Timrax <noreply@timrax@gmail.com>\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// -------------------------------------------------------------
// ✅ Send mail
// -------------------------------------------------------------
if (mail($to, $subject, $body, $headers)) {
    echo "<h2 style='color:green;'>✅ Your message has been sent successfully!</h2>";
} else {
    echo "<h2 style='color:red;'>❌ Mail sending failed. Please try again later.</h2>";
}
?>
