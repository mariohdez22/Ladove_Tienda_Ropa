<?php
require_once('../../template/menu-footer.php');
$url1 = '../../css/menu-footer.css'; 
$url2 = '../../css/hombres/ropa-hombres.css'; 
$link1 = '../index.php'; 
$link2 = '../index.php'; 
Page::headerTemplate($url1, $url2, $link1, $link2);
?>

    <!-- http://localhost/VentaRopaModa/html/ropa-mujer.php -->

    <section class="contenido1">

        <div class="border">
            <div class="enunciado">
                <h1>Hombres</h1>
            </div>
            <div class="extra">

            </div>
        </div>

        <div class="contenedor">

            <div class="pedazo">
                <div class="ropa1">
                    <a href="categorias/camisa-hombre.php">Camisas</a>
                    <img src="../../multimedia/camisahombremenu.jpg"  width="800" height="450" alt="">
                </div>
                <div class="ropa2">
                    <a href="categorias/pantalones-hombre.php">Pantalones</a>
                    <img src="../../multimedia/pantalonhombre.jpg" width="800" height="580" alt="">
                </div>
            </div>
            <div class="pedazo">
                <div class="ropa3">
                    <a href="categorias/calzado-hombre.php">Calzado</a>
                    <img src="../../multimedia/jeans-hombre.jpg" width="800" height="450" alt="">
                </div>
                <div class="ropa4">
                    <a href="categorias/accesorios-hombre.php">Accesorios</a>
                    <img src="../../multimedia/corbata.jpg" width="800" height="450" alt="">
                </div>
            </div>
            <div class="pedazo">
                <div class="ropa5">
                    <a href="categorias/interior-hombre.php">Ropa Interior</a>
                    <img src="../../multimedia/ropainteriorhombre.jpg" width="755" height="405" alt="">
                </div>
                <div class="ropa6">
                    <a href="categorias/relojes-hombre.php">Relojes</a>
                    <img src="../../multimedia/relojes.jpg" width="705" height="455" alt="">
                </div>
            </div>

        </div>

    </section>

<?php
require_once('../../template/menu-footer.php');
Page::footerTemplate('../../js/animaciones.js');
?>