<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
</head>
<body>

    <h1>Student List</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Contact No.</th>
        </tr>

        @foreach ($students as $student)
        <tr>
            <td>{{ $student->student_id }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->contact_no }}</td>
        </tr>
        @endforeach

    </table>

</body>
</html>