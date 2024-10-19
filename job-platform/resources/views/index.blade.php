<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hassle-Free Time Tracking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <style>
        /* Move body background to Bootstrap */
        .cta {
            background-color: #6A5ACD;
            border-radius: 8px;
            transition: transform 0.3s;
        }

        .cta:hover {
            transform: translateY(-3px);
        }

        footer {
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.05);
        }

        .sign-in {
            background: linear-gradient(135deg, #6A5ACD, #8A2BE2);
            border-radius: 50px;
            padding: 0.6rem 1.5rem;
            transition: all 0.4s ease;
        }

        .sign-in:hover {
            background-color: #5a4db2;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    <!-- Header Section -->
    <header class="container-fluid py-3 bg-white shadow-sm sticky-top">
        <div class="row align-items-center">
            <div class="col-md-3 text-start">
                <div class="logo-container"></div>
            </div>
            <nav class="col-md-6 text-center">
                <ul class="navbar-nav d-flex flex-row justify-content-around w-100">
                    <li class="nav-item">
                        <a class="nav-link px-3 py-2 text-dark" href="#">Plans</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 py-2 text-dark" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 py-2 text-dark" href="#">Job</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 py-2 text-dark" href="#">Features</a>
                    </li>
                </ul>
            </nav>
            <div class="col-md-3 text-end">
                <button href="{{ route('login') }}" class="sign-in btn text-white">Sign In</button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container flex-grow-1">
        <div class="row align-items-center">
            <section class="col-md-6">
                <h1 class="display-6 fw-bold">Find your dream job today.</h1>
                <p class="mt-3 fs-5 text-muted">Export any report into any format you need.</p>
                <button class="cta btn text-white mt-4 px-4 py-3">Download Now</button>
            </section>

            <section class="col-md-5 d-flex justify-content-end">
                <div class="bg-light p-4 rounded-4" style="max-width: 600px;">
                    <img src="/image-1.png" alt="Image" class="img-fluid rounded">
                </div>
            </section>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="container-fluid py-2 bg-light">
        <div class="row align-items-center">
            <div class="col-md-10">
                <div class="fs-6 text-muted">Sukhpal Shergill - 2024</div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // GSAP Ripple animation on hover
        document.querySelector('.sign-in').addEventListener('mouseenter', function (e) {
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            this.appendChild(ripple);

            const rect = this.getBoundingClientRect();
            const rippleSize = Math.max(rect.width, rect.height);
            ripple.style.width = ripple.style.height = `${rippleSize}px`;

            const x = e.clientX - rect.left - rippleSize / 2;
            const y = e.clientY - rect.top - rippleSize / 2;
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;

            gsap.fromTo(ripple, { scale: 0, opacity: 1 }, {
                scale: 1.5,
                opacity: 0,
                duration: 1,
                onComplete: function () {
                    ripple.remove();
                }
            });
        });
    </script>
</body>
</html>
