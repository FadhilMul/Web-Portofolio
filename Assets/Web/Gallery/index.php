<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <title>Gallery</title>
</head>

<body class="bg-dark">

  <?php
  $page = "gallery";
  include "navbar.php";
  ?>

  <?php
  include 'db.php'; // Ganti dengan path ke file db.php

  // Ambil data dari tabel gallery
  $sql = "SELECT * FROM gallery";
  $stmt = $pdo->query($sql);
  $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <!-- Gallery start -->
  <section class="container py-5 font-monospace">
    <h2 class="text-danger fw-bold text-center mb-4">Gallery</h2>
    <div class="row justify-content-center">

      <?php foreach ($projects as $project): ?>
        <!-- Single Gallery Item -->
        <div class="col-lg-8">
          <div class="card bg-dark border border-light">
            <!-- Carousel start -->
            <div id="galleryCarousel<?= $project['id'] ?>" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?= $project['image_url1'] ?>" class="d-block w-100" alt="Gallery Image 1" />
                </div>
                <div class="carousel-item">
                  <img src="<?= $project['image_url2'] ?>" class="d-block w-100" alt="Gallery Image 2" />
                </div>
                <div class="carousel-item">
                  <img src="<?= $project['image_url3'] ?>" class="d-block w-100" alt="Gallery Image 3" />
                </div>
              </div>
              <!-- Controls -->
              <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel<?= $project['id'] ?>" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel<?= $project['id'] ?>" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <!-- Carousel end -->

            <div class="card-body">
              <h5 class="card-title text-light fw-bold mb-3"><?= $project['project_title'] ?></h5>
              <p class="card-text text-light" style="text-align: justify"><?= $project['project_description'] ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  <!-- Gallery end -->


  <?php include 'footer.php'; ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>