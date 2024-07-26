@extends('layouts.admin')

@section('content')
<div class="container-fluid">

  <div class="row page-titles">
    <ol class="breadcrumb">
      <li class="breadcrumb-item active"><a href="javascript:void(0)">Bosh sahifa</a></li>
      <li class="breadcrumb-item"><a href="javascript:void(0)">Sahifa yangilash</a></li>
    </ol>
  </div>

  <!-- row -->
  <div class="row">
    <div class="col-xl-12 col-xxl-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Sahifa yangilash</h4>
        </div>
        <form action="{{ route('pages.update', ['page'=>$page->id]) }}" method="post">
        @csrf
        @method('PUT')
          @include('admin.pages._form')
        </form>
      </div>
    </div>
  </div>
</div>

@endsection