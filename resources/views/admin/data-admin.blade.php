{{-- Menghubungkan dengan template --}}
@extends('admin.master-admin') 

{{-- Mengisi konten halaman --}}
@section('isi_konten')
    <p>Ini adalah halaman <span style="color: var(--purple)">{{ $headtitle }}</span></p>
    <p>Selamat membangun web, Maghfiroh! Semoga tuntas sesuai target dengan hasil terbaik dan memuaskan.</p>
    <h1>Apa ya judulnya?</h1>
    <h2>i don't know</h2>
@endsection