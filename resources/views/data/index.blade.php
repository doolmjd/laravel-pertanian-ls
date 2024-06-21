@extends('layout')
@section('title', 'Data');

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mt-2">
                        Data proyeksi anda
                    </h5>
                    <a type="button" href="{{ route('datas.create') }}" class="btn btn-secondary">+ Tambah data baru</a>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>

    


@endsection
