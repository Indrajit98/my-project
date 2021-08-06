@extends('layouts.general')

@section('content')
<sections class="login-section">
    <div class="row">
        <div class="login-row">
            <h3>login</h3>
            <div class="login-area">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="email">
                        <label for="name">Email or Phone:</label>
                        <input id="name" type="email" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="password">
                        <label for="password">Password:</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                   
                        <a href="#">Forgotten account?</a>
                    </div>
                    <div class="login">
                        <button type="submit">Login</button>
                    </div>
                
                </form>

            </div>

        </div>
    </div>
</section>
@endsection
