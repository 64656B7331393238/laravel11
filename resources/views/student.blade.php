<div>
    <h1>Add New Student</h1>
    <form action="student" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter Name">
        <br>
        <br>
        <input type="text" name="email" placeholder="Enter Email">
        <br>
        <br>
        <input type="text" name="batch" placeholder="Enter Batch">
        <br>
        <br>
        <button>Add</button>
    </form>
</div>
