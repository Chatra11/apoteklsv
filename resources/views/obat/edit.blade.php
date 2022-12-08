@extends('layout.main')

@section('content')
<form method="POST" action="{{url('Obat/'.$model->id) }}">
    @csrf
    @method('PUT')
    @include('obat.form')
</form>
@endsection