@extends('layouts.admin')

@section("content")
<div class="container-fluid">
    <div class="d-flex align-items-center mb-4 flex-wrap">
        <h3 class="me-auto">Sahifalar</h3>
        <div>
            <a href="{{ route('pages.create')}}" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Yangi sahifa qo'shish</a>
            <a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"> <i class="fas fa-envelope"></i></a>
            <a href="javascript:void(0);" class="btn btn-secondary btn-sm me-3"><i class="fas fa-phone-alt"></i></a>
            <a href="javascript:void(0);" class="btn btn-secondary btn-sm"><i class="fas fa-info"></i></a>

        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="table-responsive">
                <table class="table display mb-4 dataTablesCard job-table table-responsive-xl card-table" id="example5">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sahifa sarlavhasi</th>
                            <th>Slug</th>
                            <th>Yarlildi</th>
                            <th>O'zgartirildi</th>
                            <th class="text-center">Harakatlar</th>
                        </tr>
                    </thead>
                    <tbody>

                     @foreach ($pages as $page )
                        <tr>
                            <td>{{$page->id}}</td>
                            <td class="wspace-no">{{ $page->title }}</td>
                            <td>{{ $page->slug }}</td>
                            <td>{{ $page->created_at }}</td>
                            <td>{{ $page->updated_at }}</td>
                            <td class="action-btn " style="text-align: center;">
                            <div style="display: flex;gap: 8px;justify-content: center;">
                                <form action="{{ route('pages.destroy',['page'=>$page->id]) }}" method="post" onsubmit="return confirm(' Rostan Ochirishni hohlaysizmi?');">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" style="font-size: 14px;"  class="btn btn-danger btn-info">
                                            <span class="btn-icon-start text-info">
                                                <i class="far fa-trash-alt text-danger"></i>
                                            </span>
                                            Delete
                                        </button>
                                </form>
                            <a href="{{ route('pages.edit',['page'=>$page->id]) }}" style="font-size:14px;" class="btn btn-secondary ">
                            <span class="btn-icon-start text-info">
                                <i class="fas fa-pencil-alt text-secondary"></i>
                            </span>
                            Edit
                            </a>
                            </div>
                            </td>
                        </tr>  
                     @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection