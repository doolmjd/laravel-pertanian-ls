@extends('layout')
@section('title', 'Data');

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-primary">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mt-2">
                        Data proyeksi anda
                    </h5>
                    <a type="button" href="{{ route('datas.create') }}" class="btn btn-primary">+ Tambah data baru</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped table-secondary">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Data</th>
                                <th>Deskripsi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td><a href="{{route('datas.show', ['data' => $item->id ])}}" class="btn btn-primary">Detail</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    


@endsection
