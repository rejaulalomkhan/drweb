<main>
    <section class="">
        <div class="container-fluid">
            <div class="container mb-5">

                @if ($tValues->isNotEmpty())
                    @foreach ($tValues as $tValue)
                    <div class="pera-top my-5">
                        <p class="">
                            {!! $tValue->vTopDescription !!}
                        </p>
                    </div>
                    @endforeach
                @endif



                @if ($values->isNotEmpty())
                @foreach ($values as $index => $value)
                    <div class="Collaps1">
                        <div class="card card-body">
                            <div class="d-flex bd-highlight">
                                <div class="p-2 flex-shrink-1 bd-highlight" data-bs-toggle="collapse" href="#collapseExample{{ $index }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $index }}" class="d-visible d-block">
                                    <i class="fa-solid fa-plus d-inline"></i>
                                </div>
                                <div class="p-2 w-100 bd-highlight" data-bs-toggle="collapse" href="#collapseExample{{ $index }}" role="button" aria-expanded="false" aria-controls="collapseExample{{ $index }}" class="d-visible d-block">
                                    <span>{{ $value->title }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseExample{{ $index }}">
                            <div class="card card-body">
                                {!! $value->description !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif


            </div>
        </div>
    </section>
</main>
