@extends('layouts.induk')

@section('content_utama')

        <div class="row mt-5">

            <div class="col">

                <form method="POST" action="{{ route('users.store') }}">
                @csrf

                <div class="card">
                    <div class="card-header">
                        Tambah Rekod User
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="name" class="form-control" value="{{ old('nama') }}" required>
                            </div>

                            <div class="form-group">
                                <label>MyKAD</label>
                                <input type="text" name="mykad" class="form-control" value="{{ old('mykad') }}" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Password (Confirm)</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                            </div>

                        </form>

                    </div>
                    <div class="card-footer">
                        <a href="{{ route('users.index') }}" class="btn btn-light">Kembali</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>

                </form>


            </div><!--/.col -->

        </div><!--/.row -->
@endsection
