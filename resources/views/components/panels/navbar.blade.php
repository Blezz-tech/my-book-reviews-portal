<div class="bg-primary">
    <div class="container">
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">Навигация</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{ route('books.index') }}">Книги</a>
                        {{-- <a class="nav-link" href="#">Features</a> --}}
                        {{-- <a class="nav-link" href="#">Pricing</a> --}}
                        {{-- <a class="nav-link disabled" aria-disabled="true">Disabled</a> --}}
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
