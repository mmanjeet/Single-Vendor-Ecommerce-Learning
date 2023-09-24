@extends('backend.admin.layout.app')
@section('title','Attribute Property')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Profile</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.profile') }}">Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            <div class="col-xl-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-10">
                                <h5>Attribute Properties</h5>
                            </div>
                            <div class="col-md-2"><a href="{{ route('admin.attribute.index')}}" class="btn-sm btn-secondary" style="float:right">Attribute List</a></div>
                        </div>
                    </div>
                    <div class="card-body table-border-style mt-0">

                        <div class="table-responsive shadow-sm p-3 mb-5 bg-white rounded">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Attribute</th>
                                        <th>Attribute Properties</th>
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($attribute_properties as $key => $attribute_property)
                                    <tr>
                                        <td>{{ ++$key+($attribute_properties->perPage()*($attribute_properties->currentPage()-1)) }}</td>
                                        <td>{{ $attribute?->name}}</td>
                                        <td>{{ $attribute_property?->property}}</td>
                                        <td>
                                            <a href="{{ route('admin.attribute-property.edit',$attribute_property?->id) }}" class="btn btn-icon btn-primary "><i class="fa fa-edit update-icon"></i></a>
                                            <form class="d-inline" action="{{ route('admin.attribute-property.destroy',$attribute_property?->id)}}" method="POST" onsubmit="return confirm('Are you sure to delete property ?');">@csrf @method('DELETE') <button type="submit" class="btn btn-icon btn-danger"><i class="fa fa-trash  update-icon"></i></button></form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <hr>
                            <div class="pagination justify-content-end">
                                {{ $attribute_properties->withQueryString()->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Create Attribute Property</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.attribute-property.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="attribute_id">Attribute</label>
                                        <select class="form-control" name="attribute_id">
                                            <option value="{{ $attribute?->id}}" selected readonly>{{ $attribute?->name}}</option>
                                        </select>
                                    </div>
                                    @error('attribute_id')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label class="floating-label" for="property">Name</label>
                                        <input type="text" class="form-control" id="property" name="property" value="{{ old('property') }}">
                                    </div>
                                    @error('property')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="col-sm-12">
                                    <button class="btn btn-success">Create</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection