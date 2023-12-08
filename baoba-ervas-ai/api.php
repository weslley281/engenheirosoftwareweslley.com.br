<?php

// Função para processar a pergunta e retornar uma resposta
function responderPergunta($pergunta)
{
    $resposta = "Desculpe, não entendi a pergunta.";

    // Verifica o conteúdo da pergunta e fornece respostas apropriadas
    if (stripos($pergunta, 'horário') !== false) {
        $resposta = "Estamos abertos de segunda a sexta, das 9h às 18h, e aos sábados, das 10h às 15h.";
    } elseif (stripos($pergunta, 'produtos') !== false) {
        $resposta = "Oferecemos uma variedade de produtos naturais, incluindo suplementos, alimentos orgânicos e produtos de cuidados pessoais.";
    } elseif (stripos($pergunta, 'pedido online') !== false) {
        $resposta = "Sim, aceitamos pedidos online através do nosso site. Você pode fazer seu pedido e escolher a opção de entrega.";
    } elseif (stripos($pergunta, 'localização') !== false) {
        $resposta = "Estamos localizados na Rua Principal, 123, Cidade X. Venha nos visitar!";
    }

    return $resposta;
}

// Verifica se a solicitação é do tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados da solicitação POST
    $dadosRecebidos = json_decode(file_get_contents('php://input'), true);

    // Verifica se a chave 'pergunta' está presente nos dados recebidos
    if (isset($dadosRecebidos['pergunta'])) {
        // Processa a pergunta e obtém a resposta
        $respostaDoChatbot = responderPergunta($dadosRecebidos['pergunta']);

        // Envia a resposta como JSON
        header('Content-Type: application/json');
        echo json_encode(['resposta' => $respostaDoChatbot]);
    } else {
        // Se a chave 'pergunta' não estiver presente, retorna um erro
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(['erro' => 'A chave "pergunta" não foi fornecida']);
    }
} else {
    // Se a solicitação não for do tipo POST, retorna um erro
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['erro' => 'Método não permitido. Use o método POST.']);
}
