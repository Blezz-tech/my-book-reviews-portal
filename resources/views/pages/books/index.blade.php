<x-layouts.app>
    <h1>Books</h1>

    <form method="GET" action="{{ route('books.index') }}">
        <div class="input-group">
            <input
                type="text"
                name="search_text"
                class="form-control"
                placeholder="Search by title"
                aria-label="Search by title with two button addons"
                >
            <button type="sumbit" class="btn btn-outline-primary">Search</button>
            <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">Clear</a>
        </div>
    </form>

</x-layouts.app>