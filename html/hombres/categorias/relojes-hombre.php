<?php
require_once('../../../template/menu-footer.php');
$url1 = '../../../css/menu-footer.css'; 
$url2 = '../../../css/hombres/categorias/relojes-hombres.css'; 
$link1 = '../../index.php'; 
$link2 = '../../index.php'; 
Page::headerTemplate($url1, $url2, $link1, $link2); // clase de php
?>

    <section class="productos">

        <section class="part1">

            <div class="filtro">
                
                <div class="titulo-filtro">

                    <h1>Filtro de Categoria</h1>

                </div>

                <div class="apartado-filtro">

                    <div class="boton"><button id="Bolsillo">Bolsillo</button></div>
                    <div class="boton"><button id="Analogico">Analogico</button></div>
                    <div class="boton"><button id="Digital">Digital</button></div>
                    <div class="boton"><button id="Triple">Triple</button></div>
                   

                </div>

            </div>

        </section>

        <section class="part2">

            <section class="secciones"><!-- tarjetas desde js --></section>

            <section class="secciones"><!-- tarjetas desde js --></section>

            <section class="secciones"><!-- tarjetas desde js --></section>

            <section class="secciones"><!-- tarjetas desde js --></section>

        </section>

    </section>

<script src="../../../js/hombres/relojes/tarjetas-relojes.js" type="module"></script>

<?php
require_once('../../../template/menu-footer.php');
Page::footerTemplate('../../../js/animaciones.js');
?>