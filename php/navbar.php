
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/inicio.css">

    <title> Inicio</title>
</head>
<body class="m-0 p-0 box-border">
  
<div class="">
<nav class="menu">
    <section class="menu__container">
      <h1 class="menu__logo">
        <img src="img/Logo.png" class="w-10"> 
      </h1>
      <?php if(!isset($_SESSION["user_id"])):?>
        <ul class="menu__links">
        <li class="menu__item">
          <a href="./registro.php" class="menu__link">Registro</a>
        </li>
        <li class="menu__item">
        <a href="./login.php" class="menu__link">Iniciar Sesión</a>
      </li>
        </ul>

        <?php else:?>
    <ul class="menu__links">
      <li class="menu__item">
        <a href="/procesos/inicio.php" class="menu__link">Inicio</a>
      </li>
      
      <li class="menu__item menu__item--show">
        <a href="#" class="menu__link">Gerencias <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAJJJREFUSEvtk0EOgDAIBOGl6s/0pRiS1pAKXTTpDc/bnXYEpsUfL+6nAkDDpei/IhE5iUiY+Zi1oJz7D9qhrRWfESSTywCU84IM5Zq5mHkfXxtOkVPwQLLlCpuOqQdpZ7q+8Ob9JXAPHIi14GqxAQjQcACB5VCRvckASZV/ApiXkDct0a6kFMF1nQQKAO2VIqjoBicXQRmEVN84AAAAAElFTkSuQmCC" class="menu__arrow"/></a>
        <ul class="menu__nesting">
          <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside">Presidencia</a>
            </li>
            <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside"> Administración</a>
            </li>
            <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside">Presupuesto</a>
            </li>
            <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside">Auditoria</a>
            </li>
            <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside">Gestión Humana</a>
            </li>
            <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside">Proyecto</a>
            </li>
          </ul>
          
          
        </li>
        
      <li class="menu__item ">
        <a href="#" class="menu__link">Sopórte Técnico</a>
      </li>
      <?php endif;?>
      
      <li class="menu__item "> 
        <a href="./php/logout.php" class="menu__link">Salir</a>
      </li>
    
      <!-----PERFIL DE USUARIO---->
      <!-- <li class="menu__item menu__item--show">
        <a href="#" class="menu__link"> <img src="/img/perfil (1).png" alt=""></a>
        <ul class="menu__nesting">
          <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside">Presidencia</a>
            </li>
            <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside"> Administración</a>
            </li>
            <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside">Presupuesto</a>
            </li>
            <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside">Auditoria</a>
            </li>
            <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside">Gestión Humana</a>
            </li>
            <li class="menu__inside">
              <a href="#" class="menu__link menu__link--inside">Proyecto</a>
            </li>
          </ul>
          
          
        </li> -->
        <!------------------------------->
    </ul>
    
            <div class="menu__hamburguer">
            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAFdJREFUSEvtkTEOACAIA+n/H42zSiCEFAd0VtveQcgH5P/lB4SE+xGpqoa1nAsAttLXAnpApb31tt9B+4Ksk1DyuYAeUEU2QLKFyPOSlvwkICN+qORZiBbM1hgZKngKjAAAAABJRU5ErkJggg==" class="menu__img"/>
            </div>
            
    </section>
  </nav>
<script src="js/inicio.js"></script> 

  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        
      </div>
      <!-- /End replace -->
    </div>
  </main>
</div>
</body>
</html>






