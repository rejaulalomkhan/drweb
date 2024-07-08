<main>
    <section class="contact">
        <div class="container-fluid">
          <div class="container">
              <div class="mt-4">
                  <h1 class="text-uppercase my-5" style="font-size: var(--my-heading ); font-family: var(--my-font-arial); "> CONTACT US </h1>

                @foreach ($Contacts as $Contact)
                    <div>
                        <div class="">
                            <p class="w-50 pera_responsive" style="font-size: var(--my-body-text); font-family: var(--my-font-pera);">
                              {{ $Contact->top_title }}
                            </p>
                        </div>
                        <div class="my-3 w-25 pera_responsive">
                            <img src="{{ asset('storage/'.$Contact->image) }}" alt="" class="w-100">
                            <p class="text-center mt-3 fw-bold fst-italic" style="font-size: var(--my-body-text); font-family: var(--my-font-pera);">
                                {{ $Contact->bottom_title }}
                            </p>
                        </div>
                        <div class="lab w-25 my-4 pera_responsive">
                            <h5 style="font-size: var(--my-sub-heading); font-family: var(--my-font-arial);"> Lab </h5>
                            <p class="my-4" style="font-size: var(--my-body-text); font-family: var(--my-font-pera);">
                                {{ $Contact->lab_address }}
                            </p>
                        </div>
                        <div class="lab w-25 my-4 pera_responsive">
                            <h5 style="font-size: var(--my-sub-heading); font-family: var(--my-font-arial);"> Office </h5>
                            <p class="my-4" style="font-size: var(--my-body-text); font-family: var(--my-font-pera);">
                                {{ $Contact->office_address }}
                            </p>
                        </div>
                        <div class="lab w-25 my-4 pera_responsive">
                            <h5 style="font-size: var(--my-sub-heading); font-family: var(--my-font-arial);"> Email </h5>
                            <a href="mailto:{{ $Contact->email }}" class="my-4" style="font-size: var(--my-body-text); font-family: var(--my-font-pera);">
                                {{ $Contact->email }}
                            </a>
                        </div>
                    </div>
                @endforeach

              </div>
          </div>
        </div>
      </section>
</main>
