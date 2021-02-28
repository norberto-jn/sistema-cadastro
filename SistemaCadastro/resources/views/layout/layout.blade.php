<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Clientes</title>
        <meta charset=utf-8>
        <meta name="viewport" content="width=500px, initial-scale=1">
        <link rel="stylesheet" href="css/estilo.css">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;900&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <div class="container_fluid">
            <header>
			</header>
			<div class="logo">
                <a href="https://www.construsitebrasil.com/">
                    <img src="img/446-tux.svg" style="width: 20%;margin-top:3%" id="img"/>
                </a>
            </div>
            <div class="menu_bar">
                <ul>
                    <a href="Adicionar" style="text-decoration: none">
                        <li>
                            <img src="img/adicionar.svg" class="img_menu">
                            <span id="text_menu">Adicionar</span>
                        </li>
                    </a>
                    <a href="/" style="text-decoration: none">
                        <li class="">
                            <img src="img/usuarios.svg" class="img_menu">
                            Clientes
                        </li>
                    </a>
                </ul>
            </div>
            <!-- CONTEUDO PRINCIPPAL -->
			<div class="secao">
                @yield("conteudo")
            </div>
            <!-- FINAL DO CONTEUDO PRINCIPPAL -->
        </div>
        <script src="js/mascaraTelefone.js"></script>
        <script src="js/validacaoFormulario.js"></script>
    </body>
</html>
