@extends('layouts.induk')

@section('content_utama')

    <div class="row mt-5">

        <div class="col">

            <div class="card">
                <div class="card-header">
                    Senarai COA
                </div>
                <div class="card-body">

                    <a href="{{ route('coa.print') }}" class="btn btn-success">Cetak</a>

                    <table class="table">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>USER ID</th>
                                <th>USER NAME</th>
                                <th>KOD</th>
                                <th>KETERANGAN</th>
                                <th>AMAUN</th>
                                <th>TINDAKAN</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($senaraiCoa as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->user->id }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->kod }}</td>
                                <td>{{ $item->keterangan }}</td>
                                <td>{{ $item->amaun }}</td>
                                <td>
                                    <a href="{{ route('coa.edit', [$item->id]) }}" class="btn btn-info">Edit</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>

                    {{ $senaraiCoa->links() }}
                    {{ $senaraiCoa->render() }}

                </div>
                <div class="card-footer">
                    <a href="{{ route('coa.create') }}" class="btn btn-primary">Tambah Baru</a>
                </div>
            </div>


        </div><!--/.col -->

    </div><!--/.row -->

    @endsection
