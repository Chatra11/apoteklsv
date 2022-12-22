@extends('Layout.main')

@section('content')
<form method="POST" action="{{url('Supplier/'.$model->id) }}">
    @csrf
    @method('PUT')
    @include('supplier.form')
</form>
@endsection