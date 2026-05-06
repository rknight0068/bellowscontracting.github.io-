<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $cleaningType = $_POST['cleaningType'];

    $smsUpdates = isset($_POST['smsUpdates']) ? "Yes" : "No";
    $petsPresent = isset($_POST['petsPresent']) ? "Yes" : "No";

    $newsletter = $_POST['newsletter'] ?? "Not selected";
    $contactMethod = $_POST['contactMethod'] ?? "Not selected";

    $to = "rknight0068@kctcs.edu";
    $subject = "New Booking Request";

    $message = "New Walkthrough Booking:\n\n";
    $message .= "Name: $name\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Address: $address\n";
    $message .= "Cleaning Type: $cleaningType\n";
    $message .= "SMS Updates: $smsUpdates\n";
    $message .= "Pets Present: $petsPresent\n";
    $message .= "Newsletter: $newsletter\n";
    $message .= "Preferred Contact: $contactMethod\n";

    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "Form submitted!";
}
?>
