<div>
    <h1>Display Student</h1>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
            <td>Created At</td>
            <td>Action</td>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->batch }}</td>
                <td>{{ $student->created_at }}</td>
                <td><a href="{{ 'delete/' . $student->id }}">Delete</a> <a href="{{ 'edit/' . $student->id }}">Edit</a>
                </td>
            </tr>
        @endforeach
    </table>
</div>
