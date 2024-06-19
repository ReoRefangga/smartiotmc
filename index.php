<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/fevicon.png" type="image/gif" />

  <title>Project</title>

  <script type="text/javascript" src="jquery/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      setInterval(function(){
        $("#cekkekeruhan").load("cekkekeruhan.php");
        $("#ceknutrisi").load("ceknutrisi.php");
        $("#cekketinggian").load("cekketinggian.php");
      }, 1000);
    });
  </script>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  <!-- responsive style -->
  <link rel="stylesheet" href="css/responsive.css" type="text/css" />

  <style>
        .video-container {
            max-width: 100%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            background-color: #fff;
            padding: 10px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
        }
    </style>

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand">
            <span>Hidroponik</span>
          </a>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Monitoring <br>
                      Nilai Sensor
                      Dan Deteksi
                    </h1>
                    <p>
                      Halaman ini digunakan untuk memonitoring nilai sensor yang digunakan pada Green House hidroponik dan menampilkan deteksi kondisi secara live. </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- price section -->

  <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Data Sensor
        </h2>
      </div>
      <div class="price_container ">
        <div class="box">
          <div class="detail-box">
            <h6>
              Kekeruhan
            </h6>
            <h2><span id="cekkekeruhan">0</span></h2>
              <h7>
                Satuan : ntu
              </h7>
          </div>
        </div>

        <div class="box">
          <div class="detail-box">
            <h6>
              Nutrisi
            </h6>
            <h2><span id="ceknutrisi">0</span></h2>
              <h7>
                Satuan : ppm
              </h7>
          </div>
        </div>

        <div class="box">
          <div class="detail-box">
            <h6>
              Ketinggian
            </h6>
            <h2><span id="cekketinggian">0</span></h2>
              <h7>
                Satuan : cm
              </h7>
          </div>
        </div>
      </div>
  </section>
  <!-- price section -->

  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Kuras Air
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-6 mx-auto">
          <div class="form_container">
              <div class="btn_box ">
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">ON</label>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

    <section class="price_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Kondisi Sekarang
        </h2>
      </div>
      <div class="price_container ">
        <div class="box">
          <div class="detail-box">
            <h2><span id="cekkekeruhan">0</span></h2>
          </div>
        </div>
      </div>
  </section>

  <div class="heading_container heading_center">
        <h2>
          Deteksi Kamera
        </h2>
  </div>
  <div class="video-container">
        <iframe width="560" height="315" src="https://youtube.com/embed/gjUha-pkgnA?feature=share" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By Roboflux
      </p>
    </div>
  </footer>
  <!-- footer section -->
</body>

</html>