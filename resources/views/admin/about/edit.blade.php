@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="row page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">CkEditor</a></li>
    </ol>
  </div>

  <!-- row -->
  <div class="row">
    <div class="col-xl-12 col-xxl-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Form CkEditor</h4>
        </div>
        <form action="{{ route("abouts.update",['about'=>$about->id]) }}" method="post">
        @csrf
        @method('PUT')
          <div class="mb-3" style="width: 600px; ">
              <input type="text" name="title_uz" class="form-control input-default " value="{{$about->getTranslation('title', 'uz')}}">
              <input type="text" name="title_ru" class="form-control input-default " value="{{$about->getTranslation('title', 'ru')}}">
          </div>
          <div class="card-body custom-ekeditor">
            <textarea id="ckeditor" name="body_uz" cols="30" rows="10" value="">{{$about->getTranslation('body', 'uz')}}</textarea>
          </div>
          <button class="btn btn-primary" type="submit">Yuborish</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection