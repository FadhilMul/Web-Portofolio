<!-- Navbar start -->
<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark shadow-lg p-4 font-monospace">
    <div class="container-fluid">
        <a class="navbar-brand px-4 fw-bold text-danger" href="index.php">
            <h4 class="fw-bolder">FadhilMul.</h4>
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-5" id="navbarNav">
            <ul class="navbar-nav ms-auto px-4">
                <li class="nav-item">
                    <a class="nav-link <?php if ($page == "home") echo "active"; ?>" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link <?php if ($page == "about") echo "active"; ?>" href="Assets/Web/About/index.php">About Me</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link <?php if ($page == "gallery") echo "active"; ?>" href="Assets/Web/Gallery/index.php">Gallery</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link <?php if ($page == "blog") echo "active"; ?>" href="Assets/Web/Blog/index.php">Blog</a>
                </li>
                <li class="nav-item ms-3">
                    <a class="nav-link <?php if ($page == "contact") echo "active"; ?>" href="Assets/Web/Contact/index.php">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar end -->