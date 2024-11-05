{{-- @include('common.header') --}}
{{-- <x-message-banner msg="user added successfully" class="success"></x-message-banner>
<x-message-banner msg="user logout successfully" class="error"></x-message-banner>
<x-message-banner msg="no user found" class="warning"></x-message-banner> --}}
<h1>Home Page</h1>
{{-- <h3>{{URL::current()}}</h3>
<h3>{{URL::full()}}</h3> --}}

{{-- <h3>{{url()->current()}}</h3>
<h3>{{url()->full()}}</h3>

<a href="{{URL::to('about')}}">About</a> --}}

{{-- <style>
    .success{
        color: rgb(10, 10, 10);
        background-color: lightgreen;
        padding: 3px 10px;
        margin:10px;
        display: inline-block;
        border-radius: 2px;
    }

    .error {
        color: red;
        background-color: yellow;
        padding: 3px 10px;
        margin:10px;
        display: inline-block;
        border-radius: 2px;
    }

    .warning {
        color: black;
        background-color: orange;
        padding: 3px 10px;
        margin:10px;
        display: inline-block;
        border-radius: 2px;
    }
</style> --}}
{{-- @includeIf('common.abc',['page'=>"this is home page"]) --}}
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
