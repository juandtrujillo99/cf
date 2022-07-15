<?php

    header("Content-type: text/css; charset: UTF-8");

    $colorMarca = "#f5c614";

    $colorMarca2 = "#000";

    $colorMarca3 = "#c9c9c9";



    $textoBlack = "SpartanBlack";

    $textoBold = "SpartanExtraBold";

    $textoBook = "GothamBook";

    $textoLight = "GothamLight";



    $texto2Bold = "FuturaBold";

    $texto2Medium = "FuturaMedium";

    $texto2Semi = "FuturaSemi";

    $texto2Book = "FuturaBook";

    $texto2Light = "FuturaLight";





    /* las lineas estan corridas 11 casillas, es decir, si te dicen linea 39 en realidad se refiere a la linea 50*/

?>

/*estilos para pc*/

html{scroll-behavior: smooth;}

*{margin: 0;padding: 0;box-sizing: border-box;text-decoration: none;}

*::-moz-selection{background: <?php echo $colorMarca3;?>;color: #000;}

*::selection {background: <?php echo $colorMarca3;?>;color: #000;}

body{font-family: <?php echo $textoBook;?>;}

/*barra de scroll*/

body::-webkit-scrollbar {width: 6px;background: <?php echo $colorMarca;?>;}

body::-webkit-scrollbar-thumb {background: <?php echo $colorMarca2;?>;border-radius: 10px;border-right: 2px solid <?php echo $colorMarca2;?>;}

/*barra de scroll*/



.textoBlack{font-family: <?php echo $textoBlack;?>}

.textoBold{font-family: <?php echo $textoBold;?>}

.textoBook{font-family: <?php echo $textoBook;?>}

.textoLight{font-family: <?php echo $textoLight;?>}



.texto2Bold{font-family: <?php echo $texto2Bold;?>}

.texto2Medium{font-family: <?php echo $texto2Medium;?>}

.texto2Semi{font-family: <?php echo $texto2Semi;?>}

.texto2Book{font-family: <?php echo $texto2Book;?>}

.texto2Light{font-family: <?php echo $texto2Light;?>}







/*

.btn-principal{ background:transparent;color: white; border-radius: 0;}

.btn-principal:hover, .btn-principal:active{background-color: white;color: black;}

*/

.btn-claro{

  box-shadow: inset 0px 0px 0px 4px white;

  color: white;

  background-image: transparent 50%;  

  background-size: 200%;

  background-position: 0% 50%;

  transition: .3s;

  border-radius: 0;}

.btn-claro:hover, .btn-principal:active{color: #000;

  background-position: 100% 50%;transition: .4s;

background-image: linear-gradient(to right, transparent 50%, <?php echo $colorMarca;?> 50%, <?php echo $colorMarca;?> 100%);}

.btn-oscuro{background-color: #000; padding: .1em 4em;color: white;}

.btn-principal{box-shadow: inset 0px 0px 0px 4px black;line-height: 1.5em;padding: 1em;}

.btn-principal:hover{box-shadow: inset 0px 0px 0px 4px <?php echo $colorMarca?>;}



.btn-principal-invertido{box-shadow: inset 0px 0px 0px 4px #c9c9c9; color: #c9c9c9;}

.btn-principal-invertido:hover{box-shadow: inset 0px 0px 0px 4px <?php echo $colorMarca?>; color: #c9c9c9;}



.btn-secundario{box-shadow: inset 0px 0px 0px 4px #c9c9c9; color: #c9c9c9;}

.btn-secundario:hover{box-shadow: inset 0px 0px 0px 4px <?php echo $colorMarca?>;}



.btn-principal-animado{

  box-shadow: inset 0px 0px 0px 4px <?php echo $colorMarca?>;

  color: black;

  background-image: transparent 50%;  

  background-size: 200%;

  background-position: 0% 50%;

  transition: .3s;

  border-radius: 0;}

.btn-principal-animado:hover, .btn-principal-animado:active{color: #000;

  background-position: 100% 50%;transition: .4s;

background-image: linear-gradient(to right, transparent 50%, <?php echo $colorMarca;?> 50%, <?php echo $colorMarca;?> 100%);}





.btn-secundario-animado{

  box-shadow: inset 0px 0px 0px 4px #fff;

  color: #fff;

  background-image: transparent 50%;  

  background-size: 200%;

  background-position: 0% 50%;

  transition: .3s;

  border-radius: 0;}

.btn-secundario-animado:hover, .btn-principal-animado:active{color: #000;

  background-position: 100% 50%;transition: .4s;

background-image: linear-gradient(to right, transparent 50%, <?php echo $colorMarca;?> 50%, <?php echo $colorMarca;?> 100%);}





.btn:focus, .btn-large:focus,

.btn-floating:focus {

  background-color: #000;

  color: #fff;

}





.encima{

  z-index: 2;position: absolute;

}

.paralelograma {

  width: 100%;

  height: 100vh;

  transform: skew(-15deg);

  background-position: center;background-size: cover;

}

.paralelograma2 {

  background:#000;

  height: 10vh;

  transform: skew(-40deg);

}


.paralelograma2a {

  background:<?php echo $colorMarca;?>;

  height: 10vh;

  transform: skew(-40deg);

}


.paralelograma-horizontal-derecha {

  width: 100%;

  height: 25vh;

  transform: skew(-15deg);

  background-position: right;background-size: cover;

}







.paralelograma-horizontal-izquierda {

  width: 90%;

  height: 25vh;

  transform: skew(-15deg);

  background-position: left;background-size: cover;

}



.skrew-15grados-instalaciones{transform: skew(-15deg);padding:1em;margin-top:2em;margin-right: 1.5em;}

.skrew-15grados{transform: skew(-15deg);}





.triangle-up-right {

  width: 0;

  height: 0;

  border-top: 50px solid <?php echo $colorMarca; ?>;

  border-left: 50px solid transparent;

}



.triangle-down-right {

  width: 0;

  height: 0;

  border-bottom: 50px solid <?php echo $colorMarca; ?>;

  border-left: 50px solid transparent;

}



.imagen{max-width: 100%;width: 100%}

.imagen-2{max-width: 50%;width: 50%}

.imagen-3{max-width: 33.3%;width: 33.3%}

.imagen-4{max-width: 25%;width: 25%}

.imagen-5{max-width: 10%;width: 10%}





/* barra moviles superior (donde va el logo)*/

.marca-logo{z-index: 4;position: fixed;top: .5em; left: 2em;cursor: pointer;width: 15%;}

.menu i{border: white 1px solid;position: absolute;top: 5em; right: 1em;cursor: pointer;padding:.5em;background-color: <?php echo $colorMarca;?>; color: black;border-radius: 2em;z-index: 4;}

.menu2 i{position: fixed;top: 1.5em; right: 1em;cursor: pointer;padding:.5em;background-color: <?php echo $colorMarca;?>; color: black;border-radius: 2em;z-index: 4;}

nav {  

  background-color: #fff;

  width: 100%;

  height: 56px;

  line-height: 56px;

}



nav.nav-extended {height: auto;background-color: white;z-index: 4;}

nav.nav-extended .nav-wrapper {min-height: 4em;height: auto;}

nav.nav-extended .button-collapse{cursor: pointer;}

/* barra moviles superior (donde va el logo)*/





/* barra moviles inferior (donde van los tabs)*/

.nav-extended .nav-content {

	position: fixed;

  z-index: 3;

	border-top:1px solid #c9c9c9;

	padding-bottom: 1em; 

	width: 100%;

	bottom: 0px;

	line-height: normal;

}

.navbar-moviles {background-color: #fff;  color: #000;}

.navbar-moviles a {color: #000;text-decoration: none;padding: .5em}

.navbar-moviles a {text-decoration: none;}

.navbar-moviles a .material-icons {font-size: 1.8em;vertical-align: bottom;}



.tabs.tabs-transparent .tab a,

.tabs.tabs-transparent .tab.disabled a,

.tabs.tabs-transparent .tab.disabled a:hover {color: #2b2b2b;}



.tabs.tabs-transparent .tab a:hover,

.tabs.tabs-transparent .tab a.active,

.navbar-moviles a .material-icons:hover {

  font-size: 1.8em;

  color: <?php echo $colorMarca;?>;

  transition: .1s;

  text-decoration: none;

}

.tabs.tabs-transparent .indicator {background-color:transparent;}/*barrita inferior de los tabs activados*/

/* barra moviles inferior (donde van los tabs)*/







/*barra lateral izquierda*/

.side-nav {

  position: fixed;

  width: 300px;

  left: 0;

  top: 0;

  margin: 0;

  -webkit-transform: translateX(-100%);

          transform: translateX(-100%);

  height: 100%;

  height: calc(100% + 60px);

  height: -moz-calc(100%);

  padding-bottom: 60px;

  background-color: <?php echo $colorMarca;?>;

  color: #000;

  z-index: 999;

  overflow-y: auto;

  will-change: transform;

  -webkit-backface-visibility: hidden;

          backface-visibility: hidden;

  -webkit-transform: translateX(-105%);

          transform: translateX(-105%);

}



.side-nav::-webkit-scrollbar {width:.5em;background-color: <?php echo $colorMarca;?>;}

.side-nav::-webkit-scrollbar-thumb{background-color: <?php echo $colorMarca2;?>;}

.side-nav{font-family: <?php echo $textoBold; ?>;}

.side-nav li {float: none;}

.side-nav li.active {background-color: rgba(0, 0, 0, 0.5);}

.side-nav .enlaces a{padding: 1.8em 0;}

.side-nav .enlaces a p{padding: 1em 0;}

.side-nav .enlaces a:hover{background-color: #000;color:white;transition: .2s;}/*cuadros con enlace*/

.side-nav a {font-size: 1em;text-decoration: none;color: #000;}

.side-nav .enlaces .material-icons {font-size: 4em;}

.social{padding: 1em 0;}

.social p{padding-bottom: .8em;}

.social .fab {font-size: 2em;align-items: start;padding: 0 .5em;}

.divider {height: 1px;overflow: hidden;background-color: rgba(0, 0, 0, 0.05);}

.side-nav .mas-enlaces{padding: 1em 0 .5em 1.5em;}

.side-nav .mas-enlaces p{padding-top: .1em;}

.side-nav .mas-enlaces:hover, .side-nav .mas-enlaces:active{background-color: black;color: white;}

.side-nav li > a:hover {background-color: rgba(0, 0, 0, 0.5);}

/*barra lateral izquierda*/



/*tarjetas de seccion entrenamiento*/

.card a {

  text-decoration: none;

}



.card .card-image .card-title {

  color: #fff;

  position: absolute;

  bottom: 0;

  left: 0;

  max-width: 100%;

  padding: 0 1em;

  z-index: 2;

}



.card .card-title {

  padding: 0;

}



.card .card-content {

  padding: 1em;

  border-radius: 0;

  text-align: left;

  text-decoration: none;

}



.card .card-content p {

  margin: 0;

  color: inherit;

}



/*tarjetas moviles*/

.card {

  position: relative;

  width: 100%;

  display: -ms-flexbox;

  display: flex;

  -ms-flex-direction: column;

  flex-direction: column;

  min-width: 0;

  word-wrap: break-word;

  background-color: white;

  background-clip: border-box;

  border-radius: 0;

}



.card .card-image img {

  display: block;

  border-radius: 0;

  position: relative;

  left: 0;

  right: 0;

  top: 0;

  bottom: 0;

  width: 100%;

}



.card .card-reveal {

  padding: 24px;

  position: absolute;

  color: white;

  background-color: rgba(0,0,0,.9);

  width: 100%;

  overflow-y: auto;

  left: 0;

  top: 100%;

  height: 100%;

  z-index: 3;

  display: none;

}



.card-reveal::-webkit-scrollbar {visibility: hidden;width: 0.1px;}

/*tarjetas de seccion entrenamiento*/



/*navbar superior 2 */

.navbar-superior2{background-color: black;text-align: center;}

.navbar-superior2 .logo{height: 3em;}

.navbar-superior2 a{color: white; text-decoration: none;padding: 1em 0;}

.navbar-superior2 .enlaces a:hover{background-color: rgba(255,255,255,.1);}

/*navbar superior 2 */





/* Text inputs formularios lineas */

input:not([type]),

input[type=text]:not(.browser-default),

input[type=password]:not(.browser-default),

input[type=email]:not(.browser-default),

input[type=url]:not(.browser-default),

input[type=time]:not(.browser-default),

input[type=date]:not(.browser-default),

input[type=datetime]:not(.browser-default),

input[type=datetime-local]:not(.browser-default),

input[type=tel]:not(.browser-default),

input[type=number]:not(.browser-default),

input[type=search]:not(.browser-default),

textarea.materialize-textarea {

  background-color: transparent;

  border: none;

  border-bottom: 1px solid #9e9e9e;

  border-radius: 0;

  outline: none;

  height: 3rem;

  width: 100%;

  font-size: 1em;

  padding: 0;

  -webkit-box-shadow: none;

          box-shadow: none;

  -webkit-box-sizing: content-box;

          box-sizing: content-box;

  -webkit-transition: all 0.3s;

  transition: all 0.3s;

}

/* hover Text inputs formularios lineas */

input:not([type]):focus:not([readonly]),

input[type=text]:not(.browser-default):focus:not([readonly]),

input[type=password]:not(.browser-default):focus:not([readonly]),

input[type=email]:not(.browser-default):focus:not([readonly]),

input[type=url]:not(.browser-default):focus:not([readonly]),

input[type=time]:not(.browser-default):focus:not([readonly]),

input[type=date]:not(.browser-default):focus:not([readonly]),

input[type=datetime]:not(.browser-default):focus:not([readonly]),

input[type=datetime-local]:not(.browser-default):focus:not([readonly]),

input[type=tel]:not(.browser-default):focus:not([readonly]),

input[type=number]:not(.browser-default):focus:not([readonly]),

input[type=search]:not(.browser-default):focus:not([readonly]),

textarea.materialize-textarea:focus:not([readonly]) {

  background-color: white;

  border-bottom: 1px solid <?php echo $colorMarca ?>;

  -webkit-box-shadow: 0 1px 0 0 <?php echo $colorMarca ?>;

          box-shadow: 0 1px 0 0 <?php echo $colorMarca ?>;

}

/* Text inputs formularios lineas */





/*instalaciones imagenes de maquinas para moviles*/

.boxed{

display:inline-block;

  height: 15vh;

  background-position: center;

  background-size: cover;

}



textarea::-webkit-scrollbar {width: 2px;background: transparent;}

textarea::-webkit-scrollbar-thumb {background: <?php echo $colorMarca;?>;border-radius: 10px;}



/*estilos para el texto de rutinas*/

.texto-rutina{

  font-size: 1em;

}

.texto-rutina > b{

  font-family: <?php echo $textoBold;?>;

  font-size: 1em;

}

/*Pagina membresia*/
.modal p{
  padding: 1.5em 0;
}
