<x-layout>
    <h1>Edit a book</h1>

    <form action="/books/{{ $book->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="enter book title" value="{{ $book->title }}" required>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Publisher</label>
            <input type="text" class="form-control" name="publisher" id="publisher" value="{{ $book->publisher }}" placeholder="enter book publisher" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="enter book description">{{ $book->description }}</textarea>
        </div>

        <button class="btn btn-primary" type="submit">Edit Book</button>
    </form>
</x-layout>
    {{-- <form action="/books/{{ $book->id }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="title" id="title" placeholder="enter book title" value="{{ $book->title }}" required>
        <input type="text" name="publisher" id="publisher" placeholder="enter book publisher" value="{{ $book->publisher }}" required>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="enter book description">{{ $book->description }}</textarea>
        <button type="submit">Edit Book</button>
    </form> --}}
