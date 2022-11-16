<?php
require_once('../../template/menu-footer.php'); //importamos el footer
$url1 = '../../css/menu-footer.css'; //importamos los estilos css del footer
$url2 = '../../css/ninios/ropa-ninios.css'; //importamos los estilos css para el documento html
$link1 = '../index.php';
$link2 = '../index.php';
Page::headerTemplate($url1,$url2,$link1,$link2);
?>


<?php
require_once('../../css/menu-footer.css');
Page::footerTemplate('../../js/animaciones');
?>