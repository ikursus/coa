@extends('layouts.induk')

@section('content_utama')

<div class="row mt-5">

    <div class="col-8 offset-2">

        <form method="POST" action="{{ route('login.authenticate') }}">
        @csrf

        <div class="card">
            <div class="card-header">
                Tambah Rekod COA
            </div>
            <div class="card-body">

                @include('layouts.alerts')

                    <div class="form-group">
                        <label>Emel</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <input type="checkbox" name="remember_me" value="1"> Ingat Login Saya
                    </div>

                </form>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Log Masuk</button>
            </div>
        </div>

        </form>


    </div><!--/.col -->

</div><!--/.row -->

@endsection
