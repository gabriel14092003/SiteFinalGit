<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameByte</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <Header class="header">
        <a href="home" title="Home" class="header-logo">
        <img src="imagens/logo.png" alt="GameByte"></a>

        <a href="javascript:showMenu()" title="Mostrar Menu" class="header-menu">

        <img src="imagens/menu.webp" alt="Menu"></a>

        <nav class="header-nav">
            <ul>
                <li><a href="home" title="home">Pagina Inicial</a></li>
                <li><a href="Quem-Somos" title="Quem Somos">Quem Somos</a></li>
                <li><a href="Lancamentos" title="Lançamentos">Lançamentos</a></li>
                <li><a href="Contatos" title="home">Contatos</a></li>
            </ul>
        </nav>
    </Header>



    <main>
<?php
     
     if (isset($_GET["param"])){
         $param = $_GET["param"];
         //separar o parametro por /
         $p = explode("/", $param);
 
         //print_r($p);
     }
 
     $page = $p[0] ?? "home";
     $jogo = $p[1] ?? NULL;
 
     if ($page == "jogo"){
            $pagina = "jogo/{$jogo}.php";
     }else {
       $pagina = "paginas/{$page}.php";
 
     }
 
     //verificar se a pagina existe 
 
     if (file_exists($pagina)){
         include $pagina;
     } else{
         include "paginas/erro.php";
     }
     ?>
     </main>

     <footer class="footer">
        <h2>Desenvolvido por Gabriel Mastracose</h2>
     </footer>

     <script>
        function showMenu(){
            var menu = document.querySelector(".header-nav");
            menu.classList.toggle("show");
        }
     </script>
</body>
</html>