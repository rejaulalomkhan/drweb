<main>

           <!-- personal introduction -->

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
                                            <a href="mailto:{{ $fpeople->email }}" class="btn text-uppercase mt-3 mb-5 site-btn"> {{ $fpeople->email }}</a>
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


        <!-- team area sention start-->
        <section class="mt-5">
            <div class="container-fluid">
                <div class="container">
                    <hr>
                    <div class="row">
                        @if ($peoples->isNotEmpty() )

                            @foreach ($peoples as $people)
                                <div class="col-12 col-md-3 col-lg-3">
                                    <x-people-card :people="$people" />
                                </div>
                            @endforeach

                        @endif

                    </div>
                </div>
            </div>
        </section>

        <!-- team area sention end -->




</main>
