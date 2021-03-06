@extends('layouts.induk')

@section('content_utama')

    <div class="row mt-5">

        <div class="col">

            <form method="POST" action="{{ route('coa.store') }}">
            @csrf

            <div class="card">
                <div class="card-header">
                    Tambah Rekod COA
                </div>
                <div class="card-body">

                    @include('layouts.alerts')

                        <div class="form-group">
                            <label>User</label>
                            <select name="user_id" class="form-control">
                                @foreach ($senaraiUsers as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Kod Akaun</label>
                            <input type="text" name="kod" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Keterangan Akaun</label>
                            <input type="text" name="keterangan" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Amaun</label>
                            <input type="number" name="amaun" min="0" step="0.01" class="form-control" required>
                        </div>

                    </form>

                </div>
                <div class="card-footer">
                    <a href="{{ route('coa.index') }}" class="btn btn-light">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>

            </form>


        </div><!--/.col -->

    </div><!--/.row -->
@endsection
