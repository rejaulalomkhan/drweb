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
                    <a class="navbar-brand w-25 logo-area" href="{{ route('home') }}">
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
                                <a class="nav-link active" aria-current="page" wire:navigate href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" wire:navigate href="{{ route('researchPage') }}"  >Research</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" wire:navigate href="{{ route('publicationPage') }}">Publications</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" wire:navigate href="{{ route('peoplePage') }}">People</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('values') }}">Our Values</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" wire:navigate href="{{ route('eunusAli') }}">Eunus Ali</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" wire:navigate href="{{ route('labLife') }}">Social / Lab Life</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" wire:navigate href="{{ route('aboutUs') }}">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" wire:navigate href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>


            {{ $slot }}





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
