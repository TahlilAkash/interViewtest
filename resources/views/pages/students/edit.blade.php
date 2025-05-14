<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Edit Student</h2>

    <form action="{{ route('student.update', $student->id) }}" method="post">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="student_id" class="form-label">Student ID</label>
            <input type="text" name="student_id" class="form-control" id="student_id"
            value="{{ old('student_id', $student->student_id) }}" required>
        </div>

        <div class="mb-3">
            <label for="name" class="form-label">Student Name</label>
            <input type="text" name="name" class="form-control" id="name"
                   value="{{ old('name', $student->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" name="phone_number" class="form-control" id="phone_number"
                   value="{{ old('phone_number', $student->phone_number) }}">
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" name="location" class="form-control" id="location"
                   value="{{ old('location', $student->location) }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Student</button>

    </form>
</div>
</body>
</html>
