<?php
require_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome = isset($_POST['nome']) ? $_POST['Nome'] : '';

$email = isset($_POST['Email']) ? $_POST['Email'] : '';

$cpf = isset($_POST['Cpf']) ? $_POST['Cpf'] : '';

$contato = isset($_POST['contato']) ? $_POST['Contato'] : '';

$sql = "UPDATE dados_loja SET Nome_Proprietario='$nome', Email_Proprietario='$email', CPF_Proprietario='$cpf', Telefone_Proprietario='$contato' WHERE id=1";

if ($conexao->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso";
} else {
    echo "Erro ao executar a consulta: " . $sql . "<br>" . $conexao->error;
}
echo $contato . "<br>";
}
?>