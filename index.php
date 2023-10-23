<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $idade = $_POST["idade"];
        $mensagem = $_POST["mensagem"];
        $escolha = $_POST["escolha"];
        $opcao = $_POST["grupo_opcoes"];

         echo "<p><strong>Nome:</strong> $nome</p>";
         echo "<p><strong>Email:</strong> $email</p>";
         echo "<p><strong>Idade:</strong> $idade</p>";
         echo "<p><strong>Mensagem:</strong> $mensagem</p>";
         echo "<p><strong>Escolha:</strong> $escolha</p>";
         echo "<p><strong>Opção escolhida:</strong> $opcao</p>";
         echo "Desenvolvido por Cristiano Henrique Santana de Souza - Matricula (24009557)";
        

    } else {
        echo "<p>O formulário não foi enviado corretamente.</p>";
    }
    ?>