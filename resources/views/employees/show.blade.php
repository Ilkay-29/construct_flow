<!DOCTYPE html>
<html>
<head>
    <title>Employee detail</title>
</head>
<body>
    <h1>Employee detail</h1>

    <p><strong>Employee code:</strong> {{ $employee->employee_code }}</p>
    <p><strong>Naam:</strong> {{ $employee->full_name }}</p>
    <p><strong>Rol:</strong> {{ $employee->role }}</p>
    <p><strong>Land:</strong> {{ $employee->country }}</p>

    <a href="{{ route('employees.index') }}">Terug</a>
    <a href="{{ route('employees.edit', $employee) }}">Bewerken</a>

    <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Verwijderen</button>
    </form>
</body>
</html>
