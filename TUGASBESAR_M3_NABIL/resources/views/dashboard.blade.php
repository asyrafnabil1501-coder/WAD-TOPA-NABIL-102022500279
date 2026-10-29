@extends('layouts.app')
@section('title', 'Dashboard - Harapan Sehat')

@section('content')
<div class="max-w-4xl mx-auto text-center py-8">
    <h1 class="text-4xl font-bold text-emerald-800 mb-2">
        {{ $salam }}, <span class="text-amber-600">Admin Klinik</span>!
    </h1>
    <p class="text-gray-600 mb-8">Selamat datang di Sistem Informasi Pengelolaan Data Dokter Harapan Sehat.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-xl shadow border border-gray-100">
            <h3 class="text-gray-500 font-medium mb-1">Waktu Akses Server</h3>
            <p class="text-2xl font-bold text-emerald-700">{{ $accessTime }} WIB</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow border border-gray-100">
            <h3 class="text-gray-500 font-medium mb-1">Total Dokter Terdaftar</h3>
            <p class="text-2xl font-bold text-amber-600">{{ $totalDokter }} Dokter</p>
        </div>
    </div>

    <div class="mt-8">
        <a href="{{ route('doctors.index') }}" class="bg-emerald-700 text-white px-8 py-3 rounded-full font-medium hover:bg-emerald-800 transition">
            Kelola Data Dokter &rarr;
        </a>
    </div>
</div>
@endsection