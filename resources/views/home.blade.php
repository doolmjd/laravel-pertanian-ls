@extends('layout')
@section('title', 'Data')

@section('content')
    <h1>
        Proyeksi Pendapatan per Kapita Metode Aritmatika
    </h1>
    <p>
        Proyeksi PDRB Industri adalah metode perhitungan yang digunakan untuk memperkirakan total Produk Domestik Regional
        Bruto (PDRB) di sektor industri pada masa mendatang, berdasarkan tren ekonomi dari tahun-tahun sebelumnya. PDRB
        sendiri merupakan indikator yang mengukur nilai tambah bruto dari semua sektor ekonomi yang ada di suatu wilayah
        dalam periode tertentu. Proyeksi ini sangat penting untuk perencanaan pembangunan ekonomi, pembuatan kebijakan
        industri, serta evaluasi kinerja sektor industri. Proyeksi PDRB Industri dapat dihitung dengan metode geometrik.
    </p>
    <h2>
        Proyeksi Geometrik
    </h2>
    <p>

        Proyeksi PDRB Industri dengan metode geometrik adalah teknik yang digunakan untuk memperkirakan Produk Domestik
        Regional Bruto (PDRB) di sektor industri masa depan berdasarkan asumsi bahwa pertumbuhan ekonomi mengikuti pola
        pertumbuhan eksponensial. Metode ini mengasumsikan bahwa tingkat pertumbuhan persentase tahunan dari PDRB Industri
        konstan dari tahun ke tahun. Proyeksi geometrik berbeda dengan metode aritmatika yang mengasumsikan pertumbuhan
        dalam jumlah tetap setiap tahun, karena metode geometrik mempertimbangkan pertumbuhan kumulatif yang semakin besar
        seiring berjalannya waktu. Dalam metode geometrik, PDRB Industri masa depan dihitung dengan mengalikan PDRB Industri
        awal (Po) dengan faktor pertumbuhan (1 + g)^n, di mana g adalah tingkat pertumbuhan tahunan dalam bentuk desimal dan
        n adalah jumlah tahun dari tahun dasar.
    </p>
    <a class="btn btn-primer btn-full" role="button" href="{{ route('datas.index') }}">Ke halaman proyeksi</a>

@endsection
