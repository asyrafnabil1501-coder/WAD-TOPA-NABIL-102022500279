@extends('layouts.app')
@section('title', 'Edit Dokter')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
    <h1 class="text-2xl font-semibold mb-6">Edit Data Dokter</h1>
    <form action="{{ route('doctors.update', $doctor) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block font-medium mb-1">Nama Dokter</label>
            <input type="text" name="nama" value="{{ old('nama', $doctor->nama) }}" class="w-full p-2 border rounded-lg" required>
            @error('nama') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label class="block font-medium mb-1">No. SIP</label>
            <input type="text" name="no_sip" value="{{ old('no_sip', $doctor->no_sip) }}" class="w-full p-2 border rounded-lg" required>
            @error('no_sip') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label class="block font-medium mb-1">Spesialis</label>
            <input type="text" name="spesialis" value="{{ old('spesialis', $doctor->spesialis) }}" class="w-full p-2 border rounded-lg" required>
            @error('spesialis') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label class="block font-medium mb-1">Ruangan</label>
            <input type="text" name="ruangan" value="{{ old('ruangan', $doctor->ruangan) }}" class="w-full p-2 border rounded-lg" required>
            @error('ruangan') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label class="block font-medium mb-1">Kontak</label>
            <input type="text" name="kontak" value="{{ old('kontak', $doctor->kontak) }}" class="w-full p-2 border rounded-lg" required>
            @error('kontak') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label class="block font-medium mb-1">Foto Dokter</label>
            @if ($doctor->foto)
                <img src="{{ asset('storage/' . $doctor->foto) }}" class="w-32 h-32 object-cover rounded mb-2" alt="Foto Lama">
            @endif
            <input type="file" name="foto" accept="image/*" class="w-full p-2 border rounded-lg">
            <p class="text-xs text-gray-500 mt-1">Biarkan kosong jika tidak ingin mengganti foto.</p>
            @error('foto') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="flex gap-3 mt-6">
            <a href="{{ route('doctors.index') }}" class="bg-gray-300 py-2 px-6 rounded-full hover:bg-gray-400">Batal</a>
            <button type="submit" class="bg-amber-600 text-white py-2 px-6 rounded-full hover:bg-amber-700">Perbarui</button>
        </div>
    </form>
</div>
@endsection