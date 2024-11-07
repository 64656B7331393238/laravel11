<div>
    @foreach ($imageData as $image)
    {{$image->path}}
    <img src="{{url('storage/public'.$image->path)}}" alt="">
    @endforeach
</div>
