@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <!-- Row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item ps-0"><a href="javascript:void(0)">Bosh sahifa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Menu</li>
                </ol>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-8">
                <div class="filter cm-content-box box-primary">
                    <div class="content-title flex-wrap">
                        <div class="cpa d-flex align-items-center flex-wrap">
                            Menyular ro'yhati
                            <input type="text" class="form-control w-auto ms-2" placeholder="information">
                        </div>
                        <button type="button" class="btn btn-secondary ms-sm-auto mb-2 mb-sm-0">Save Menu</button>
                    </div>
                    <div class="cm-content-body form excerpt rounded-0">
                        <div class="card-body">
                            <div class="col-xl-12 " style="padding:0px 0px 0px 20px;">
                                <ul>
                                    <style>
                                        .card-header {
                                            background-color: transparent;
                                            border-bottom: 1px solid rgba(0, 0, 0, .125);
                                            padding: .75rem 1.25rem;
                                            position: relative;
                                            border-top-left-radius: .25rem;
                                            border-top-right-radius: .25rem;
                                            margin-top: 10px;
                                        }

                                        .menu-name {
                                            font-size: 1.1rem;
                                            font-weight: 400;
                                            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                            color: black;
                                        }

                                        .card-tools {
                                            display: flex;
                                            justify-content: center;
                                            gap: 20px;
                                            align-items: center;
                                            font-size: 16px;
                                        }
                                    </style>
                                    @foreach ($menus as $menu)
                                        <div class="card-header p-0">
                                            <li class="menu-name" style="list-style-type: disc;">
                                                {{ $menu->name }}
                                            </li>
                                            <div class="card-tools">
                                                <a href="{{ route("menus.edit", ['menu' => $menu->id]) }}"
                                                    class="btn-menu btn-tool">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <form action="{{ route('menus.destroy', ['menu' => $menu->id]) }}"
                                                    method="post" onclick="return confirm('Rostan o`chirmoqchimisiz!')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="border: none;background: none;color: currentColor;" class="btn-menu btn-tool">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <ul style="padding:0px 0px 0px  30px;">
                                            @foreach ($menu->submenu as $submenu)
                                                <div class="card-header p-0">
                                                    <li class="menu-name" style="list-style-type: circle;">
                                                        {{ $submenu->name }}
                                                    </li>
                                                    <div class="card-tools">
                                                        <a href="{{ route('submenu.edit',['submenu'=>$submenu->id]) }}" class="btn-menu btn-tool">
                                                            <i class="fas fa-pen"></i>
                                                        </a>
                                                        <form action="{{ route('submenu.destroy',['submenu'=>$submenu->id]) }}"
                                                            method="post" onclick="return confirm('Rostan o`chirmoqchimisiz!')">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" style="border: none;background: none;color: currentColor;" class="btn-menu btn-tool">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </ul>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="filter cm-content-box box-primary">
                    <div class="content-title">
                        <div class="cpa">
                            Amallar
                        </div>
                    </div>
                    <div class="cm-content-body form excerpt">
                        <div class="card-body">
                            <ul class=" tab-my nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="Viewall-tab" data-bs-toggle="tab"
                                        data-bs-target="#Viewall-tab-pane" type="button" role="tab"
                                        aria-controls="Viewall-tab-pane" aria-selected="true"><i
                                            class="fas fa-plus"></i> Menu</button>
                                </li>
                                <li class="nav-item" role="presentation">

                                    <button class="nav-link" id="Search-tab" data-bs-toggle="tab"
                                        data-bs-target="#Search-tab-pane" type="button" role="tab"
                                        aria-controls="Search-tab-pane" aria-selected="false"><i
                                            class="fas fa-plus"></i> Submenu</button>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="Viewall-tab-pane" role="tabpanel"
                                    aria-labelledby="Viewall-tab" tabindex="0"><br>
                                    <form action="{{ route('menus.store') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label"
                                                style="color:black;"><b>Menyu
                                                    nomi</b></label>
                                            <input type="text" name="name" class="form-control">

                                            @error('name')
                                                <span class="text-red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color:black;"><b>Sahifa
                                                    tanlang!</b></label>
                                            <div
                                                class="dropdown bootstrap-select default-select form-control wide dropup">
                                                <select class="default-select form-control wide" name="page_id"
                                                    tabindex="null">
                                                    @foreach ($pages as $page)
                                                        <option value="{{ $page->id }}">{{ $page->title }}</option>
                                                    @endforeach    
                                                </select>
                                                @error('page_id')
                                                    <span class="text-red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary btn-sm dz-menu-btn">Saqlash</button>
                                    </form>

                                </div>
                                <div class="tab-pane fade" id="Search-tab-pane" role="tabpanel"
                                    aria-labelledby="Search-tab" tabindex="0"><br>
                                    <form action="{{ route('submenu.store') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label"
                                                style="color:black;"><b>Submenyu
                                                    nomi</b></label>
                                            <input type="text" name="name" class="form-control">
                                            @error('name')
                                                <span class="text-red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" style="color:black;"><b>Menuni
                                                    tanlang!</b></label>
                                            <div
                                                class="dropdown bootstrap-select default-select form-control wide dropup">
                                                <select class="default-select form-control wide" name="menu_id"
                                                    tabindex="null">
                                                    @foreach ($menus as $menu)
                                                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                                    @endforeach    
                                                </select>
                                                @error('menu_id')
                                                    <span class="text-red">{{ $message }}</span>
                                                @enderror
                                            </div><br><br>
                                            <label class="form-label" style="color:black;"><b>Sahifa
                                                    tanlang!</b></label>
                                            <div
                                                class="dropdown bootstrap-select default-select form-control wide dropup">
                                                <select class="default-select form-control wide" name="page_id"
                                                    tabindex="null">
                                                    @foreach ($pages as $page)
                                                        <option value="{{ $page->id }}">{{ $page->title }}</option>
                                                    @endforeach 
                                                </select>
                                                @error('page_id')
                                                    <span class="text-red">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary btn-sm dz-menu-btn">Saqlash</button>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection