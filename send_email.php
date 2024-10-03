<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "enricopaulaleite@gmail.com";
    $subject = "Nova mensagem de contato do portfólio";
    $body = "Nome: $name\nEmail: $email\n\nMensagem:\n$message";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha ao enviar a mensagem.";
    }
} else {
    echo "Método de solicitação inválido.";
}
?>
