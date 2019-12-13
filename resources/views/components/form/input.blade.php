<div class="form-group row">
    <label for="{{ $field }}" class="col-md-4 col-form-label text-md-right">{{ __($label) }}</label>

    <div class="col-md-6">
        <input id="{{ $field }}" type="text"
               class="form-control @error($field) is-invalid @enderror" name="{{ $field }}"
               value="{{ old($field) }}" required autocomplete="name" autofocus>

        @error($field)
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div>
