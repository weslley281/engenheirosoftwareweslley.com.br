<?php

function responderPergunta(string $pergunta): string
{
    $resposta = "Desculpe, não encontrei informações para essa pergunta.";

    if (stripos($pergunta, 'horário') !== false || stripos($pergunta, 'horario') !== false || stripos($pergunta, 'horários') !== false) {
        $resposta = "";
        if (stripos($pergunta, 'varzea') !== false || stripos($pergunta, 'várzea') !== false) {
            $resposta = "Estamos abertos de segunda a sexta, das 8h às 18h, e aos sábados, das 8h às 14h.";
        } elseif (stripos($pergunta, 'cuiaba') !== false || stripos($pergunta, 'cuiabá') !== false || stripos($pergunta, 'cuiabá') !== false || stripos($pergunta, 'centro') !== false) {
            $resposta = "Estamos abertos de segunda a sexta, das 8h às 18h, e aos sábados, das 8h às 14h.";
        } elseif (stripos($pergunta, 'porto') !== false) {
            $resposta = "Estamos abertos de segunda a sexta, das 8h às 18h, e aos sábados, das 8h às 14h.";
        } else {
            $resposta = "Estamos abertos de segunda a sexta, das 8h às 18h, e aos sábados, das 8h às 14h. Porém no sabado a loja de Várzea Grande está aberta das 8h às 18h";
        }
        $resposta .= " Venha nos visitar!";
    } elseif (stripos($pergunta, 'produtos') !== false || stripos($pergunta, 'produto') !== false) {
        $resposta = "Oferecemos uma variedade de produtos naturais, incluindo suplementos, alimentos orgânicos e produtos de cuidados pessoais.";
    } elseif (stripos($pergunta, 'pedido') !== false) {
        $resposta = "Sim, aceitamos pedidos online através do nosso whatsapp. Você pode fazer seu pedido através do nosso catalogo e escolher a opção de entrega.";
    } elseif (stripos($pergunta, 'localização') !== false || stripos($pergunta, 'localizacao') !== false || stripos($pergunta, 'Onde') !== false || stripos($pergunta, 'loja') !== false || stripos($pergunta, 'lojas') !== false) {
        if (stripos($pergunta, 'varzea') !== false || stripos($pergunta, 'várzea') !== false) {
            $resposta = "Estamos localizados na Avenida Couto Magalhães.";
        } elseif (stripos($pergunta, 'cuiaba') !== false || stripos($pergunta, 'cuiabá') !== false || stripos($pergunta, 'cuiabá') !== false || stripos($pergunta, 'centro') !== false) {
            $resposta = "Rua Joaquin Murtinho, 319, Cidade Cuiabá.";
        } elseif (stripos($pergunta, 'porto') !== false) {
            $resposta = "Rua Feliciano Galdino, 585, Cidade Cuiabá.";
        } else {
            $resposta = "Estamos localizados na Avenida Couto Magalhães, 1776, Cidade Várzea Grande | \nRua Feliciano Galdino, 585, Cidade Cuiabá | \nRua Joaquin Murtinho, 319, Cidade Cuiabá.";
        }
        $resposta .= " Venha nos visitar!";
    }

    return $resposta;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dadosRecebidos = json_decode(file_get_contents('php://input'), true);

    if (isset($dadosRecebidos['pergunta'])) {
        $respostaDoChatbot = responderPergunta($dadosRecebidos['pergunta']);

        header('Content-Type: application/json');
        echo json_encode(['resposta' => $respostaDoChatbot]);
    } else {
        header('HTTP/1.1 400 Bad Request');
        echo json_encode(['erro' => 'A chave "pergunta" não foi fornecida']);
    }
} else {
    header('HTTP/1.1 405 Method Not Allowed');
    echo json_encode(['erro' => 'Método não permitido. Use o método POST.']);
}
