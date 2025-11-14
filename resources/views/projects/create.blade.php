<!DOCTYPE html>
<html>
<head>
    <title>Project toevoegen</title>
</head>
<body>
    <h1>Project toevoegen</h1>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div>
            <label>Project code:</label>
            <input type="text" name="project_code" value="{{ old('project_code') }}">
        </div>

        <div>
            <label>Naam:</label>
            <input type="text" name="name" value="{{ old('name') }}">
        </div>

        <div>
            <label>Status:</label>
            <select name="status">
                <option value="planned">planned</option>
                <option value="active">active</option>
                <option value="on_hold">on_hold</option>
                <option value="completed">completed</option>
                <option value="cancelled">cancelled</option>
            </select>
        </div>

        <div>
            <label>Startdatum:</label>
            <input type="date" name="start_date" value="{{ old('start_date') }}">
        </div>

        <button type="submit">Opslaan</button>
    </form>

    {{-- Terug naar index --}}
    <a href="{{ route('projects.index') }}">Terug</a>
</body>
</html>
