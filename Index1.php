<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Divs</title>	
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div id="header">
		Empresa de Tecidos Raros
	</div>
	<div id="menu">
		<a href="../HTML/formarioQuatro.html">Home</a> 
		<a href="DivDois.html">Empresa</a> 
		<a href="#">Quem somos</a>
		<a href="#">Contato</a>
	</div>
	<div id="principal">
		<h1>Iniciando PHP</h1>
        <?php

            echo "Olá Mundo";
            $idade=10;
            echo ($idade);
            echo "<HR>";
            $x = 1;
            while ( $x<= 10) {
                echo "Estou ficando fera no PHP<P>";
                $x++;
            }
        ?>
         

	</div>
	<div id="rodape">Footer - Todos os direitos reservados</div>
	
</body>
</html>