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

  <title>The Intersection of Design and Functionality in UI/UX</title>
</head>

<body class="bg-dark">

  <?php
  $page = 'blog';
  include 'navbar.php'; // Memuat navbar
  ?>

  <?php
  // Koneksi ke database menggunakan PDO
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db = 'web_portofolio';

  try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Menggunakan prepared statements untuk mengambil data dari tabel
    $stmt = $pdo->prepare("SELECT * FROM blog WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $id = 2; // Contoh, mengambil blog dengan id = 1
    $stmt->execute();

    // Ambil hasilnya
    $blog = $stmt->fetch(PDO::FETCH_ASSOC); // Ambil data sebagai array

    if (!$blog) {
      echo "Blog not found.";
    }
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  ?>

  <!-- News start -->
  <div class="card text-bg-light mb-3 m-4">
    <div class="card-body">
      <h5 class="card-title py-4 fw-bold">
        <?php echo htmlspecialchars($blog['title']); ?>
      </h5>
      <img
        src="<?php echo htmlspecialchars($blog['image_url_tb']); ?>"
        class="card-img-top mx-auto d-block"
        alt="<?php echo htmlspecialchars($blog['title']); ?>"
        style="width: 100%;height: 600px;object-fit: cover;border-radius: 10px;" />
      <p class="card-text pt-4" style="text-align: justify">
        <?php echo htmlspecialchars($blog['description']); ?>
        <br /><br />
        <span class="fw-bold"><?php echo htmlspecialchars($blog['sub_title1']); ?></span>
        <br /><br />
        <?php echo htmlspecialchars($blog['description2']); ?>
        <br /><br />
        <span class="fw-bold"><?php echo htmlspecialchars($blog['sub_title2']); ?></span>
        <br /><br />
        <?php echo htmlspecialchars($blog['description3']); ?>
        <br /><br />
        <span class="fw-bold"><?php echo htmlspecialchars($blog['sub_title3']); ?></span>
        <br /><br />
        <?php echo htmlspecialchars($blog['description4']); ?>
      </p>
      <p class="card-text">
        <small class="text-body-secondary">Last updated <?php echo htmlspecialchars($blog['last_update']); ?></small>
      </p>
    </div>
  </div>
  <!-- News end -->

  <?php include 'footer.php'; ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>