<form action="{{$action}}" method={{$method}} enctype="multipart/form-data">
    @csrf
    @method('put')
    {{$slot}}
    <input type="submit" value={{$submit}}>
</form>