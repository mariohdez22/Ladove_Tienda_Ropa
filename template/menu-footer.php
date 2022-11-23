<?php
// '.$title.'
class Page {
    
    public static function headerTemplate($url1, $url2, $link1, $link2) {
        print('

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
            <link rel="stylesheet" href="'.$url1.'">
            <link rel="stylesheet" href="'.$url2.'">
            <title>Ladove</title>
        </head>
        <body>
            
            <header class="menu">   
                <h1 class="Htitulo">Ladove</h1>
                <ul class="Hul">
                    <li class="Hopciones"><a href="'.$link1.'">Inicio</a></li>
                    <li class="Hopciones"><a href="#categoriax">Categorias</a></li>
                    <li class="Hopciones"><a href="#nuevos">Promociones</a></li>
                </ul>
            </header>
        
            <div class="separador"></div>    

        ');   
    }

    public static function footerTemplate($url) {

        print('

        <footer class="footer">
            <div class="partes">
                <div class="subpartes1">
                    <h1>Explorar</h1>
                    <a href="#categoriax">Categorias</a>
                    <a href="#">Comentarios</a>
                    <a href="#">mujeres</a>
                    <a href="#">Hombres</a>
                    <a href="#">Niños</a>
                </div>
                <div class="subpartes2">
                    <h1>Obten ayuda</h1>
                    <a href="#">Soporte tecnico</a>
                    <a href="#">Foro</a>
                    <a href="#">Preguntas frecuentes</a>
                </div>
                <div class="subpartes3">
                    <h1>Acerca de</h1>
                    <a href="#">Mapa del sitio web</a>
                    <a href="#">lenguaje</a>
                    <a href="#">empleos</a>
                    <a href="#">Informacion de la empresa</a>
                </div>
            </div>
            <div class="marca">
                <p>@Ladove 2022 - todos los derechos reservados.</p>            
            </div>
        </footer>

        <script src="'.$url.'"></script>

    </body>
    </html>
            
        ');
    }
    
}

?>