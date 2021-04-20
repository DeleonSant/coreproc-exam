@extends('layouts.app')
@section('content')
<h2> Products </h2>
<div class="row">
    <div class="col-12">
        <a class="btn btn-sm btn-success float-right" href="{{route('products.create')}}">Add new product </a>
    </div>
</div>
<div class="row pt-3">
    @forelse ($products as $product)
    <div class="col-4 mb-3">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" height="200" width="200" src="{{ $product->hasImages() ? $product->getMedia('images')->first()->getUrl('thumb') : asset('images/default-image.jpg')}}" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{ $product->getName() }} </h5>

                <p class="card-text">
                    {{ $product->getDescription() }}
                </p>

                <div class="row">
                    <div class="col-6">
                        &#8369; {{ number_format($product->getPrice(), 2) }}
                    </div>
                    <div class="col-6">
                        <a href="{{ route('products.show', $product->getId()) }}" class="btn btn-primary btn-sm float-right">Show</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    <div class="col-12 mb-3">
        <p class="text-center font-weight-bold mt-3">No Products found.</p>
    </div>
    @endforelse
</div>
{!! $products->links() !!}
@endsection
