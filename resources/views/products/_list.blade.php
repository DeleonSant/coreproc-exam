<div class="row">
    <div class="col-12">
        <div class="form-group">
            <label class="font-weight-bold" for="name">Name</label>
            <p> {{ $product->getName() }} </p>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label class="font-weight-bold" for="name">Price</label>
            <p> {{ number_format($product->getPrice(),2) }} </p>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label class="font-weight-bold" for="name">Description</label>
            <p> {{ $product->getDescription() }} </p>
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">
            <label class="font-weight-bold" for="name">Is Active?</label>
            <p> {{ $product->getIsActive() ? 'YES' : 'NO' }} </p>
        </div>
    </div>
</div>
