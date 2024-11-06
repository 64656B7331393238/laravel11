<div>
    <h1>Edit Student Data</h1>
    <form action="/editStudent/{{ $studentDetails->id }}" method="post">
        <input type="hidden" name="_method" value="put">
        @csrf

        <input type="text" name="name" placeholder="Edit Name" value="{{ $studentDetails->name }}">
        <br>
        <br>

        <input type="text" name="email" placeholder="Edit Email" value="{{ $studentDetails->email }}">
        <br>
        <br>

        <input type="text" name="batch" placeholder="Edit Batch" value="{{ $studentDetails->batch }}">
        <br>
        <br>

        <button>Update</button>
        <a href="/display">Cancel</a>
    </form>
</div>
