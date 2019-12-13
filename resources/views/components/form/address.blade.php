<div class="form-group row">
    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address ') }}</label>

    <div class="col-md-6">
        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address"
               value="{{ old('address') }}" required autocomplete="address">

        @error('address')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>

