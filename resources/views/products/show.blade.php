@extends('layouts.app')
@section('content')
<h2> Product Show </h2>
<div class="row">
    <div class="col-12">
        <a href="{{ route('products.edit', $product->getId()) }} " class="btn btn-primary btn-sm float-right">Edit Product</a>
    </div>
</div>
@include('products._list')
@include('products.components.images-list')
@endsection
