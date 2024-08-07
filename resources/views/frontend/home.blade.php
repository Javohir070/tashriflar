@extends('layouts.frontent')

@section("content")
<h1>{{ __("FaceID tizimiga ma’lumotlar kiritsh")}}</h1>
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
">{{ __("Assalomu alaykum hurmatlik mehmon. Innovatsion rivojlanish agentligi binosiga kirish va chiqishni nazorat qilish uchun FaceID tizimi ishga tushirilgan. Sizning Agentlik binosiga muammosiz kirib chiqishingiz uchun bir qancha ma’lumotlarni kiritishingiz zarur. Kiritgan ma’lumotlaringiz faqat FaceID tizimi doirasida foydalaniladi.")}}</p>

</div>
@if (session('status'))
<div class="contaner">
    <div class="alert alert-success">Sizning Ma'lumotingiz ko'rib chiqish uchun qabul qilindi. Natijasi bo‘yicha ko‘rsatilgan elektron pochta manziliga ma'lumot yuboriladi.</div>
</div>
@endif
<form action="{{ route("tashrif.store") }}" method="post" enctype="multipart/form-data">
   @csrf
   <ul style="
    list-style: none;
    display: flex;
    gap: 10px;
    justify-content: center;
    align-items: center;
">
    <li style="
    padding: 6px 6px;
    background-color: #e3efe2ad;
    text-align: center;
    border-radius: 6px;
    justify-content: center;
"><a href="{{ route('locale.change', ['locale'=>'uz']) }}">

    <img style="display:flex;" src="/admin/til/uz.svg" alt=""></li>
</a>
    <li style="
    padding: 6px 6px;
    background-color: #e3efe2ad;
    text-align: center;
    border-radius: 6px;
    justify-content: center;
"><a href="{{ route('locale.change', ['locale'=>'ru']) }}">

    <img style="display:flex;" src="/admin/til/ru.svg" alt=""></li>
</a>
    <li style="
    padding: 6px 6px;
    background-color: #e3efe2ad;
    text-align: center;
    border-radius: 6px;
    justify-content: center;
"><a href="{{ route('locale.change', ['locale'=>'en']) }}">

    <img style="display:flex;" src="/admin/til/en.svg" alt=""></li>
</a>
   </ul>
    <label for="fullName">{{ __('F.I.Sh') }}:</label>
    <input type="text" id="fullName" name="fish" required>
    @error('fish')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="organization">{{ __('Tashkilot') }}:</label>
    <input type="text" id="organization" name="tashkilot" required>
    @error('tashkilot')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="organization">Email:</label>
    <input type="email" name="email" id="organization"  required>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="gender">{{ __('Jinsi') }}:</label>
    <select id="gender" name="jinsi">
        <option value="Erkak">{{ __("Erkak")}}</option>
        <option value="Ayol">{{ __("Ayol")}}</option>
    </select>
    @error('jinsi')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="purpose">{{ __('Tashrif maqsadi') }}:</label>
    <input type="text" id="purpose" name="maqsad" required>
    @error('maqsad')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <label for="reason">{{ __('Tashrif uchun asos') }}:</label>
    <input type="file" id="documents" name="sabab" accept=".pdf" >
    

    <label for="visitDate">{{ __('Tashrif sanasi va vaqtini kiriting') }}:</label>
    <input type="datetime-local"  name="sana" required>
    @error('sana')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <label for="photo">{{__('Personal rasm')}}: </label><span style="font-size:14px; padding:0px 0px 10px 0px;">{{__('Rasm 3x4 o’lchamda, .jpg formatda va orqa foni oq rangda bo’lishi shart')}}</span>
    <input type="file" id="photo" name="image" accept=".jpg" required>
    @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit">{{ __('Yuborish') }} </button>
</form>
@endsection