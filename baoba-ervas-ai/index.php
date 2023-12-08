<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <!-- Adicione o link para o Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Adicione estilos personalizados, se necessário */
        body {
            padding: 20px;
        }

        #chat-container {
            max-width: 600px;
            margin: auto;
        }

        #chat-messages {
            height: 300px;
            overflow-y: scroll;
            border: 1px solid #ccc;
            padding: 10px;
        }

        #user-input {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div id="chat-container">
        <div id="chat-messages" class="mb-3"></div>
        <div id="user-input" class="input-group">
            <input type="text" id="user-message" class="form-control" placeholder="Digite sua pergunta...">
            <button id="send-button" class="btn btn-primary">Enviar</button>
        </div>
    </div>

    <!-- Adicione o link para o Bootstrap JS e o jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            // Função para adicionar mensagens ao contêiner de mensagens
            function addMessage(message, isUser) {
                var messageClass = isUser ? 'text-end' : 'text-start';
                var messageElement = $('<div class="mb-2 ' + messageClass + '">' + message + '</div>');
                $('#chat-messages').append(messageElement);
            }

            // Função para processar a pergunta do usuário e exibir a resposta do chatbot
            function processQuestion() {
                var userQuestion = $('#user-message').val();

                // Adiciona a pergunta do usuário ao contêiner de mensagens
                addMessage(userQuestion, true);

                // Envia a pergunta para o servidor PHP
                $.ajax({
                    type: 'POST',
                    url: 'seu-script.php', // Substitua 'seu-script.php' pelo nome real do seu script PHP
                    contentType: 'application/json',
                    data: JSON.stringify({ pergunta: userQuestion }),
                    success: function (response) {
                        // Adiciona a resposta do chatbot ao contêiner de mensagens
                        addMessage(response.resposta, false);
                    },
                    error: function (error) {
                        console.error('Erro ao processar a pergunta:', error);
                        addMessage('Desculpe, ocorreu um erro ao processar a pergunta.', false);
                    }
                });

                // Limpa o campo de entrada do usuário
                $('#user-message').val('');
            }

            // Configura o evento de clique para o botão de envio
            $('#send-button').on('click', function () {
                processQuestion();
            });

            // Configura o evento de pressionar Enter para o campo de entrada do usuário
            $('#user-message').on('keypress', function (e) {
                if (e.which === 13) {
                    processQuestion();
                }
            });
        });
    </script>
</body>
</html>
