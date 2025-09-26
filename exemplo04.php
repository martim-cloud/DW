<?php
if (isset($_GET['nome']) && isset($_GET['idade'])) {
    $nome = $_GET['nome'];
    $idade =  $_GET['idade'];

    echo "Dados recebidos via GET <br>";

} else {
    echo "Por favor, preencha o formulário.";
}
?>