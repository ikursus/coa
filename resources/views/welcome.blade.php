@extends('layouts.induk')


@section('footer_content')
<div class="text-center mt-3">
    Copyright &copy; {{ date('Y') }} {{ config('app.name') }}.
</div>
@endsection

@section('content_utama')
<div class="mt-5 text-center">
    <h1>
        Selamat Datang ke {{ config('app.name') }}
    </h1>
</div>

@endsection

@push('javascript_custom')

@endpush
