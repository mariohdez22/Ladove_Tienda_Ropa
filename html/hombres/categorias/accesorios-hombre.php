<?php
require_once('../../../template/menu-footer.php');
$url1 = '../../../css/menu-footer.css'; 
$url2 = '../../../css/hombres/categorias/accesorios-hombre.css'; 
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

                    <div class="boton"><button id="Brazalete">Brazalete</button></div>
                    <div class="boton"><button id="Corbatas">Corbatas</button></div>
                    <div class="boton"><button id="Boinas">Boinas</button></div>
                    <div class="boton"><button id="Cinturones">Cinturones</button></div>
                    <div class="boton"><button id="Corbatines">Corbatines</button></div>

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

<script src="../../../js/hombres/accesorios/tarjetas-accesorios.js" type="module"></script>

<?php
require_once('../../../template/menu-footer.php');
Page::footerTemplate('../../../js/animaciones.js');
?>