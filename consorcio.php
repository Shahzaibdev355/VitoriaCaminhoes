

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract form data
    $selectedRange = $_POST['selectedRange'];
    // $selectedButton = $_POST['selectedButton'];
    // $truckVersionButton = $_POST['truckVersionButton'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $selectModel = $_POST['selectModel'];
    $selectState = $_POST['selectState'];
    $selectCity = $_POST['selectCity'];
    $message = $_POST['message'];

    // Validate and sanitize inputs (perform further validation if needed)
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $selectModel = filter_var($selectModel, FILTER_SANITIZE_STRING);
    $selectState = filter_var($selectState, FILTER_SANITIZE_STRING);
    $selectCity = filter_var($selectCity, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(array('success' => false));
        exit;
    }

   
    $to = 'lucasolimpiorodrigues@gmail.com'; // ENviando para o email
    $subject = 'Mail From Vitória Caminhóes Consórcio Form: ';
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Crédito Pretendido R$: $selectedRange\n";
    $body .= "Model: $selectModel\n";
    $body .= "State: $selectState\n";
    $body .= "City: $selectCity\n";
    $body .= "Message:\n$message\n";
    
    // $body .= "Créditos: $selectedButton\n";
    // $body .= "Truck Version: $truckVersionButton\n";

    // Send email
    if (mail($to, $subject, $body)) {
        echo json_encode(array('success' => true));
    } else {
        echo json_encode(array('success' => false));
    }
}
?>
