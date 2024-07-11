<main class="container-fluid">

    <div class="container">
        <h1 class="mt-5 " style="font-size: var(--my-heading); font-family: var(--my-font-arial);">In the News</h1>
        <br/>
        {{-- nes section start  --}}
        @if ($news->isNotEmpty() )
            @foreach ($news as $new)
                {{-- <div class="my-2">
                    <div class="container">
                        <div class="row">
                            @if ($new->image !='')
                                <div class="col-lg-4">
                                    <div class="card ">
                                        <div class="card-body p-1">
                                            <img src="{{ asset('storage/'.$new->image) }}" alt="{{ $new->title }} image"
                                                class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 col-lg-8 ">
                                    <h3 class="fw-bold" style="font-size: 12.5pt; font-family: arial;">{{ $new->title }}</h3>
                                    <p class=""><i>{{ $new->created_at }}</i></p>

                                    <p class="text-start" style="font-size: 12.5pt; font-family: calibri ;">{!! $new->content !!}</p>
                                </div>
                            @endif
                            @if ($new->image =='')
                                <div class="col-12 col-md-12 col-lg-12 ">
                                    <h3 class="fw-bold" style="font-size: 12.5pt; font-family: arial;">{{ $new->title }}</h3>
                                    <p class=""><i>{{ \Carbon\Carbon::parse($new->created_at)->isoFormat('LL') }}</i></p>
                                    <p></p>

                                    <p class="text-start" style="font-size: 12.5pt; font-family: calibri ;">{!! $new->content !!}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div> --}}

                <div class="news_part">
                    @if ($new->title !='')
                    <h3 class="fw-bold" style="font-size: 12.5pt; font-family: arial;">{{ $new->title }}</h3>
                    @endif
                    <span class="d-block mt-4" style=" font-size: var(--my-body-text); font-family: var(--my-font-pera);">{{ \Carbon\Carbon::parse($new->created_at)->isoFormat('LL') }}</span>
                    <p class="mt-2 mb-4" style=" font-size: var(--my-body-text); font-family: var(--my-font-pera);">
                        {!! $new->content !!}
                    </p>
                    @if ($new->image !='')
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('storage/'.$new->image) }}" alt="{{ $new->title }} Image" class="img-fluid news-img" style="width: 25%; height: 50vh;">
                    </div>
                    @endif
                    <hr class="">
                </div>
            @endforeach
        @endif
    </div>
</main>
