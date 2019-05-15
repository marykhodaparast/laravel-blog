@if($errors->has('title'))
    <div class="invalid-feedback">{{ $errors->first('title') }}</div>
@endif