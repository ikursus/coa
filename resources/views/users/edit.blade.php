@extends('layouts.induk')

@section('content_utama')

<div class="row mt-5">

    <div class="col">

        <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        {{-- <input type="hidden" name="_method" value="PATCH"> komen --}}
        @method('PATCH')

        <div class="card">
            <div class="card-header">
                {{ $pageTitle ?? "" }}  Rekod {{ $user->name }}
            </div>
            <div class="card-body">

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
                </div>

                <div class="form-group">
                    <label>MyKAD</label>
                    <input type="text" name="mykad" class="form-control" value="{{ $user->mykad }}" required>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
                </div>

                {{-- <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label>Password (Confirm)</label>
                    <input type="password" name="password_confirmation" class="form-control">
                </div> --}}

            </div>
            <div class="card-footer">
                <a href="{{ route('users.index') }}" class="btn btn-light">Kembali</a>
                <button type="submit" class="btn btn-primary">Kemaskini</button>
            </div>
        </div>

        </form>


    </div><!--/.col -->

</div><!--/.row -->

@endsection

