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
  <title>About Me</title>
</head>

<body class="bg-dark">

  <?php
  $page = "about";
  include "navbar.php";
  ?>

  <!-- Menghubungkan ke database -->
  <?php
  include 'db.php';

  // Mengambil data dari tabel about
  $sql = "SELECT * FROM about WHERE id = 1";
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $about = $stmt->fetch(PDO::FETCH_ASSOC);
  ?>

  <!-- About start -->
  <section class="text-light p-5 font-monospace">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h2 class="text-danger fw-bold text-center mb-4">About Me</h2>
          <p style="text-align: justify">
            Hello! I'm <span class="fw-bold"><?php echo $about['name']; ?></span>, <?php echo $about['paragraph1']; ?>
          </p>
          <p style="text-align: justify"><?php echo $about['paragraph2']; ?></p>
          <p style="text-align: justify"><?php echo $about['paragraph3']; ?></p>
          <p style="text-align: justify"><?php echo $about['paragraph4']; ?></p>
          <p style="text-align: justify"><?php echo $about['paragraph5']; ?></p>
          <a href="../Gallery/index.php" class="btn btn-danger mt-2 mb-5 text-decoration-none text-light">See my gallery portfolio?</a>
        </div>
      </div>
    </div>
  </section>
  <!-- About end -->


  <?php include 'footer.php'; ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>