<main>
    <div class="container-fluid">
        <div class="container">
            <h1 class="mt-5" style="font-size: var(--my-sub-heading); font-family: var(--my-font-arial); font-weight: bold; "> Publications </h1>
            @foreach ($publications as $pub)
                    <div class="content mt-5" style="font-size: var(--my-body-text); font-family: var(--my-font-pera );">
                        <p class="">{!!  $pub->description !!}</p>
                    </div>
            @endforeach

            <br> <br> <br>
            <hr>
        </div>
    </div>
</main>
