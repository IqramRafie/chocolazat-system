<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body class="bg-amber-100">
    @vite(['resources/js/auth/login.js'])
    <div class="min-h-screen flex items-center justify-center p-2 md:p-8">
        <div class="p-6 rounded-3xl w-full max-w-sm bg-white">
            <form method="post" action="{{ route('login') }}">
                @csrf
                <h1 class="text-center font-bold mb-4">Login</h1>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium">Username</label>
                    <input
                        type="text"
                        id="username"
                        class="w-full p-2 border rounded-lg"
                        placeholder="Enter your username"
                        name="username"
                        value="{{ old('username') }}"
                    />
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium">Password</label>
                    <input
                        type="password"
                        id="password"
                        class="w-full p-2 border rounded-lg"
                        placeholder="Enter your password"
                        name="password"
                    />
                </div>
                @if($errors->any())
                    <div class="text-red-500">
                        @foreach($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </div>
                @endif
                <button
                    type="submit"
                    class="w-full p-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 mt-4"
                >
                    Login
                </button>
            </form>
        </div>
    </div>

</body>
</html>
