@extends('backend.admin.layout.app')
@section('title','Global Settings')
@section('content')

<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Global Settings</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Settings</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.global-settings') }}">Global Settings</a></li>
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
                        <h5>Global Settings</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.global-settings.store')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <h5 class="mt-3">Brand Logo</h5>
                                    <hr>
                                    <div class="form-group">
                                        <label class="floating-label" for="brand_logo_width">Width</label>
                                        <input type="text" class="form-control" id="brand_logo_width" name="brand_logo_width" value="{{ $settings['brand_logo_width'] ?? '120'}}">
                                    </div>
                                    <div class="form-group">
                                        <label class="floating-label" for="brand_logo_hight">Height</label>
                                        <input type="text" class="form-control" id="brand_logo_hight" name="brand_logo_hight" value="{{ $settings['brand_logo_hight'] ?? '120'}}">
                                    </div>
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