@if($errors->has('photo'))
    <div class="invalid-feedback">{{ $errors->first('photo') }}</div>
@endif
