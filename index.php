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
  <title>Home</title>
</head>

<body class="bg-dark ">

  <?php
  $page = "home";
  include "navbar.php";
  ?>

  <?php include 'db.php';

  $stmt = $pdo->prepare("SELECT * FROM hero WHERE id = :id");
  $stmt->execute(['id' => 1]);
  $hero = $stmt->fetch(PDO::FETCH_ASSOC);
  ?>

  <!-- Hero start -->
  <section style="padding-top: 30px; padding-bottom: 50px; background-color: #1a1e21">
    <div class="container-fluid">
      <div class="row justify-content-center font-monospace">
        <div class="col-md-auto" style="margin-top: 100px; padding-right: 100px">
          <h3 class="text-light fw-light font-monospace">Hai, I'm</h3>
          <h1 class="text-light fw-bold font-monospace"><?= htmlspecialchars($hero['name']); ?></h1>
          <h4 class="text-light font-monospace"><?= htmlspecialchars($hero['profession']); ?></h4>
          <p class="text-light font-monospace" style="width: 400px"><?= htmlspecialchars($hero['description']); ?></p>
          <a href="<?= htmlspecialchars($hero['cta_link1']); ?>" class="btn btn-danger mt-2 mb-5 text-decoration-none text-light"><?= htmlspecialchars($hero['cta_button1']); ?></a>
          <a href="<?= htmlspecialchars($hero['cta_link2']); ?>" class="btn btn-outline-danger mt-2 mb-5 ms-3 text-decoration-none text-danger custom-hover"><?= htmlspecialchars($hero['cta_button2']); ?></a>
        </div>
        <img src="<?= htmlspecialchars($hero['image_url']); ?>" alt="Design" class="img-fluid" style="width: 400px; height: 400px" />
      </div>
    </div>
  </section>
  <!-- Hero end -->

  <?php
  $stmt = $pdo->prepare("SELECT * FROM about WHERE id = :id");
  $stmt->execute(['id' => 1]);
  $about = $stmt->fetch(PDO::FETCH_ASSOC);
  ?>

  <!-- About start -->
  <section class="text-light p-5 mt-5 font-monospace">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h2 class="text-danger fw-bold text-center mb-4" style="padding-top: 40px">About Me</h2>
          <p style="text-align: center">
            Hello! I'm <span class="fw-bold"><?= htmlspecialchars($about['name']); ?></span>,<?= htmlspecialchars($about['paragraph1']); ?>...
          </p>
          <div class="d-flex justify-content-center">
            <a href="Assets/Web/About/index.php" class="btn btn-danger mt-2 mb-5 text-decoration-none text-light">more?</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About end -->

  <?php
  // Fetch gallery items
  $stmt = $pdo->prepare("SELECT * FROM gallery");
  $stmt->execute();
  $gallery_items = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <!-- Gallery start -->
  <section class="py-5 font-monospace" style="background-color: #1a1e21">
    <div class="container">
      <h2 class="text-danger text-center fw-bold mb-5" style="padding-top: 40px">My Gallery</h2>
      <div class="row g-4">
        <?php foreach ($gallery_items as $item) { ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <!-- Card for image 1 -->
            <div class="card bg-dark border border-light">
              <img src="<?= htmlspecialchars($item['image1_url_hero']); ?>" class="img-fluid" alt="Gallery Image 1" style="width: 100%; height: auto;" />
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <!-- Card for image 2 -->
            <div class="card bg-dark border border-light">
              <img src="<?= htmlspecialchars($item['image2_url_hero']); ?>" class="img-fluid" alt="Gallery Image 2" style="width: 100%; height: auto;" />
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <!-- Card for image 3 -->
            <div class="card bg-dark border border-light">
              <img src="<?= htmlspecialchars($item['image3_url_hero']); ?>" class="img-fluid" alt="Gallery Image 3" style="width: 100%; height: auto;" />
            </div>
          </div>
        <?php } ?>
      </div>
      <div class="d-flex justify-content-center">
        <a href="Assets/Web/Gallery/index.php" class="btn btn-danger mt-4 mb-5 text-decoration-none text-light">more?</a>
      </div>
    </div>
  </section>
  <!-- Gallery end -->





  <?php
  $stmt = $pdo->prepare("SELECT * FROM blog LIMIT 2");
  $stmt->execute();
  $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <!-- Blog start -->
  <section class="p-5 mt-3">
    <h2 class="text-danger text-center fw-bold mb-5 font-monospace" style="padding-top: 40px">Blogs</h2>

    <div class="container">
      <div class="row justify-content-center">
        <?php foreach ($blogs as $blog) { ?>
          <div class="col-lg-6 col-md-12 mb-4">
            <div class="card text-bg-light h-100" style="border-radius: 25px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="<?= htmlspecialchars($blog['image_url_hero']); ?>" class="img-fluid p-2" alt="<?= htmlspecialchars($blog['title']); ?>" style="border-radius: 25px 0 0 25px; width: 100%; height: 100%; object-fit: cover;" />
                </div>
                <div class="col-md-8">
                  <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?= htmlspecialchars($blog['title']); ?></h5>
                    <p class="card-text flex-grow-1"><?= substr($blog['description'], 0, 200); ?>.....</p>
                    <a href="Assets/Web/Blog/Blogs/blog<?= htmlspecialchars($blog['id']); ?>.php" class="btn btn-danger ps-4 pe-4 font-monospace">continue reading?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

    <div class="d-flex justify-content-center">
      <a href="Assets/Web/Blog/index.php" class="btn btn-danger mt-4 mb-5 text-decoration-none text-light font-monospace">more?</a>
    </div>
  </section>
  <!-- Blog end -->





  <?php include 'footer.php'; ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>