@if ($visibled)
    <div class="form-group form-element-number {{ $errors->has($name) ? 'has-error' : '' }}">
        <label for="{{ $name }}" class="control-label {{ $required ? 'required' : '' }}">
            {!! $label !!}

            @if($required)
                <span class="form-element-required">*</span>
            @endif
        </label>
        <input {!! $attributes !!}
               value="{{ $value }}"
               @if($readonly) readonly @endif
        >

        @include(AdminTemplate::getViewPath('form.element.partials.helptext'))
        @include(AdminTemplate::getViewPath('form.element.partials.errors'))
    </div>
@endif
