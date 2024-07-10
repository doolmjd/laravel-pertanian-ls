@extends('layout')
@section('title', 'Data')

@section('content')
    <h1>
        Proyeksi Pendapatan per Kapita Metode Aritmatika
    </h1>
    <p>
        Proyeksi pertumbuhan pendapatan per kapita adalah metode perhitungan untuk memperkirakan besar pendapatan per kapita
        di masa depan berdasarkan
        tren populasi tahun sebelumnya. Proyeksi pertumbuhan pendapatan per kapita dapat dihitung dengan metode Aritmatika.
    </p>
    <h2>
        Proyeksi Aritmatika
    </h2>
    <p>
        Metode aritmatika adalah pendekatan sederhana yang mengasumsikan pertumbuhan penduduk dalam jumlah yang tetap setiap
        tahunnya. Dalam metode ini, pertumbuhan penduduk (r) diasumsikan konstan dari tahun ke tahun. Perkiraan populasi di
        masa depan dihitung dengan menambahkan pertumbuhan tahunan (r) dari populasi awal (Po). Anda dapat mulai melakukan
        hitungan dengan menekan tombol di bawah ini
    </p>
    <a style="width:100%; display:block;background-color:#508D4E; text-align:center; padding:16px; color:white; border-radius: 16px"
        role="button" href="{{ route('datas.index') }}">Ke halaman proyeksi</a>

@endsection
