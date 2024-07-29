@extends('layouts.frontent')

@section("content")
<h1>FaceID tizimiga ma’lumotlar kiritsh</h1>
<div style="width: 100%;
    text-align: center;
    display: inline-flex;
    justify-content: center;">
    <p style="
    color: #fff;
    text-align: center;
    width: 70%;
    font-size:16px;
    line-height:1.5;
">Assalomu alaykum hurmatlik mehmon. Innovatsion rivojlanish agentligi binosiga kirish va chiqishni nazorat qilish uchun FaceID tizimi ishga tushirilgan. Sizning Agentlik binosiga muammosiz kirib chiqishingiz uchun bir qancha ma’lumotlarni kiritishingiz zarur. Kiritgan ma’lumotlaringiz faqat FaceID tizimi doirasida foydalaniladi.</p>

</div>
@if (session('status'))
<div class="contaner">
    <div class="alert alert-success">{{ session('status') }}</div>
</div>
@endif
<form action="{{ route("tashrif.store") }}" method="post" enctype="multipart/form-data">
   @csrf
    <label for="fullName">F.I.Sh:</label>
    <input type="text" id="fullName" name="fish" required>

    <label for="organization">Tashkilot:</label>
    <input type="text" id="organization" name="tashkilot" required>

    <label for="organization">Email:</label>
    <input type="email" id="organization"  required>

    <label for="gender">Jinsi:</label>
    <select id="gender" name="jinsi">
        <option value="Erkak">Erkak</option>
        <option value="Ayol">Ayol</option>
    </select>

    <label for="purpose">Tashrif maqsadi:</label>
    <input type="text" id="purpose" name="maqsad" required>

    <label for="reason">Tashrif uchun asos:</label>
    <input type="file" id="documents" name="sabab" accept=".pdf" required>

    <label for="visitDate">Tashrif sanasi va vaqtini kiriting:</label>
    <input type="datetime-local"  name="sana" required>


    <label for="photo">Personal rasm: </label><span style="font-size:14px; padding:0px 0px 10px 0px;">Rasm 3x4 o’lchamda, .jpg formatda va orqa foni oq rangda bo’lishi shart</span>
    <input type="file" id="photo" name="image" accept=".jpg" required>

    <button type="submit">Yuborish </button>
</form>
@endsection