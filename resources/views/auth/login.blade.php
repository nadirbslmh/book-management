<x-layout>
    <h1>Login</h1>
    <p>Please login into your account</p>

    <form action="/auth/login" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="enter your email" required>
            @error('email')
                <div class="mt-8">
                    <div class="text-danger">{{ $message }}</div>
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="enter your password" required>
        </div>

        <button class="btn btn-primary" type="submit">Login</button>
    </form>
    <br>
    <p>Don't have an account? <a href="/auth/register">register</a></p>
</x-layout>