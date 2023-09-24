@extends('backend.admin.layout.app')
@section('title','Attribute Update')
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
                            <li class="breadcrumb-item"><a href="{{ route('admin.profile') }}">Attribute</a></li>
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
                        <h5>Update Attribute</h5>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('admin.attribute.update',$attribute?->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $attribute?->name }}">
                                    </div>
                                    @error('name')
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