<x-layout>
    @auth
        <a class="btn btn-primary" href="/books/create">Create book</a>
        <form action="/auth/logout" method="post">
            @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    @else
        <a class="btn btn-secondary" href="/auth/register">Register</a>
        <a class="btn btn-success" href="/auth/login">Login</a>
    @endauth

    <h1>All Books</h1>

    <table class="table table-hover">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Publisher</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)    
            <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->title }}</td>
            <td>{{ $book->publisher }}</td>
            <td class="d-flex">
                @auth
                <a class="btn btn-info" href="/books/{{ $book->id }}">View</a>
                <a class="btn btn-secondary" href="/books/{{ $book->id }}/edit">Edit</a>
                <form action="/books/{{ $book->id }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                @endauth
            </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</x-layout>