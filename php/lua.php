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

    <option value=""> Selecione </option>
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
		element2.innerHTML = "<ul><li>Competitivos.</li><li>São naturalmente mais propensos a reações precipitadas, esquentados e dominadores.</li> <li>Demonstram na hora o que estão sentindo e colocam para fora qualquer traço de raiva.</li> <li>Impulsivos e explosivos, têm a necessidade de estar sempre fazendo algo, pois são muito ativos.</li><li>Devem aprender a desenvolver a paciência, a lidar com a frustração e a dosar certa tendência ao egocentrismo.</li></ul>";
	}

    if (a == "touro") {
		element2.innerHTML = "<ul><li>Seus sentimentos podem ser processados de uma forma lenta, porém costumam ser muito estáveis e difíceis de dissolver.</li><li>Amigos fiéis e conseguem ser calmos e pragmáticos em momentos críticos.</li><li>Geralmente prezam por estar em um clima mais familiar, calmo e agradável.</li> <li>São aquelas pessoas geralmente consideradas mais realistas e pés-no-chão, que precisam de segurança e não gostam muito de muitas mudanças a todo instante, sendo propensas a criar raízes.</li> <li>Essas pessoas também podem ser possessivas e o ciúme delas tende a ser muito marcante.</li></ul>";
	}

    if (a == "gemeos") {
		element2.innerHTML = "<ul><li>Racionais, curiosos, muito comunicativos e abertos, mas não demonstram os sentimentos, preferindo racionalizá-los.</li> <li>Podem ser instáveis e ter relacionamentos inconstantes.</li> <li>Esbanjam senso de humor, simpatia e adoram a sensação de liberdade.</li> <li>Sentem a vida com leveza e de forma descontraída.</li> <li>Gostam de aprender e de explorar sua curiosidade.</li> <li>Conversar é o tipo de coisa que traz paz ao seu coração, sobretudo se for sobre assuntos engraçados.</li></ul>";
	}

    if (a == "cancer") {
		element2.innerHTML = "<ul><li>São pessoas muito tranquilas e amáveis.</li> <li>Por mais que sintam tudo com intensidade, lidam bem com as emoções e se guiam por elas.</li> <li>Também se dedicam a cuidar da família e das pessoas de que gostam.</li> <li>A Lua em Câncer tem uma influência muito forte na personalidade, pois é regente deste signo.</li></ul>";
	}

    if (a == "leao") {
		element2.innerHTML = "<ul><li>Confiantes.</li> <li>Costumam se expressar de maneira franca, mas não gostam de receber críticas e possuem um forte orgulho.</li> <li>Também demonstram uma necessidade de atenção constante.</li> <li>São extrovertidos, embora às vezes se tornem dramáticos e dominadores.</li> <li>Sabem divertir e entreter as pessoas, criando situações agradáveis e alegres.</li></p>";
	}

    if (a == "virgem") {
		element2.innerHTML = "<ul><li>Seletividade e critério.</li><li>São pessoas reservadas emocionalmente e não costumam se abrir com facilidade.</li> <li>Racionais e analíticos, têm tendência a desenvolver uma forte autocrítica, o que pode desencadear baixa autoestima.</li> <li>Demonstram afeição com quem gostam expressando um comportamento prestativo e útil aos outros.</li> <li>É um signo mutável do elemento Terra, regido por Mercúrio. Sendo assim, a lua posicionada neste signo se expressa emocionalmente de forma extrovertida, curiosa e analítica.</li> </ul>";
	}

    if (a == "libra") {
		element2.innerHTML = "<ul><li>Diplomáticos.</li><li>Passam longe de brigas e odeiam ter que tomar partido nestes casos.</li><li>Companheiros e sociáveis, sentem necessidade de estar sempre em contato com os outros.</li><li>Valorizam os relacionamentos, mas odeiam ser tratados com agressividade e falta de educação.</li><li>Talento natural para se comunicar, o que pode beneficiar suas conquistas amorosas, já que fascina os outros com seu jeito calmo e educado.</li></ul>";
	}

    if (a == "escorpiao") {
		element2.innerHTML = "<ul><li>Bastante astuto, saca tudo o que acontece no ambiente.</li> <li>Consegue passar despercebido, enquanto entende instintivamente qual é a de cada pessoa no lugar em que circula.</li><li>Quando está tranquilo, a pessoa com Lua em Escorpião se adapta fácil às mudanças da vida, pois sabe que tudo tem começo, meio e fim.</li></ul>";
	}

    if (a == "sagitario") {
		element2.innerHTML = "<ul><li>Entusiasmados e otimistas, veem o mundo com olhos esperançosos e sonham em desbravá-lo.</li><li>Geralmente são exagerados em suas emoções e não escondem o que estão sentindo.</li><li>Por querer ser muito livre, podem ser uma pessoa irresponsável e que não honra os compromissos.</li><li>São independentes e não convivem bem com quem tenta controlar seus passos.</li><li>Precisam de espaço e liberdade.</li></ul>";
	}

    if (a == "capricornio") {
		element2.innerHTML = "<ul><li>Fechados, essas pessoas não gostam de demonstrar o que estão sentindo ou pensando.</li> <li>Focados em seus objetivos, batalham muito por segurança material e estabilidade, já que são muito ambiciosos.</li> <li>Quando gostam de alguém, demonstram dedicação e lealdade.</li><li>Essa é a Lua das pessoas mais sérias e responsáveis do zodíaco.</li><li>Quem tem essa Lua tem um ar de maturidade desde cedo.</li><li>Parece ser frio e intolerante com erros, mas por trás dessa dureza existe muito amor.</li></ul>";
	}

    if (a == "aquario") {
		element2.innerHTML = "<ul><li>Pessoas com a Lua em Aquário possuem uma forte criatividade e sentem muita vontade de mudar o mundo.</li><li>São justos, preocupam-se com igualdade, inclusão social e podem se engajar em movimentos sociais e humanitários, porém, não gostam de expor seus sentimentos e podem parecer indiferentes nas relações pessoais.</li><li>Adoram conhecer novidades, pessoas, lugares, experiências... quanto mais diferente e inesperado, melhor.</li><li>Dizem que essa Lua não fica com ninguém por muito tempo, mas isso não é necessariamente uma regra, afinal, regra é o que eles menos seguem.</li></ul>";
	}

	else if (a == "peixes") {
		element2.innerHTML = "<ul><li>Costumam ser sensíveis e se magoam com facilidade.</li> <li>Captam e absorvem as energias dos ambientes e de quem está ao redor.</li><li>Sempre prontos para ajudar quem precisa de apoio</li><li>São pessoas muito altruístas, mas não lidam de maneira objetiva com seus próprios sentimentos.</li> <li>Podem fazer drama e tempestade em copo d'água.</li> <li>Percebem a vida através da conexão com tudo que os cerca.</li><li>Por serem muito sensíveis, conseguem se colocar no lugar do outro.</li> <li>Sua imaginação vai longe, ou seja, fantasiam bastante!</li></ul>";
	}
}
</script>


</body>
</html>