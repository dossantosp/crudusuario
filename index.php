<?php 
    include('conexao.php');
$sql = "select * from tblteste";
$qry = mysqli_query($conn,$sql);
/*executa um debug na variavel de resultado $qry

echo "<pre>";
var_dump($qry);
echo "</pre>";
die();

*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuário</title>
</head>
<body>
    <h1>Usuários</h1>
    <hr>
    <a href="cadastrar.php">Cadastrar novo</a> | 
    <a href="aumentaridade.php">Aumentar idade</a>
    <table border='1'>
        
        <tr>
			<th class="text-center">ID</th>
			<th class="text-center">Nome</th>
			<th class="text-center">Idade</th>
			</tr>
            

<?php 

    while ($linha=mysqli_fetch_array($qry)){
        
        echo "<tr>";

         echo "<td>".$linha['idteste']."</td>";
         echo "<td>".$linha['nome']."</td>";
         echo "<td>".$linha['idade']."</td>";
        echo "
            <td>
            <a href='editar.php?idteste={$linha["idteste"]}'>Editar</a> | 
            <a href='excluir.php?idteste={$linha["idteste"]}'>Excluir</a>
            </td>
        ";

        echo "</tr>";
    }

?>
    
    </table>
</body>
</html>