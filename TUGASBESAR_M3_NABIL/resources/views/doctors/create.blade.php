@extends('layouts.app')
@section('title', 'Tambah Dokter')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow">
    <h1 class="text-2xl font-semibold mb-6">Input Dokter Baru</h1>
    <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block font-medium mb-1">Nama Dokter</label>
            <input type="text" name="nama" value="{{ old('nama') }}" class="w-full p-2 border rounded-lg" required>
            @error('nama') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label class="block font-medium mb-1">No. SIP</label>
            <input type="text" name="no_sip" value="{{ old('no_sip') }}" class="w-full p-2 border rounded-lg" required>
            @error('no_sip') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label class="block font-medium mb-1">Spesialis</label>
            <input type="text" name="spesialis" value="{{ old('spesialis') }}" placeholder="Contoh: Spesialis Anak" class="w-full p-2 border rounded-lg" required>
            @error('spesialis') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label class="block font-medium mb-1">Ruangan</label>
            <input type="text" name="ruangan" value="{{ old('ruangan') }}" placeholder="Contoh: Poli 01" class="w-full p-2 border rounded-lg" required>
            @error('ruangan') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label class="block font-medium mb-1">Kontak</label>
            <input type="text" name="kontak" value="{{ old('kontak') }}" class="w-full p-2 border rounded-lg" required>
            @error('kontak') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="mb-4">
            <label class="block font-medium mb-1">Foto Dokter (Opsional)</label>
            <input type="file" name="foto" accept="image/*" class="w-full p-2 border rounded-lg">
            @error('foto') <p class="text-red-600 text-sm mt-1">{{ $message }}</p> @enderror
        </div>
        <div class="flex gap-3 mt-6">
            <a href="{{ route('doctors.index') }}" class="bg-gray-300 py-2 px-6 rounded-full hover:bg-gray-400">Kembali</a>
            <button type="submit" class="bg-emerald-700 text-white py-2 px-6 rounded-full hover:bg-emerald-800">Simpan Data</button>
        </div>
    </form>
</div>
@endsection