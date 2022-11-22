<?php
require_once('../../../template/menu-footer.php');
$url1 = '../../../css/menu-footer.css';
$url2 = '../../../css/ninios/categorias/NiniosCamisas.css';
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

                    <div class="boton"><button id="vestido">Vestidos</button></div>
                    <div class="boton"><button id="camisasNiñas">Camisas de niñas</button></div>
                    <div class="boton"><button id="camisasNiños">Camisas de niños</button></div>
                    <div class="boton"><button id="camisasPoloNiñas">Camisas polo de niñas</button></div>
                    <div class="boton"><button id="camisasPoloNiños">Camisas polo de niños</button></div>

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

<script src="../../../js/ninio/Camisas/targetasCamisas.js" type="module"></script>


<?php
require_once('../../../template/menu-footer.php');
Page::footerTemplate('../../../js/animaciones.js');
?>