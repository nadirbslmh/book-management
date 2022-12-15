<x-layout>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <a class="btn btn-secondary" href="/">Go back</a>
            <img src="{{ asset('storage/' . $book->image) }}" class="card-img-top" alt="{{ $book->title }}">
            <h5 class="card-title">{{ $book->title }}</h5>
            <h6 class="card-title">{{ $book->publisher }}</h6>
            <p class="card-text">{{ $book->description }}</p>
            <div class="d-flex">
                <a class="btn btn-info" href="/books/{{ $book->id }}/edit">Edit</a>
                <form action="/books/{{ $book->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>