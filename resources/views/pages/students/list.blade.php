<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Student List</h2>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Location</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone_number ?? 'N/A' }}</td>
                    <td>{{ $student->location ?? 'N/A' }}</td>
                    <td>
                        <a href="{{route('student.edit',$student->id)}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('student.delete',$student->id)}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No students found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
