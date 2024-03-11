

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize inputs
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format.';
        exit;
    }

    // Replace this with your desired email address
    $to = 'lucasolimpiorodrigues@gmail.com';
    $subject = 'Mail From Vitória Caminhóes Contact Form: ';
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message: $message\n";

    // Send email
    if (mail($to, $subject, $body)) {
        echo 'Email enviado com sucesso.';
    } else {
        echo 'Falha no envio do Email. ';
    }
}
?>
