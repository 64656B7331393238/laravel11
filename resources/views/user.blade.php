<div>
    <h1>User Login</h1>

    @if (session('message'))
        <span class="successs-message">{{session('message')}}</span>

    @endif

    @if (session('name'))
        <span class="successs-message">{{session('name')}}</span>
    @endif

    {{session()->keep(['name'])}}
    <form action="add" method="post">
        @csrf
        <input type="text" name="user" placeholder="Enter username">
        <br>
        <br>
        <input type="text" name="email" placeholder="Enter email">
        <br>
        <br>
        <input type="text" name="phone" placeholder="Enter phone">
        <br>
        <br>
        <button>Login</button>
    </form>
</div>

<style>
    .successs-message{
        background-color: lightgreen;
        padding: 2px 20px;
        margin-bottom: 10px;
        display: inline-block;
        border-radius: 2px
    }
</style>
