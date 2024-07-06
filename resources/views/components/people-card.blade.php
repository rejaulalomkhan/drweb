<div class="card my-3 shadow bg-body rounded">

    @if ($people->image !='')
         <img src="{{ asset('storage/'.$people->image) }}" class="card-img-top"  style="height: 45vh;">
    @endif

    <div class="card-body">
        <h5 class="card-title">{{ $people->name }}</h5>
        <span class="d-block fst-italic text-muted">{{ $people->designation }}</span>
        <p class="card-text">{!! \Illuminate\Support\Str::limit($people->description, 50) !!}</p>
            <a href="mailto:{{ $people->email }}"> {{ $people->email }}</a>
    </div>
</div>
