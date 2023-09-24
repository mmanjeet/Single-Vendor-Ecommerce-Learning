@extends('backend.admin.layout.app')
@section('title','Update Attribute Property')
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
                        <h5>Update Attribute Property</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.attribute-property.update',$attribute_property->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="attribute_id">Attribute</label>
                                        <select class="form-control" name="attribute_id">
                                            <option value="{{ $attribute_property?->attribute_id}}" selected readonly>{{ $attribute_property?->attribute?->name}}</option>
                                        </select>
                                    </div>
                                    @error('attribute_id')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
                                    <div class="form-group">
                                        <label class="floating-label" for="property">Name</label>
                                        <input type="text" class="form-control" id="property" name="property" value="{{ $attribute_property?->property }}">
                                    </div>
                                    @error('property')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror

                                </div>


                                <div class="col-sm-12">
                                    <button class="btn btn-success">Update</button>
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