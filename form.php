<?php

// Define the email addresses
$email1 = "diksha123@gmail.com";
$email2 = "itsmesneha0509@gmail.com";
$email3 = "itsmesneha0509@gmail.com"; 

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the form data
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $assessment_type = filter_var($_POST['assessment_type'], FILTER_SANITIZE_STRING);
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $budget = filter_var($_POST['budget'], FILTER_SANITIZE_NUMBER_INT);
    $currency = filter_var($_POST['currency'], FILTER_SANITIZE_STRING);
    $pages = filter_var($_POST['qty'], FILTER_SANITIZE_NUMBER_INT);
    $noWordLimit = isset($_POST['noWordLimit']) ? 'Yes' : 'No';
    $contact_number = filter_var($_POST['contact_number'], FILTER_SANITIZE_NUMBER_INT);
    $country_code = filter_var($_POST['country_code'], FILTER_SANITIZE_STRING);
    $deadline = filter_var($_POST['deadline'], FILTER_SANITIZE_STRING);
    $discountToggle = isset($_POST['discountToggle']) ? 'Yes' : 'No';

    // Get the uploaded files
    $files = $_FILES['filesname'];

    // Create the email message
    $message = "Form Submission Data:\n\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Assessment Type: " . $assessment_type . "\n";
    $message .= "Subject: " . $subject . "\n";
    $message .= "Budget: " . $budget . " " . $currency . "\n";
    $message .= "Pages: " . $pages . "\n";
    $message .= "No Word Limit: " . $noWordLimit . "\n";
    $message .= "Contact Number: " . $country_code . " " . $contact_number . "\n";
    $message .= "Deadline: " . $deadline . "\n";
    $message .= "Discount Toggle: " . $discountToggle . "\n";

    // Generate a boundary string
    $boundary = md5(uniqid(time()));

    // Email headers
    $headers = "From: " . $email . "\r\n";
    $headers .= "CC: " . $email1 . ", " . $email2 . ", " . $email3 . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"".$boundary."\"\r\n";

    // Multipart message
    $body = "--".$boundary."\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: 7bit\r\n";
    $body .= $message."\r\n";

    // Attach the uploaded files
    foreach ($files['name'] as $key => $value) {
        if ($files['error'][$key] == 0) {
            $file_path = $files['tmp_name'][$key];
            $file_size = $files['size'][$key];
            $file_type = $files['type'][$key];
            $file_name = $files['name'][$key];

            // Read the file content
            $file_content = chunk_split(base64_encode(file_get_contents($file_path)));

            // Add attachment to the email body
            $body .= "--".$boundary."\r\n";
            $body .= "Content-Type: ".$file_type."; name=\"".$file_name."\"\r\n";
            $body .= "Content-Disposition: attachment; filename=\"".$file_name."\"\r\n";
            $body .= "Content-Transfer-Encoding: base64\r\n";
            $body .= "\r\n" . $file_content . "\r\n";
        }
    }

    // End boundary
    $body .= "--".$boundary."--";

    // Send the email
    $to = $email1 . ", " . $email2 . ", " . $email3;
    mail($to, "Form Submission", $body, $headers);

    // Redirect the user to a thank-you page
    header("Location: index.html");
    exit;
}



?>
