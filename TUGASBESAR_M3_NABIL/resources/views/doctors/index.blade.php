@extends('layouts.app')
@section('title', 'Daftar Dokter')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h1 class="text-3xl font-semibold">Rekapitulasi Data Dokter</h1>
    <a href="{{ route('doctors.create') }}" class="bg-emerald-700 text-white py-2 px-6 rounded-full hover:bg-emerald-800">Tambah Dokter Baru</a>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    @forelse ($doctors as $doctor)
        <div class="bg-white p-4 rounded-lg shadow">
            @if ($doctor->foto)
                <img src="{{ asset('storage/' . $doctor->foto) }}" alt="{{ $doctor->nama }}" class="w-full h-48 object-cover rounded mb-4">
            @else
                <div class="w-full h-48 bg-gray-200 flex items-center justify-center rounded mb-4 text-gray-500">Tanpa Foto</div>
            @endif
            <h2 class="text-xl font-semibold">{{ $doctor->nama }}</h2>
            <p class="text-sm text-gray-500 mb-1">SIP: {{ $doctor->no_sip }}</p>
            <p class="text-emerald-700 font-medium">{{ $doctor->spesialis }}</p>
            <p class="text-sm text-gray-600 mt-2">Ruangan: {{ $doctor->ruangan }}</p>
            <p class="text-sm text-gray-600">Kontak: {{ $doctor->kontak }}</p>

            <div class="flex items-center gap-4 mt-4 text-sm border-t pt-3">
                <a href="{{ route('doctors.show', $doctor) }}" class="text-blue-600 hover:underline">Detail</a>
                <a href="{{ route('doctors.edit', $doctor) }}" class="text-amber-600 hover:underline">Edit</a>
                <form action="{{ route('doctors.destroy', $doctor) }}" method="POST" onsubmit="return confirm('Yakin hapus dokter ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                </form>
            </div>
        </div>
    @empty
        <p class="col-span-full text-center text-gray-500 py-8">Belum ada data dokter terdaftar.</p>
    @endforelse
</div>
@endsection