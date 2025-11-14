<!DOCTYPE html>
<html>
<head>
    <title>Project detail</title>
</head>
<body>
    <h1>Project detail</h1>

    <p><strong>Project code:</strong> {{ $project->project_code }}</p>
    <p><strong>Naam:</strong> {{ $project->name }}</p>
    <p><strong>Status:</strong> {{ $project->status }}</p>
    <p><strong>Startdatum:</strong> {{ $project->start_date }}</p>

    {{-- Terug naar lijst --}}
    <a href="{{ route('projects.index') }}">Terug</a>

    {{-- Bewerken --}}
    <a href="{{ route('projects.edit', $project) }}">Bewerken</a>

    {{-- Verwijderen --}}
    <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Verwijderen</button>
    </form>
</body>
</html>
