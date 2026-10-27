<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат</title>
</head>
<body>
    <h1>Выбранное помещение</h1>

    @if($room == 'auditory')
        <p>Вы выбрали: Аудитория</p>
    @elseif($room == 'coworking')
        <p>Вы выбрали: Коворкинг</p>
    @elseif($room == 'cinema')
        <p>Вы выбрали: Кинозал</p>
    @else
        <p>Помещение не выбрано</p>
    @endif
</body>
</html>