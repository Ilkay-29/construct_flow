<!DOCTYPE html>
<html>
<head>
    <title>Project bewerken</title>
</head>
<body>
    <h1>Project bewerken</h1>

    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Project code:</label>
            <input type="text" name="project_code" value="{{ old('project_code', $project->project_code) }}">
        </div>

        <div>
            <label>Naam:</label>
            <input type="text" name="name" value="{{ old('name', $project->name) }}">
        </div>

        <div>
            <label>Status:</label>
            <select name="status">
                @foreach (['planned','active','on_hold','completed','cancelled'] as $status)
                    <option value="{{ $status }}" @selected(old('status', $project->status) == $status)>
                        {{ $status }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label>Startdatum:</label>
            <input type="date" name="start_date" value="{{ old('start_date', $project->start_date) }}">
        </div>

        <button type="submit">Bijwerken</button>
    </form>

    {{-- Terug naar waar je edit-knop stond (hier: index) --}}
    <a href="{{ route('projects.index') }}">Terug</a>
</body>
</html>
