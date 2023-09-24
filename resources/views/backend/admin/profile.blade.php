@extends('backend.admin.layout.app')
@section('title','Admin Dashbaord')
@push('style')
<style>
    .container {
        max-width: 960px;
        margin: 30px auto;
        padding: 20px;
    }

    h1 {
        font-size: 20px;
        text-align: center;
        margin: 20px 0 20px;
    }

    h1 small {
        display: block;
        font-size: 15px;
        padding-top: 8px;
        color: gray;
    }

    .avatar-upload {
        position: relative;
        max-width: 205px;
        margin: 50px auto;
    }

    .avatar-upload .avatar-edit {
        position: absolute;
        right: 12px;
        z-index: 1;
        top: 10px;
    }

    .avatar-upload .avatar-edit input {
        display: none;
    }

    .avatar-upload .avatar-edit input+label {
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 34px;
        height: 34px;
        margin-bottom: 0;
        border-radius: 100%;
        background: #FFFFFF;
        border: 1px solid transparent;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        font-weight: normal;
        transition: all .2s ease-in-out;
    }

    .avatar-upload .avatar-edit input+label:hover {
        background: #f1f1f1;
        border-color: #d6d6d6;
    }

    /* .avatar-upload .avatar-edit input+label:after {
        content: "\f303";
        font-family: "Font Awesome 5 Free";
        color: #757575;
        position: absolute;
        top: 10px;
        left: 0;
        right: 0;
        text-align: center;
        margin: auto;
    } */

    .avatar-upload .avatar-preview {
        width: 192px;
        height: 192px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
    }

    .avatar-upload .avatar-preview>div {
        width: 100%;
        height: 100%;
        border-radius: 100%;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
</style>
@endpush
@section('content')
@php
$profile_pic=!empty(auth()->user()->userinfo->profile_pic) ? asset('storage/'.auth()->user()->userinfo->profile_pic) : asset('backend/assets/images/profile/user-profile.jpeg');
@endphp
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
                <div class="card latest-update-card">
                    <div class="card-header m-b-10">
                        <h5>Profile View</h5>
                    </div>
                    <div class="card-body">
                        <div class="latest-update-box">
                            <div class="row p-t-10">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">Full Name</p>
                                    <i class="fa fa-user bg-c-red update-icon"></i>
                                </div>
                                <div class="col">

                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tr>
                                                <td class="b-none">
                                                    <a href="#!" class="align-middle">
                                                        <img src="{{ $profile_pic }}" alt="user image" class="img-radius wid-40 align-top m-r-15">
                                                        <div class="d-inline-block">
                                                            <h6>{{ auth()->user()->userinfo->fname }} {{ auth()->user()->userinfo->lname }}</h6>
                                                            <p class="text-muted m-b-0">{{ auth()->user()->role }}</p>
                                                        </div>
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-30 p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">Phone</p>
                                    <i class="fa fa-phone bg-c-red update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0)">
                                        <h6>{{ auth()->user()->userinfo->phone}}</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Your contact number</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">Email</p>
                                    <i class="fa fa-envelope bg-c-red update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="#!">
                                        <h6>{{ auth()->user()->email}}</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Your email address</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">Address</p>
                                    <i class="fa fa-map-marker bg-c-red update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);">
                                        <h6>{{ auth()->user()->userinfo->address}}</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Your address</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">City</p>
                                    <i class="fa fa-check bg-c-red update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);">
                                        <h6>{{ auth()->user()->userinfo->city}}</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Your city</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">State</p>
                                    <i class="fa fa-check bg-c-red update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);">
                                        <h6>{{ auth()->user()->userinfo->state}}</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Your state</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">Postal Code</p>
                                    <i class="fa fa-check bg-c-red update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);">
                                        <h6>{{ auth()->user()->userinfo->postal_code}}</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Your postal code</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">Country</p>
                                    <i class="fa fa-globe bg-c-red update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);">
                                        <h6>{{ auth()->user()->userinfo->country}}</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Your country</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">Status</p>
                                    <i class="fa fa-check bg-c-red update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);">
                                        <h6>{{ auth()->user()->status}}</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Your status</p>
                                </div>
                            </div>
                            <div class="row p-b-30">
                                <div class="col-auto text-right update-meta">
                                    <p class="text-muted m-b-0 d-inline-flex">Role</p>
                                    <i class="fa fa-universal-access bg-c-red update-icon"></i>
                                </div>
                                <div class="col">
                                    <a href="javascript:void(0);">
                                        <h6>{{ auth()->user()->role}}</h6>
                                    </a>
                                    <p class="text-muted m-b-0">Your role</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Update Profile</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.profile')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="user_name">User Name</label>
                                        <input type="text" class="form-control" id="user_name" name="name" value="{{ auth()->user()->name }}" oninput="this.value=this.value.replace(/[^a-zA-Z]/g,'')">
                                    </div>
                                    @error('name')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="fname">First Name</label>
                                        <input type="text" class="form-control" id="fname" name="fname" value="{{ auth()->user()->userinfo->fname }}">
                                    </div>
                                    @error('fname')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="lname">Last Name</label>
                                        <input type="text" class="form-control" id="lname" name="lname" value="{{ auth()->user()->userinfo->lname }}">
                                    </div>
                                    @error('lname')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12 mb-10">
                                    <div class="container">
                                        <h1>Upload Profile Pic
                                            <small>with preview</small>
                                        </h1>
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type='file' name="profile_pic" id="imageUpload" accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"><i class="fa fa-pencil-alt"></i></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview" style="background-image: url('{{ $profile_pic }}');">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @error('lname')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="phone">Phone Number</label>
                                        <input type="text" class="form-control" id="phone" name="phone" value="{{ auth()->user()->userinfo->phone }}">
                                    </div>
                                    @error('phone')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>


                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="address">Address</label>
                                        <textarea class="form-control" id="address" name="address">{{ auth()->user()->userinfo->address }}</textarea>
                                    </div>
                                    @error('address')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="postal_code">Postal Code</label>
                                        <input type="text" class="form-control" id="postal_code" name="postal_code" value="{{ auth()->user()->userinfo->postal_code }}">
                                    </div>
                                    @error('postal_code')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="city">City</label>
                                        <input type="text" class="form-control" id="city" name="city" value="{{ auth()->user()->userinfo->city }}">
                                    </div>
                                    @error('city')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="state">State</label>
                                        <input type="text" class="form-control" id="state" name="state" value="{{ auth()->user()->userinfo->state }}">
                                    </div>
                                    @error('state')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="country">Country</label>
                                        <input type="text" class="form-control" id="country" name="country" value="{{ auth()->user()->userinfo->country }}">
                                    </div>
                                    @error('country')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="col-sm-12">
                                    <button class="btn btn-success"><i class="fa fa-check"></i> Update</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Change Password</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.password')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="new_pass">New Password</label>
                                        <input type="password" class="form-control" id="new_pass" name="new_pass" value="{{ old('new_pass') }}">
                                    </div>
                                    @error('new_pass')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="floating-label" for="password">Confirm Password</label>
                                        <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                                    </div>
                                    @error('password')
                                    <div style="color:red">{{ $message }}</div>
                                    @enderror

                                </div>

                                <div class="col-sm-12">
                                    <button class="btn btn-success"><i class="fa fa-check"></i> Change Password</button>
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
@push('script')
<script>
    $(document).ready(function() {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url(' + e.target.result + ')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#imageUpload").change(function() {
            readURL(this);
        });
    });
    // $(document).ready(function() {
    //     // https://plugins.krajee.com/file-resumable-uploads-demo
    //     $('#file-upload-demo').fileinput({
    //         uploadUrl: '#',
    //         //uploadUrl: 'http://localhost/plugins/test-upload',
    //         initialPreviewAsData: true,
    //         initialPreview: [
    //             "https://dummyimage.com/640x360/a0f.png&text=Transport+1",
    //             "https://dummyimage.com/640x360/3a8.png&text=Transport+2",
    //             "https://dummyimage.com/640x360/6ff.png&text=Transport+3"
    //         ],
    //         initialPreviewConfig: [{
    //                 caption: "transport-1.jpg",
    //                 size: 329892,
    //                 width: "120px",
    //                 url: "{$url}",
    //                 key: 1,
    //                 zoomData: 'https://dummyimage.com/1920x1080/a0f.png&text=Transport+1',
    //                 description: '<h5>NUMBER 1</h5> The first choice for transport. This is the future.'
    //             },
    //             {
    //                 caption: "transport-2.jpg",
    //                 size: 872378,
    //                 width: "120px",
    //                 url: "{$url}",
    //                 key: 2,
    //                 zoomData: 'https://dummyimage.com/1920x1080/3a8.png&text=Transport+2',
    //                 description: '<h5>NUMBER 2</h5> The second choice for transport. This is the future.'
    //             },
    //             {
    //                 caption: "transport-3.jpg",
    //                 size: 632762,
    //                 width: "120px",
    //                 url: "{$url}",
    //                 key: 3,
    //                 zoomData: 'https://dummyimage.com/1920x1080/6ff.png&text=Transport+3',
    //                 description: '<h5>NUMBER 3</h5> The third choice for transport. This is the future.'
    //             }
    //         ]
    //     });

    // });
</script>
@endpush