@extends('layouts.admin')

@section("content")
<div class="container-fluid">
    <div class="d-flex align-items-center mb-4 flex-wrap">
        <h3 class="me-auto">About</h3>
        <div>
            <a href="{{ route('abouts.create')}}" class="btn btn-primary me-3 btn-sm"><i class="fas fa-plus me-2"></i>Add New About</a>
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
                            <th>No</th>
                            <th>Title</th>
                            <th>Rasm</th>
                            <th>Content</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($abouts as $about )
                     <tr>
                         <td>1</td>
                         <td class="wspace-no">{{ $about->getTranslation('title' ,'uz') }}</td>
                         <td>{{ $about->image }}</td>
                         <td>{{ $about->getTranslation('body', 'ru') }}</td>
                         <td class="action-btn " style="text-align: center;">
                             <span>
                                 <a href="#"><i class="fas fa-eye"></i></a>
                             </span>
                             <span>
                                 <a href="#"><i class="far fa-trash-alt text-danger"></i></a>
                             </span>
                             <span>
                                 <a href="{{ route('abouts.edit',['about'=>$about->id]) }}"><i class="fas fa-pencil-alt"></i></a>
                             </span>
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