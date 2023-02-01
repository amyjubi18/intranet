
<?php

session_start();
error_reporting(0);

$validar = $_SESSION['Usuarios'];

if( $validar == null || $validar = ''){

  header("Location: /intranet/includes/login.php");
  die();
  
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../css/inicio.css">

    <title> Inicio</title>
</head>
<body class="m-0 p-0 box-border">
  
<div class="min-h-full">
<nav class="menu">
    <section class="menu__container">
      <h1 class="menu__logo">
        <img src="../img/Logo.png" class="w-10"> 
      </h1>
   
    <ul class="menu__links">
      <li class="menu__item">
        <a href="./index.php" class="menu__link"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:; margin-right: 4px;"><path d="M12.71 2.29a1 1 0 0 0-1.42 0l-9 9a1 1 0 0 0 0 1.42A1 1 0 0 0 3 13h1v7a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-7h1a1 1 0 0 0 1-1 1 1 0 0 0-.29-.71zM6 20v-9.59l6-6 6 6V20z"></path></svg>Inicio</a>
      </li>
      
      <li class="menu__item menu__item--show">
        <a href="index.php" class="menu__link">Opciones <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJJJREFUSEvtk0EOgDAIBOGl6s/0pRiS1pAKXTTpDc/bnXYEpsUfL+6nAkDDpei/IhE5iUiY+Zi1oJz7D9qhrRWfESSTywCU84IM5Zq5mHkfXxtOkVPwQLLlCpuOqQdpZ7q+8Ob9JXAPHIi14GqxAQjQcACB5VCRvckASZV/ApiXkDct0a6kFMF1nQQKAO2VIqjoBicXQRmEVN84AAAAAElFTkSuQmCC" class="menu__arrow"/></a>
        <ul class="menu__nesting">
          <li class="menu__inside">
              <a href="./documentos.php" class="menu__link menu__link--inside"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:; margin-right: 4px;"><path d="M12.186 14.552c-.617 0-.977.587-.977 1.373 0 .791.371 1.35.983 1.35.617 0 .971-.588.971-1.374 0-.726-.348-1.349-.977-1.349z"></path><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM9.155 17.454c-.426.354-1.073.521-1.864.521-.475 0-.81-.03-1.038-.06v-3.971a8.16 8.16 0 0 1 1.235-.083c.768 0 1.266.138 1.655.432.42.312.684.81.684 1.522 0 .775-.282 1.309-.672 1.639zm2.99.546c-1.2 0-1.901-.906-1.901-2.058 0-1.211.773-2.116 1.967-2.116 1.241 0 1.919.929 1.919 2.045-.001 1.325-.805 2.129-1.985 2.129zm4.655-.762c.275 0 .581-.061.762-.132l.138.713c-.168.084-.546.174-1.037.174-1.397 0-2.117-.869-2.117-2.021 0-1.379.983-2.146 2.207-2.146.474 0 .833.096.995.18l-.186.726a1.979 1.979 0 0 0-.768-.15c-.726 0-1.29.438-1.29 1.338 0 .809.48 1.318 1.296 1.318zM14 9h-1V4l5 5h-4z"></path><path d="M7.584 14.563c-.203 0-.335.018-.413.036v2.645c.078.018.204.018.317.018.828.006 1.367-.449 1.367-1.415.006-.84-.485-1.284-1.271-1.284z"></path></svg>Documentos</a>
            </li>
           
            <li class="menu__inside">
              <a href="./cargar.php" class="menu__link menu__link--inside"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;margin-right: 4px;"><path d="M11 15h2V9h3l-4-5-4 5h3z"></path><path d="M20 18H4v-7H2v7c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2v-7h-2v7z"></path></svg> Cargar</a>
            </li>
            
            <li class="menu__inside">
              <a href="./categoria.php" class="menu__link menu__link--inside"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;"><path d="M20 13.01h-7V10h1c1.103 0 2-.897 2-2V4c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v4c0 1.103.897 2 2 2h1v3.01H4V18H3v4h4v-4H6v-2.99h5V18h-1v4h4v-4h-1v-2.99h5V18h-1v4h4v-4h-1v-4.99zM10 8V4h4l.002 4H10z"></path></svg> Categoría</a>
            </li>
          </ul>
          
          
        </li>
        
      <li class="menu__item ">
        <a href="./" class="menu__link">Archivos</a>
      </li>
      <!-----PERFIL DE USUARIO---->
      <li class="menu__item menu__item--show">
        <a href="#" class="menu__link"> 
        <h1 class="text-xl font-semibold text-center  pl-2 px-2 text-white flex" style="margin-top: -5px;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;margin-right:4px; "><path d="M12 2A10.13 10.13 0 0 0 2 12a10 10 0 0 0 4 7.92V20h.1a9.7 9.7 0 0 0 11.8 0h.1v-.08A10 10 0 0 0 22 12 10.13 10.13 0 0 0 12 2zM8.07 18.93A3 3 0 0 1 11 16.57h2a3 3 0 0 1 2.93 2.36 7.75 7.75 0 0 1-7.86 0zm9.54-1.29A5 5 0 0 0 13 14.57h-2a5 5 0 0 0-4.61 3.07A8 8 0 0 1 4 12a8.1 8.1 0 0 1 8-8 8.1 8.1 0 0 1 8 8 8 8 0 0 1-2.39 5.64z"></path><path d="M12 6a3.91 3.91 0 0 0-4 4 3.91 3.91 0 0 0 4 4 3.91 3.91 0 0 0 4-4 3.91 3.91 0 0 0-4-4zm0 6a1.91 1.91 0 0 1-2-2 1.91 1.91 0 0 1 2-2 1.91 1.91 0 0 1 2 2 1.91 1.91 0 0 1-2 2z"></path></svg> <?php echo $_SESSION['Usuarios']; ?></h1></a>
        <ul class="menu__nesting">
          <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;margin-right:4px;"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>Perfil</a>
            </li>
            <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;margin-right:4px;"><path d="M5.122 21c.378.378.88.586 1.414.586S7.572 21.378 7.95 21l4.336-4.336a7.495 7.495 0 0 0 2.217.333 7.446 7.446 0 0 0 5.302-2.195 7.484 7.484 0 0 0 1.632-8.158l-.57-1.388-4.244 4.243-2.121-2.122 4.243-4.243-1.389-.571A7.478 7.478 0 0 0 14.499 2c-2.003 0-3.886.78-5.301 2.196a7.479 7.479 0 0 0-1.862 7.518L3 16.05a2.001 2.001 0 0 0 0 2.828L5.122 21zm4.548-8.791-.254-.616a5.486 5.486 0 0 1 1.196-5.983 5.46 5.46 0 0 1 4.413-1.585l-3.353 3.353 4.949 4.95 3.355-3.355a5.49 5.49 0 0 1-1.587 4.416c-1.55 1.55-3.964 2.027-5.984 1.196l-.615-.255-5.254 5.256h.001l-.001 1v-1l-2.122-2.122 5.256-5.255z"></path></svg>Soporte Técnico</a>
            </li>
            <li class="menu__inside">
              <a href="/intranet/includes/_sesion/cerrarSesion.php" class="menu__link menu__link--inside"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:; margin-right:4px;"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg> Salir</a>
            </li>
            
          </ul>
          
          
        </li> 
        
    </ul>
    
            <div class="menu__hamburguer">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAFdJREFUSEvtkTEOACAIA+n/H42zSiCEFAd0VtveQcgH5P/lB4SE+xGpqoa1nAsAttLXAnpApb31tt9B+4Ksk1DyuYAeUEU2QLKFyPOSlvwkICN+qORZiBbM1hgZKngKjAAAAABJRU5ErkJggg==" class="menu__img"/>
            </div>
            
    </section>
  </nav>
<script src="intranet/js/inicio.js"></script> 
 
  
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4  sm:px-0">
        
      </div>
      <!-- /End replace -->
    </div>
  </main>
</div>
</body>
</html>

