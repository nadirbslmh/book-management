<x-layout>
    <h1>Create a new book</h1>

    <form action="/books/store" method="post">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="enter book title" required>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Publisher</label>
            <input type="text" class="form-control" name="publisher" id="publisher" placeholder="enter book publisher" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description" rows="3" placeholder="enter book description"></textarea>
        </div>

        <button class="btn btn-primary" type="submit">Add Book</button>
    </form>
</x-layout>