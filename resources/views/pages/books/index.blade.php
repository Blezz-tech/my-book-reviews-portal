<x-layouts.app>
    <h1>Books</h1>

    <div class="mt-3">
        <form method="GET" action="{{ route('books.index') }}">
            <div class="input-group">
                <input
                    type="text"
                    name="search_text"
                    class="form-control"
                    placeholder="Search by title"
                    aria-label="Search by title with two button addons">
                <button type="sumbit" class="btn btn-outline-primary">Search</button>
                <a href="{{ route('books.index') }}" class="btn btn-outline-secondary">Clear</a>
            </div>
        </form>
    </div>

    <div class="mt-3">
        <ul class="list-group list-group-horizontal">
            <a
                href="{{ route('books.index') }}"
                class="text-center list-group-item list-group-item-action">
                Latest
            </a>
            <a
                href="{{ route('books.index') }}"
                class="text-center list-group-item list-group-item-action">
                Popular Last <br> Months
            </a>
            <a
                href="{{ route('books.index') }}"
                class="text-center list-group-item list-group-item-action">
                Popular Last 6 <br> Months
            </a>
            <a
                href="{{ route('books.index') }}"
                class="text-center list-group-item list-group-item-action">
                Highest Rated <br> Last Month
            </a>
            <a
                href="{{ route('books.index') }}"
                class="text-center list-group-item list-group-item-action">
                Highest Rated <br> Last 6 Months
            </a>
        </ul>
    </div>

</x-layouts.app>