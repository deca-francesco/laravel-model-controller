<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Laravel Movies DB</title>

    {{-- importare bootstrap --}}
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
</head>

<body>
    @include("./partials/header")
    <main>
        <div class="container mb-5">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
                @foreach ($movies as $movie)
                <div class="col">
                    <div class="card h-100">
                        <div class="card-body p-3">
                            <h3>{{ $movie->title }}</h3>
                            <p>({{ $movie->original_title }})</p>
                            <p>{{ $movie->nationality }}</p>
                            <p>{{ $movie->date }}</p>
                        </div>
                        <div class="card-footer bg-primary-subtle text-primary">
                            @for ($i = 0; $i < round($movie->vote / 2); $i++)
                                <span>★</span>
                            @endfor

                            @for ($i = 0; $i < 5 - round($movie->vote / 2); $i++)
                                <span>☆</span>
                            @endfor

                            <span>({{ $movie->vote }}/10)</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>