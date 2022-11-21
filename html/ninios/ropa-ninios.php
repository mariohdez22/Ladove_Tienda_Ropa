<?php
require_once('../../template/menu-footer.php'); //importamos el footer
$url1 = '../../css/menu-footer.css'; //importamos los estilos css del footer
$url2 = '../../css/ninios/ropa-ninios.css'; //importamos los estilos css para el documento html
$link1 = '../index.php';
$link2 = '../index.php';
Page::headerTemplate($url1,$url2,$link1,$link2);
?>

    <!-- http://localhost/VentaRopaModa/html/ropa-ninios.php -->

    <section class="contenido1">

        <div class="border">
            <div class="enunciado">
                <h1>Niños</h1>
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
                    <a href="">Pantalones</a>
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
                    <a href="">Ropa de Invierno</a>
                    <img src="../../multimedia/maquillaje.jpg" width="705" height="455" alt="">
                </div>
            </div>

        </div>

    </section>

<?php
require_once('../../template/menu-footer.php');
Page::footerTemplate('../../js/animaciones.js');
?>