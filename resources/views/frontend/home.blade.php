@extends('layouts.frontent')

@section("content")
<h1>Заявка на визит</h1>
<form action="submit.php" method="post">
    <label for="fullName">ФИО:</label>
    <input type="text" id="fullName" name="fullName" required>

    <label for="organization">Организация:</label>
    <input type="text" id="organization" name="organization" required>

    <label for="gender">Пол:</label>
    <select id="gender" name="gender">
        <option value="male">Мужской</option>
        <option value="female">Женский</option>
    </select>

    <label for="purpose">Цель визита:</label>
    <input type="text" id="purpose" name="purpose" required>

    <label for="visitDate">Дата визита:</label>
    <input type="date" id="visitDate" name="visitDate" required>

    <label for="reason">Основание для визита:</label>
    <input type="file" id="documents" name="documents" accept=".pdf" required>

    <label for="photo">Загрузите фото (JPG):</label>
    <input type="file" id="photo" name="photo" accept=".jpg" required>

    <button type="submit">Отправить</button>
</form>
@endsection