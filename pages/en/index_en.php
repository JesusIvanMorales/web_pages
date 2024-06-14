<!DOCTYPE html>
<html>

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

  <nav class="navbar navbar-expand-lg bg-navbar1 bg-primary" id="navbar_container">
    <div class="container">
      <h1 class="rounded-3 text-light texto_h1 fw-bold mx-5 ">Water Care.</h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <button class="btn bg-transparent py-1 rounded-3 shadow-lg mx-1 my-3" type="button" id="theme">
          <i class="fa-regular fa-moon" id="theme_icon"></i>
        </button>
        <a class="btn bg-transparent py-1 rounded-3 shadow-lg mx-1 my-3" href="acercade_en.php" id="more_info">
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
        <img src="../../img/img3.png" class="d-block w-100 css-img" alt="imagen 1">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <p class="mt-5 fs-3 text-uppercase">The water is running out, and the world along with it.</p>
          <h2 class="display-1 fw-bolder text-capitalize">Care the Water</h2>
        </div>
      </div>

      <div class="carousel-item css-item">
        <img src="../../img/img2.jpg" class="d-block w-100 css-img" alt="imagen 1">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <h2 class="display-1 fw-bolder text-capitalize">Together is easier</h2>
        </div>
      </div>

      <div class="carousel-item css-item">
        <img src="../../img/img1.jpg" class="d-block w-100 css-img" alt="imagen 1">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block bg-lg">
          <h4 class="mt-5 fs-3 fw-bold text-uppercase">Water used to make everyday products.</h4>
          <p class="mb-0 fs-4">1 tomato -> 13 lts</p>
          <p class="mb-0 fs-4">1 Orange -> 50 lts</p>
          <p class="mb-0 fs-4">1 Apple -> 70 lts</p>
          <p class="mb-0 fs-4">1 Phone -> 910 lts</p>
          <p class="mb-0 fs-4">1kg Cow -> 15,000 lts</p>
          <p class="mb-0 fs-4">1kg Chicken -> 4,300 lts</p>
          <p class="mb-0 fs-4">1kg Pig -> 6,000 lts</p>
          <p class="mb-0 fs-4">1 Egg Carton -> 3,300 lts</p>
          <p class="mb-0 fs-4">1 Denim pants -> 7,800 lts</p>
        </div>
      </div>

      <div class="carousel-item css-item">
        <img src="../../img/img4.png" class="d-block w-100 css-img" alt="imagen 1">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <p class="mt-5 fs-3 text-uppercase">It's <span class="fw-bold text-black text_tittle bg-light rounded-3 px-2">ABOUT TO BLOW UP</span>
          and just <span class="fw-bold text-black text_tittle bg-light rounded-3 px-2">AROUND THE CORNER.</span></p>
          <h2 class="display-1 fw-bolder text-capitalize">There´s a problem</h2>
        </div>
      </div>

      <div class="carousel-item css-item">
        <img src="../../img/img5.png" class="d-block w-100 css-img" alt="imagen 1">
        <div class="carousel-caption top-0 mt-4 d-none d-md-block">
          <p class="mt-5 fs-3 text-uppercase">Water</p>
          <h2 class="display-1 fw-bolder text-capitalize">A invaluable resource.</h2>
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
          <h2 class="fw-bolder text-capitalize text-primary text_tittle py-2">THE ACTUAL WATER PROBLEM</h2>
        </div>

        <div class="col-12 col-lg-6 mb-3">
          <h4 class="text-primary">Specific data about Ciudad Juarez</h4>
          <p class="text-dark texto_text text-justi">
            In Ciudad Juarez, water scarcity is becoming an increasingly critical issue affecting its inhabitants. 
            Our city is facing a significant decrease in the availability of fresh water due to overexploitation of 
            aquifers and inadequate precipitation (rainfall). Extreme temperatures and prolonged droughts have further 
            exacerbated the situation, impacting both the supply of drinking water and agricultural activities. 
            Additionally, demographic growth and rapid urbanization in our country have increased the demand for water, 
            putting additional pressure on already limited water resources. Pollution of water sources by industrial 
            and domestic activities has also deteriorated the quality of available water, making it increasingly difficult 
            to ensure an adequate supply for the population.
          </p>
        </div>

        <div class="col-12 col-lg-6">
          <diw class="row">
            <div class="col-12 mb-3">
              <h4 class="text-primary">Reflection</h4>
              <p class="text-dark texto_text text-justi">
                Water is a vital resource for life on Earth. However, humanity faces an increasing challenge in managing and conserving 
                this essential resource. Water scarcity not only affects people in terms of access to clean water but also has significant 
                repercussions on agriculture, industry, and natural ecosystems. The combination of natural and human factors is leading 
                many regions to critical situations where water, once abundant, is becoming increasingly scarce.
              </p>
            </div>

            <div class="col-12 col-md-6 mb-3">
              <img class="rounded-3" src="../../img/img6.jpg" alt="Imagen de un mundo, como si fuera 100% agua" width="100%" height="100%">
            </div>

            <div class="col-12 col-md-6 mb-3">
              <img class="rounded-3" src="../../img/img7.jpg" alt="Imagen de un mundo, como si fuera 100% agua" width="100%" height="100%">
            </div>
          </diw>
        </div>

        <!-- Diviosion 1 -->

        <div class="col-12 border border-black border_change my-4"></div>

        <div class="col-12 mb-3">
          <h2 class="fw-bolder text-capitalize text-primary text_tittle py-2 mb-5">The main causes of water scarcity</h2>
          <div class="row">
            
            <div class="col-12 col-md-6 col-lg-3 mb-2 text-justi">
              <div class="card bg-transparent text-dark texto_text" style="width: 18rem;">
                <img class="card-img-top" src="../../img/1.jpeg" alt="Imagen de la escasez de agua" width="100%">
                <div class="card-body">
                  <h5 class="card-title text-center text-info">Overexploitation of Aquifers</h5>
                  <p class="card-text">
                    The excessive extraction of water from aquifers has led to a significant decline in groundwater levels. 
                    This is due to population growth and an increase in the demand for water for domestic, industrial, and agricultural use.
                  </p>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-3 mb-2 text-justi px-auto">
              <div class="card bg-transparent text-dark texto_text" style="width: 18rem;">
                <img class="card-img-top" src="../../img/2.jpeg" alt="Imagen de la escasez de agua" width="100%">
                <div class="card-body">
                  <h5 class="card-title text-center text-info">Prolonged Droughts</h5>
                  <p class="card-text">
                    The arid climate, exacerbated by climate change, has increased droughts, reducing the availability of surface and groundwater, 
                    complicating water supply for the city, aquifer recharge, and communities.
                  </p>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-3 mb-2 text-justi px-auto">
              <div class="card bg-transparent text-dark texto_text" style="width: 18rem;">
                <img class="card-img-top" src="../../img/3.jpeg" alt="Imagen de la escasez de agua" width="100%">
                <div class="card-body">
                  <h5 class="card-title text-center text-info">Population Growth</h5>
                  <p class="card-text">
                    The significant population growth of the city has increased the demand for water, exacerbating the issue due to uncontrolled urban 
                    growth and a lack of adequate infrastructure to efficiently manage water resources.
                  </p>
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-3 mb-2 text-justi px-auto">
              <div class="card bg-transparent text-dark texto_text" style="width: 18rem;">
                <img class="card-img-top" src="../../img/4.jpeg" alt="Imagen de la escasez de agua" width="100%">
                <div class="card-body">
                  <h5 class="card-title text-center text-info">Water pollution</h5>
                  <p class="card-text">
                    Water contamination from urban, industrial, and agricultural waste significantly reduces the amount of water available for consumption, 
                    posing a risk to public health and affecting water quality in our city.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>

        <!-- Diviosion 2 -->

        <div class="col-12 border border-black border_change my-4"></div>

        <div class="col-12 mb-3">
          <h2 class="fw-bolder text-capitalize text-primary text_tittle py-2 mb-5">KEY FACTS AND WAYS TO CARE FOR IT</h2>
        </div>

        <div class="col-12 col-lg-6 mb-3">
          
          <p class="text-dark texto_text text-justi">
            According to the World Health Organization (WHO), approximately 2.2 billion people lack access to safe drinking water. 
            Agriculture consumes around 70% of the world's available freshwater, followed by industry and domestic use. It is 
            expected that by 2050, more than half of the world's population will live in areas with water scarcity due to climate 
            change and other factors. Over 80% of wastewater generated by human activity is discharged into rivers or seas without 
            any treatment, contaminating water sources.
          </p>
        </div>

        <div class="col-12 col-lg-6 mb-3">
          
          <p class="text-dark texto_text text-justi">
            To care for water, it is crucial to reduce domestic consumption through the efficient use of taps and showers, the collection of rainwater, and the use of low-flow appliances. In agriculture, it is 
            essential to implement drip irrigation and nighttime irrigation techniques, as well as to cultivate plants that require less water and are drought-resistant. It is also important to protect water sources 
            by preventing pollution and restoring ecosystems, and to promote educational programs and awareness campaigns about the importance of water and its conservation.
          </p>
        </div>

        <div class="col-12 col-md-8 mb-3">
          
          <p class="text-dark texto_text text-justi">
            Caring for water is a shared responsibility that requires coordinated action from individuals, communities, governments, and international organizations. Every effort counts to ensure that future 
            generations have access to this essential resource. Implementing conservation measures and responsibly using water are fundamental steps in addressing this global crisis and ensuring the sustainability of 
            water resources.
          </p>
        </div>

        <div class="col-12 col-md-4 mb-3">
          <img class="rounded-3" src="../../img/img8.jpg" alt="Imagen de un mundo, como si fuera 100% agua" width="80%" height="80%">
        </div>    

        <div class="col-12">
          <h4 class="fw-bolder text-capitalize text-primary text-start py-2">The 3 R</h4>
        </div>

        <div class="col-4">

          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <i class="fa-solid fa-droplet"></i> Reduce
          </button>
        
        </div>

        <div class="col-4">

          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">
            <i class="fa-solid fa-recycle"></i> Recycle
          </button>

        </div>

        <div class="col-4">

          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">
            <i class="fa-solid fa-glass-water-droplet"></i> Re-use
          </button>

        </div>
        
        <!-- Diviosion 4 -->

        <div class="col-12 border border-black border_change my-4"></div>

        <div class="col-12">
        <h2 class="fw-bolder text-capitalize text-primary text_tittle py-2">Video</h2>
        </div>

        <div class="col-3"></div>

        <div class="col-12">

          <iframe class="rounded-3 d d-none d-md-none d-lg-block" width="100%" height="500px" src="https://www.youtube.com/embed/0gNSqCJ7FwY?si=x9e7zPuql_FUe999" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

          <iframe class="rounded-3 d d-block d-md-none d-lg-none" width="100%" src="https://www.youtube.com/embed/0gNSqCJ7FwY?si=x9e7zPuql_FUe999" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

          <iframe class="rounded-3 d d-none d-md-block d-lg-none" width="100%" height="300px" src="https://www.youtube.com/embed/0gNSqCJ7FwY?si=x9e7zPuql_FUe999" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

        </div>

        <div class="col-12">
          <p class="text-dark texto_text">Go and watch it in Youtube: <a class="btn btn-success py-0" target="_blank" href="https://youtu.be/0gNSqCJ7FwY"><i class="fa-brands fa-youtube"></i></a></p>
          <P class="text-dark texto_text">Please!! Give us a Thumbs Up <i class="fa-regular fa-thumbs-up"></i> and FOLLOW <i class="fa-solid fa-hand-pointer"></i>. ¡¡Por favor!!</P>
        </div>
      </div>
    </div>

    <div class="container-fluid bg-primary" id=footer>
      <div class="row">
        <div class="col-12 text-center my-auto">
          <p class="m-2 d d-block text-light">Copyright © 2024-2030 INJI.</p>
        </div>
      </div>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Reduce</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="../../img/c2.jpg" alt="imagen de reutilizar" width="40%">
            <img src="../../img/c2_2.jpg" alt="imagen de reutilizar" width="40%">
            <p class="text-dark text-justi">
              Means reducing the volume of water we consume. We should avoid using water unnecessarily just for the sake of using it.
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
            <h5 class="modal-title" id="exampleModalLabel2">Re-use</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="../../img/c3.jpg" alt="imagen de reutilizar" width="40%">
            <img src="../../img/c3_3.jpg" alt="imagen de reutilizar" width="40%">
            <p class="text-dark text-justi">
              This refers to (after treating wastewater) using it for irrigation, planting, and/or car washing.
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
            <h5 class="modal-title" id="exampleModalLabel3">Recycle</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <img src="../../img/c4.jpg" alt="imagen de reutilizar" width="40%">
            <img src="../../img/c4_4.jpg" alt="imagen de reutilizar" width="50%">
            <p class="text-dark text-justi">
              This refers to treating wastewater through WWTPs (Wastewater Treatment Plants).
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
  <script src="../../js/app_en.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>