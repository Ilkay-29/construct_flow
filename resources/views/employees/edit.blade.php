<!DOCTYPE html>
<html>
<head>
    <title>Employee bewerken</title>
</head>
<body>
    <h1>Employee bewerken</h1>

    <form action="{{ route('employees.update', $employee) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Employee code:</label>
            <input type="text" name="employee_code" value="{{ old('employee_code', $employee->employee_code) }}">
        </div>

        <div>
            <label>Naam:</label>
            <input type="text" name="full_name" value="{{ old('full_name', $employee->full_name) }}">
        </div>

        <div>
            <label>Rol:</label>
            <input type="text" name="role" value="{{ old('role', $employee->role) }}">
        </div>

        <div>
            <label>Land:</label>
            <input type="text" name="country" value="{{ old('country', $employee->country) }}" maxlength="2">
        </div>

        <button type="submit">Bijwerken</button>
    </form>

    <a href="{{ route('employees.index') }}">Terug</a>
</body>
</html>
