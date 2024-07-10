@extends('layout')
@section('title', 'Data');

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mt-2">
                        Entri
                    </h5>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createEntry">
                        + Tambah Entry
                    </button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Tahun</th>
                                <th>Populasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->entries as $populasi)
                                <tr>
                                    <td>{{ $populasi->year }}</td>
                                    <td>{{ $populasi->population }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="createEntry" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="createEntryLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="createEntryLabel">Entry</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="dataForm" action="{{ route('datas.entries.store', ['data' => $data->id]) }}" method="POST">
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="col-lg">
                                <label for="formNama" class="form-label">Tahun</label>
                                <input type="number" class="form-control" id="formNama" placeholder="Tahun" name="year"
                                    required>
                            </div>
                            <div class="col-lg">
                                <label for="formPopulasi" class="form-label">Populasi</label>
                                <input type="number" class="form-control" id="formPopulasi" placeholder="Populasi"
                                    name="population" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" id="submitButton" class="btn btn-primary ml-auto">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mt-2">
                        Proyeksi
                    </h5>
                    <a type="button" class="btn btn-primary" href="{{ route('datas.project', ['data' => $data->id]) }}">
                        Hitung Proyeksi
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Tahun</th>
                                <th>Populasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data->projections as $populasi)
                                <tr>
                                    <td>{{ $populasi->year }}</td>
                                    <td>{{ $populasi->population }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <div class="row mt-4">
        <div class="col-lg">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5 class="card-title mt-2">
                        Grafik Proyeksi
                    </h5>
                </div>
                <div class="card-body">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: {{ $data->projections->pluck('year') }},
                datasets: [{
                    label: 'Populasi',
                    data: {{ $data->projections->pluck('population') }},
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>


@endsection
