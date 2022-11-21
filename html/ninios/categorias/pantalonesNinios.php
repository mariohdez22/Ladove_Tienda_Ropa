<?php
require_once('../../../template/menu-footer.php');
$url1 = '../../../css/menu-footer.css';
$url2 = '../../../css/ninios/categorias/pantalonesNinios.css';
$link1 = '../../index.php';
$link2 = '../../index.php';
Page::headerTemplate($url1, $url2, $link1, $link2);
?>


    <section class="productos">

        <section class="part1">

            <div class="filtro">
                
                <div class="titulo-filtro">

                    <h1>Filtro de Categoria</h1>

                </div>

                <div class="apartado-filtro">

                    <div class="boton"><button id="momjeans">Mom Jeans</button></div>
                    <div class="boton"><button id="leggins">Leggins</button></div>
                    <div class="boton"><button id="acampanados">Acampanados</button></div>
                    <div class="boton"><button id="skinny">Skinny Jeans</button></div>
                    <div class="boton"><button id="sailorjeans">Sailor Jeans</button></div>

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

<script src="../../../js/ninio/Pantalones/pantalones.js" type="module"></script>


<?php
require_once('../../../template/menu-footer.php');
Page::footerTemplate('../../../js/animaciones.js');
?>