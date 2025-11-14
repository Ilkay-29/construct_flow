<!DOCTYPE html>
<html>
<head>
    <title>Projects - Index</title>
</head>
<body>
    <h1>Projects</h1>

    {{-- knop om nieuw project toe te voegen --}}
    <a href="{{ route('projects.create') }}">Project toevoegen</a>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                {{-- LET OP: geen id tonen --}}
                <th>Project code</th>
                <th>Naam</th>
                <th>Status</th>
                <th>Startdatum</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->project_code }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->status }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>
                        {{-- Detail --}}
                        <a href="{{ route('projects.show', $project) }}">Bekijken</a>

                        {{-- Bewerken --}}
                        <a href="{{ route('projects.edit', $project) }}">Bewerken</a>

                        {{-- Verwijderen --}}
                        <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
