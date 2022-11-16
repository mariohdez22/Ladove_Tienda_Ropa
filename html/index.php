<?php 
require_once('../template/menu-footer.php');
$url1 = '../css/menu-footer.css'; 
$url2 = '../css/inicio.css'; 
$link1 = './index.php'; //vayamos a dormir por favor
$link2 = './index.php'; //hola soy dennis otra ves
Page::headerTemplate($url1, $url2, $link1, $link2);//Hola soy un comentario

?> 

    <span class="redes"> 
        <div class="red1"></div>
        <div class="red2"></div>
        <div class="red3"></div>
    </span>
    
    <section>

        <section class="presentacion1">
            <div class="texto">
                <h1>Vestir elegante es lo tuyo</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim possimus animi ea, dolorum sunt, vitae expedita vel culpa, sit similique vero rerum! Cupiditate ducimus pariatur, fugit voluptatum harum aut vero?</p>
            </div>
        </section>

        <section class="presentacion2">
            <div class="orden">
                <h1 class="titulaje">Nuevas prendas acaban de llegar</h1>
            </div>
            <div class="tarjetas">
                <div class="tarjeta1">
                    <div class="contenido">
                        <h2>Sueter spriler&nbsp; &nbsp;| <strong>$70.00</strong></h2>
                        <h2>pantalon steall  | <strong>$45.00</strong></h2>
                    </div>
                    <img src="../multimedia/619yqMWcKhL._AC_UY1000_.jpg" height="500" width="500" alt="">
                </div>
                <div class="tarjeta2">
                    <img src="../multimedia/H34a80c4cd11c47c285bbef92dde760f1r.jpg" height="500" width="500" alt="">
                    <div class="contenido2">
                        <h2>Sueter rosalyn&nbsp; &nbsp;| <strong>$65.00</strong></h2>
                        <h2>pantalon nitale  | <strong>$55.00</strong></h2>
                    </div>
                </div>
            </div>
        </section>

        <section id="categoriax" class="presentacion3">
            <div class="orden2">
                <h1 class="titulaje">Categorias</h1>
            </div>
            <div class="categorizantes">
                <div class="categorias">
                    <a href="../html/mujeres/ropa-mujer.php" class="titles1">MUJERES</a>
                    <img src="../multimedia/mujeres.jpg" width="390" height="550" alt="">
                </div>
                <div class="categorias">
                    <a href=""  class="titles2">HOMBRES</a>
                    <img class="img2" src="../multimedia/hombres.jpg" width="390" height="620" alt="">
                </div>
                <div class="categorias">
                    <a href=""  class="titles3">NIÑ@S</a>
                    <img src="../multimedia/xdxdxdxd.jpg" width="390" height="430" alt="">
                </div>
            </div>
        </section>

        <section class="presentacion4">
            <div class="orden3">
                <h1 class="titulaje">Newsletter</h1>
                <p>Suscribete a nuestra plantilla para que puedas disfrutar de catalogo nuevo que llega a tu correo.</p>
            </div>
            <div class="cajones">
                <div class="cajon1">
                    <h1>Suscribete aqui</h1>
                    <form action="post">
                        <div class="texbox">
                            <h2>Nombre</h2>
                            <input type="text" placeholder="Nombre">
                        </div>
                        <div class="texbox">
                            <h2>Apellido</h2>
                            <input type="text" placeholder="Apellido">
                        </div>
                        <div class="texbox">
                            <h2>Email</h2>
                            <input type="email" placeholder="E-mail">
                        </div>
                        <br>
                        <br>
                        <div class="texbox">
                            <button>ACEPTAR</button>
                        </div>
                    </form>
                </div>
                <div class="cajon2">
                    <h2>Ladove</h2>
                    <img src="../multimedia/scc-2.jpg" width="650" height="500" alt="">
                </div> 
            </div>
        </section>

    </section>
    
<?php
require_once('../template/menu-footer.php');
Page::footerTemplate('../js/animaciones.js');
?>
    
