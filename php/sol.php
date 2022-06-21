<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/iframe2.css">
    <title>Document</title>
</head>
<body>
    
<select id="signo" onchange="mostrarDescricao(value)">
<option value="selecione"> Selecione </option> 
    <option value="aries"> Áries </option>  
    <option value="touro"> Touro </option> 
    <option value="gemeos"> Gêmeos </option> 
    <option value="cancer"> Câncer </option> 
    <option value="leao"> Leão </option> 
    <option value="virgem"> Virgem </option> 
    <option value="libra"> Libra </option> 
    <option value="escorpiao"> Escorpião </option> 
    <option value="sagitario"> Sagitário </option> 
    <option value="capricornio"> Capricórnio </option>
    <option value="aquario"> Aquário </option> 
    <option value="peixes"> Peixes </option> 
</select>

 <div id="descricao"></div>

<script>   
function mostrarDescricao(a) {
	var element2 = document.getElementById("descricao");

/*
* mostrarFoto() está recebendo uma variavel, 'a'
* que nos dirá o que o usuário escolheu
*/


    if (a == "aries") {
		element2.innerHTML = "<ul><li>Signo de fogo.</li><li>Geralmente são extremamente honestos e sinceros.</li><li>Os influenciados por esta energia costumam não ter medo de encarar novos desafios e estão sempre à procura de coisas que os diferencie dos demais.</li></ul>";
	}

    if (a == "touro") {
		element2.innerHTML = "<ul><li>Signo de terra.</li><li>São sempre muito amáveis e leais.</li> <li>Bastante sociáveis, costumam ser pessoas que estão sempre com muitos amigos à sua volta.</li> <li>Pacientes, sabem esperar a hora certa para agir ou tomar decisões.</li></ul>";
	}

    
    if (a == "gemeos") {
		element2.innerHTML = "<ul><li>Signo de Ar.</li><li>Muito inteligentes e extremamente sociáveis.</li><li>Têm grande capacidade de aprender coisas novas.</li><li>Sentem muito prazer em conhecer algo novo e estão sempre em busca de novas experiências e novas amizades.</li></ul>";
	}

    
    if (a == "cancer") {
		element2.innerHTML = "<ul><li>Signo de água.</li><li>Costumam ser muito ligados ao passado. Com forte ligação à família e as pessoas amadas, adoram relembrar bons momentos vividos na infância.</li> <li>A segurança emocional é o grande defeito dos nascidos neste signo.</li><li>Sua boa memória merece destaque.</li></ul>";
	}

    
    if (a == "leao") {
		element2.innerHTML = "<ul><li>Signo de fogo.</li><li>Orgulhosos por natureza.</li><li>Os nascidos com o sol em Leão são ainda mais egocêntricos e adoram ser o centro das atenções.</li><li>Costumam ser indivíduos muito apaixonados pela vida e que adoram ter muitas pessoas a sua volta.</li></ul>";
	}

    
    if (a == "virgem") {
		element2.innerHTML = "<ul><li>Signo de terra.</li><li>Costumam ser pessoas bastante tímidas e reservadas.</li><li>Adoram os bastidores e evitam ao máximo se tornar o centro das atenções.</li><li>Por serem pessoas muito analíticas, algumas vezes são vistos como muito críticos, o que pode incomodar um pouco.</li></ul>";
	}

    
    if (a == "libra") {
		element2.innerHTML = "<ul><li>Signo de ar.</li><li>São extremamente harmônicos, seja nos relacionamentos pessoais, amorosos ou profissionais.</li> <li>Sempre procurando evitar brigas e discussões.</li><li>São amantes das coisas boas e das relações leais e duradouras.</li></ul>";
	}

    
    if (a == "escorpiao") {
		element2.innerHTML = "<ul><li>Signo de água.</li><li>Costumam ser reservados e bastante cautelosos. Esse excesso de cautela faz com que tenham dificuldade em confiar nas pessoas.</li><li> Possuem forte intuição e acreditam nela com muita credibilidade.</li></ul>";
	}

    
    if (a == "sagitario") {
		element2.innerHTML = "<ul><li>Signo de fogo.</li><li>Aventureiros, gostam de viajar.</li> <li>Sempre em busca de novidades, movimento e mudança.</li><li>Odeiam rotina e tudo que possa parecer demasiadamente formal.</li></ul>";
	}

    
    if (a == "capricornio") {
		element2.innerHTML = "<ul><li>Signo de terra.</li><li>Muito sérios e reservados.</li><li>Colocam sempre o trabalho em primeiro lugar.</li><li>Muito preocupados e cautelosos.</li><li>Costumam não se expor e não deixar que as pessoas se envolvam muito em sua vida pessoal.</li></ul>";
	}

    
    if (a == "aquario") {
		element2.innerHTML = "<ul><li>Signo de ar.</li><li>Independentes.</li><li>Sempre em busca de novidades, gostam de levar a vida de maneira autêntica e original.</li><li>Adoram conviver em sociedade e respeitam muito as pessoas à sua volta.</li></ul>";
	}

	else if (a == "peixes") {
		element2.innerHTML = "<ul><li>Signo de água.</li><li>Intuitivos e sensíveis.</li><li>Costumam levar a vida de maneira leve e objetiva, valorizando o simples e o casual.</li><li>São extremamente criativos, ligados à natureza e coisas não materiais.</li></ul>.";
	}
}
</script>

</body>
</html>