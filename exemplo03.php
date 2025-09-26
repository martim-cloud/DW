<?php
if (isset($_POST['nome']) && isset($_POST['idade'])) {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    echo "Nome: " . htmlspecialchars($nome) . "<br>";
    echo "Idade: " . htmlspecialchars($idade) . "<br>";
} else {
    echo "Campos não definidos.";
}
?>
