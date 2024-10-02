<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sesuaikan alamat email penerima
    $to_email = "renopratama.22006@mhs.unesa.ac.id";

    // Ambil data dari formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Format pesan email
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message\n";

    // Kirim email menggunakan fungsi mail()
    if (mail($to_email, $subject, $email_message)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
};
?>
