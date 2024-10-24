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
  <title>Contact</title>
</head>

<body class="bg-dark">

  <?php
  $page = "contact";
  include "navbar.php";
  ?>

  <!-- Contact start -->
  <section class="font-monospace" style="padding-top: 30px; padding-bottom: 50px">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <h1 class="text-light fw-bold mb-5">
            Let's  <br /><span class="text-danger">Connect and Collaborate.</span>
          </h1>

          <form action="konfirmasi.php" method="post">
            <div class="row text-light">
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="name">Your Name</label>
                  <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Enter Your Name"
                    class="form-control shadow-none"
                    required />
                </div>
              </div>
              <div class="col-md-6">
                <div class="mb-3">
                  <label for="email">Email</label>
                  <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="contoh@email.com"
                    class="form-control shadow-none"
                    required />
                </div>
              </div>
              <div class="col-12">
                <div class="mb-3">
                  <label for="phone">Phone</label>
                  <input
                    type="tel"
                    name="phone"
                    id="phone"
                    placeholder="08123456789"
                    class="form-control shadow-none"
                    required />
                </div>
              </div>
              <div class="col-12">
                <div class="mb-3">
                  <label for="message">Message</label>
                  <textarea
                    name="message"
                    id="message"
                    cols="30"
                    rows="5"
                    class="form-control shadow-none"
                    placeholder="Let us know your message"
                    required></textarea>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-danger px-5 py-2" type="submit">
                  Just send
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact end -->

  <?php include 'footer.php'; ?>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>