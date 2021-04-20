@extends('layouts.app')
@section('content')
<h2> Product Edit </h2>
<div class="row">
    <div class="col-12">
        <button type="button" class='btn btn-sm btn-danger float-right' data-toggle="modal" data-target="#destroyModal">
            Delete Product
        </button>
    </div>
</div>

<form action="{{route('products.update', $product->getId())}}" method="POST">
    @csrf
    @method('PUT')
    @include('products._form')
</form>

@include('products.components.images')
@include('products.components.destroy-modal')
@endsection
