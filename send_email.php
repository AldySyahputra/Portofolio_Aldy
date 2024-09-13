<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "aldysyahputra579@gmail.com"; // Ganti dengan email Anda
    $subject = "Pesan Baru dari Website";
    $body = "Nama: $firstname $lastname\n";
    $body .= "Email: $email\n\n";
    $body .= "Pesan:\n$message";
    
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Pesan berhasil dikirim";
    } else {
        echo "Gagal mengirim pesan";
    }
} else {
    echo "Metode request tidak valid";
}
?>