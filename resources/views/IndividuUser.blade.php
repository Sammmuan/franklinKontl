<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Saripudin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/pricing/">

    

    

<link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="pricing.css" rel="stylesheet">
  </head>
  <body>
    
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-3">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-car-front-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189l.956-1.913A.5.5 0 0 1 4.309 3h7.382a.5.5 0 0 1 .447.276l.956 1.913a.51.51 0 0 1-.497.731c-.91-.073-3.35-.17-4.597-.17-1.247 0-3.688.097-4.597.17a.51.51 0 0 1-.497-.731Z"/>
        </svg>
        <span class="fs-4">Bus Saripudin</span>
      </a>

      <nav class="d-inline-flex mt-3 mt-md-0 ms-md-auto justify-content-between">
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Saldo Rp 20.000.000</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Partner Kami</a>
        <a class="me-3 py-2 text-dark text-decoration-none" href="#">Support</a>
        <a class="py-2 text-dark text-decoration-none" href="#">Log Out</a>
      </nav>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal">Pemesanan Bus Individu</h1>
      <div class="row g-3">
        <div class="col">
          <label for="">Dari</label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Cari Dari</option>
            <option value="Solo">Solo</option>
            <option value="Sleman">Sleman</option>
            <option value="Kulon Progo">Kulon Progo</option>
            <option value="Yogyakarta">Yogyakarta</option>
            <option value="Gunung Kidul">Gunung Kidul</option>
            <option value="Bantul">Bantul</option>
          </select>
          
        </div>
        <div class="col">
          <label for="">Tujuan</label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>Cari Tujuan</option>
            <option value="Solo">Solo</option>
            <option value="Sleman">Sleman</option>
            <option value="Kulon Progo">Kulon Progo</option>
            <option value="Yogyakarta">Yogyakarta</option>
            <option value="Gunung Kidul">Gunung Kidul</option>
            <option value="Bantul">Bantul</option>
          </select>
        </div>
        <div class="col">
          <label for="">Jumlah Penumpang</label>
          <input type="number" class="form-control" placeholder="Jumlah Penumpang /Orang" aria-label="JumlahPenumpang">
        </div>
        <div class="col">
          <label for="">Tanggal Keberangkatan</label>
          <input type="date" class="form-control" placeholder="Tnggal Keberangkatan" aria-label="TanggalKeberangkatan ">
        </div>
        <div>
        <button type="button" class="btn btn-secondary">Cari Bus</button>
      </div>
      </div>
      
    </div>
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <p class="lead">
            <a href="/IndividuUser" class="btn btn-lg btn-dark fw-bold ">Pemesanan Individu</a>
          </p>
        </div>
        <div class="col">
          <p class="lead">
            <a href="/institusi" class="btn btn-lg btn-info fw-bold ">Pemesanan Institusi</a>
          </p>
        </div>
      </div>
    <div class="album py-5 bg-light">
      <div class="container">
  
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://plus.unsplash.com/premium_photo-1661916408325-5280388bf1e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YnVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
  
              <div class="card-body">
               <h3>Solo-Yogyakarta</h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                   <a href="/cekJadwal" class="btn btn-sm btn-outline-secondary">Jadwal Keberangkatan</a>
 
                  </div>
                
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://plus.unsplash.com/premium_photo-1661916408325-5280388bf1e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YnVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
  
              <div class="card-body">
                <h3>Yogyakarta-Solo</h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="/cekJadwal" class="btn btn-sm btn-outline-secondary">Cek Jadwal</a>
 
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://plus.unsplash.com/premium_photo-1661916408325-5280388bf1e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YnVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
  
              <div class="card-body">
                <h3>Sleman-Bantul</h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Jadwal Keberangkatan</button>
 
                  </div>
             
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://plus.unsplash.com/premium_photo-1661916408325-5280388bf1e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YnVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
              <div class="card-body">
                <h3>Bantul-Sleman</h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Jadwal Keberangkatan</button>
 
                  </div>
             
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://plus.unsplash.com/premium_photo-1661916408325-5280388bf1e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YnVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
  
              <div class="card-body">
                <h3>Gunung Kidul-Sleman<h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Jadwal Keberangkatan</button>
 
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://plus.unsplash.com/premium_photo-1661916408325-5280388bf1e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YnVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
  
              <div class="card-body">
                <h3>Sleman-Gunung Kidul</h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Jadwal Keberangkatan</button>
 
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
  
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://plus.unsplash.com/premium_photo-1661916408325-5280388bf1e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YnVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
  
              <div class="card-body">
               <h3>Sleman-Kulon Progo</h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Jadwal Keberangkatan</button>
 
                  </div>
                
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://plus.unsplash.com/premium_photo-1661916408325-5280388bf1e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YnVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
  
              <div class="card-body">
                <h3>Bantul-Solo</h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Jadwal Keberangkatan</button>
 
                  </div>
            
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <img src="https://plus.unsplash.com/premium_photo-1661916408325-5280388bf1e3?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8YnVzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="">
  
              <div class="card-body">
                <h3>Solo-Bantul</h3>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Jadwal Keberangkatan</button>
 
                  </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
   
  </main>

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-6 col-md">
        <h5>Follow Kami Di</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Instagram</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">You Tube</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Facebook</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Twitter</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
        </ul>
      </div>
       
  </footer>
</div>


    
  </body>
</html>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>