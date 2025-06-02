<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <style>
@import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

body {
    margin: 0;
    padding: 0;
    font-family: 'Press Start 2P', monospace;
    background: linear-gradient(to bottom, #000000, #1a1a1a);
    color: #ffd700;
    text-align: center;
    animation: bgFlash 15s infinite alternate;
}

@keyframes bgFlash {
    0%   { background-color: #000; }
    50%  { background-color: #1a0033; }
    100% { background-color: #000; }
}

header {
    background-color: #111;
    padding: 30px 20px;
    border-bottom: 4px solid #ffcc00;
    box-shadow: 0 0 20px #ffcc00;
}

header h1 {
    font-size: 1.2em;
    color: #ffcc00;
    text-shadow: 2px 2px 10px #9900ff;
    animation: flicker 2s infinite;
}

@keyframes flicker {
    0%, 100% { opacity: 1; }
    45% { opacity: 0.6; }
    50% { opacity: 0.2; }
    55% { opacity: 0.6; }
}

section {
    padding: 30px 20px;
    background-color: #000;
    margin: 30px auto;
    border: 2px solid #ffd700;
    border-radius: 12px;
    width: 85%;
    max-width: 700px;
    box-shadow: 0 0 15px #ffcc00;
}

section h3 {
    font-style: italic;
    color: #ffcc00;
    text-shadow: 1px 1px 5px #000;
    margin-bottom: 20px;
}

section p {
    font-size: 0.8em;
    color: #ffdf00;
    line-height: 1.6em;
}

img {
    width: 200px;
    border-radius: 10px;
    border: 3px solid #9900ff;
    box-shadow: 0 0 20px #9900ff;
    margin-top: 15px;
}

footer {
    margin-top: 40px;
    padding: 20px;
    background-color: #111;
    border-top: 2px solid #ffcc00;
    box-shadow: 0 -5px 15px #9900ff;
}

button {
    padding: 12px 25px;
    font-size: 12px;
    background-color: #ffcc00;
    color: #000;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
    box-shadow: 0 0 15px #ffcc00;
    font-family: 'Press Start 2P', monospace;
}

button:hover {
    background-color: #ff9900;
    box-shadow: 0 0 20px #ff9900;
}

a {
    color: #ffcc00;
    text-decoration: none;
    font-weight: bold;
    display: inline-block;
    margin-top: 10px;
    font-family: 'Press Start 2P', monospace;
}

a:hover {
    text-shadow: 0 0 10px #ffccff;
}

/* Números sorteados com brilho roxo */
section:has(> p:contains('venomous numbers')) p {
    color: #e0b3ff;
    font-size: 0.9em;
    animation: glowPurple 1.5s infinite alternate;
    font-weight: bold;
}

@keyframes glowPurple {
    0% {
        text-shadow: 0 0 5px #9933ff;
    }
    100% {
        text-shadow: 0 0 20px #cc66ff;
    }
}
</style>

</head>
<body>
    <header><h1>RESULTADO DAS APOSTAS DA SEMANA</h1></header>

    <section>
    <?php 
    
        echo "<p> <strong>SEJA BEM VINDO  </strong>- A COMPANIA DE APOSTAS GOLDEN SNAKE</p>";
        echo "<h3> <i>Veja os números premiados e sinta o veneno da sorte da Golden Snake penetrando o seu corpo!</i></h3>";

        $r = rand(1,10);
        $s = rand(10,20);
        $i = rand(51,60);
        echo " Here are the  numbers da semana!: ".$r."-".$s."-".$i;

    ?>

    </section>

    <section>
        <div id = "win">
            <h3>Vencedor do sorteio da semana:</h3>
            <p>Nome: Flávio Alves Rodrigues</p>
            <p>Idade: 23 anos</p>
            <p>Prêmio ganho: R$500.000,00</p>
            <img src="flavio.jpeg" alt="Foto de Flávio Alves Rodrigues" />

        </div>
    </section>
    
    <script>
    function atualizarPagina() {
        window.location.reload(true); // Recarrega a página, ignorando o cache
    }
    </script>

    <footer>
         <button onclick="atualizarPagina()">CARREGAR PAGE</button>
         <br>
         <a href="http://localhost/guanabra/desafios/ex002/">COMPRAR DE BILHETE</a>
         
    </footer>
</body>
</html>