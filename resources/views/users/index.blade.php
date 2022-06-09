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

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $item->id }}">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="modal-delete-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">


                                            <form action="{{ route('users.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Pengesahan Hapus Data</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Adakah anda ingin menghapuskan data {{ $item->name }}?
                                                    </div>
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-danger">Ya</button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>

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
