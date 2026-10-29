@extends('layouts.app')
@section('title', 'Detail Dokter')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 rounded-lg shadow">
    @if ($doctor->foto)
        <img src="{{ asset('storage/' . $doctor->foto) }}" class="w-full h-64 object-cover rounded mb-4" alt="{{ $doctor->nama }}">
    @endif
    <h1 class="text-2xl font-bold mb-2">{{ $doctor->nama }}</h1>
    <p class="text-emerald-700 font-semibold mb-4">{{ $doctor->spesialis }}</p>
    <div class="border-t pt-4 space-y-2 text-gray-700">
        <p><strong>Nomor SIP:</strong> {{ $doctor->no_sip }}</p>
        <p><strong>Ruangan Praktik:</strong> {{ $doctor->ruangan }}</p>
        <p><strong>Kontak Darurat/HP:</strong> {{ $doctor->kontak }}</p>
    </div>
    <div class="mt-6">
        <a href="{{ route('doctors.index') }}" class="bg-gray-300 py-2 px-6 rounded-full hover:bg-gray-400">Kembali</a>
    </div>
</div>
@endsection