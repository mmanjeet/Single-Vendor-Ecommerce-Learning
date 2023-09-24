@extends('backend.admin.layout.app')
@section('title','Admin Dashbaord')
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
                        <h5>Create Color</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.color.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="color_code">Color Code</label>
                                        <input type="color" class="form-control form-control-color" id="color_code" name="color_code" value="{{ old('color_code') }}">
                                    </div>
                                    @error('color_code')
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