<?php
$header_title = "Mirror Fashion";
?>
    <?php include "inc/header.php"?>

    <main>
        <div class="container destaque">
            <section class="busca">
                <h2>Busca</h2>
                <form>
                    <input type="search">
                    <input type="image" src="img/busca.png">
                </form>
            </section>
            <!-- fim .busca -->
            <section class="menu-departamentos">
                <h2>Departamentos</h2>
                <nav>
                    <ul>
                        <li>
                            <a href="#">Blusas e Camisas</a>
                            <ul>
                                <li>
                                    <a href="#">Manga Curta</a>
                                </li>
                                <li>
                                    <a href="#">Manga Comprida</a>
                                </li>
                                <li>
                                    <a href="#">Camisa Social</a>
                                </li>
                                <li>
                                    <a href="#">Camisa Casual</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Calças</a>
                        </li>
                        <li>
                            <a href="#">Saias</a>
                        </li>
                        <li>
                            <a href="#">Vestidos</a>
                        </li>
                        <li>
                            <a href="#">Sapatos</a>
                        </li>
                        <li>
                            <a href="#">Bolsas e Carteiras</a>
                        </li>
                        <li>
                            <a href="#">Acessórios</a>
                        </li>
                    </ul>
                </nav>
            </section>
            <!-- fim. menu-departamentos -->

            <!-- banner -->
            <script>
                var banner = ["img/destaque-home.png","img/destaque-home-2.png"];
                var bannerAtual = 0;

                function trocaBanner(){
                    bannerAtual = (bannerAtual + 1) % 2;
                    document.querySelector('.destaque img').src = banner[bannerAtual];
                }

                setInterval(trocaBanner, 4000)
            </script>

            <img src="img/destaque-home.png" alt="Destaque Promoção">
            
            <!-- fim banner -->
        </div>

        <div class="container paineis">
            <!-- os paineis de novidades e mais vendidos entrarão aqui dentro -->
            <section class="painel novidades">
                <h2>Novidades</h2>
                <ol>
                    <!-- primeiro produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura1.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- segundo produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura2.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- terceiro produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura3.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- quarto produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura4.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- quinto produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura5.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- sexto produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura6.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>
            <section class="painel mais-vendidos">
                <h2>Mais Vendidos</h2>
                <ol>
                    <!-- primeiro produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura7.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- segundo produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura8.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- terceiro produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura9.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- quarto produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura10.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- quinto produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura11.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                    <!-- sexto produto -->
                    <li>
                        <a href="produto.php">
                            <figure>
                                <img src="img/produtos/miniatura12.png">
                                <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                            </figure>
                        </a>
                    </li>
                </ol>
            </section>
        </div>
    </main>

    <?php include "inc/footer.php"?>

</body>

</html>