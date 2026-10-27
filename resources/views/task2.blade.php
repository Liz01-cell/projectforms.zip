<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма заявки</title>
</head>
<body>
    <h1>Форма заявки на помещение</h1>
    <form action="{{ route('task2.store') }}" method="POST">
        @csrf

        <label>Выберите помещение:</label><br><br>
        <select name="room">
            <option value="">-- Выберите помещение --</option>
            <option value="auditory" {{ old('room') == 'auditory' ? 'selected' : '' }}>Аудитория</option>
            <option value="coworking" {{ old('room') == 'coworking' ? 'selected' : '' }}>Коворкинг</option>
            <option value="cinema" {{ old('room') == 'cinema' ? 'selected' : '' }}>Кинозал</option>
            //{{ old('room') == 'auditory' ? 'selected' : '' }} — сохраняет выбранный вариант после ошибки
        </select>
        @error('room')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br><br>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>