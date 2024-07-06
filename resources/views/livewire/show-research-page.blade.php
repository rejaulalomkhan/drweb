<main>


    <section class="section_area">
        <div class="container-fluid">
            <div class="container">

                 {{-- page title --}}
                @if ($researches->isNotEmpty())
                    @foreach ($researches as $research)
                        <div class="my-5">
                            <h1 class="text-center fw-bold text-uppercase"
                                style="font-size: var(--my-heading); font-family: var(--my-font-pera);"> {{ $research->page_title }} </h1>
                            <p class="text-center m-auto fw-bold w-50 text-area"
                                style="font-family: var(--my-font-pera); font-size: var(--my-body-text); ">
                                {{ $research->page_description }}
                            </p>
                        </div>
                    @endforeach
                @endif


                    {{-- card area --}}
                    <div class="row ">
                            @foreach ($researchContent as $content)
                                <div class="col-12 col-md-4 col-lg-4">
                                    <a href="#{{ $content->id }}" style="text-decoration: none; color: black;">
                                        <div class="card-area my-2">
                                            <div class="card p-3" style="background-color: var(--card-color);">
                                                @if ($content->block_image !='')
                                                <img src="{{ asset('storage/'.$content->block_image) }}" class="card-img-top m-auto w-25" alt="">
                                                @endif
                                                <div class="card-body ">
                                                    <h5 class=" d-block card-title text-center">{{ $content->block_title }}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                    </div>

                </div>
                <hr class="mt-5 bg-dark border border-dark">
            </div>
        </section>

        {{-- Section here  --}}
        @foreach ($researchContent as $sectionContent)

            <section class="section_area " id="{{ $sectionContent->id }}">
                <div class="cotainer-fluid">
                    <div class="container">
                        <h2 class="text-center"> {{ $sectionContent->section_title }} </h2>
                        <div class="custome_container">
                            <div class="mt-5 m-auto  w-7">
                                @if ($sectionContent->section_image !='')
                                    <img src="{{ asset('storage/'.$sectionContent->section_image) }}" class="img-fluid m-auto" alt="">
                                @endif
                            </div>
                            <div class="w-100 mt-5">
                                {!! $sectionContent->section_description !!}
                            </div>
                        </div>
                    </div>
                    <hr class="mt-5 bg-dark border border-dark">
                </div>
            </section>
        @endforeach

</main>
