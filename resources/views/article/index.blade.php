<x-layout>
    <div class="container">
        <h1 class="text-center my-5">Tutti gli articoli</h1>
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 glass">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">di {{ $article->author }}</h6>
                        <p class="card-text">{{ $article->body }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>