<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $valor = $_POST["valor"];

    // Criando o corpo do email
    $to = "debora.nagai9@gmail.com"; // Substitua pelo seu endereço de email
    $subject = "Nova Doação de Dinheiro";

    $message = "Nome: $nome\n";
    $message .= "E-mail: $email\n";
    $message .= "Valor da Doação: R$ $valor\n";

    // Enviando o email
    if (mail($to, $subject, $message)) {
        echo "<p>Obrigado por sua generosa doação, $nome! Seus dados foram enviados.</p>";
    } else {
        echo "<p>Erro ao processar a doação. Por favor, tente novamente mais tarde.</p>";
    }
} else {
    echo "<p>Erro: O formulário não foi enviado corretamente.</p>";
}
?>