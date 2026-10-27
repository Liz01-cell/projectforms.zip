<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Форма пользователя</title>
</head>
<body>
    <h1>Форма пользователя</h1>
    <form action="{{ route('task1.store') }}" method="POST">
        @csrf

        <label>ФИО:</label><br>
        <input type="text" name="fio" value="{{ old('fio') }}">
        @error('fio')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br><br>

        <label>Телефон:</label><br>
        <input type="text" name="phone" value="{{ old('phone') }}">
        @error('phone')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br><br>

        <label>Электронная почта:</label><br>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <p style="color: red;">{{ $message }}</p>
        @enderror
        <br><br>

        <button type="submit">Отправить</button>
    </form>
</body>
</html>