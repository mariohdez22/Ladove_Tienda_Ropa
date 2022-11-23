<?php
require_once('../../template/menu-footer.php'); //importamos el footer
$url1 = '../../css/menu-footer.css'; //importamos los estilos css del footer
$url2 = '../../css/ninios/ropaNinios.css'; //importamos los estilos css para el documento html
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
                    <a href="categorias/camisasNinios.php">Camisas</a>
                    <img src="../../multimedia/ninios/niñosCamisas2.png"  width="650" height="450" alt="">
                </div>
                <div class="ropa2">
                    <a href="categorias/pantalonesNinios.php">Pantalones</a>
                    <img src="../../multimedia/ninios/niñosPantalones.png" width="800" height="470" alt="">
                </div>
            </div>
            <div class="pedazo">
                <div class="ropa3">
                    <a href="categorias/calzadoNinios.php">Calzado</a>
                    <img src="../../multimedia/ninios/niñosCalzado.png" width="680" height="450" alt="">
                </div>
                <div class="ropa4">
                    <a href="categorias/inviernoNinios.php">Ropa de Invierno</a>
                    <img src="../../multimedia/ninios/niñosInvierno2.png" width="705" height="325" alt="">
                </div>
            </div>
        </div>

    </section>

<?php
require_once('../../template/menu-footer.php');
Page::footerTemplate('../../js/animaciones.js');
?>