@if($errors->has('body'))
    <div class="invalid-feedback">{{ $errors->first('body') }}</div>
@endif