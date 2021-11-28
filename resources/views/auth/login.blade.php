@extends('layouts.app')

@section('content')
<!-- wrapper -->
<div class="wrapper without_header_sidebar">
    <!-- contnet wrapper -->
    <div class="content_wrapper">
        <!-- page content -->
        <div class="login_page center_container">
            <div class="center_content">
                <div class="logo">
                    <img src="{{ asset('panel') }}/assets/images/logo.png" alt="" class="img-fluid">
                </div>
                <form action="{{ route('login') }}" class="d-block" method="post">
                    @csrf
                    <div class="form-group icon_parent">
                        <label for="password">Email</label>
                        < <input placeholder="Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>

                    </div>
                    <div class="form-group icon_parent">
                        <label for="password">Password</label>
                        <input placeholder="Enter your password"id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                    </div>
                    <div class="form-group">
                        <label class="chech_container">Remember me
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <div class="form-group">
                        <a class="registration" href="{{ route('register') }}">Create new account</a><br>
                        <a href="{{ route('password.request') }}" class="text-white">I forgot my password</a>
                        <button type="submit" class="btn btn-blue">Login</button>
                    </div>
                </form>
                <div class="footer">
                    <p>Copyright &copy; 2021 <a href="https://coderkhayrul.xyz/">Coder Khayrul</a>. All rights
                        reserved.</p>
                </div>

            </div>
        </div>
    </div>
    <!--/ content wrapper -->
</div>
<!--/ wrapper -->
@endsection
