<x-layout>
    <h1>Register</h1>
    <p>Please create a new account</p>

    <form action="/auth/register" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="enter your name" value="{{ old('name') }}" required>
            @error('name')
                <div class="mt-8">
                    <div class="text-danger">{{ $message }}</div>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="enter your email" value="{{ old('email') }}" required>
            @error('email')
                <div class="mt-8">
                    <div class="text-danger">{{ $message }}</div>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="enter your password" value="{{ old('password') }}" required>
            @error('password')
                <div class="mt-8">
                    <div class="text-danger">{{ $message }}</div>
                </div>
            @enderror
        </div>

        <button class="btn btn-primary" type="submit">Register</button>
    </form>
    <br>
    <p>Already have an account? <a href="/auth/login">login</a></p>
</x-layout>