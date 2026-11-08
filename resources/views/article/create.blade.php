<x-layout>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center mb-4">Crea un articolo</h1>
                <form class="p-4 glass-form" action="{{ route('article.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input name="title" type="text" class="form-control" id="title">
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Autore</label>
                        <input name="author" type="text" class="form-control" id="author">
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Testo</label>
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn glass-btn">Crea articolo</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>