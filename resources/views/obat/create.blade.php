@extends('Layout.main')

@section('content')

<form method="POST" action="{{url('Obat')}}">
    @csrf
    @include('obat.form')
</form>
@endsection