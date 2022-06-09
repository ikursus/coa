@extends('layouts.induk')

@section('content_utama')

    <div class="row mt-5">

        <div class="col">

            <form method="POST">
            @csrf
            {{-- <input type="hidden" name="_method" value="PATCH"> komen --}}
            @method('PATCH')

            <div class="card">
                <div class="card-header">
                    {{ $pageTitle }}  Rekod COA ID: {{ $id }}
                </div>
                <div class="card-body">

                        <div class="form-group">
                            <label>Kod Akaun</label>
                            <input type="text" name="kod_akaun" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Keterangan Akaun</label>
                            <input type="text" name="keterangan_akaun" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label>Amaun</label>
                            <input type="number" name="amaun" min="0" step="0.01" class="form-control" required>
                        </div>

                    </form>

                </div>
                <div class="card-footer">
                    <a href="{{ route('coa.index') }}" class="btn btn-light">Kembali</a>
                    <button type="submit" class="btn btn-primary">Kemaskini</button>
                </div>
            </div>

            </form>


        </div><!--/.col -->

    </div><!--/.row -->

@endsection
