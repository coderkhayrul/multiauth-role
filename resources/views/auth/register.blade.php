@extends('layouts.app')

@section('content')
<div class="wrapper without_header_sidebar">
    <!-- contnet wrapper -->
    <div class="content_wrapper">
        <!-- page content -->
        <div class="registration_page center_container">
            <div class="center_content">
                <div class="logo">
                    <img src="panel/assets/images/logo.png" alt="" class="img-fluid">
                </div>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-group icon_parent">
                        <label for="name">Name</label>
                        <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group icon_parent">
                        <label for="uname">Username</label>
                        <input placeholder="UserName" id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="name" autofocus>
                        <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group icon_parent">
                        <label for="email">E-mail</label>
                        <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group icon_parent">
                        <label for="password">Password</label>
                        <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group icon_parent">
                        <label for="rtpassword">Re-type Password</label>
                        <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                    </div>
                    <div class="form-group">
                        <a class="registration" href="{{ route('login') }}">Already have an account</a><br>
                        <button type="submit" class="btn btn-blue">Signup</button>
                    </div>
                </form>
                <div class="footer">
                    <p>Copyright &copy; 2020 <a href="https://coderkhayrul.xyz/">Coder Khayrul</a>. All rights
                        reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!--/ content wrapper -->
</div>
<!--/ wrapper -->
@endsection
