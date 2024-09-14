<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hassle-Free Time Tracking</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            padding: 100px 0;
        }

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
            background-color: #fff;
        }

        .slide-text {
            margin-left: 20px;
        }

        /* Navbar Glow Effect */
        .navbar-nav a {
            position: relative;
            padding-bottom: 5px;
            font-weight: 600;
            color: #333;
            text-decoration: none;
            transition: color 0.3s;
            text-shadow: 0 0 10px rgba(106, 90, 205, 0);
        }

        .navbar-nav a:hover {
            color: #6A5ACD;
            text-shadow: 0 0 15px rgba(106, 90, 205, 0.8);
        }

        /* Underline navbar animation */
        .navbar-nav a::after {
            content: "";
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #6A5ACD;
            transition: width 0.4s ease, background-color 0.4s ease;
        }

        .navbar-nav a:hover::after {
            width: 100%;
            background-color: linear-gradient(90deg, #6A5ACD, #8A2BE2); /* Animated underline */
        }

        /* Sign-in Button */
        .sign-in {
            background: linear-gradient(135deg, #6A5ACD, #8A2BE2);
            color: white;
            border-radius: 50px;
            padding: 0.6rem 1.5rem;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.4s ease;
            color: white;
        }

        .sign-in span {
            position: relative;
            z-index: 2;
        }

        .sign-in::after {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            top: 50%;
            left: 50%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.15), transparent);
            transform: translate(-50%, -50%) scale(0);
            transition: transform 0.4s ease;
        }

        .sign-in:hover::after {
            transform: translate(-50%, -50%) scale(1);
        }

        /* Button ripple effect */
        .ripple {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background-color: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            opacity: 0;
            transform: scale(0);
            pointer-events: none;
            z-index: 1;
        }

    </style>
</head>
<body>
    <!-- Header Section -->
    <header class="container-fluid py-3 shadow-sm bg-white sticky-top">
        <div class="row align-items-center">
            <div class="col-md-3 text-start">
                <div class="logo-container"></div>
            </div>
            <nav class="col-md-6 text-center">
                <ul class="navbar-nav d-flex flex-row justify-content-around w-100">
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center px-3 py-2 text-decoration-none" href="#">
                            <i class="fas fa-box me-2" style="font-size: 1.25rem;"></i>
                            <span class="link-text fs-5">Plans</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center px-3 py-2 text-decoration-none" href="#">
                            <i class="fas fa-pen me-2" style="font-size: 1.25rem;"></i>
                            <span class="link-text fs-5">Blog</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center px-3 py-2 text-decoration-none" href="#">
                            <i class="fas fa-briefcase me-2" style="font-size: 1.25rem;"></i>
                            <span class="link-text fs-5">Job</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link d-flex align-items-center px-3 py-2 text-decoration-none" href="#">
                            <i class="fas fa-cogs me-2" style="font-size: 1.25rem;"></i>
                            <span class="link-text fs-5">Features</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="col-md-3 text-end">
                <button class="sign-in btn"><span>Sign In</span></button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container">
        <div class="row align-items-center">
            <section class="content col-md-6">
                <h1 class="display-6 text-bold">Find your dream job today.</h1>
                <p class="mt-3 fs-5 text-muted">Export any report into any format you need.</p>
                <button class="cta btn text-white mt-4 px-4 py-3">Download Now</button>
            </section>

            <!-- Image -->
            <section class="col-md-5 d-flex justify-content-end">
                <div class="bg-light p-4 rounded-4" style="max-width: 600px;">
                    <img src="/image-1.png" alt="Image" class="img-fluid rounded">
                </div>
            </section>
        </div>
    </main>

    <!-- Footer Section -->
    <footer class="container-fluid py-3">
        <div class="row align-items-center">
            <div class="col-md-10">
                <div class="slide-text fs-6">Sukhpal Shergill - 2024</div>
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
            ripple.style.width = ripple.style.height = ${rippleSize}px;

            const x = e.clientX - rect.left - rippleSize / 2;
            const y = e.clientY - rect.top - rippleSize / 2;
            ripple.style.left = ${x}px;
            ripple.style.top = ${y}px;

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
