<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
        <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/responsive.css') }}">
        <link rel="icon" href="{{ asset('storage/'.App\Models\Settings::latest()->first()->favicon) }}" type="image/x-icon">
        <title>{{ $title ?? 'Home' }}</title>
        @livewireStyles
    </head>
    <body>

        <div id="main">
            <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-white px-4" id="navbar_top">
                    <a class="navbar-brand w-25 logo-area" href="{{ route('home') }}">
                        <img src="{{ asset('storage/'.App\Models\Settings::latest()->first()->SiteLogo) }}" alt="" class=" w-75">
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
                                <p class="text-secondary">{!! App\Models\Settings::latest()->first()->Address !!} </p>
                                <p class="text-secondary"><span class="fw-bold text-secondary">CELL: </span> <a
                                        href="tel:{{ App\Models\Settings::latest()->first()->Phone }}" class="text-secondary" >{{ App\Models\Settings::latest()->first()->Phone }} </a> / <span
                                        class="fw-bold text-secondary">ASST:</span> {{ App\Models\Settings::latest()->first()->PhoneOptional }}</p>
                                <p class="text-secondary"><span class="fw-bold text-secondary">Email</span> <a
                                        href="mailto:{{ App\Models\Settings::latest()->first()->Email }}"
                                        class="text-secondary">{{ App\Models\Settings::latest()->first()->Email }}</a></p>
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
