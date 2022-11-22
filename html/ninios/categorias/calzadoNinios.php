<?php
require_once('../../../template/menu-footer.php');
$url1 = '../../../css/menu-footer.css';
$url2 = '../../../css/ninios/categorias/NiniosCalzados.css';
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

                    <div class="boton"><button id="zapatosNiños">Zapatos de niños</button></div>
                    <div class="boton"><button id="zapatosNiñas">Zapatos de niñas</button></div>
                    <div class="boton"><button id="tenisNiños">Tenis de niños</button></div>
                    <div class="boton"><button id="tenisNiñas">Tenis de niñas</button></div>

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

<script src="../../../js/ninio/Calzados/targetasCalzados.js" type="module"></script>


<?php
require_once('../../../template/menu-footer.php');
Page::footerTemplate('../../../js/animaciones.js');
?>