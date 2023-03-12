@extends('layouts.navbar')

@section('content')
<div class="container">
    <h1>Woops (Error 500)</h1>
    <p>Ada masalah dengan server saya</p>
    <h3>{{ $exception->getMessage() }}</h3>
    <textarea readonly cols="100" rows="20">{{ $exception->getTraceAsString() }}</textarea>
</div>
@endsection
