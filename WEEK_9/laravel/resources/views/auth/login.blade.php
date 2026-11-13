<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('Asset/UI/formInput.css') }}">
</head>
<body>
    <div class="form-input">
        <div class="form-header"><h2>LOGIN</h2></div>
        <form action="{{ route('login') }}" method="POST" class="form-body">
            @csrf
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
            @error('email')
                <span class="pesan-error">{{ $message }}</span>
            @enderror

            <label for="password">Password</label>
            <input type="password" id="password" name="password">

            <div class="form-action">
                <button type="submit" class="tombol-simpan">Masuk</button>
            </div>
        </form>
    </div>
</body>
</html>