<?php
require_once('../../template/menu-footer.php');
$url1 = '../../css/menu-footer.css'; 
$url2 = '../../css/mujeres/ropa-mujer.css'; 
$link1 = '../index.php'; 
$link2 = '../index.php'; 
Page::headerTemplate($url1, $url2, $link1, $link2);
?>

    <!-- http://localhost/VentaRopaModa/html/ropa-mujer.php -->

    <section class="contenido1">

        <div class="border">
            <div class="enunciado">
                <h1>Mujeres</h1>
            </div>
            <div class="extra">

            </div>
        </div>

        <div class="contenedor">

            <div class="pedazo">
                <div class="ropa1">
                    <a href="categorias/camisas-mujer.php">Camisas</a>
                    <img src="../../multimedia/mujerxd.jpg"  width="800" height="450" alt="">
                </div>
                <div class="ropa2">
                    <a href="categorias/pantalon-mujer.php">Pantalones</a>
                    <img src="../../multimedia/mujerpantalonxd.jpg" width="800" height="580" alt="">
                </div>
            </div>
            <div class="pedazo">
                <div class="ropa3">
                    <a href="">Calzado</a>
                    <img src="../../multimedia/tacones.jpg" width="800" height="450" alt="">
                </div>
                <div class="ropa4">
                    <a href="">Accesorios</a>
                    <img src="../../multimedia/collares.jpg" width="800" height="450" alt="">
                </div>
            </div>
            <div class="pedazo">
                <div class="ropa5">
                    <a href="">Ropa Interior</a>
                    <img src="../../multimedia/interior.jpg" width="755" height="405" alt="">
                </div>
                <div class="ropa6">
                    <a href="">Maquillaje</a>
                    <img src="../../multimedia/maquillaje.jpg" width="705" height="455" alt="">
                </div>
            </div>

        </div>

    </section>

<?php
require_once('../../template/menu-footer.php');
Page::footerTemplate('../../js/animaciones.js');
?>