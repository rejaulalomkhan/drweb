<main>
    <section>
        <div class="d-flex align-items-center justify-content-center" style="height: 60vh; background-color: #f0f2ff;">
            <div class="w-50 home-area">
                <h1 class="text-uppercase justify-content-center d-flex fw-bold" style="font-size: var(--my-main-heading);"> {{ App\Models\Settings::latest()->first()->SiteName }} </h1>

              <p style="align-items: end; width: 69%; font-family: var(--my-font-pera); font-size: 35px; opacity: 0.6; text-align: right; margin-top: -3%; "
                class="text-dark d-block mb-3 groupe_area_responsive">groupe</p>
                <div class="">
                    <div class="center text-center p-2 p-md-0 mt-5 ">
                        <hr style="width: 30vh; margin: auto;  " class="mt-5 responsive_hr">
                        <p class="banner-text" style="font-size: var(--my-body-text); font-family: var(--my-font-pera);">{!! App\Models\Settings::latest()->first()->SiteDescription !!}</p>
                    </div>
                </div>
            </div>

          </div>




        @if ($researches->isNotEmpty() )
                @foreach ($researches as $research)

                <div class="section research" style="background-image: url('{{ asset('front/images/slide-bg-research.jpg') }}'); background-size:cover; background-repeat:no-repeat">
                    <div class="center text-center p-2 p-md-0">
                        <h1 class="section-heading fw-bold">{{ $research->page_title }}</h1>
                        <hr style="width: 30vh; margin: auto; ">
                        <p class="banner-text mt-3"  style="font-size: var(--my-body-text); font-family: var(--my-font-pera);">{{ $research->page_description }}</p>
                        <a wire:navigate href="{{ route('researchPage') }}" class="btn text-uppercase mt-2 site-btn"> check it out</a>
                    </div>
                </div>


                @endforeach
        @else
            <div class="section research" style="background-image: url('{{ asset('front/images/slide-bg-research.jpg') }}'); background-size:cover; background-repeat:no-repeat">
                <div class="center text-center p-2 p-md-0">
                    <h1 class="section-heading fw-bold">RESEARCH</h1>
                    <hr style="width: 30vh; margin: auto; ">
                    <p class="banner-text mt-3"  style="font-size: var(--my-body-text); font-family: var(--my-font-pera);">Research Data Coming soon!! </p>
                    <a wire:navigate href="{{ route('researchPage') }}" class="btn text-uppercase mt-2 site-btn"> check it out</a>
                </div>
            </div>

        @endif

{{-- People section start  --}}

    @if ($featuredPeoples->isNotEmpty() )
     @foreach ($featuredPeoples as $fpeople)
           <div class=" my-5 ">
            <div class="">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            @if ($fpeople->image !='')
                                <div class="col-lg-4 ">
                                    <div class="card ">
                                        <div class="card-body p-1">
                                            <img src="{{ asset('storage/'.$fpeople->image) }}" alt="{{ $fpeople->name }} image"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            @endif


                                <div class="col-12 col-md-8 col-lg-8 ">
                                    <div class="">
                                        <div class="">
                                            <h3 class="fw-bold" style="font-size: 13.5pt; font-family: arial;">{{ $fpeople->name }}</h3>
                                            <p class=""><i>{{ $fpeople->designation }}</i></p>

                                            <p class="text-start" style="font-size: 13pt; font-family: calibri ;">{!! $fpeople->description !!}</p>
                                            <a wire:navigate href="{{ route('peoplePage') }}" class="btn text-uppercase mt-3 mb-5 site-btn"> View All People</a>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

</section>
</main>
