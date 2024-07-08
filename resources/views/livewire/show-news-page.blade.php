<main class="container-fluid">
    <div class="container">
        {{-- nes section start  --}}
        @if ($news->isNotEmpty() )
            @foreach ($news as $new)
                <div class="my-2">
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
                                    <p class=""><i>{{ $new->created_at }}</i></p>

                                    <p class="text-start" style="font-size: 12.5pt; font-family: calibri ;">{!! $new->content !!}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <hr/>
            @endforeach
        @endif
    </div>
</main>
