@extends('backend.admin.layout.app')
@section('title','All Colors')
@section('content')


<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">All Colors</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="">Products</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Colors</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h5>Colors</h5>
                            </div>
                            <div class="col-md-2"><a href="{{ route('admin.color.create')}}" class="btn-sm btn-secondary" style="float:right">Add Color</a></div>
                        </div>
                    </div>
                    <div class="card-body table-border-style mt-0">

                        <div class="table-responsive shadow-sm p-3 mb-5 bg-white rounded">
                            <div class="row">
                                <div class="col-md-8">

                                </div>
                                <div class="col-md-4">
                                    <form action="{{ route('admin.color.index')}}">
                                        <div class="input-group mb-3">

                                            <input type="text" name="name" class="form-control" placeholder="Search by color name">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary" type="submit"><i class="feather mr-2 icon-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Color Name</th>
                                        <th>Color Code</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($colors as $key => $color)
                                    <tr>
                                        <td>{{ ++$key+($colors->perPage()*($colors->currentPage()-1)) }}</td>
                                        <td>{{ $color?->name}}</td>
                                        <td><span style='background:{{$color?->color_code}};padding: 5px;color: #fff;border-radius: 5px;'>{{ $color?->name}}</span></td>
                                        <td>
                                            <a href="{{ route('admin.color.edit',$color?->id) }}" class="btn btn-icon btn-primary "><i class="fa fa-edit  update-icon"></i></a>
                                            <form class="d-inline" action="{{ route('admin.color.destroy',$color?->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete color ?');">@csrf @method('DELETE') <button type="submit" class="btn btn-icon btn-danger"><i class="fa fa-trash  update-icon"></i></button></form>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <div class="pagination justify-content-end">
                                {{ $colors->withQueryString()->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection