<div class="card my-4">
    <div class="card-body">
        <h5 class="card-title">Images</h5>
        <div class="row">
            @forelse($product->getMedia('images') as $image)
            <div class="col-3">
                <img src="{{ $image->getUrl('thumb') }}" class="img-thumbnail">
            </div>
            @empty
            <div class="col-12">
                <p class="text-center font-weight-bold mt-3">No Images found.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
