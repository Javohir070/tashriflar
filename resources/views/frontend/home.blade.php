@extends('layouts.frontent')

@section("content")
<h1>Заявка на визит</h1>
@if (session('status'))
<div class="contaner">
    <div class="alert alert-success">{{ session('status') }}</div>
</div>
@endif
<form action="{{ route("tashrif.store") }}" method="post" enctype="multipart/form-data">
   @csrf
    <label for="fullName">ФИО:</label>
    <input type="text" id="fullName" name="fish" required>

    <label for="organization">Организация:</label>
    <input type="text" id="organization" name="tashkilot" required>

    <label for="gender">Пол:</label>
    <select id="gender" name="jinsi">
        <option value="male">Мужской</option>
        <option value="female">Женский</option>
    </select>

    <label for="purpose">Цель визита:</label>
    <input type="text" id="purpose" name="maqsad" required>

    <label for="visitDate">Дата визита:</label>
    <input type="date" id="visitDate" name="sana" required>

    <label for="reason">Основание для визита:</label>
    <input type="file" id="documents" name="sabab" accept=".pdf" required>

    <label for="photo">Загрузите фото (JPG):</label>
    <input type="file" id="photo" name="image" accept=".jpg" required>

    <button type="submit">Отправить</button>
</form>
@endsection