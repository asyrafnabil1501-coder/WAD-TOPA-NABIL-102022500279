<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Harapan Sehat')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <nav class="bg-emerald-800 text-white shadow">
    <div class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="{{ route('dashboard') }}" class="text-xl font-bold">Harapan Sehat</a>
        <div class="flex items-center gap-4">
            <a href="{{ route('dashboard') }}" class="hover:text-amber-300">Dashboard</a>
            <a href="{{ route('doctors.index') }}" class="hover:text-amber-300">Daftar Dokter</a>
            <a href="{{ route('doctors.create') }}" class="hover:text-amber-300">Tambah Dokter</a>
            
            @auth
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1.5 rounded-lg text-sm font-medium transition">
                        Logout
                    </button>
                </form>
            @endauth
        </div>
    </div>
</nav>
    <main class="container mx-auto p-6">
        @if (session('success'))
            <div class="bg-emerald-600 text-white p-4 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </main>
</body>
</html>