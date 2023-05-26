<?php
require "dadospizza.php";
    //caso o i não seja passado atravez do metodo get, irei mostrar uma mensagem de erro.
    if(!isset($_GET["i"])){
            //echo "Erro! Nenhum Funcionário foi passado!";
            //header location -> faz o redirecionamento para um outro arquivo
            header("location: index-1.php");
            die;//Para a aplicação neste ponto.
    }
    $indice = $_GET["i"];
    //Se o indice passado pelo usuário exixtir no meu array de funcionarios.
    if(isset($pizzas[$indice])){
    $f = $pizzas[$indice];
    }

?>
<!DOCTYPE html>
<html>
<head>
	<title>PIZZAS</title>
	<link rel="stylesheet" type="text/css" href="estilo-2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Flat&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <h1>Pizzas</h1>
    </header>
	<div class="container-detalhe">
    
		
		<div class="card">
        <?php
            if(isset($f)){
            ?>
			<img src="<?=$f["foto"]?>" alt="<?=$f["nome"]?>">
			<h3><?=$f["nome"]?></h3>
			<p class="p1">Preço: <?=number_format($f["preco"],2)?> </p>
			<p><?=$f["sobre"]?></p>
			<a href="index-1.php" class="link">Voltar</a>
            <?php
            }else{
                echo "<h3>Pizza não encontrada</h3>";
            }
            ?>
		</div>
			
		
	</div>
</body>
</html>
