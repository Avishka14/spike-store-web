<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spike's Store | Welcome</title>

    <link rel="shortcut icon" href="img/webimg/icon.ico">
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: system-ui, sans-serif;
            background-color: #fafafa;
        }

        .btn-green {
            background-color: #198754;
            color: #fff;
            border-radius: 50px;
        }

        .btn-green:hover {
            background-color: #146c43;
        }

        .product-card img {
            object-fit: cover;
            height: 220px;
            border-radius: .5rem;
        }

        .product-card {
            border: 1px solid #eee;
            transition: .2s;
        }

        .product-card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
        }
    </style>

</head>

<body>


    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand fw-semibold text-success" href="#">Spike's Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#store">Store</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="btn btn-green ms-lg-3 px-3" href="#signup">Sign Up</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <header class="py-5 bg-light">
        <div class="container text-center">
            <h1 class="fw-bold text-success">Spike's Store</h1>
            <p class="lead text-muted">Minimalist cactus collections for modern homes.</p>
            <div class="mt-3">
                <a href="#store" class="btn btn-green px-4 me-2">Shop Now</a>
                <a href="#signup" class="btn btn-outline-success px-4">Join Us</a>
            </div>
        </div>
    </header>

    <!-- Store -->
    <section id="store" class="py-5">
        <div class="container">
            <h2 class="fw-semibold mb-4 text-success">Our Products</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card product-card">
                        <img src="https://picsum.photos/400/300?random=1" class="card-img-top" alt="Cactus">
                        <div class="card-body">
                            <h5 class="card-title">Desert Glow</h5>
                            <p class="text-muted small">Perfect for minimal interiors.</p>
                            <button class="btn btn-green w-100">View</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card product-card">
                        <img src="https://picsum.photos/400/300?random=2" class="card-img-top" alt="Cactus">
                        <div class="card-body">
                            <h5 class="card-title">Urban Green</h5>
                            <p class="text-muted small">Compact, easy to care for.</p>
                            <button class="btn btn-green w-100">View</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card product-card">
                        <img src="https://picsum.photos/400/300?random=3" class="card-img-top" alt="Cactus">
                        <div class="card-body">
                            <h5 class="card-title">Gift Edition</h5>
                            <p class="text-muted small">An evergreen present.</p>
                            <button class="btn btn-green w-100">View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about" class="py-5 bg-white border-top border-bottom">
        <div class="container text-center">
            <h2 class="fw-semibold text-success">About Us</h2>
            <p class="text-muted mt-3 mb-0">
                We source sustainable cactus plants and deliver them directly to your home.
                Clean, minimal, and built to last — just like your style.
            </p>
        </div>
    </section>

    <!-- Signup -->
    <section id="signup" class="py-5">
        <div class="container text-center">
            <h3 class="fw-semibold text-success">Join Our Community</h3>
            <p class="text-muted">Get updates on new collections and care tips.</p>
            <form class="row g-2 justify-content-center mt-3">
                <div class="col-md-4">
                    <input type="email" class="form-control rounded-pill" placeholder="Your email">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-green w-100 rounded-pill">Sign Up</button>
                </div>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <small>&copy; 2025 Spike's Store. All rights reserved.</small>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>

</html>