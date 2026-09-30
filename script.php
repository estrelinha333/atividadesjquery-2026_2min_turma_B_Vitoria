<?php
if (isset($_POST['nome'])) {
    if (isset($_POST['telefone'])) {
        if (isset($_POST['email'])) {
            
            $nome = htmlspecialchars($_POST['nome']);
            $telefone = htmlspecialchars($_POST['telefone']);
            $email = htmlspecialchars($_POST['email']);

            echo "Dados recebidos com sucesso!<br>";
            echo "Nome: " . $nome . "<br>";
            echo "Telefone: " . $telefone . "<br>";
            echo "E-mail: " . $email;
        }
    }
} else {
    echo "Nenhum dado foi enviado.";
}
?>