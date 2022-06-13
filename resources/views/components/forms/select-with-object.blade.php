<div class="form-group {{ $errors->has($name) ? 'has-danger' : '' }}">
 
    <label for="{{ $id }}">
    {!! $label !!}
        @if ( empty($required) )
        @else
            <span class='text-danger'>*</span>
        @endif
    </label> 

  <select class="form-control select2" id="{{ $name }}" name="{{ $name }}" 
        @if( $readOnly ) readonly="readonly" @endif
        @if( $disabled ) disabled="disabled" @endif>
    @foreach($list as $key=>$obj)
      <option 
        value="{{ $key }}"
        {{ old($name, $selected) == $key ? 'selected': '' }}>
        {{ $value }}
      </option>
    @endforeach
  </select>

  @if($errors->has($name))
      <label class="error mt-2 text-danger text-center">{{ $errors->first($name) }}</label>
  @endif

</div>