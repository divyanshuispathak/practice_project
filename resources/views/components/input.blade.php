<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id="" class="form-control" placeholder="" value="{{old('name')}}" >
    <span class="text-danger">
        {{$demo}}
    @error('name')
        {{$message}}
    @enderror
    </span>
</div>