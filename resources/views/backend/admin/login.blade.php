<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link href="{{ asset('backend/login.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

<body class="align">
    <div class="grid">
        <form action="{{ route('admin.login') }}" method="POST" class="form login">
            @csrf
            <h1 style="text-align:center;padding-bottom: 20px;">Admin Login</h1>
            <div class="form__field">
                <label for="login__username"><i class="fa fa-user" style="font-size:27px;" aria-hidden="true"></i><span class="hidden">Username</span></label>
                <input id="login__username" type="text" name="email" class="form__input" value="{{ old('email') }}" placeholder="Username" autocomplete="new-user">
            </div>
            @error('email')
            <p style="color:red;text-align:center;">{{ $message }}</p>
            @enderror
            <div class="form__field">
                <label for="login__password"><i class="fa fa-lock" style="font-size:27px;" aria-hidden="true"></i><span class="hidden">Password</span></label>
                <input id="login__password" type="password" name="password" class="form__input" value="{{ old('password') }}" placeholder="Password" autocomplete="new-password">
            </div>
            @error('password')
            <p style="color:red;text-align:center;">{{ $message }}</p>
            @enderror
            <div class="form__field">
                <input type="submit" value="Sign In">
            </div>
        </form>
        @if(Session::has('msg'))
        <div class="alert alert-danger alert-dismissible fade show m-2" role="alert">
            {{Session::get('msg')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
        @endif


    </div>
</body>

</html>