@extends('backend.admin.layout.app')
@section('title','All Attributes')
@section('content')


<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">All Attributes</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="">Products</a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Attributes</a></li>
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
                                <h5>Attributes</h5>
                            </div>
                            <div class="col-md-2"><a href="{{ route('admin.attribute.create')}}" class="btn-sm btn-secondary" style="float:right">Add Attribute</a></div>
                        </div>
                    </div>
                    <div class="card-body table-border-style mt-0">

                        <div class="table-responsive shadow-sm p-3 mb-5 bg-white rounded">
                            <div class="row">
                                <div class="col-md-8">

                                </div>
                                <div class="col-md-4">
                                    <form action="{{ route('admin.attribute.index')}}">
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
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($attributes as $key => $attribute)
                                    <tr>
                                        <td>{{ ++$key+($attributes->perPage()*($attributes->currentPage()-1)) }}</td>
                                        <td>{{ $attribute?->name}}</td>
                                        <td>
                                            <a href="{{ route('admin.attribute-property.index',$attribute?->id) }}" class="btn btn-icon btn-primary "><i class="fa fa-cog update-icon"></i></a>
                                            <a href="{{ route('admin.attribute.edit',$attribute?->id) }}" class="btn btn-icon btn-primary "><i class="fa fa-edit update-icon"></i></a>
                                            <form class="d-inline" action="{{ route('admin.attribute.destroy',$attribute?->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete attribute ?');">@csrf @method('DELETE') <button type="submit" class="btn btn-icon btn-danger"><i class="fa fa-trash  update-icon"></i></button></form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <div class="pagination justify-content-end">
                                {{ $attributes->withQueryString()->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection