<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
        <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
        <title>{{ $title ?? 'Home' }}</title>
        @livewireStyles
    </head>
    <body>

        <div id="main">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-white px-4" id="navbar_top">
                    <a class="navbar-brand w-25 logo-area" href="index.html">
                        <img src="{{ asset('front/images/Logo-choice_1.png') }}" alt="" class=" w-75">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="research.html">Research</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="publication.html">Publications</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="people.html">People</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="our-values.html">Our Values</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="eunus_ali.html">Eunus Ali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="gallary.html">Social / Lab Life</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news.html">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>


            {{ $slot }}




            <div class="d-flex align-items-center justify-content-center" style="height: 60vh; background-color: #f0f2ff;">
                <div class="w-50 home-area">
                    <h1 class="text-uppercase justify-content-center d-flex fw-bold" style="font-size: var(--my-main-heading);">  Eunus Ali </h1>

                  <p style="align-items: end; width: 69%; font-family: var(--my-font-pera); font-size: 35px; opacity: 0.6; text-align: right; margin-top: -3%; "
                    class="text-dark d-block mb-3 groupe_area_responsive">groupe</p>
                    <div class="">
                        <div class="center text-center p-2 p-md-0 mt-5 ">
                            <hr style="width: 30vh; margin: auto;  " class="mt-5 responsive_hr">
                            <p class="banner-text mb-5 mt-3" style="font-size: var(--my-body-text); font-family: var(--my-font-pera);">Innovation in organic chemistry and chemical biology  through the development of general catalysis concepts and  their application to complex targets.</p>
                        </div>
                    </div>
                </div>

              </div>









            <div class="section research" style="background-image: url('assets/images/slide-bg-research.jpg'); background-size:cover; background-repeat:no-repeat">
                <div class="center text-center p-2 p-md-0">
                    <h1 class="section-heading fw-bold">RESEARCH</h1>
                    <hr style="width: 30vh; margin: auto; ">
                    <p class="banner-text mt-3"  style="font-size: var(--my-body-text); font-family: var(--my-font-pera);">The pursuit of new concepts in catalysis, exemplified by organocatalysis, cascade, synergistic, and photoredox catalysis. The application of unique methodologies to the total synthesis of natural products and pharmaceuticals. Leveraging photocatalysis to investigate complex biological environments.</p>
                    <a href="#" class="btn text-uppercase mt-2 site-btn"> check it out</a>
                </div>
            </div>






            <div class=" my-5 ">
                <div class="">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 ">
                                    <div class="card ">
                                        <div class="card-body p-1">
                                            <img src="{{ asset('front/images/matt-vander-heiden-cropped-805x1024.jpg') }}" alt=""
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 col-md-8 col-lg-8 ">
                                    <div class="">
                                        <div class="">
                                            <h3 class="fw-bold" style="font-size: 13.5pt; font-family: arial;">Matt Vander Heiden</h3>
                                            <p class=""><i>Principal Investigator</i></p>

                                            <p class="text-start" style="font-size: 13pt; font-family: calibri ;">Matthew Vander Heiden is the director of the Koch
                                                Institute at MIT,
                                                the Lester Wolfe (1919) Professor of Molecular Biology, and a member of the
                                                Broad Institute. He is a practicing oncologist and instructor in medicine at
                                                Dana-Farber Cancer Institute/Harvard Medical School. He earned his doctoral
                                                and medical degrees from the University of Chicago, where he worked in the
                                                laboratory of Craig Thompson. Vander Heiden then completed a residency in
                                                internal medicine at Boston’s Brigham & Women’s Hospital and a
                                                hematology-oncology fellowship at Dana-Farber Cancer Institute/Massachusetts
                                                General Hospital. He was a postdoctoral fellow in the laboratory of Lewis
                                                Cantley at Harvard Medical School, where he was supported by a Mel Karmazin
                                                Fellowship from the Damon Runyon Cancer Research Foundation. In 2010, Vander
                                                Heiden joined the MIT faculty. His work has been recognized by many awards
                                                including the Burroughs Wellcome Fund Career Award for Medical Sciences, the
                                                AACR Gertrude B. Elion Award, the HHMI Faculty Scholar Award, and an NCI
                                                Outstanding Investigator Award.</p>
                                            <a href="people.html" class="btn text-uppercase mt-3 mb-5 site-btn"> View All People</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>









            <section class="main_section">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <col-12 class="col-md-6 col-lg-6">


                            </col-12>
                            <col-12 class="col-md-6 col-lg-6"></col-12>
                        </div>
                    </div>
                </div>
            </section>











           {{-- footer --}}

            <footer class="py-4 bg-dark text-white ">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <p class="text-secondary"><span class="fw-bold text-uppercase text-secondary">PRINCETON
                                        UNIVERSITY FRICK LABORATORY</span> / Washington Rd.Princeton, NJ 08544</p>
                                <p class="text-secondary"><span class="fw-bold text-secondary">CELL: </span> <a
                                        href="tel:562896545" class="text-secondary">562896545 </a> / <span
                                        class="fw-bold text-secondary">ASST:</span> 608.258.2254</p>
                                <p class="text-secondary"><span class="fw-bold text-secondary">Email</span> <a
                                        href="mailto:dmacmill@princeton.edu"
                                        class="text-secondary">dmacmill@princeton.edu</a></p>
                                <p class="text-secondary">© 2016 The Trustees of Princeton University</p>
                            </div>
                        </div>
                    </div>
            </footer>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
        <script src="{{ asset('front/js/main.js') }}"></script>
        @livewireScripts
    </body>
</html>
