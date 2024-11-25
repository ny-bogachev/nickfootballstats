<select name="{{$name}}">
    @foreach ($options as $key => $option)
        <option value="{{ $key }}" {{ old($name, $value) == $key ? 'selected' : '' }} >{{ $option }}</option>
    @endforeach
</select>
