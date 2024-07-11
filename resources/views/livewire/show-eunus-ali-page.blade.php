<main class="main main--interior">

    <section class="faded-image">
        <div class="faded-image__main-container">
            <div class="faded-image__main-image">
                <picture>
                    @if ($values->isNotEmpty() )
                    <img src="{{ asset('storage/'.$values[0]->image) }}" alt="" />
                    @endif
                </picture>
            </div>
            <div class="faded-image__overlay">
                <div class="faded-image__content fadeInInit transparent">
                    <h2 style="font-size: var(--my-heading); font-family: var(--my-font-arial);">{{ $values[0]->title }}</h2>


                    <p style="font-size: var(--my-body-text); font-family: var(--my-font-pera);">
                        {!! $values[0]->description !!}
                    </p>
                </div>
                <div class="clearfix">

                </div>
            </div>
        </div>
    </section>



</main>

