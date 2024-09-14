@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <body class="bg-light">
        <!-- Top Navigation Bar -->
        <div class="container mt-5">
            <div class="mb-4">
                <form class="row g-3 align-items-center" data-aos="fade-up">
                    <div class="col-md-4">
                        <input type="text" class="form-control" placeholder="Job Title, Skills or Company">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="City, County, Postcode or 'Remote'">
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary w-100">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="container">
            <!-- Filter Bar -->
            <div class="row align-items-center mb-4" data-aos="fade-up">
                <div class="col-md-8 offset-md-4 d-flex gap-2 mt-3 mt-md-0">
                    <select class="form-select w-25">
                        <option selected>25 miles</option>
                        <option value="10">10 miles</option>
                        <option value="50">50 miles</option>
                        <option value="100">100 miles</option>
                    </select>
                    <select class="form-select w-25">
                        <option selected>All Job Types</option>
                        <option value="full-time">Full-time</option>
                        <option value="part-time">Part-time</option>
                        <option value="contract">Contract</option>
                    </select>
                    <select class="form-select w-25">
                        <option selected>All salaries</option>
                        <option value="20000">£20,000+</option>
                        <option value="30000">£30,000+</option>
                        <option value="40000">£40,000+</option>
                    </select>
                    <select class="form-select w-25">
                        <option selected>Anytime</option>
                        <option value="1">Last 24 hours</option>
                        <option value="7">Last 7 days</option>
                        <option value="14">Last 14 days</option>
                    </select>
                </div>
            </div>

            <div class="row g-4">
                <!-- Job List -->
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card shadow-sm border-start border-4 border-primary mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Junior Software Developer</h5>
                            <p class="card-text">Tech Innovations Ltd — Windsor</p>
                            <p class="text-muted">5d ago</p>
                            <div class="border-top my-2"></div>
                            <p class="card-text fw-bold">£28,000 – £32,000 a year</p>
                        </div>
                    </div>



                </div>

                <!-- Sidebar -->
                <div class="col-md-8">
                    <div class="card shadow-sm sticky-top" style="top: 20px;" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-body">
                            <h3 class="card-title">Junior Software Developer</h3>
                            <p class="card-text"><strong>Tech Innovations Ltd</strong> — Windsor</p>
                            <p class="text-muted mt-2">Permanent | Full-time</p>
                            <p class="text-muted"><em>5 days ago</em></p>
                            <p class="card-text fw-bold mt-2">£28,000 – £32,000 a year</p>

                            <div class="mt-3">
                                <h5 class="card-title">Benefits</h5>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-dark">Free parking</span>
                                    <span class="badge bg-light text-dark">Company pension</span>
                                    <span class="badge bg-light text-dark">UK visa sponsorship</span>
                                </div>
                            </div>

                            <div class="border-top my-3"></div>

                            <div class="mt-3">
                                <h5 class="card-title">Tags</h5>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-light text-dark">Junior Level</span>
                                    <span class="badge bg-light text-dark">Software Development</span>
                                    <span class="badge bg-light text-dark">Full-time</span>
                                </div>
                            </div>

                            <div class="border-top my-3"></div>

                            <div class="mt-3">
                                <h5 class="card-title">Full job description</h5>
                                <p class="card-text">As a Junior Software Developer at Tech Innovations Ltd, you will be responsible for supporting our software development team in all aspects of the development, testing, and implementation of our product.</p>
                                <p class="card-text">You will be integral to the business and have the opportunity to grow, learn new technologies, and progress quickly.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- AOS Script -->
        <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
        <script>
            AOS.init(); // Initialise AOS animations
        </script>
    </body>
@endsection
