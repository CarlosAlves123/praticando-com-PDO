<?php
include 'conexaow.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Verifica se o campo 'nome' não está vazio
        if (!empty($nome)) {
            // Query SQL para inserir o registro na tabela tb_registro
            $queryRegistro = "INSERT INTO tb_registro (nome, email, senha) VALUES (:nome, :email, :senha)";
            $stmtRegistro = $conexao->prepare($queryRegistro);
            $stmtRegistro->bindParam(':nome', $nome);
            $stmtRegistro->bindParam(':email', $email);
            $stmtRegistro->bindParam(':senha', $senha);

            try {
                $stmtRegistro->execute();
                // Redirecionamento após o registro
                header("Location: web.html");
                exit();
            } catch (PDOException $e) {
                echo "Erro ao registrar usuário: " . $e->getMessage();
            }
        } else {
            echo "O campo 'nome' não pode estar vazio.";
        }
    } else {
        echo "Certifique-se de preencher todos os campos do formulário de registro.";
    }
}
?>
