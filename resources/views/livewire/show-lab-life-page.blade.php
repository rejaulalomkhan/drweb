<main>
    <div class="main-div  mt-5 mb-5">
        <h2 class="text-center text-uppercase" style="font-family: arial;">Our Social / Lab Life</h2>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    @if ($Lablifes->count() > 0)
                        @foreach ($Lablifes as $lablife)
                            <div class="col-sm-6 col-md-4 col-lg-4 mt-3">
                                <div class="card">
                                    <img src="{{ asset('storage/'.$lablife->image) }}" class="card-img-top" alt="Image 1">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $lablife->title }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</main>
