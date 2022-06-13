<div class="form-group"> 
   
    <button
        name="{{$name}}" 
        id="{{$name}}" 
        class="form-control {{ $errors->has($name) ? 'is-invalid' : ''}} {{$class ?? null}}" 
        {{ $disabled }} {{ $readonly }}
    >{{ $label }}</button>
    
</div>