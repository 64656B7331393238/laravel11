@include('common.header')
<h1>Home Page</h1>
@includeIf('common.abc',['page'=>"this is home page"])
{{-- <h1>{{rand()}}</h1>
<h1>{{$users[2]}}</h1> --}}
{{-- <div>
    @if($name == 'Dekston')
        <h2>This is Dekston</h2>
    @elseif ($name == 'Sam')
        <h2>This is Sam</h2>
    @else
        <h2>Other user</h2>
    @endif

    <div>
        @for ($i=0;$i<=10;$i++)
            <h4>{{$i}}</h4>
        @endfor
    </div>

    <div>
        @foreach ($users as $user)
            <h3>{{$user}}</h3>
        @endforeach
    </div>
</div> --}}
