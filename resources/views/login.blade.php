@extends('layout.layout')
@section('content')
    <div class="container">
    @yield('content')
    <div class="div">
        <h2 class="text-left" id="h2-logo">todoist</h2>
    </div>
    <div class="mt-5">
        <div class="">
            <h2>Login</h2>
        </div>
        <div class="mt-5" style="width: 30%">
            <form action="{{ route('loginSubmit') }}" method="GET">
                @csrf
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email</label>
                    <input type="text" class="form-control" id="inputEmail" name="email"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password"
                        value="{{ old('password') }}">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn" id="btn-login">Login</button>
            </form>
            <div class="mt-1">
                @if (session('loginError'))
                    <div class="alert alert-danger text-center">
                        {{ session('loginError') }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection