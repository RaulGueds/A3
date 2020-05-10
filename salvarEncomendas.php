<?php
$nomeCliente = $_POST['txtNome'];
$endereco = $_POST['txtEndereco'];
$encomenda = $_POST['txtEncomenda'];

include "clsConexao.php";

if( isset( $_REQUEST['inserir']) ){
    $query = "INSERT INTO encomendas (nomeCliente, endereco, encomenda) VALUES ( '$nomeCliente', '$endereco', '$encomenda' )";
    Conexao::executar( $query );
    header("Location: encomendas.php");
}
?>