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
		element2.innerHTML = "<ul><li>Autenticidade para viver.</li><li>Costumam ser bastante sinceros, seja por escolha ou, simplesmente, por não conseguirem fazer diferente.</li><li>Tendem a ser autodidatas, independentes e corajosos, chegando até a intimidar um pouco em um primeiro contato.</li><li>Para viver no equilíbrio, é preciso aprender a exercer a paciência, tanto com as pessoas, quanto com o tempo necessário para a conquista dos seus objetivos.</li></ul>";
	}

  if (a == "touro") {
		element2.innerHTML = "<ul><li>Segurança e bom gosto.</li><li>Dá a impressão de ser mais calmo e na paz. Pode até estar furioso, mas demora para demonstrar, chegando até a ter um pouco de dificuldade de expressar sentimentos difíceis.</li><li>Cauteloso com suas atitudes, por isso não sai explodindo e jogando tudo ao alto.</li><li>Tem um senso prático e gosta de entender o que deve ser feito antes de começar.</li><li>Tende a ser um pouco desconfiado, mas não se intromete onde não deve.</li></ul>";
	}

  if (a == "gemeos") {
		element2.innerHTML = "<ul><li>Curiosidade e interesses diversos.</li><li>Sempre consegue fazer uma piada, em qualquer situação, principalmente, nas mais inconvenientes, porque tem mais graça ainda.</li><li>Trazem de cara a sensação de serem pessoas simpáticas, mas costumam ser melhores em falar do que ouvir.</li><li>Não gostam de entrar em assuntos pesados ou muito emotivos, e sabem escapar de papos que não lhes convêm. Isso é bom para manter as coisas leves, mas é preciso fazer um esforço para se aprofundar também.</li></ul>";
  }

  if (a == "cancer") {
		element2.innerHTML = "<ul><li>Personalidade acolhedora e delicada.</li><li>Sinônimo de acolhimento e carinho, costuma abordar a vida desse jeito.</li><li>Tem um olhar mais doce e fofinho.</li><li>Precisam se sentir seguros e à vontade para irem atrás de suas conquistas, por isso, tendem a dar um toque familiar para os ambientes de trabalho, seja levando bolo ou transformando a equipe numa grande família.</li></ul>";
	}

  if (a == "leao") {
		element2.innerHTML = "<ul><li>Alegria e autenticidade.</li><li>Costumam chamar a atenção por onde circulam, querendo isso ou não.</li><li>Podem até ser daqueles que têm uma personalidade super discreta, mas mesmo assim não conseguem evitar os olhares de admiração. (Seria a culpa dos cabelos lindos?)</li><li>Têm um senso natural de liderança e conquistar a admiração das pessoas em sua volta é apenas uma questão de tempo.</li></ul>";
	}

  if (a == "virgem") {
		element2.innerHTML = "<ul><li>Habilidade para problemas e generosidade.</li><li>Tem a ver com organização, e não fogem desse clichê.</li><li>Costumam ter uma aparência limpa, perfeita e sem excessos, pois precisam de clareza e de tudo sob controle para entrarem em ação. Não significa que são de fato organizados, mas precisam dar uma arrumada na mesa antes de começar o trabalho.</li><li>Dificilmente saem do planejado e gostam de uma rotina para se sentirem bem.</li></ul>";
	}

  if (a == "libra") {
		element2.innerHTML = "<ul><li>Alma diplomática e carismática.</li><li>Buscam por harmonia e equilíbrio em suas escolhas.</li<li>Acha difícil tomar decisões.</li><li>Tudo tem um lado positivo e negativo e eles sempre conseguem ver tudo isso.</li><li>Costumam estar bem vestidos e com o look adequado para a ocasião.</li><li>Fogem do confronto, desde que assuntos importantes não sejam evitados e que suas preferências não fiquem sempre em segundo lugar.</li></ul>";
	}

  if (a == "escorpiao") {
		element2.innerHTML = "<ul><li>Autoproteção e lealdade.</li><li>Traz um ar de mistério para as pessoas e dificilmente você consegue rastrear os passos deles, pois gostam de discrição.</li><li>De cara, podem parecer um pouco blasé.</li><li>Buscas profundas são extremamente interessantes para eles, e o oculto chama a sua atenção, seja pesquisando segredos - stalkeando - ou estudando sobre assuntos místicos.</li><li>São pessoas com as quais você consegue desabafar e que te ajudam a enxergar a verdade que ninguém te conta.</li></ul>";
	}

  if (a == "sagitario") {
		element2.innerHTML = "<ul><li>Presença inspiradora e otimismo.</li><li>Precisam ter a sensação de que os caminhos estão abertos para novas possibilidades e experiências para se sentirem motivados.</li><li>Inspiração e perspectiva são chave para eles, e estão sempre abertos para novas vivências.</li><li> Sua espontaneidade faz com que às vezes falte um pouco de delicadeza e de tato em suas colocações.</li><li>Têm dificuldade em guardar segredos.</li></ul>";
	}

  if (a == "capricornio") {
		element2.innerHTML = "<ul><li>Paciência e determinação.</li><li>Tende a ter um ar mais sério.</li><li>São pessoas que aparentam ser mais certinhas e que zelam por suas reputações, às vezes se preocupando até demais com isso.</li><li>Costumam ser bastante dedicadas ao que propõe, se cobrando bastante para entregar mais do que é esperado.</li><li>Podem ocupar cargos altos ou fazer o papel de exemplo por conta disso. O desafio é ter coragem para ousar e sair dos caminhos tradicionais.</li></ul>";
	}

  if (a == "aquario") {
		element2.innerHTML = "<ul><li>Vontade de mudar o mundo.</li><li>Mesmo que o indivíduo tenha um Mapa Astral cheio de qualidades mais conservadoras, se existe um ascendente em Aquário, não tem como saber o que esperar dele.</li><li>Nada de linearidade, principalmente nos dates.</li><li>As pessoas com este ascendente costumam ter preferências diferentes, inclusive no visual. Elas sentem atração pelo excêntrico, por coisas que estão fora do seu círculo de convivência.</li><li>Estão abertos ao diferente e tendem a questionar tudo, mas têm dificuldade de mergulhar a fundo em questões emocionais.</li></ul>";
	}

	else if (a == "peixes") {
		element2.innerHTML = "<ul><li>Personalidade simpática e compreensiva.</li><li>Precisam de poesia e significado para viver.</li><li>Gostam de viajar nas ideias, compartilhar sonhos e costumam ter um olhar que reflete isso: profundo, tranquilo com um toque sedutor.</li><li>São naturalmente altruístas e gostam de ajudar.</li><li>Têm a tendência de gostar de espiritualidade e de experiências transcendentais.</li><li>Precisam de espaço para filosofar e curtir a natureza para recarregarem suas baterias.</li></ul>";
	}
}
</script>

  
</body>
</html>