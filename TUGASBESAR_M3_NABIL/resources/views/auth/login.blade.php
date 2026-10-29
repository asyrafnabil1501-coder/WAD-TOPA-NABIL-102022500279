<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Harapan Sehat</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg border border-gray-100">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-emerald-800">Harapan Sehat</h1>
            <p class="text-gray-500 text-sm mt-1">Masuk untuk mengelola data klinik</p>
        </div>

        @if (session('success'))
            <div class="bg-emerald-600 text-white p-3 rounded-lg mb-4 text-sm text-center">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-1">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-600" placeholder="admin@klinik.com" required>
                @error('email')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-1">Password</label>
                <input type="password" name="password" class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-600" placeholder="••••••••" required>
            </div>

            <button type="submit" class="w-full bg-emerald-700 text-white py-3 rounded-lg font-semibold hover:bg-emerald-800 transition">
                Masuk
            </button>
        </form>
    </div>
</body>
</html>