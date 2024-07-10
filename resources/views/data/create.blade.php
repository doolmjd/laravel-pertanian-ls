@extends('layout')
@section('title', 'Data')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mt-2">
                        Buat data proyeksi baru
                    </h5>
                </div>
                <form id="dataForm" action="{{ route('datas.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="formNama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="formNama" placeholder="Masukkan nama data..."
                                name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="formDeskripsi" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="formDeskripsi" name="description" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button type="submit" id="submitButton" class="btn btn-primary ml-auto">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </div>

    <script></script>

@endsection
