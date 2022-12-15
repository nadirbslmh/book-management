<x-layout>
    <h1>Edit a book</h1>

    <form action="/books/{{ $book->id }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="enter book title" value="{{ $book->title }}" required>
            @error('title')
                <div class="mt-8">
                    <div class="text-danger">{{ $message }}</div>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Publisher</label>
            <input type="text" class="form-control" name="publisher" id="publisher" value="{{ $book->publisher }}" placeholder="enter book publisher" required>
            @error('publisher')
                <div class="mt-8">
                    <div class="text-danger">{{ $message }}</div>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="enter book description" required>{{ $book->description }}</textarea>
            @error('description')
                <div class="mt-8">
                    <div class="text-danger">{{ $message }}</div>
                </div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Edit Book</button>
    </form>
</x-layout>
