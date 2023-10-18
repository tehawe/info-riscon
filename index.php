<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Info Riscon</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-md bg-body fixed-top">
    <div class="container-fluid col-10">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarToggler">
        <a class="navbar-brand d-flex" href="#"><img src="img/logo-info-riscon.png" height="40" /></a>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <!-- Dropdown -->
            <div class="dropdown">
              <button class="nav-link dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Bisnis</button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Produk</a></li>
                <li><a class="dropdown-item" href="#">Jasa</a></li>
                <li><a class="dropdown-item" href="#">Koperasi</a></li>
              </ul>
            </div>
            <!-- End of Dropdown -->
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Informasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Program</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Kontak</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- End of Navbar -->

  <!-- Hero -->
  <section class="container" id="hero">
    <div id="carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://source.unsplash.com/600x350?food" class="d-block w-100" alt="Food" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Food</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores reprehenderit perferendis iure sint qui doloremque?</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/600x350?beverage" class="d-block w-100" alt="Beverage" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Beverage</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, praesentium aspernatur.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="https://source.unsplash.com/600x350?snack" class="d-block w-100" alt="Snack" />
          <div class="carousel-caption d-none d-md-block">
            <h3>Snack</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dicta exercitationem totam hic libero?</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section>
  <!-- End of hero -->

  <!-- Content -->
  <!-- PRODUK -->
  <div class="container justify-content-between mt-3" id="content">
    <div class="row text-center">
      <div class="col">
        <h2>Produk</h2>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus tempora ratione culpa blanditiis vero quos, eum similique cum quisquam, delectus modi rerum vel deleniti molestiae libero dolorum assumenda, perspiciatis dicta.
        </p>
      </div>
    </div>
    <div class="row d-flex row-cols-1 row-cols-md-3 g-2 mt-2 mx-auto">
      <div class="col">
        <div class="card border-0 justify-content-center">
          <img src="https://source.unsplash.com/200x200?food" class="card-img-top w-75 mx-auto rounded-circle img-thumbnail" alt="food" />
          <div class="card-body">
            <h5 class="card-title">Food</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-0 justify-content-center">
          <img src="https://source.unsplash.com/200x200?beverage" class="card-img-top w-75 mx-auto rounded-circle img-thumbnail" alt="beverage" />
          <div class="card-body">
            <h5 class="card-title">Beverage</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-0 justify-content-center">
          <img src="https://source.unsplash.com/200x200?snack" class="card-img-top w-75 mx-auto rounded-circle img-thumbnail" alt="snack" />
          <div class="card-body">
            <h5 class="card-title">Snack</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row text-center">
      <div class="col">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis, quasi?</p>
        <a class="btn btn-primary" href="#" role="button">Cek</a>
      </div>
    </div>
  </div>
  <!-- JASA -->
  <div class="container justify-content-between" id="content">
    <h2 class="text-center m-2">Jasa</h2>
    <div class="row d-flex row-cols-1 row-cols-md-3 g-2 mt-2 mx-auto">
      <div class="col">
        <div class="card border-0 justify-content-center">
          <img src="https://source.unsplash.com/200x200?house" class="card-img-top w-75 mx-auto rounded-circle img-thumbnail" alt="kontrakan" />
          <div class="card-body">
            <h5 class="card-title">Kontrakan</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-0 justify-content-center">
          <img src="https://source.unsplash.com/200x200?welding" class="card-img-top w-75 mx-auto rounded-circle img-thumbnail" alt="welding" />
          <div class="card-body">
            <h5 class="card-title">Welding</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card border-0 justify-content-center">
          <img src="https://source.unsplash.com/200x200?construction" class="card-img-top w-75 mx-auto rounded-circle img-thumbnail" alt="construction" />
          <div class="card-body">
            <h5 class="card-title">Construction</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- End of Content -->

  <!-- Contact -->
  <div class="container" id="kontak">
    <div class="row justify-content-md-center">
      <div class="col-md-5 my-2 mx-auto border-1 border-black" id="lokasi">
        <h3>Lokasi</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.166571219999!2d107.74364545941351!3d-6.989652160531776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68c38fc277f5ad%3A0x2dd6f4af9d640936!2sGrand%20Riscon%20Rancaekek!5e0!3m2!1sid!2sid!4v1697601631422!5m2!1sid!2sid" style="border: 0; width: 100%; min-height: 300px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-md-5 my-2 mx-auto border-1" id="hubungi">
        <h3>Hubungi Kami</h3>
        <form action="#">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" />
          </div>
          <div class="mb-3">
            <label for="telp" class="form-label">No. Telepon / Whatsapp</label>
            <input type="number" class="form-control" id="telp" name="telp" placeholder="No Telp / Whatsapp" />
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" />
          </div>
          <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <button type="submit" class="btn btn-primary" id="btn-kirim">Kirim</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-3 mb-3">
          <h5>Menu Utama</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Beranda</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Bisnis</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Informasi</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Kontak</a></li>
          </ul>
        </div>

        <div class="col-6 col-md-3 mb-3">
          <h5>Bisnis</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Produk</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Jasa</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Koperasi</a></li>
          </ul>
        </div>

        <div class="col-md-4 offset-md-1 mb-3">
          <form>
            <h5>Berlangganan dengan Jajanan Riscon</h5>
            <p>Anda akan mendapatkan segala informasi terbaru dari kami.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Alamat Email" fdprocessedid="9wbd2" />
              <button class="btn btn-primary" type="button" fdprocessedid="3nzejl">Berlangganan</button>
            </div>
          </form>
        </div>
      </div>

      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p class="fs-6">© 2023 THW Project. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3">
            <a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#twitter"></use>
              </svg></a>
          </li>
          <li class="ms-3">
            <a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#instagram"></use>
              </svg></a>
          </li>
          <li class="ms-3">
            <a class="link-body-emphasis" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#facebook"></use>
              </svg></a>
          </li>
        </ul>
      </div>
    </footer>
  </div>
  <!-- End of footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>