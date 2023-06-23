<div class="jumbotron"></div>
<main>
    <div class="container">
        <h1>current series</h1>
        @foreach ($comics as $comic)
            <div class="content">
                @include('components.magazine', ['title' => $comic['series'], 'cover' => $comic['thumb']])
            </div>
        @endforeach
        <button>load more</button>
    </div>
</main>
