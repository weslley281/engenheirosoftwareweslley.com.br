<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];

    if (empty($nome) || empty($email) || empty($telefone) || empty($mensagem)) {
        echo "Preencha todos os campos.";
    } else {
        $destino = "weslleyhenrique800@gmail.com";
        $assunto = "Contato do site Engenheiro Weslley";
        $mensagem_email = "Nome: $nome\n";
        $mensagem_email .= "Email: $email\n";
        $mensagem_email .= "Telefone: $telefone\n";
        $mensagem_email .= "Mensagem: $mensagem";

        $headers = "From: $email\n";
        $headers .= "Reply-To: $email";

        if (mail($destino, $assunto, $mensagem_email, $headers)) {
            echo "Mensagem enviada com sucesso.";
        } else {
            echo "Erro ao enviar a mensagem.";
        }
    }
}
