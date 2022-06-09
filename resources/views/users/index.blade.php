@extends('layouts.induk')

@section('content_utama')
    <div class="row mt-5">

        <div class="col">

            <div class="card">
                <div class="card-header">
                    Senarai Users
                </div>
                <div class="card-body">

                    <table class="table">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>MYKAD</th>
                                <th>EMAIL</th>
                                <th>TINDAKAN</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach($senaraiUsers as $item)
                            <tr>
                                <td><?php echo $item->id; ?></td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->mykad }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <a href="{{ route('users.edit', [$item->id]) }}" class="btn btn-info">Edit</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>

                    </table>

                    {{ $senaraiUsers->links() }}

                </div>
                <div class="card-footer">
                    <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah Baru</a>
                </div>
            </div>


        </div><!--/.col -->

    </div><!--/.row -->
@endsection
