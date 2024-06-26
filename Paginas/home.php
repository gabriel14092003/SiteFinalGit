<div class="container" data-aos="fade-right">
    <h1>Novidades</h1>
    <div class="banner">
        <a href="index.php?pg=gtasanandraes" title=" Gta SanAndreas">
            <img src="imagens/banner1.jpg" alt="Gta SanAndreas">
        </a>
    </div>

    <div class="flex d-flex justify-content-center" data-aos="fade-right">
        <h2>Jogos Gratis</h2>
    </div>

    <div class="flex d-flex justify-content-center" data-aos="fade">

            <?php
            foreach ($dadosGame as $dados) {
            ?>
                    <div class="flex-coluna">
                <a href="<?=$dados->link?>" target="_blank">
                    <img src="<?=$dados->imagem?>" alt="<?=$dados->nome?>"></a>
                <p><?=$dados->nome?></p>
                </div>
            <?php
            }
            ?>

        <div class="banner" data-aos="fade-right">
            <a href="jogo/Cuphead" title="CupHead">
                <a href="index.php?pg=erro">
                    <img src="imagens/banner2.jpg" alt="CupHead">
                </a>
        </div>


        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="https://www.grupointegrado.br/?utm_source=Google_Search&utm_medium=Keywords&utm_campaign=Institucional_geral&utm_id=Insti-Trafego&utm_term=Institucional&utm_content=Google&keyword=faculdade+integrado&creative=675324707401&gad_source=1&gclid=Cj0KCQjwj9-zBhDyARIsAERjds26IiulIyALyyyDiheAJeqqwbP0W2rGwF_sbtfhf0sIwCNWK5gUK4gaAoIfEALw_wcB">
                        <img src="imagens/int1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <a href="https://www.cinemaxs.com.br/">
                        <img src="imagens/filme.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <a href="https://www.primevideo.com/offers/nonprimehomepage/ref=dvm_pds_amz_br_dc_s_g_mkw_s2Hv03IvM-dc_pcrid_620438871494?gclid=Cj0KCQjwj9-zBhDyARIsAERjds2p4KXNeuBwaMlUf4stJzkDw2g4A73-gHTLtGrWcymvMNjGTu7lfh4aAj_zEALw_wcB&mrntrk=slid__pgrid_62046161446_pgeo_20101_x__adext__ptid_kwd-296527732991">
                        <img src="imagens/primevideo.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>