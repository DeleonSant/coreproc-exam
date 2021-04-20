<div class="container">
    <div class="form-group">
        <label>Name <span class="text-danger">*</span> </label>
        <input type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name', isset($product) ? $product->getName() : '') }}">
        @if ($errors->has('name'))
        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
        @endif
    </div>
    <div class="form-group">
        <label>Price <span class="text-danger">*</span></label>
        <input type="text" class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" value='{{ old('price', isset($product) ? $product->getPrice() : '') }}'>
        @if ($errors->has('price'))
        <div class="invalid-feedback">{{ $errors->first('price') }}</div>
        @endif
    </div>
    <div class="form-group">
        <label>Description <span class="text-danger">*</span></label>
        <textarea name="description" class="form-control {{ $errors->has('description') ? ' is-invalid' : '' }}">{{ old('description', isset($product) ? $product->getDescription() : '') }}</textarea>
        @if ($errors->has('description'))
        <div class="invalid-feedback">{{ $errors->first('description') }}</div>
        @endif
    </div>
    <div class="form-group form-check">
        <input type="checkbox" name="isActive" id="isActive" {{   old('isActive') ? 'checked' : ''  }} @isset($product) {{  $product->getIsActive() ?  'checked': '' }} @endisset>
        <label class="form-check-label" for="isActive">Is Active?</label>
    </div>

    <button type="submit" class='btn btn-primary btn-sm float-right'>Save</button>
    <div class="clearfix">
    </div>
</div>
