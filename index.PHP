<!DOCTYPE html>
<html lang="en-mex">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>injiWater</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/aef90a9808.js" crossorigin="anonymous"></script>

  <link rel="shortcut icon" href="img/gotita_triste.ico" type="image/x-icon">

  <!-- conexion con css -->
  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="body1" id="body">

<nav class="navbar navbar-expand-lg bg-navbar1 bg-primary" id="navbar_container">
    <div class="container">
  <title>injiWater</title>
      <h1 class="rounded-3 text-light texto_h1 fw-bold mx-5 ">Cuidado del Agua </h1>
      <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <button class="btn bg-transparent py-1 rounded-3 mx-1 my-3" type="button" id="theme">
          <i class="fa-regular fa-moon" id="theme_icon"></i>
        </button>
        <a class="btn bg-transparent py-1 rounded-3 mx-1 my-3" href="pages/es/acercade.php" id="more_info">
          <i class="fa-solid fa-circle-info"></i>
        </a>
        <button class="btn bg-transparent py-1 rounded-3 mx-1 my-3" id="change_idiom">
          <i class="fa-solid fa-language"></i>
        </button>
      </div>
    </div>
  </nav>

  <div id="carrusel_autimatic" class="carousel slide text-center" data-bs-ride="carousel" data-interval="1000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carrusel_autimatic" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carrusel_autimatic" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carrusel_autimatic" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carrusel_autimatic" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carrusel_autimatic" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>

    <div class="carousel-inner">

      <div class="carousel-item active css-item">
        <img src="img/img3.png" class="d-block w-100 css-img" alt="imagen 1">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <p class="mt-5 fs-3 text-uppercase">El agua se acaba, y el mundo con ella.</p>
          <h2 class="display-1 fw-bolder text-capitalize">Cuidemos el agua</h2>
        </div>
      </div>

      <div class="carousel-item css-item">
        <img src="img/img2.jpg" class="d-block w-100 css-img" alt="imagen 1">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <h2 class="display-1 fw-bolder text-capitalize">Juntos es más fácil</h2>
        </div>
      </div>

      <div class="carousel-item css-item">
        <img src="img/img1.jpg" class="d-block w-100 css-img" alt="imagen 1">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block bg-lg">
          <h4 class="mt-5 fs-3 fw-bold text-uppercase">Agua utilizada para elaborar productos cotidianos.</h4>
          <p class="mb-0 fs-4">1 Tomate -> 13 lts</p>
          <p class="mb-0 fs-4">1 Naranja -> 50 lts</p>
          <p class="mb-0 fs-4">1 Manzana -> 70 lts</p>
          <p class="mb-0 fs-4">1 Celular -> 910 lts</p>
          <p class="mb-0 fs-4">1kg Res -> 15,000 lts</p>
          <p class="mb-0 fs-4">1kg Pollo -> 4,300 lts</p>
          <p class="mb-0 fs-4">1kg Cerdo -> 6,000 lts</p>
          <p class="mb-0 fs-4">1 Cartera De Huevo -> 3,300 lts</p>
          <p class="mb-0 fs-4">1 Pantalón De Mezclilla -> 7,800 lts</p>
        </div>
      </div>

      <div class="carousel-item css-item">
        <img src="img/img4.png" class="d-block w-100 css-img" alt="imagen 1">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <p class="mt-5 fs-3 text-uppercase">se encuentra a <span class="fw-bold text-black text_tittle bg-light rounded-3 px-2">APUNTO DE EXPLOTAR</span>
            y a la <span class="fw-bold text-black text_tittle bg-light rounded-3 px-2">VUELTA DE LA ESQUINA</span></p>
          <h2 class="display-1 fw-bolder text-capitalize">Hay un problema</h2>
        </div>
      </div>

      <div class="carousel-item css-item">
        <img src="img/img5.png" class="d-block w-100 css-img" alt="imagen 1">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <p class="mt-5 fs-3 text-uppercase">El Agua</p>
          <h2 class="display-1 fw-bolder text-capitalize">Un Recurso Indispensable</h2>
        </div>
      </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carrusel_autimatic" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carrusel_autimatic" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="just_chilling">
    <div class="container text-center text-dark bg-light hello-word" id="text_color">

      <div class="row m-3 fs-5">

        <div class="col-12 mb-3">
          <h2 class="fw-bolder text-capitalize text-primary text_tittle py-2">EL PROBLEMA ACTUAL CON EL AGUA</h2>
        </div>

        <div class="col-12 col-lg-6 mb-3">
          <h4 class="text-primary">Datos Especificos de Cd. Juarez</h4>
          <p class="text-dark texto_text text-justi">
            En Ciudad Juárez la escasez de agua es un problema crítico que cada vez afecta más a sus habitantes.
            Nuestra ciudad enfrenta cada vez una disminución más significativa en la disponibilidad de agua dulce
            debido a la sobreexplotación de los mantos acuíferos y la falta de precipitaciones adecuadas (lluvias).
            Las temperaturas extremas y las sequías prolongadas han agravado aun más la situación, afectando tanto
            el suministro de agua potable como las actividades agrícolas. Además, el crecimiento demográfico y la
            urbanización acelerada en nuestro pais han incrementado la demanda de agua, ejerciendo una presión
            adicional sobre los recursos hídricos ya limitados. La contaminación de fuentes de agua por actividades
            industriales y domésticas también ha deteriorado la calidad del agua disponible, haciendo más difícil
            asegurar un suministro adecuado para la población.
          </p>
        </div>

        <div class="col-12 col-lg-6">
          <diw class="row">
            <div class="col-12 mb-3">
              <h4 class="text-primary">Reflexión</h4>
              <p class="text-dark texto_text text-justi">
                El agua es un recurso vital para la vida en la Tierra. Sin embargo, la humanidad enfrenta un desafío
                creciente en la gestión y conservación de este recurso esencial. La escasez de agua no solo afecta a
                las personas en términos de acceso a agua potable, sino que también tiene repercusiones significativas
                en la agricultura, la industria y los ecosistemas naturales. La combinación de factores naturales y
                humanos está llevando a muchas regiones a situaciones críticas en las que el agua, un recurso que antes
                era abundante, se está volviendo cada vez más escaso.
              </p>
            </div>

            <div class="col-12 col-md-6 mb-3">
              <img class="rounded-3" src="img/img6.jpg" alt="Imagen de un mundo, como si fuera 100% agua" width="100%" height="100%">
            </div>

            <div class="col-12 col-md-6 mb-3">
              <img class="rounded-3" src="img/img7.jpg" alt="Imagen de un mundo, como si fuera 100% agua" width="100%" height="100%">
            </div>
          </diw>
        </div>

        <!-- Diviosion 1 -->

        <div class="col-12 border border-black border_change my-4"></div>

        <div class="col-12 mb-3">
          <h2 class="fw-bolder text-capitalize text-primary text_tittle py-2 mb-5">Las Principales Causas de la Escasez de Agua</h2>
          <div class="row">
            
            <div class="col-12 col-md-6 col-lg-3 mb-2 text-justi">
              <div class="card bg-transparent text-dark texto_text" style="width: 18rem;">
                <img class="card-img-top" src="img/1.jpeg" alt="Imagen de la escasez de agua" width="100%">
                <div class="card-body">
                  <h5 class="card-title text-center text-info">Sobreexplotación de Acuíferos</h5>
                  <p class="card-text">
                    La extracción excesivad de agua de auíferos a llevado a un descenso significativo en los niveles de agua subterránea. 
                    Y se debe al crecimiento poblacional, al incremento en la demanda de agua para uso doméstico, industrial y agrícola.
                  </p>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-3 mb-2 text-justi px-auto">
              <div class="card bg-transparent text-dark texto_text" style="width: 18rem;">
                <img class="card-img-top" src="img/2.jpeg" alt="Imagen de la escasez de agua" width="100%">
                <div class="card-body">
                  <h5 class="card-title text-center text-info">Sequías Prolongadas</h5>
                  <p class="card-text">
                    El clima árido, agravado por el cambio climático, ha aumentado las sequías, reduciendo la disponibilidad del agua de la 
                    superficie y subterránea, complicando la siministración de agua para la ciudad, la recarga de los acuíferos y comunidades.
                  </p>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-3 mb-2 text-justi px-auto">
              <div class="card bg-transparent text-dark texto_text" style="width: 18rem;">
                <img class="card-img-top" src="img/3.jpeg" alt="Imagen de la escasez de agua" width="100%">
                <div class="card-body">
                  <h5 class="card-title text-center text-info">Crecimiento Demográfico</h5>
                  <p class="card-text">
                    El gran aumento poblacional de la Ciudad ha incrementado la demanda de agua, aumentando el problema debido al crecimiento 
                    urbano sin control y la falta de infraestructura adecuada para gestionar eficientemente los recursos hídricos.
                  </p>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-3 mb-2 text-justi px-auto">
              <div class="card bg-transparent text-dark texto_text" style="width: 18rem;">
                <img class="card-img-top" src="img/4.jpeg" alt="Imagen de la escasez de agua" width="100%">
                <div class="card-body">
                  <h5 class="card-title text-center text-info">Contaminación del Agua</h5>
                  <p class="card-text">
                  La contaminación de fuentes de agua por desechos hurbanos, industriales y agrícolas disminuyen en gran medida la cantidad de 
                  agua disponible para el consumo, representando un riesgo para la salud pública, afectando la calidad del agua en nuestra Ciudad.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Diviosion 2 -->

        <div class="col-12 border border-black border_change my-4"></div>

        <div class="col-12 mb-3">
          <h2 class="fw-bolder text-capitalize text-primary text_tittle py-2 mb-5">DATOS IMPORTANTES Y MANERAS DE CUIDARLA</h2>
        </div>

        <div class="col-12 col-lg-6 mb-3">
          
          <p class="text-dark texto_text text-justi">
            Según la Organización Mundial de la Salud (OMS), aproximadamente 2.200 millones de personas carecen de acceso a 
            agua potable segura. La agricultura consume alrededor del 70% del agua dulce disponible en el mundo, seguida por 
            la industria y el uso doméstico. Se espera que para 2050, más de la mitad de la población mundial vivirá en áreas 
            con escasez de agua debido al cambio climático y otros factores. Más del 80% de las aguas residuales generadas por 
            la actividad humana se vierten en ríos o mares sin ningún tratamiento, contaminando las fuentes de agua.
          </p>
        </div>

        <div class="col-12 col-lg-6 mb-3">
          
          <p class="text-dark texto_text text-justi">
            Para cuidar el agua, es crucial reducir el consumo doméstico mediante el uso eficiente de grifos y duchas, la 
            recolección de agua de lluvia y la utilización de aparatos de bajo consumo. En la agricultura, es fundamental implementar
             técnicas de riego por goteo y riego nocturno, así como cultivar plantas que requieran menos agua y sean resistentes a 
             la sequía. También es importante proteger las fuentes de agua mediante la prevención de la contaminación y la restauración 
             de ecosistemas, así como promover programas educativos y campañas de concienciación sobre la importancia del agua y su 
             conservación.
          </p>
        </div>

        <div class="col-12 col-md-8 mb-3">
          
          <p class="text-dark texto_text text-justi">
            Cuidar del agua es una responsabilidad compartida que requiere la acción coordinada de individuos, comunidades, gobiernos y 
            organizaciones internacionales. Cada esfuerzo cuenta para asegurar que las futuras generaciones tengan acceso a este recurso 
            esencial. La implementación de medidas de conservación y el uso responsable del agua son pasos fundamentales para enfrentar 
            esta crisis global y garantizar la sostenibilidad de los recursos hídricos.
          </p>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <img class="rounded-3" src="img/img8.jpg" alt="Imagen de un mundo, como si fuera 100% agua" width="80%" height="80%">
        </div>    

        <div class="col-12">
          <h4 class="fw-bolder text-capitalize text-info text-start py-2">las 3 r</h4>
        </div>

        <div class="col-4">

          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-droplet"></i> Reducir
          </button>
        
        </div>

        <div class="col-4">

          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            <i class="fa-solid fa-recycle"></i> Reciclar
          </button>

        </div>

        <div class="col-4">

          <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <i class="fa-solid fa-glass-water-droplet"></i> Reutilizar
          </button>

        </div>
        
        <!-- Diviosion 4 -->

        <div class="col-12 border border-black border_change my-4"></div>

        <div class="col-12">
        <h2 class="fw-bolder text-capitalize text-success text_tittle py-2">Video</h2>
        </div>

        <div class="col-3"></div>

        <div class="col-12">

          <iframe class="rounded-3 d d-none d-md-none d-lg-block" width="100%" height="500px" src="https://www.youtube.com/embed/K505T4fdshQ?si=mDCtjcsgxr6dnYwm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

          <iframe class="rounded-3 d d-none d-md-block d-lg-none" width="100%" height="300px" src="https://www.youtube.com/embed/K505T4fdshQ?si=mDCtjcsgxr6dnYwm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

          <iframe class="rounded-3 d d-block d-md-none d-lg-none" width="100%" src="https://www.youtube.com/embed/K505T4fdshQ?si=mDCtjcsgxr6dnYwm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        
        </div>

        <div class="col-12">
          <p class="text-dark texto_text">Ve a verlo a Youtube: <a class="btn btn-success py-0" target="_blank" href="https://youtu.be/K505T4fdshQ"><i class="fa-brands fa-youtube"></i></a></p>
          <P class="text-dark texto_text">De paso dejanos un LIKE <i class="fa-regular fa-thumbs-up"></i> y SUSCRIBETE <i class="fa-solid fa-hand-pointer"></i>. ¡¡Por favor!!</P>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-primary" id=footer>
      <div class="row">
        <div class="col-12 text-center my-auto">
          <p class="m-2 d d-block text-light">Copyright © 2024-2030 INJI Derechos Reservados.</p>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reducir</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row text-center">
              <div class="col-6" height="200px">
                <img src="img/c2.jpg" alt="imagen de reutilizar" width="60%">
              </div>
              <div class="col-6" height="200px">
                <img src="img/c2_2.jpg" alt="imagen de reutilizar" width="60%">
              </div>
            </div>
            <p class="text-dark text-justi">
              Significa disminuir el volumen de agua que consumimos. Debemos evitar consumir agua de manera innecesaria sólo por el afán de usarla.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel2">Reutilizar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row text-center">
              <div class="col-6">
                <img src="img/c3.jpg" alt="imagen de reutilizar" width="60%">
              </div>
              <div class="col-6">
                <img src="img/c3_3.jpg" alt="imagen de reutilizar" width="60%">
              </div>
            </div>
            <p class="text-dark text-justi">
              Esto se refiere a ( despues de tratar el agua residual) utilizar la para riego, plantios y/o lavado de automoviles.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel3">Reciclar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row text-center">
              <div class="col-6" height="200px">
                <img src="img/c4.jpg" alt="imagen de reutilizar" width="60%">
              </div>
              <div class="col-6" height="200px">
                <img src="img/c4_4.jpg" alt="imagen de reutilizar" width="100%">
              </div>
            </div>
            <p class="text-dark text-justi">
              Se refiere a tratar el agua recidual, mediante PTAR's (Plantas de Tratamiento de Agua Residuales).
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Conexion con js -->
  <script src="js/app.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>