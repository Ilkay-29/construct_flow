<!DOCTYPE html>
<html>
<head>
    <title>Employee toevoegen</title>
</head>
<body>
    <h1>Employee toevoegen</h1>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf

        <div>
            <label>Employee code:</label>
            <input type="text" name="employee_code" value="{{ old('employee_code') }}">
        </div>

        <div>
            <label>Naam:</label>
            <input type="text" name="full_name" value="{{ old('full_name') }}">
        </div>

        <div>
            <label>Rol:</label>
            <input type="text" name="role" value="{{ old('role') }}">
        </div>

        <div>
            <label>Land (ISO, bv NL):</label>
            <input type="text" name="country" value="{{ old('country') }}" maxlength="2">
        </div>

        <button type="submit">Opslaan</button>
    </form>

    <a href="{{ route('employees.index') }}">Terug</a>
</body>
</html>
    