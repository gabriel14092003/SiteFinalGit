<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameByte</title>

    <base href="https://gamesbyte.000webhostapp.com/">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="shortcut icon" href="imagens/plat.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aos.css">

</head>

<body>

    <Header class="header">
        <?php
        $url = "https://gamesbyte.000webhostapp.com/api/games.php";

        $dadosAPI = file_get_contents($url);

        $dadosGame = json_decode($dadosAPI)
        ?>
        <a href="index.php?pg=home" title="Home" class="header-logo" data-aos="fade-left">
            <img src="imagens/Logo.png" alt="GameByte"></a>

        <a href="javascript:showMenu()" title="Mostrar Menu" class="header-menu" data-aos="fade-right">

            <img src="imagens/menu.webp" alt="Menu"></a>

        <nav class="header-nav" data-aos="fade-right">
            <ul>
                <li><a href="index.php?pg=home" title="home">Pagina Inicial</a></li>
                <li><a href="index.php?pg=quemsomos" title="Quem Somos">Quem Somos</a></li>
                <li><a href="index.php?pg=lancamento" title="Lançamentos">Lançamentos</a></li>
                <li><a href="index.php?pg=contato" title="home">Contatos</a></li>
            </ul>
        </nav>
    </Header>



    <main>
        <?php
        $pg = $_GET["pg"] ?? "home";
        $paginas = "Paginas/{$pg}.php";

        if (file_exists($paginas)) {
            include $paginas;
        } else {
            include "Paginas/erro.php";
        }

        ?>
    </main>
    
    </div>

    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-column">
                <h3>Redes Sociais</h3>
                <a href="https://www.whatsapp.com" title="Instagram" target="_blank">
                    <img src="imagens/zap.png" alt="Instagram">WhatsApp
                <a href="https://www.instagram.com" title="WhatsApp" target="_blank">
                    <img src="imagens/insta.png" alt="WhatsApp"> Instagram
                </a>
               
            </div>
            <div class="col-md-4 footer-column">
                <h3>Recursos</h3>
                <a href="index.php?pg=erro" title="erro"> Política de privacidade</a>
                <a href="index.php?pg=empresa" title="empresa">Empresa</a>
                <a href="index.php?pg=erro" title="Blog">Blog</a>
                <a href="index.php?pg=erro" title="Serviços">Serviços</a>
            </div>
            <div class="col-md-4 footer-column">
                <h3>Contato</h3>
                <a href="index.php?pg=erro" title="Contatos">GameByteBr@gmail.com</a>
                <a href="index.php?pg=contato" title="Contatos">Fale Conosco</a>
                <a href="index.php?pg=erro" title="Trabalhe Conosco">Central SAC:
                (44)9751-5116</a>
            </div>
        </div>
    </div>
</footer>

    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>

    <script>
        AOS.init();

        function showMenu() {
            var menu = document.querySelector(".header-nav");
            menu.classList.toggle("show");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>