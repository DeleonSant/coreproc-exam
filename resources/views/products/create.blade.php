@extends('layouts.app')
@section('content')
<h2> Product Create </h2>
<form action="{{route('products.store')}}" method="POST">
    @csrf
    @include('products._form')
</form>
@endsection
