<?php
    $action = "inserir";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" >
</head>
<body>
    <?php    require_once "menu.php";?>
    
    <h1>Bem-vindo(a) a nossa Loja - Encomendas</h1>
    
    <form method="POST" action="salvarEncomendas.php?<?php echo $action; ?>">
        <label for="txtNome">Nome do Cliente:</label>
        <input type="text" name="txtNome" required />
        <br>
        <label for="txtEndereco">Endereço:</label>
        <input type="text" name="txtEndereco" required />
        <br>
        <label for="txtEncomenda">Encomenda:</label><br>
        <textarea name="txtEncomenda" rows="9" cols="30" required></textarea>
        <br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>
    
    <hr>
    
    <table id="tbl_encomendas">
        <tr>
            <th>Nome do Cliente</th>
            <th>Endereço</th>
            <th>Encomenda</th>
        </tr>
        
        <?php
        include 'clsConexao.php';
        $query = "SELECT * FROM encomendas";
        $result = Conexao::consultar( $query );

            while( $cat = mysqli_fetch_array($result)){
                echo '<tr>'; 
                echo '    <td>'.$cat['id'].'</td>';
                echo '    <td>'.$cat['nomeCliente'].'</td>';
                echo '    <td>'.$cat['endereco'].'</td>';
                echo '    <td>'.$cat['encomenda'].'</td>';
                echo '</tr>';
            }
        ?>
    </table>
    
</body>
</html>