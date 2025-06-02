<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<header>
    <h1>CONFIRMAÇÃO!</h1>
</header>

<main>

<?php 



if (isset($_GET['name']) && isset($_GET['numb']) && isset($_GET['sorte1']) && isset($_GET['sorte2']) && isset($_GET['sorte3'])) {

  
    $nomeCompleto = $_GET['name'];
    $numeroContato = $_GET['numb'];
    $numeroSorte1 = $_GET['sorte1'];
    $numeroSorte2 = $_GET['sorte2'];
    $numeroSorte3 = $_GET['sorte3'];

 
    $nomeCompleto = htmlspecialchars($nomeCompleto, ENT_QUOTES, 'UTF-8');
    $numeroContato = htmlspecialchars($numeroContato, ENT_QUOTES, 'UTF-8');


    $numeroSorte1 = filter_var($numeroSorte1, FILTER_VALIDATE_INT);
    $numeroSorte2 = filter_var($numeroSorte2, FILTER_VALIDATE_INT);
    $numeroSorte3 = filter_var($numeroSorte3, FILTER_VALIDATE_INT);

   
    if ($numeroSorte1 === false || $numeroSorte2 === false || $numeroSorte3 === false) {
        echo "Erro: Os números da sorte devem ser inteiros válidos.";
        
        exit(); 
    }

    echo "<h1>Dados Recebidos:</h1>";
    echo "<p>Nome Completo: " . $nomeCompleto . "</p>";
    echo "<p>Número para Contato: " . $numeroContato . "</p>";
    echo "<p>Números da Sorte: " . $numeroSorte1 . ", " . $numeroSorte2 . ", " . $numeroSorte3 . "</p>";


} else {
   
    echo "<h1>Erro: Formulário não enviado ou dados incompletos.</h1>";
    echo "<p>Por favor, preencha todos os campos do formulário.</p>";
}
    



?>
</main>

<section>
    <a href="http://localhost/guanabra/desafios/ex002/MAIN.PHP"> Resultado da Semana</a>
</section>
<footer>
    <img src="https://ih1.redbubble.net/image.5389209237.0724/st,large,507x507-pad,600x600,f8f8f8.u4.webp" alt="like">
</footer>


</body>
</html>