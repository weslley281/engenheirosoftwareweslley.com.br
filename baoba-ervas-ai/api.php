<?php

// function responderPergunta(string $pergunta): string
// {
//     $resposta = "Desculpe, não entendi a pergunta.";

//     if (stripos($pergunta, 'horário') !== false || stripos($pergunta, 'horario') !== false || stripos($pergunta, 'horarios') !== false || stripos($pergunta, 'horarios') !== false) {
//         $resposta = "Estamos abertos de segunda a sexta, das 8h às 18h, e aos sábados, das 8h às 14h.";
//     } elseif (stripos($pergunta, 'produtos') !== false || stripos($pergunta, 'produto') !== false) {
//         $resposta = "Oferecemos uma variedade de produtos naturais, incluindo suplementos, alimentos orgânicos e produtos de cuidados pessoais.";
//     } elseif (stripos($pergunta, 'pedido') !== false) {
//         $resposta = "Sim, aceitamos pedidos online através do nosso site. Você pode fazer seu pedido e escolher a opção de entrega.";
//     } elseif (stripos($pergunta, 'localização') !== false || stripos($pergunta, 'localizacao') !== false) {
//         $resposta = "Estamos localizados na Avenida Couto Magalhães, 1776, Cidade Várzea Grande | \nRua Feliciano Galdino, 585, Cidade Cuiabá | \nRua Joaquin Murtinho, 319, Cidade Cuiabá | \n. Venha nos visitar!";
//     }

//     return $resposta;
// }

function buscarInformacoesWikipedia(string $termo): string
{
    $url = "https://en.wikipedia.org/w/api.php?action=query&format=json&prop=extracts&titles=" . urlencode($termo);

    // Realiza a solicitação à API da Wikipedia
    $respostaJson = file_get_contents($url);

    // Decodifica a resposta JSON
    $respostaArray = json_decode($respostaJson, true);

    // Obtém o conteúdo do artigo (se disponível)
    $pagina = current($respostaArray['query']['pages']);
    $conteudo = isset($pagina['extract']) ? $pagina['extract'] : "Nenhuma informação encontrada.";

    return $conteudo;
}

function responderPergunta(string $pergunta): string
{
    $resposta = "Desculpe, não encontrei informações para essa pergunta.";

    if (stripos($pergunta, 'horário') !== false || stripos($pergunta, 'horario') !== false || stripos($pergunta, 'horários') !== false) {
        $resposta = "Estamos abertos de segunda a sexta, das 8h às 18h, e aos sábados, das 8h às 14h.";
    } elseif (stripos($pergunta, 'produtos') !== false || stripos($pergunta, 'produto') !== false) {
        $resposta = "Oferecemos uma variedade de produtos naturais, incluindo suplementos, alimentos orgânicos e produtos de cuidados pessoais.";
    } elseif (stripos($pergunta, 'pedido') !== false) {
        $resposta = "Sim, aceitamos pedidos online através do nosso site. Você pode fazer seu pedido e escolher a opção de entrega.";
    } elseif (stripos($pergunta, 'localização') !== false || stripos($pergunta, 'localizacao') !== false) {
        $resposta = "Estamos localizados na Avenida Couto Magalhães, 1776, Cidade Várzea Grande | \nRua Feliciano Galdino, 585, Cidade Cuiabá | \nRua Joaquin Murtinho, 319, Cidade Cuiabá | \n. Venha nos visitar!";
    } else {
        // Se a pergunta não se encaixa nas categorias anteriores, busca na Wikipedia
        $informacoesWikipedia = buscarInformacoesWikipedia($pergunta);

        // Se houver informações na Wikipedia, substitui a resposta padrão
        if ($informacoesWikipedia !== "Nenhuma informação encontrada.") {
            $resposta = $informacoesWikipedia;
        }
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
