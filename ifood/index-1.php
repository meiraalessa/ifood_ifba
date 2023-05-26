<?php
	//Inclui o arquivo de dados, caso o arquivo não seja encontrado, um erro é dado e o programa tenta continuar sua execução.
	//include "dados.php";
	//REquer o arquivo de dados, caso o arquivo não seja encontrado é dado um erro fatal.
	require "dadospizza.php";
		//echo "<pre>";
		//print_r($funcionarios);
		//echo "<pre>";
		//die; //Para a execução do programa

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Pizzaria Delícia</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="estilo-.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nova+Flat&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <img src="imagens/imagen2.png">
  </header>

  <nav class="menu">
    <button>Home</button>
    <button onclick="sessao2()">Cardápio</button>
    <button onclick="sessao3()">Promoções</button>
    <button onclick="sessao4()">Sobre Nós</button>
  </nav>
  <main>
    <script>
    function sessao2() {
      var targetSection = document.getElementById('sessao2');
      targetSection.scrollIntoView({ behavior: 'smooth' });
    }
    function sessao3() {
      var targetSection = document.getElementById('sessao3');
      targetSection.scrollIntoView({ behavior: 'smooth' });
    }
    function sessao4() {
      var targetSection = document.getElementById('sessao4');
      targetSection.scrollIntoView({ behavior: 'smooth' });
    }
  </script>
    
  <section id="sessao1">
    <div class="img">
      <img src="imagens/imagen1.png">
    </div>
    <h1>A MELHOR PIZZARIA DO BRASIL!<br> VENHA CONFERIR!</h1>  
    <img src="imagens/imagen3.png">
  </section>
  <section id="sessao2"><br>
    <h2>Nossa Pizzas:</h2><br>
      <div class="container-itens">
      <?php
			foreach($pizzas as $i => $func){
		?>
		
          <article class="pizza">
          <h3><a href="pizza-detalhe.php?i=<?=$i?>">
                <?=$func["nome"]?>
            </a></h3>
            <a href="pizza-detalhe.php?i=<?=$i?>">
			      <img src="<?=$func['foto']?>" alt="<?=$func["nome"]?>">
			      </a>
            
          <p><strong><?=$func["copy"]?></strong></p>
          </article>
          <?php 
         }  
         ?>
      </div>
  </section>
  <section id="sessao3">
         <img src="imagens/imagen8.jpg">
  </section>
            <section id="sessao4"><br>
              <h2>Sobre Nós:</h2>
                  <p><strong>A história da empresa Pizza Hut remonta a 1958, quando dois irmãos, Dan  e  Frank Carney
                    abriram o primeiro restaurante em Wichita, Kansas, nos Estados Unidos.  Eles  pegaram  emprestado
                    600 dólares de sua mãe para iniciar o negócio.
                    <br><br>
                    Os irmãos Carney decidiram abrir uma pizzaria porque acreditavam que este tipo de comida tinha um
                    grande potencial de crescimento. Eles compraram equipamentos de segunda mão e alugaram um pequeno
                    prédio para começar a sua empreitada.
                    <br><br>
                    Inicialmente, eles chamaram a pizzaria de "Pizza Hut" porque o espaço disponível para o nome no letreiro era limitado. O termo "Hut" foi escolhido para transmitir uma sensação de acolhimento
                    e aconchego.
                    <br><br>
                    A Pizza Hut começou a ganhar popularidade rapidamente e atraiu clientes com seu modelo de serviço 
                    inovador. Eles introduziram a opção de comer no local ou fazer pedidos para viagem, algo pouco 
                    comum na época. Além disso, eles também ofereciam serviço de entrega.
                    <br><br>
                    Nos anos seguintes, a Pizza Hut expandiu-se através de franquias, permitindo que outros empreendedores 
                    abrissem restaurantes da marca em diferentes localidades. O modelo de franquias foi um sucesso e contribuiu 
                    significativamente para o rápido crescimento da empresa.
                    <br><br>
                    Em 1977, a Pizza Hut foi adquirida pela PepsiCo, uma grande empresa de bebidas e alimentos. Essa aquisição 
                    ajudou a Pizza Hut a expandir-se globalmente e a introduzir novos produtos no seu cardápio, além de aproveitar 
                    as sinergias com outras marcas da PepsiCo.
                    <br><br>
                    Ao longo dos anos, a Pizza Hut continuou a inovar em seu menu, lançando produtos como o "Pan Pizza" em 1980 e o 
                    "Stuffed Crust Pizza" em 1995. Essas inovações ajudaram a diferenciar a marca e mantê-la relevante no mercado 
                    altamente competitivo de pizzas.<br><br>
                    
                    No entanto, o mercado de fast-food e pizzas passou por mudanças significativas, com a ascensão de concorrentes e 
                    a demanda dos consumidores por opções mais saudáveis. Como resultado, a Pizza Hut enfrentou desafios e precisou 
                    adaptar-se às novas tendências.<br><br>
                    
                    A partir de 2021, a história da Pizza Hut continuou com o foco em novas estratégias de negócios, como a expansão 
                    das operações de entrega, o aprimoramento do serviço online e o investimento em tecnologia para melhorar a experiência 
                    do cliente.<br><br>
                    
                    Embora a história da Pizza Hut seja marcada por desafios e mudanças no mercado, a marca continua sendo uma das pizzarias 
                    mais reconhecidas e estabelecidas globalmente, com milhares de restaurantes em vários países ao redor do mundo.</strong></p>
            </section>

  </main>
  <footer>
    <p>&copy; 2023 Pizzaria Delícia. Todos os direitos reservados.</p>
  </footer>
</body>
</html>
