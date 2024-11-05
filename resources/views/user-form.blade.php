{{-- <div>
   <h2>Add New User</h2>
   <form action="addUser" method="POST">
    @csrf
    <div class="input-form">
        <input type="text" placeholder="Enter username" name="username">
    </div>
    <div class="input-form">
        <input type="text" placeholder="Enter city" name="city">
    </div>
    <div class="input-form">
        <input type="text" placeholder="Enter email" name="email">
    </div>
    <div class="input-form">
       <button>Add New User</button>
    </div>
   </form>
</div>

<style>
    input{
        color: orange;
        border: 1px solid orange;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin: 10px;
        padding: 5px
    }

    button{
        cursor: pointer;
        color: orange;
        border: 1px solid rgb(17, 14, 9);
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin: 10px;
        background-color: white;
    }
</style> --}}

{{-- <h1>Add New User</h1>
<div>
    <form action="userSubmit" method="POST">
        @csrf
        <div>
            <h4>User Skills</h4>
            <input type="checkbox" name="skill[]" id="php" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" name="skill[]" id="java" value="java">
            <label for="java">JAVA</label>
            <input type="checkbox" name="skill[]" id="node" value="node">
            <label for="node">Node</label>
        </div>

        <div>
            <h4>User Gender</h4>
            <input type="radio" name="gender" id="male" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female">Female</label>
        </div>

        <div>
            <h4>User Age</h4>
            <input type="range" name="age" id="age" min="18" max="100">
        </div>

        <div>
            <h4>User City</h4>
            <select name="city" id="city">
                <option value="Malaysia">Malaysia</option>
                <option value="Singapore">Singapore</option>
                <option value="Japan">Japan</option>
            </select>
        </div>

        <div>
            <button>Submit</button>
        </div>
    </form>
</div> --}}

<h1>Add New User</h1>
<div>
    {{-- <div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div style="color: red">{{$error}}</div>
        @endforeach
    @endif --}}
</div>
    <form action="addUser" method="POST">
        @csrf
        <div>
            <div class="input-wrapper">
                <input type="text" name="username" placeholder="Enter Username" value="{{old('username')}}" class="{{$errors->first('username')?'input-error':''}}">
                <span style="color: red">
                    @error('username')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="input-wrapper">
                <input type="text" name="email" placeholder="Enter User Email" value="{{old('email')}}" class="{{$errors->first('username')?'input-error':''}}">
                <span style="color: red">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="input-wrapper">
                <input type="text" name="city" placeholder="Enter User City" value="{{old('city')}}" class="{{$errors->first('username')?'input-error':''}}">
                <span style="color: red">
                    @error('city')
                        {{$message}}
                    @enderror
                </span>
            </div>
        </div>

        <div class="input-wrapper">
            <h4>Skills</h4>
            <input type="checkbox" id="php" name="skills[]" value="php">
            <label for="php">PHP</label>
            <input type="checkbox" id="java" name="skills[]" value="java">
            <label for="java">Java</label>
            <input type="checkbox" id="node" name="skills[]" value="node">
            <label for="node">Node</label>
            <span style="color: red">
                @error('skills')
                    {{$message}}
                @enderror
            </span>
        </div>

        <div>
            <button>Add New User</button>
        </div>
    </form>
</div>

<style>
    input{
        color: orange;
        border: 1px solid orange;
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin: 10px;
        padding: 5px
    }

    button{
        cursor: pointer;
        color: orange;
        border: 1px solid rgb(17, 14, 9);
        height: 35px;
        width: 200px;
        border-radius: 2px;
        margin: 10px;
        background-color: white;
    }

    .input-error{
        border: 1px solid red;
        color:red;
    }
</style>
