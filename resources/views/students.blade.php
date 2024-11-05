<div>
    <h1>Students List</h1>
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Batch</td>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->batch }}</td>
            </tr>
        @endforeach
    </table>
</div>
