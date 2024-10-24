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
  <title>Blog</title>
</head>

<body class="bg-dark">

  <?php
  $page = 'blog';
  include 'navbar.php';
  ?>

  <?php
  include 'db.php';

  $sql = "SELECT id, title, image_url, description FROM blog LIMIT 2";
  $stmt = $pdo->query($sql);
  $blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
  ?>

  <!-- Blog start -->
  <h2 class="text-danger fw-bold text-center mb-4 pt-5 font-monospace">Blog</h2>
  <?php foreach ($blogs as $blog): ?>
    <div class="card text-bg-light d-flex flex-row m-4" style="height: 320px; border-radius: 25px">
      <img
        src="<?= $blog['image_url']; ?>"
        class="img-fluid p-2 mt-2 ms-2"
        alt="<?= $blog['title']; ?>"
        style="width: 300px; height: 300px; object-fit: cover; border-radius: 25px;" />
      <div class="card-body">
        <h5 class="card-title fw-bold mb-3"><?= $blog['title']; ?></h5>
        <p class="card-text" style="text-align: justify">
          <?= substr($blog['description'], 0, 700);
          ?>.....
          <br /><br />
        </p>
        <a href="Blogs/blog<?= $blog['id']; ?>.php" class="btn btn-danger ps-4 pe-4 font-monospace">continue reading?</a>
      </div>
    </div>
  <?php endforeach; ?>
  <!-- Blog end -->
   


  <?php include 'footer.php'; ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>