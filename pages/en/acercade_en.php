<!DOCTYPE html>
<html lang="en-mex">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>injiWater</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/aef90a9808.js" crossorigin="anonymous"></script>

        <link rel="shortcut icon" href="../../img/gotita_triste.ico" type="image/x-icon">

        <!-- conexion con css -->
        <link rel="stylesheet" href="../../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body class="body1" id="body">

        <nav class="navbar navbar-expand-lg bg-primary" id="navbar_container">
          <div class="container">
            <h1 class="rounded-3 text-light fw-bold mx-5 ">About Us</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <button class="btn btn-light py-1 rounded-3 shadow-lg mx-1 my-3" type="button" id="theme">
                <i class="fa-regular fa-moon" id="theme_icon"></i>
              </button> 
              <a class="btn btn-light py-1 rounded-3 shadow-lg mx-1 my-3" href="index_en.php " id="go_back">
                <i class="fa-solid fa-angle-left"></i>
              </a> 
            </div>
          </div>
        </nav>
        
         <div class="">
          <div class="container text-light" id="text_color">

              <div class="row m-3 fs-5">
    
                <div class="col-12 col-lg-6 mb-3">
                  <h2 class="fw-bolder text-capitalize text-primary mb-5 fs-1">Who are we?</h2>
                  <h4 class="text-dark fs-4 h4"><i class="fa-solid fa-droplet me-2 icon-color2"></i>Isis Nayeli Centeno Madrid</h4>
                  <h4 class="text-dark fs-4 h4"><i class="fa-solid fa-droplet me-2 icon-color2"></i>Jesus Ivan Morales Tapia</h4>
                </div>

                <div class="col-12 mb-3">
                  <h2 class="fw-bolder text-capitalize text-primary text_tittle mb-5">Bibliography</h2>
                </div>
                
                <div class="col-12">
                  <ul class="list-unstyled">
                    <li class="linktxt texto_lc mb-3"><i class="fa-solid fa-fish me-2 icon-color2"></i>Organización Mundial de la Salud. (2022). Water Sanitation Hygiene. Recuperado de 
                      <a class="text-primary" href="https://www.who.int/teams/environment-climate-change-and-health/water-sanitation-and-health">https://www.who.int/teams/environment-climate-change-and-health/water-sanitation-and-health</a>
                    </li>
                    <li class="linktxt texto_lc mb-3"><i class="fa-solid fa-fish me-2 icon-color2"></i>Instituto Nacional de Estadística y Geografía (INEGI). (2021). Estadísticas del Agua en México. Recuperado de 
                      <a class="text-primary" href="https://www.inegi.org.mx/app/biblioteca/ficha.html?upc=702825287992">https://www.inegi.org.mx/app/biblioteca/ficha.html?upc=702825287992</a>
                    </li>
                    <li class="linktxt texto_lc mb-3"><i class="fa-solid fa-fish me-2 icon-color2"></i>Programa de las Naciones Unidas para el Medio Ambiente (PNUMA). (2021). Informe Mundial sobre el Desarrollo de los Recursos Hídricos. Recuperado de 
                      <a class="text-primary" href="https://www.unep.org/es/recursos/informe-mundial-sobre-el-desarrollo-de-los-recursos-hidricos">https://www.unep.org/es/recursos/informe-mundial-sobre-el-desarrollo-de-los-recursos-hidricos</a>
                    </li>
                  </ul>
                </div>
    
                <div class="col-12 mb-3">
                  <h2 class="fw-bolder text-capitalize text-primary mb-5 fs-1">¿Do you want to contact us?</h2>
                  <h4 class="text-dark fs-4">Call us to...</h4>
                  <h4 class="text-dark fs-4">+1 (618) 625-8313</h4>
                  <h4 class="text-dark fs-4">In the other hand, send us a email:</h4>
                  <div class="row justify-content-center">
                    <div class="col-6">
                      <form class="text-center was-validated" novalidate id="envioCorreo">

                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon1">@</span>
                          <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo" aria-label="Correo" aria-describedby="basic-addon1" pattern="[a-z A-Z @ \_ .]" minlength="7" required>
                        </div>

                        <div class="input-group mb-3">
                          <span class="input-group-text" id="basic-addon2">Nombre</span>
                          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon2" pattern="[a-z A-Z]+" minlength="3" required>
                        </div>

                        <input class="form-control rounded-3 mb-3 hidden" type="date" id="fecha" name="fecha" style="display: none;" disabled />

                        <div class="input-group mb-3">
                          <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje" aria-label="With textarea" minlength="3" required></textarea>
                        </div>

                        <button class="btn btn-outline-danger py-0" method="reset()" type="reset">Borrar Datos <i class="fa-regular fa-trash-can"></i></button>
                        <button class="btn btn-outline-success py-0" type="submit" name="submit">Enviar <i class="fa-regular fa-paper-plane"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
          </div>
         </div>

        <div class="container-fluid bg-primary">
        <div class="row">
            <div class="col-12 text-center my-auto">
              <p class="m-2 d d-block text-light">Copyright © 2024-2030 INJI Derechos Reservados.</p>
            </div>
        </div>
        </div>
  
        <!-- Conexion con js -->
        <script src="../../js/acercade_app_en.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      </body>
</html>