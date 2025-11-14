<!DOCTYPE html>
<html>
<head>
    <title>Employees - Index</title>
</head>
<body>
    <h1>Employees</h1>

    <a href="{{ route('employees.create') }}">Employee toevoegen</a>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                {{-- geen id tonen --}}
                <th>Employee code</th>
                <th>Naam</th>
                <th>Rol</th>
                <th>Land</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employees as $employee)
                <tr>
                    <td>{{ $employee->employee_code }}</td>
                    <td>{{ $employee->full_name }}</td>
                    <td>{{ $employee->role }}</td>
                    <td>{{ $employee->country }}</td>
                    <td>
                        <a href="{{ route('employees.show', $employee) }}">Bekijken</a>
                        <a href="{{ route('employees.edit', $employee) }}">Bewerken</a>

                        <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Terug naar projectenlijst bijvoorbeeld --}}
    <a href="{{ route('projects.index') }}">Terug naar projecten</a>
</body>
</html>
