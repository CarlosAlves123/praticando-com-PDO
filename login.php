<?php
include 'conexaow.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'], $_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
      
        // Query SQL para inserir o login na tabela tb_login
        $queryLogin = "INSERT INTO tb_login (email, senha) VALUES (:email, :senha)";
        $stmtLogin = $conexao->prepare($queryLogin);
        $stmtLogin->bindParam(':email', $email);
        $stmtLogin->bindParam(':senha', $senha);

        try {
            $stmtLogin->execute();
            // Redirecionamento após o registro
            header("Location: web.html");
            exit();
        } catch (PDOException $e) {
            echo "Erro ao fazer login: " . $e->getMessage();
        }
    } else {
        echo "Certifique-se de preencher todos os campos do formulário de login.";
    }
}
?>
