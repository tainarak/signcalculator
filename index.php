

<?php

// usamos pra ver se tinha erros no php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//lista de signos, contém um array com suas devidas "propriedades": nome, elemento, paraíso e inferno astral; além disso tem um "sub array" que contém uma sub lista com os signos compatíveis de cada um

$listaDeSignos = [
  'aries' => [
    'nome' => 'Áries',
    'elemento' => 'Fogo',
    'paraiso' => 'leao',
    'inferno' => 'peixes',
    'signosCompativeis' => [
      'libra',
      'gemeos',
      'aquario',
    ]
    ],

  'touro' => [
    'nome' => 'Touro',
    'elemento' => 'Terra',
    'paraiso' => 'virgem',
    'inferno' => 'aries',
    'signosCompativeis' => [
      'cancer',
      'escorpiao',
      'peixes',
    ]
    ],

  'gemeos' => [
    'nome' => 'Gêmeos',
    'elemento' => 'Ar',
    'paraiso' => 'libra',
    'inferno' => 'touro',
    'signosCompativeis' => [
      'aries',
      'leao',
      'sagitario',
    ]
    ],

  'cancer' => [
    'nome' => 'Câncer',
    'elemento' => 'Água',
    'paraiso' => 'escorpiao',
    'inferno' => 'gemeos',
    'signosCompativeis' => [
      'touro',
      'virgem',
      'capricornio',
    ]
    ],

  'leao' => [
    'nome' => 'Leão',
    'elemento' => 'Fogo',
    'paraiso' => 'sagitario',
    'inferno' => 'cancer',
    'signosCompativeis' => [
      'gemeos',
      'libra',
      'aquario',
    ]
    ],

  'virgem' => [
    'nome' => 'Virgem',
    'elemento' => 'Terra',
    'paraiso' => 'capricornio',
    'inferno' => 'leao',
    'signosCompativeis' => [
      'cancer',
      'escorpiao',
      'peixes',
    ]
    ],

  'libra' => [
    'nome' => 'Libra',
    'elemento' => 'Ar',
    'paraiso' => 'aquario',
    'inferno' => 'virgem',
    'signosCompativeis' => [
      'aries',
      'leao',
      'sagitario',
    ]
    ],

  'escorpiao' => [
    'nome' => 'Escorpião',
    'elemento' => 'Água',
    'paraiso' => 'peixes',
    'inferno' => 'libra',
    'signosCompativeis' => [
      'touro',
      'virgem',
      'capricornio',
    ]
    ],

  'sagitario' => [
    'nome' => 'Sagitário',
    'elemento' => 'Fogo',
    'paraiso' => 'aries',
    'inferno' => 'escorpiao',
    'signosCompativeis' => [
      'gemeos',
      'libra',
      'aquario',
    ]
    ],

  'capricornio' => [
    'nome' => 'Capricórnio',
    'elemento' => 'Terra',
    'paraiso' => 'touro',
    'inferno' => 'sagitario',
    'signosCompativeis' => [
      'cancer',
      'escorpiao',
      'peixes',
    ]
    ],

  'aquario' => [
    'nome' => 'Aquário',
    'elemento' => 'Ar',
    'paraiso' => 'gemeos',
    'inferno' => 'capricornio',
    'signosCompativeis' => [
      'aries',
      'leao',
      'sagitario',
    ]
    ],

  'peixes' => [
    'nome' => 'Peixes',
    'elemento' => 'Água',
    'paraiso' => 'cancer',
    'inferno' => 'aquario',
    'signosCompativeis' => [
      'touro',
      'virgem',
      'capricornio',
    ]
    ],
];


if (isset($_GET["signo1"])&&isset($_GET["signo2"])) {

    $signo1 = $_GET["signo1"];
    $signo2 = $_GET["signo2"];
    
    $compatibilidade = false;
    
      // se signo2 é um dos signos compatíveis do signo1 ou se signo1 é um dos signos compatíveis do signo2
    if ($listaDeSignos[$signo1]["paraiso"] == $signo2){
    
      //CORAÇÃO PREENCHIDO 4/4
      $compatibilidade = '';
    }
  
    // se dentro da lista de signos o elemento do signo 1 é igual ao elemento do signo 2
    else if ($listaDeSignos[$signo1]["elemento"] == $listaDeSignos[$signo2]["elemento"]) {
    
      // CORAÇÃO PREENCHIDO 3/4
     $compatibilidade = 'opcao3';
    }
  
    // esse aqui do inarray é o mais complexo, ele diz que tem um array complexo que é o signoscompativeis, aí ele pergunta se o signo1 na sua lista de signos está o signo 2 na lista de signos compatíveis OU se dentro do array o signo 2 dentro da lista de signos contém o signo 1 na sua lista de signos compatíveis
    else if (in_array($signo1, $listaDeSignos[$signo2]["signosCompativeis"]) || in_array($signo2, $listaDeSignos[$signo1]["signosCompativeis"])) {
    
      //CORAÇÃO 2/4
      $compatibilidade = 'opcao2';
    }
    
    // se dentro da lista do signo 1 o inferno astral dele é o signo 2 ou se dentro da lista de signos o signo 2 tem como inferno astral o signo 1
    else if ($listaDeSignos[$signo1]["inferno"] == $signo2 || $listaDeSignos[$signo2]["inferno"] == $signo1) {
    
      //CORAÇÃO 0/4
      $compatibilidade ='opcao0';
    }
    
    else {
    
      //coração 1/4 fora das listas, qualquer outra opção cai aqui
      $compatibilidade ='opcao1';
    }
    
  }

?>

<!-- chamamos o html aqui no php pra ficar tudo na mesma página e não termos a resposta numa página diferente-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/tcc.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <title>Compatibilidade de Signos</title>
</head>
<body>

<header>
<div class="container-logo">
<div class="logo-imagem"></div>
<div class="logo-texto">
    <h1>S2</h1>
</div> <!--logo-texto-->
</div><!--containerlogo-->

<div class="menu">
<ul>
    <li><a href="index.php">Calculadora</a></li>
    <li><a href="html/sol.html">Signo Solar</a></li>
    <li><a href="html/ascendente.html">Ascendente</a></li>
    <li><a href="html/lua.html">Signo Lunar</a></li>
    <li><a href="html/iframe.html">Mapa Astral</a></li>
</ul>
</div>
<!--menu-->
</header>
  
<!-- formulário, busca o get da própria página index pra gerar o resultado-->

<form class="formulario" method="get" action="index.php">	
<table>
  <tr>
    <td>

    <!-- busca na option se os valores do signo 1 foram devidamente selecionados e em forma de echo, busca se há um selected >> o que ocorre, pois o php executa antes do html e define essa propriedade pra ele -->
        <select name="signo1" onchange="mostrarFoto(value,1)">
        
          <option <?php if (isset($_GET["signo1"])==false){echo 'selected';} ?> disabled>Selecione</option>
          <option <?php if (isset($_GET["signo1"])&&$_GET["signo1"]=="aries"){echo 'selected';} ?> value="aries">Áries</option>
          <option <?php if (isset($_GET["signo1"])&&$_GET["signo1"]=="touro"){echo 'selected';} ?> value="touro">Touro</option>
          <option <?php if (isset($_GET["signo1"])&&$_GET["signo1"]=="gemeos"){echo 'selected';} ?> value="gemeos">Gêmeos</option>
          <option <?php if (isset($_GET["signo1"])&&$_GET["signo1"]=="cancer"){echo 'selected';} ?> value="cancer">Câncer</option>
          <option <?php if (isset($_GET["signo1"])&&$_GET["signo1"]=="leao"){echo 'selected';} ?> value="leao">Leão</option>
          <option <?php if (isset($_GET["signo1"])&&$_GET["signo1"]=="virgem"){echo 'selected';} ?> value="virgem">Virgem</option>
          <option <?php if (isset($_GET["signo1"])&&$_GET["signo1"]=="libra"){echo 'selected';} ?> value="libra">Libra</option>
          <option <?php if (isset($_GET["signo1"])&&$_GET["signo1"]=="escorpiao"){echo 'selected';} ?> value="escorpiao">Escorpião</option>
          <option <?php if (isset($_GET["signo1"])&&$_GET["signo1"]=="sagitario"){echo 'selected';} ?> value="sagitario">Sagitário</option>
          <option <?php if (isset($_GET["signo1"])&&$_GET["signo1"]=="capricornio"){echo 'selected';} ?> value="capricornio">Capricórnio</option>
          <option <?php if (isset($_GET["signo1"])&&$_GET["signo1"]=="aquario"){echo 'selected';} ?> value="aquario">Aquário</option>
          <option <?php if (isset($_GET["signo1"])&&$_GET["signo1"]=="peixes"){echo 'selected';} ?> value="peixes">Peixes</option>

  			</select>
              <!-- aqui cria uma div dando o id de imagem e descrição, que lá em cima ele usa o getbyID pra buscar a imagem e a descrição e o numerodoselect correspondente, pra poder selecionar 2x dentro da lista-->

              <div id="imagem1"></div>

    </td>

    <td>
        <!-- cria a classe, que é o chamamento do php, usando o get+isset em relação ao signo 1 e 2, dando echo na compatibilidade -->
        <img alt="coracaovermelho" src="vermelho.png" class="<?php if (isset($_GET["signo1"])&&isset($_GET["signo2"])) { echo $compatibilidade; }?>"/>

        <img alt="coracaobranco" src="branco.png"/>
    </td>

    <td>
        <select name="signo2" onchange="mostrarFoto(value,2)">

          <option <?php if (isset($_GET["signo2"])==false){echo 'selected';} ?> disabled>Selecione</option>
          <option <?php if (isset($_GET["signo2"])&&$_GET["signo2"]=="aries"){echo 'selected';} ?> value="aries">Áries</option>
          <option <?php if (isset($_GET["signo2"])&&$_GET["signo2"]=="touro"){echo 'selected';} ?> value="touro">Touro</option>
          <option <?php if (isset($_GET["signo2"])&&$_GET["signo2"]=="gemeos"){echo 'selected';} ?> value="gemeos">Gêmeos</option>
          <option <?php if (isset($_GET["signo2"])&&$_GET["signo2"]=="cancer"){echo 'selected';} ?> value="cancer">Câncer</option>
          <option <?php if (isset($_GET["signo2"])&&$_GET["signo2"]=="leao"){echo 'selected';} ?> value="leao">Leão</option>
          <option <?php if (isset($_GET["signo2"])&&$_GET["signo2"]=="virgem"){echo 'selected';} ?> value="virgem">Virgem</option>
          <option <?php if (isset($_GET["signo2"])&&$_GET["signo2"]=="libra"){echo 'selected';} ?> value="libra">Libra</option>
          <option <?php if (isset($_GET["signo2"])&&$_GET["signo2"]=="escorpiao"){echo 'selected';} ?> value="escorpiao">Escorpião</option>
          <option <?php if (isset($_GET["signo2"])&&$_GET["signo2"]=="sagitario"){echo 'selected';} ?> value="sagitario">Sagitário</option>
          <option <?php if (isset($_GET["signo2"])&&$_GET["signo2"]=="capricornio"){echo 'selected';} ?> value="capricornio">Capricórnio</option>
          <option <?php if (isset($_GET["signo2"])&&$_GET["signo2"]=="aquario"){echo 'selected';} ?> value="aquario">Aquário</option>
          <option <?php if (isset($_GET["signo2"])&&$_GET["signo2"]=="peixes"){echo 'selected';} ?> value="peixes">Peixes</option>
      
  			</select>
          
              <div id="imagem2"></div>

</td>
  </tr>
</table>

<br><br>
        
<div class= "botao">
        <input class="compatibilidade-botao" type="submit" value="Calcular">
  </div>
    </form>

<script> function mostrarFoto(signo, numeroDoSelect) {

    /* aqui chamamos a div do nosso html: "imagem" */

        var imagem = document.getElementById("imagem" + numeroDoSelect);
      
    /* mostrarFoto() está recebendo uma variavel 'signo', que nos dirá o que o usuário escolheu */

        if (signo == "aries") {
            imagem.innerHTML = "<br><img src='aries1.png'/>";
        }
    
        else if (signo == "touro") {
            imagem.innerHTML = "<br><img src='touro1.png'/>";
        }

        else if (signo == "gemeos") {
            imagem.innerHTML = "<br><img src='gemeos1.png'/>";
        }

        else if (signo == "cancer") {
            imagem.innerHTML = "<br><img src='cancer1.png'/>";
        }

        else if (signo == "leao") {
            imagem.innerHTML = "<br><img src='leao1.png'/>";
        }

        else if (signo == "virgem") {
            imagem.innerHTML = "<br><img src='virgem1.png'/>";
        }

        else if (signo == "libra") {
            imagem.innerHTML = "<br><img src='libra1.png'/>";
        }

        else if (signo == "escorpiao") {
            imagem.innerHTML = "<br><img src='escorpiao1.png'/>";
        }

        else if (signo == "sagitario") {
            imagem.innerHTML = "<br><img src='sagitario1.png'/>";
        }

        else if (signo == "capricornio") {
            imagem.innerHTML = "<br><img src='capricornio1.png'/>";
        }

        else if (signo == "aquario") {
            imagem.innerHTML = "<br><img src='aquario1.png'/>";
        }

        else if (signo == "peixes") {
            imagem.innerHTML = "<br><img src='peixes1.png'/>";
        }
    }

    /* busca o isset do signo1 e da um echo da função mostrarFoto usando o GET do signo 1, concatenando com as imagens obtidas */

    <?php 

    if(isset($_GET["signo1"])) {
      echo "mostrarFoto('".$_GET["signo1"]."',1);";
    }
    if(isset($_GET["signo2"])) {
      echo "mostrarFoto('".$_GET["signo2"]."',2);";
    }

    ?>
    </script>

</body>
</html> 

<!-- vermelho escurinho rgb(134,49,64), verde rgb(132,168,137), amarelo rgb (233,219,112) rosa alaranjado rgb(239,160,120) -->
