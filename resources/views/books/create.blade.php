<x-layout>
    <h1>Create a new book</h1>

    <form action="/books/store" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="enter book title" required value="{{ old('title') }}">
            @error('title')
                <div class="mt-8">
                    <div class="text-danger">{{ $message }}</div>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="publisher" class="form-label">Publisher</label>
            <input type="text" class="form-control" name="publisher" id="publisher" placeholder="enter book publisher" value="{{ old('publisher') }}" required>
            @error('publisher')
                <div class="mt-8">
                    <div class="text-danger">{{ $message }}</div>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="enter book description" required>{{ old('description') }}</textarea>
            @error('description')
                <div class="mt-8">
                    <div class="text-danger">{{ $message }}</div>
                </div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Add Book</button>
    </form>
</x-layout>