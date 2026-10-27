<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Заявка на конференцию</title>
</head>
<body>
    <h1>Заявка на проведение конференции</h1>
    <form action="{{ route('task3.store') }}" method="POST">
        @csrf

        <label>Название конференции:</label><br>
        <input type="text" name="title" value="{{ old('title') }}">
        @error('title')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br><br>

        <label>Помещение:</label><br>
        <select name="room">
            <option value="">-- Выберите помещение --</option>
            <option value="auditory" {{ old('room') == 'auditory' ? 'selected' : '' }}>Аудитория</option>
            <option value="coworking" {{ old('room') == 'coworking' ? 'selected' : '' }}>Коворкинг</option>
            <option value="cinema" {{ old('room') == 'cinema' ? 'selected' : '' }}>Кинозал</option>
        </select>
        @error('room')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br><br>

        <label>Дата начала:</label><br>
        <input type="date" name="date" value="{{ old('date') }}">
        @error('date')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br><br>

        <label>Способ оплаты:</label><br>
        <select name="payment">
            <option value="">-- Выберите способ оплаты --</option>
            <option value="cash" {{ old('payment') == 'cash' ? 'selected' : '' }}>Наличные</option>
            <option value="card" {{ old('payment') == 'card' ? 'selected' : '' }}>Банковская карта</option>
            <option value="transfer" {{ old('payment') == 'transfer' ? 'selected' : '' }}>Банковский перевод</option>
        </select>
        @error('payment')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br><br>

        <label>Описание конференции:</label><br>
        <textarea name="description" rows="5" cols="40">{{ old('description') }}</textarea>
        @error('description')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br><br>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>