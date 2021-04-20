<div class="card my-4">
    <div class="card-body">
        <h5 class="card-title">Images</h5>
        <div class="mb-4">
            <form action="{{ route('product-image_store', $product) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <input id="image" type="file" class="form-control  {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" class="form-control">
                        @if ($errors->has('image'))
                        <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                        @endif
                    </div>
                    <div class="col-8">
                        <button type="submit" class='btn btn-sm btn-primary'>
                            Upload Image
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            @forelse($product->getMedia('images') as $image)
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <img src="{{ $image->getUrl('thumb') }}" class="img-thumbnail">
                        <button type="button" class='btn btn-sm btn-danger btn-block' data-toggle="modal" data-target="#destroyImageModal{{$image->id}}">
                            Delete
                        </button>
                    </div>
                </div>
            </div>
            @include('products.components.destroy-image-modal')
            @empty
            <div class="col-12">
                <p class="text-center font-weight-bold mt-3">No Images found.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
